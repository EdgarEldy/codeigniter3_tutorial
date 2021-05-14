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

    //Get product category data by id
    public function edit_category($id)
    {
        $query = $this->db->get_where('categories', array(
            'id' => $id
        ));
        return $query->row_array();
    }

    //Update a product category
    public function update_category()
    {
        $data = array(
            'category_name' => $this->input->post('category_name')
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('categories', $data);
    }
}

/* End of file Category.php */
