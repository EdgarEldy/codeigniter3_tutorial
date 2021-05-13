<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    // Get all product categories
    public function getCategories()
    {
        $this->db->select('*');
        $this->db->from('categories');
        $query = $this->db->get();

        return $query->result_array();
    }

    // Insert a product category
    public function add()
    {
        //Product data array
        $data = array(
            'category_name' => $this->input->post('category_name')
        );

        //Insert product category
        return $this->db->insert('categories', $data);
        
    }
}

/* End of file Category.php */
