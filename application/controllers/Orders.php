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
        $this->load->model('Category');

        //Do your magic here
    }


    //Show order
    public function index()
    {
        $data['orders'] = $this->Order->getOrders();
        return $this->render('templates/default', 'content', 'orders/index', $data);
    }

    public function add()
    {
        $data['customers'] = $this->Customer->getCustomers();
        $data['categories'] = $this->Category->getCategories();
        return $this->render('templates/default','content','orders/add', $data);
    }
}

/* End of file Orders.php */
