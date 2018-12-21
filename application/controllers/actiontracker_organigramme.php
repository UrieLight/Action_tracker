<?php

    class Personnel_Infos //extends AnotherClass implements Interface
    {

        //Login = cuid    
    
        public function getUserInfos($login) {
            $cuid = urlencode(strtoupper($login));
            $key = urlencode('af3baf6222092e4b6ee0a04c1a076b19');
            $url = "http://172.21.55.39/uaconsole/index.php/UserAccessConsole/getUserInfo?cuid=$cuid&key=$key";
    
            $rawResponse = file_get_contents($url);
    
            $jsonResponse = json_decode($rawResponse, true);

            //var_dump('response: '.$jsonResponse);
            echo 'Nom: '.$jsonResponse['NOM'];
            echo 'Departement: '.$jsonResponse['DEPARTEMENT'];
            echo 'Direction: '.$jsonResponse['DIRECTION'];
    
            return $jsonResponse;
        }
    
        public function authentify($login, $pass) {
            $cuid = urlencode(strtoupper($login));
    
            $password = urlencode($pass);
    
            $key = urlencode('af3baf6222092e4b6ee0a04c1a076b19');
    
            $url = "http://172.21.55.39/uaconsole/index.php/UserAccessConsole/authentify?cuid=$cuid&password=$password&key=$key";
    
            $native_response = file_get_contents($url);
            $json_response = json_decode($native_response, true);
    
            $valeur_authentication = $json_response['AUTH'];

            echo 'Auth: '.$json_response['AUTH'].'<br />';
            echo 'Nom: '.$json_response['NOM'].'<br />';
            echo 'Departement: '.$json_response['DEPARTEMENT'].'<br />';
            echo 'Direction: '.$json_response['DIRECTION'].'<br />';
    
            return $valeur_authentication;
            //return true;
        }
    

        public function searchIdentity($login){

            //$cuid = $this->input->post('cuid_good');
            //$key = '6834026871de5083fabeb366693a6ec2';
            $login = urlencode($login);
            $key = urlencode('af3baf6222092e4b6ee0a04c1a076b19');

            $url = 'http://sit/uaconsole/index.php/UserAccessConsole/search?cuid='.$login.'&key='.$key;
        
            $native_response = file_get_contents($url);
			$json_response = json_decode($native_response, true);

            var_dump($json_response);

            echo 'Auth: '.$json_response['AUTH'].'<br />';
            echo 'Nom: '.$json_response['NOM'].'<br />';
			echo 'Service: '.$json_response['SERVICE'].'<br />';
			echo 'Departement: '.$json_response['DEPARTEMENT'].'<br />';
			echo 'Direction: '.$json_response['DIRECTION'].'<br />';
            echo 'Email: '.$json_response['EMAIL'].'<br />';
            
            return true;
        }
    
        /**
         * 
         * Cette fonction permet de récupérer la hiérachie d'un utilisateur
         * elle récupère son chef de service, son chef de département et son directeur
         * @return type
         */
        public function getHierachie($login) {
            $cuid = urlencode(strtoupper($login));
            $key = urlencode('af3baf6222092e4b6ee0a04c1a076b19');
            $url = "http://172.21.55.39/uaconsole/index.php/UserAccessConsole/getHierarchie?cuid=$cuid&key=$key";
    
            $rawResponse = file_get_contents($url);
    
            $resultat = json_decode($rawResponse, true);//$this->transformHierachieInTable(json_decode($rawResponse, true));

            echo ('Hierarchi: ');
            print_r($resultat);
    
            return $resultat;
        }

        public function test($name){
            echo "Name= ".$name;

            return true;
        }

    }

    /*/function test($email){
        if(!empty($_GET['email'])){
            $email = $_GET['email'];
            //echo "Good";
            //$cuid = urlencode(strtoupper($login));
            $key = urlencode('af3baf6222092e4b6ee0a04c1a076b19');
            $url = "http://172.21.55.39/uaconsole/index.php/UserAccessConsole/getuserbyemail?email=$email&key=$key";

            $rawResponse = file_get_contents($url);
            $json_response = json_decode($rawResponse, true);
            var_dump($json_response);
            if(empty($json_response['NOM']))
                echo 'Unknown';
            else{
                $nom = $json_response['NOM'][0];
                echo 'Nom: '.$nom;
            }

        }else {
            # code...
            echo "Empty parameter";
        }
    */
        //return $nom;
    //}

//    $personnel_x = new Personnel_Infos;
    //$personnel_x->authentify('wmjm3790', 'OCmeclairer1*');
    // $personnel_x->searchIdentity('wmjm3790');
//    $personnel_x->getHierachie('wmjm3790');
    //$personnel_x->getUserInfos('wmjm3790');

    //echo $personnel_x;
    //var_dump('Personnel_x: '.$personnel_x);

    
?>