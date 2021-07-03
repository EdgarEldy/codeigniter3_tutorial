<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Order extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    //Get orders by customer
    public function getOrders()
    {
        $this->db->select('*');
        $this->db->from('orders');
        $this->db->join('customers', 'orders.customer_id = customers.id', 'inner');
        $this->db->join('products', 'orders.product_id = products.id', 'inner');
        $query = $this->db->get();
        
        $result = $query->result_array();
        
        return !empty($result) ? $result : false;
    }
}

/* End of file Order.php */
