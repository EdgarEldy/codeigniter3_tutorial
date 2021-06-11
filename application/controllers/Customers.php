<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer');
        
        //Do your magic here
    }
    
    public function index()
    {
        
    }
}

/* End of file Customers.php */
