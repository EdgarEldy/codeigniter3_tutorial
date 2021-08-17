<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    //Constructor
    public function __construct()
    {
        parent::__construct();

        //Load Role Model
        $this->load->model('Role');
        
        //Do your magic here
    }
    
    public function index()
    {
        
    }

}

/* End of file User.php */
