<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';

/**
 * Class : New_task (UserController)
 * User Class to control all user's tasks related operations.
 * @author : Uriel FEUATSAP
 * @version : 1.1
 * @since : 10 December 2018
 */
class MyTasks extends BaseController
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->model('project_model');
        $this->isLoggedIn();   
    }
    
    /**
     * This function used to load the first screen of the user
     */
    public function index()
    {
        $this->global['pageTitle'] = 'ActionTracker : My Tasks';
        $this->global['all_projects'] = $this->project_model->getAllProjects();
        
        $this->loadViews("vw_mytasks", $this->global, NULL , NULL);
    }
}