<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : Project (UserController)
 * User Class to control all projects operations.
 * @author : Uriel FEUATSAP
 * @version : 1.1
 * @since : 20 December 2018
 */
class Project extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('project_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function is not yet defined
     */
    public function index()
    {
        /*
        $this->global['pageTitle'] = 'ActionTracker : New Task';
        $this->global['include_datepicker_librarie'] = "true";
        $this->global['site_url'] = site_url();

        // var_dump($this->global);
        
        $this->loadViews("vw_new_task", $this->global, NULL , NULL);
        */
    }

    /**
     * This function is used to create a new project
     */
    public function create_new_project()
    {
        $project_name = $this->input->post('project_name');

        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('project_name','Project name','trim|required|max_length[128]|xss_clean');
        $this->form_validation->set_rules('project_description','Project description','trim|required|xss_clean|max_length[128]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->loadThis();
        }
        else
        {
            // echo 'Trueee';
            // redirect('vw_new_task');
            // $this->loadViews("vw_new_task", $this->global, NULL , NULL);
            
            $project_name = ucwords(strtolower($this->input->post('project_name')));
            $project_description = $this->input->post('project_description');
            
            $projectInfo = array('project_name' => $project_name, 
                                'project_description' => $project_description, 
                                'project_status' => 'empty', 
                                'Project_user_initiator_email' => "test_user@orange.com");
            
            //$this->load->model('project_model');
            $result = $this->project_model->addNewProject($projectInfo);
            
            if($result > 0)
            {
                $this->session->set_flashdata('success', 'New Project created successfully');
            }
            else
            {
                $this->session->set_flashdata('error', 'Porject creation failed');
            }

            // echo 'goodd';
            $this->refresh_list_of_projects();
            // var_dump($_SESSION);
            // header("Location: new_task/create_new_task");

            //redirect('vw_new_task');
        }
        
    }

    /**
     * This function refresh the projects list, in the select tag of the vw_new_task
     * after creating a new project
    */
    public function refresh_list_of_projects(){

        $all_projects = $this->project_model->getAllProjects();
        echo '<option>None</option>';
        
        foreach ($all_projects as $each_project){

            echo '<option project_id="'.$each_project->Project_id.'">'.$each_project->Project_name.'</option>';
        }
    }
}