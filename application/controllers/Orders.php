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
        $this->load->model('Product');

        //Do your magic here
    }


    //Show order
    public function index()
    {
        $data['orders'] = $this->Order->getOrders();
        return $this->render('templates/default', 'content', 'orders/index', $data);
    }
}

/* End of file Orders.php */
