<?php

    $email = $_GET['email'];
    //echo "Good";
    //$cuid = urlencode(strtoupper($login));
    $key = urlencode('af3baf6222092e4b6ee0a04c1a076b19');
    $url = "http://172.21.55.39/uaconsole/index.php/UserAccessConsole/getuserbyemail?email=$email&key=$key";

    $rawResponse = file_get_contents($url);
    $json_response = json_decode($rawResponse, true);
    //var_dump($json_response);
    //$json_response['NOM'][0];

    /*
    if (empty($json_response['NOM'])){//if wrong adress
        # code...
        echo "UNKNOWN ! Please verify entered Email.";
    }else if ($json_response['NOM'][0] == ""){

        echo "UNDEFINED Member ! Please Contact Administrator.";
    }else{
        echo $json_response['NOM'][0].' <'.$json_response['DIRECTION'][0].'>';
        */

        //Recherche personnel
        $url_search = "http://172.21.55.39/uaconsole/index.php/UserAccessConsole/search?cuid=".$json_response['IDENTIFIANT'][0]."&key=".$key;
        $rawResponse2 = file_get_contents($url_search);
        $json_search_response = json_decode($rawResponse2, true);

        //echo ' <'.$json_search_response['POSTE'].'>'; //display member post

        //Recherche hierarchie personnel
        $url_hierarchi = "http://172.21.55.39/uaconsole/index.php/UserAccessConsole/gethierarchie?cuid=".$json_response['IDENTIFIANT'][0]."&key=".$key;
        $rawResponse3 = file_get_contents($url_hierarchi);
        $json_search_n1 = json_decode($rawResponse3, true);

        //var_dump($json_search_n1);
        
        //Si c'est un chef de service
        if (substr($json_search_response['POSTE'], 0, 8) == "CHEF SCE") { 
            # code...

            //Si le service est rattaché à un département
            if (!empty($json_search_n1['chefdepartement']['NOM'][0])) { 
                # code...
                echo 'N+1~ chefdepartement: '.$json_search_n1['chefdepartement']['NOM'];

            }else //Sinon, c'est directeur qui est le chef
                echo 'N+1~ Directeur: '.$json_search_n1['directeur']['NOM'][0];

        }else if (substr($json_search_response['POSTE'], 0, 11) == "CHEF De DEP") {//Si c'est un chef de département
            # code...
            echo 'N+1~ Directeur: '.$json_search_n1['directeur']['NOM'][0];

        }else if (substr($json_search_response['POSTE'], 0, 9) == "Directeur")//Si c'est un DIRECTEUR
            echo 'N+1~ DG';//.substr($json_search_response['POSTE'], 0, 6);
        else{
            //echo 'N+1~ CHEF SCE: '.$json_search_n1['chefservice']['NOM'][0];//'Oupss... '.$json_search_response['POSTE'];//, 0, 6);
            echo $rawResponse3;//'N+1~ CHEF SCE: '.$rawResponse3;//['chefservice']['NOM'][0];
        }
    //}

?>