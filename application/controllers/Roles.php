<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

    //Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Role');
        
        //Do your magic here
    }
    
    public function index()
    {
        
    }

}

/* End of file Roles.php */
