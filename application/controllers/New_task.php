<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : New_task (UserController)
 * User Class to control all user's tasks related operations.
 * @author : Uriel FEUATSAP
 * @version : 1.1
 * @since : 10 December 2018
 */
class New_task extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'ActionTracker : New Task';
        $this->global['include_datepicker_librarie'] = "true";
        $this->global['site_url'] = site_url();

        // var_dump($this->global);
        
        $this->loadViews("vw_new_task", $this->global, NULL , NULL);
    }

    /**
     * This function is used to create a new project
     */
    public function create_new_project()
    {
        //$this->global['pageTitle'] = 'ActionTracker : New Task';
        $project_name = $this->input->post('project_name');
        //echo "Yeah: ".$project_name;
        
        //$this->loadViews("new_task", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to create a new problem
     */
    public function create_new_problem()
    {
        //$this->global['pageTitle'] = 'ActionTracker : New Task';
        
        //$this->loadViews("new_task", $this->global, NULL , NULL);
    }
    
    /**
     * This function is used to create a new problem
     */
    public function create_new_task()
    {
        // $this->global['pageTitle'] = 'ActionTracker : New Task';
        $task_name = $this->input->post('input_task_name');
        var_dump($task_name);
        
        // $this->loadViews("new_task", $this->global, NULL , NULL);
    }
}