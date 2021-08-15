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
        $data['roles'] = $this->Role->getRoles();
        return $this->render('templates/default', 'content', 'roles/index', $data);
    }

}

/* End of file Roles.php */
