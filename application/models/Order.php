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
        $this->db->from('customers');
        $this->db->join('orders', 'orders.customer_id = customers.id', 'inner');
        $this->db->join('products', 'orders.product_id = products.id', 'inner');
        $this->db->select('orders.*, orders.id as order_id');
        $query = $this->db->get();

        $result = $query->result_array();

        return !empty($result) ? $result : false;
    }

    //Add order query
    public function add()
    {
        //Order data array
        $data = array(
            'customer_id' => $this->input->post('customer_id'),
            'product_id' => $this->input->post('product_id'),
            'qty' => $this->input->post('qty'),
            'grand_total' => $this->input->post('grand_total'),
        );

        //Insert order
        return $this->db->insert('orders', $data);
    }

    //Getting customer's name by order id
    public function getCustomerByOrderId($id = '')
    {
        if ($id) {
            $this->db->select('*');
            $this->db->from('customers');
            $this->db->join('orders', 'customers.id = orders.customer_id', 'inner');
            $this->db->where('orders.id', $id);

            $query = $this->db->get();
            $result = $query->row_array();

            return !empty($result) ? $result : false;
        }
    }

    //Getting product name by order id
    public function getProductByOrderId($id = '')
    {
        if ($id) {
            $this->db->select('*');
            $this->db->from('products');
            $this->db->join('orders', 'products.id = orders.product_id', 'inner');
            $this->db->where('orders.id', $id);

            $query = $this->db->get();
            $result = $query->row_array();

            return !empty($result) ? $result : false;
        }
    }

    //Getting category name by order id
    public function getCategoryByOrderId($id = '')
    {
        if ($id) {
            $this->db->select('*');
            $this->db->from('categories');
            $this->db->join('products', 'categories.id = products.category_id', 'inner');
            $this->db->join('orders', 'products.id = orders.product_id', 'inner');
            $this->db->where('orders.id', $id);

            $query = $this->db->get();
            $result = $query->row_array();

            return !empty($result) ? $result : false;
        }
    }

    //Get orders data to update
    public function edit($id)
    {
        $query = $this->db->get_where('orders', array(
            'id' => $id
        ));
        return $query->row_array();
    }

    //Get input data and update order
    public function update()
    {
        $data = array(
            'customer_id' => $this->input->post('customer_id'),
            'product_id' => $this->input->post('product_id'),
            'qty' => $this->input->post('qty'),
            'grand_total' => $this->input->post('grand_total'),
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('orders', $data);
    }

    //Delete order query 
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('orders');
        return true;
    }
}

/* End of file Order.php */
