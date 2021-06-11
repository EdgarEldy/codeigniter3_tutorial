<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer');
        
        //Do your magic here
    }

    //Show all customers
    public function index()
    {
        $data['customers'] = $this->Customer->getCustomers();
        return $this->render('templates/default', 'content', 'customers/index', $data);
    }
}

/* End of file Customers.php */
