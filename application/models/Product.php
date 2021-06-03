<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    //Getting products with their categories query
    public function getProducts()
    {
        $this->db->select('*');
        $this->db->from('categories');
        $this->db->join('products', 'categories.id = products.category_id', 'inner');
        $query = $this->db->get();
        $result = $query->result_array();

        return !empty($result) ? $result : false;
    }

    // Insert a product
    public function add()
    {
        //Product data array
        $data = array(
            'category_id' => $this->input->post('category_id'),
            'product_name' => $this->input->post('product_name'),
            'unit_price' => $this->input->post('unit_price'),
        );

        //Insert product category
        return $this->db->insert('products', $data);
    }
}

/* End of file Product.php */
