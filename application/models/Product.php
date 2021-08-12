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

    //Getting category by product id
    public function getCategoryByProductId($id = '')
    {
        if ($id) {
            $this->db->select('*');
            $this->db->from('categories');
            $this->db->join('products', 'categories.id = products.category_id', 'inner');
            $this->db->where('products.id', $id);

            $query = $this->db->get();
            $result = $query->row_array();

            return !empty($result) ? $result : false;
        }
    }

    //Get product data by id to update
    public function edit($id)
    {
        $query = $this->db->get_where('products', array(
            'id' => $id
        ));
        return $query->row_array();
    }

    //Get input data and update a product
    public function update()
    {
        $data = array(
            'category_id' => $this->input->post('category_id'),
            'product_name' => $this->input->post('product_name'),
            'unit_price' => $this->input->post('unit_price'),
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('products', $data);
    }

    //Delete a product 
    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('products');
        return true;
    }

    //Get products by category id
    public function getProductsByCategoryId($id = '')
    {
        if ($id) {
            $this->db->select('*');
            $this->db->from('categories');
            $this->db->join('products', 'categories.id = products.category_id', 'inner');
            $this->db->where('categories.id', $id);

            $query = $this->db->get();
            $result = $query->result_array();

            return !empty($result) ? $result : false;
        }
    }

    //Get unit price by product id query
    public function getUnitPriceByProductId($id = '')
    {
        if ($id) {
            $this->db->select('*');
            $this->db->from('categories');
            $this->db->join('products', 'categories.id = products.category_id', 'inner');
            $this->db->where('products.id', $id);

            $query = $this->db->get();
            $result = $query->row_array();

            return !empty($result) ? $result : false;
        }
    }
}

/* End of file Product.php */
