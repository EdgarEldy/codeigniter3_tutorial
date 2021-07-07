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

    //Add order method
    public function add()
    {
        //Getting customers
        $data['customers'] = $this->Customer->getCustomers();

        //Getting categories
        $data['categories'] = $this->Category->getCategories();

        //Setting validation rules
        $this->form_validation->set_rules('customer_id', 'Customer id', 'required');
        $this->form_validation->set_rules('category_id', 'Category id', 'required');
        $this->form_validation->set_rules('product_id', 'Product id', 'required');
        $this->form_validation->set_rules('qty', 'Quantity', 'required');
        $this->form_validation->set_rules('unit_price', 'Unit price', 'required');
        $this->form_validation->set_rules('total', 'Total', 'required');


        if ($this->form_validation->run() == FALSE) {
            return $this->render('templates/default', 'content', 'orders/add', $data);
        } else {
            //Save order
            $this->Order->add();

            //Set flash message
            $this->session->set_flashdata('order_saved', 'Order has been saved successfully !');

            //Load orders/index view
            return redirect('orders');
        }
    }
}

/* End of file Orders.php */
