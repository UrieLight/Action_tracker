<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Employee_GetInfo (OCM Employees Controller)
 * Class to get all OCM employees related Informations.
 * @author : Uriel FEUATSAP
 * @version : 1.1
 * @since : 21 December 2018
 */
class Employee_GetInfo extends BaseController
{
    /**
     * This function gets all employee information
     * @param null
     * @return json data about employee
     */
    public function checkInput_getEmpInfos() {

        $holder_email = $this->input->post('holder_email');

            $this->load->library('form_validation');
                
            $this->form_validation->set_rules('holder_email','Holder email','trim|required|valid_email|max_length[128]|xss_clean');
            
            if($this->form_validation->run() == FALSE)
            {
                //$this->loadThis();
                if($holder_email == "" OR $holder_email == null)
                    echo "Empty field";
                else
                    echo "Invalid email";
            }
            else
            {
                $this->getUserInfos($holder_email);            
            }
    }

    /**
     * This function gets all employee information
     * @param string employee email
     * @return json data about employee
     */
    public function getUserInfos($email) {
        //$cuid = urlencode(strtoupper($email));
        $key = urlencode('af3baf6222092e4b6ee0a04c1a076b19');
        $url = "http://172.21.55.39/uaconsole/index.php/UserAccessConsole/getuserbyemail?email=$email&key=$key";
        // $url = "http://172.21.55.39/uaconsole/index.php/UserAccessConsole/getUserInfo?cuid=$cuid&key=$key";

        $json_holderInfos = file_get_contents($url);

        $array_holderInfos = json_decode($json_holderInfos, true);

        // print_r($jsonResponse.NOM);
        if(empty($array_holderInfos['NOM'][0])) 
            echo 'Holder not found';
        else{

            $employee_name = $array_holderInfos['NOM'][0];
            $employee_email = $array_holderInfos['EMAIL'][0];
            $employee_cuid = $array_holderInfos['IDENTIFIANT'][0];
            $employee_direction = $array_holderInfos['DIRECTION'][0];
            
            //print_r($array_holderInfos);
            $array_holderHierarchie = $this->getHierachie($employee_cuid);
           
            echo '<span style="color: black; font-weight:bold;"> Nom: </span>'.$employee_name;
            echo '<br><span style="color: black; font-weight:bold;"> Email: </span>'.$employee_email;
            echo '<br><span style="color: black; font-weight:bold;"> Direction: </span>'.$employee_direction;
            echo '<br><br><span style="color: black; font-weight:bold;"> Escalades:  </span>';
            $n_count = 1;

            if($array_holderHierarchie['chefservice']['EMAIL'] != null 
                AND $array_holderHierarchie['chefservice']['EMAIL'][0] != null 
                AND $array_holderHierarchie['chefservice']['EMAIL'][0] != $employee_email)
                echo '<br><span style="color: black; font-weight:bold;"> N+'.$n_count++.' - Chief of Service: </span>'.$array_holderHierarchie['chefservice']['EMAIL'][0];

            if($array_holderHierarchie['chefdepartement']['EMAIL'] != null 
                AND $array_holderHierarchie['chefdepartement']['EMAIL'][0] != null
                AND $array_holderHierarchie['chefdepartement']['EMAIL'][0] != $employee_email)
                echo '<br><span style="color: black; font-weight:bold;"> N+'.$n_count++.' - Chief of Departement: </span>'.$array_holderHierarchie['chefdepartement']['EMAIL'][0];

            if($array_holderHierarchie['directeur']['EMAIL'] != null 
                AND $array_holderHierarchie['directeur']['EMAIL'][0] != null
                AND $array_holderHierarchie['directeur']['EMAIL'][0] != $employee_email)
                echo '<br><span style="color: black; font-weight:bold;"> N+'.$n_count++.' - Director: </span>'.$array_holderHierarchie['directeur']['EMAIL'][0];
            
            
            /* echo '<br>Chief of Service: '.$employee_chefservice_email; 
            echo '<br>Chief of Department: '.$employee_chefdepartement_email; 
            echo '<br>Director: '.$employee_director_email;  */
        }

        //return $jsonResponse;
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
    public function getHierachie($cuid) {
        $cuid = urlencode(strtoupper($cuid));
        $key = urlencode('af3baf6222092e4b6ee0a04c1a076b19');
        $url = "http://172.21.55.39/uaconsole/index.php/UserAccessConsole/getHierarchie?cuid=$cuid&key=$key";

        $json_holderHierarchie = file_get_contents($url);

        $array_holderHierarchie = json_decode($json_holderHierarchie, true);//$this->transformHierachieInTable(json_decode($rawResponse, true));

        //echo ('Hierarchi: ');
       // print_r($resultat);

        return $array_holderHierarchie;
    }
}