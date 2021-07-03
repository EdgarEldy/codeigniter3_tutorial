<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Orders extends CI_Controller
{
    
    //Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order');
        $this->load->model('Customer');
        
        //Do your magic here
    }
    

    public function index()
    {
    }
}

/* End of file Orders.php */
