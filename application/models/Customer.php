<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    // Get all customers
    public function getCustomers()
    {
        $this->db->select('*');
        $this->db->from('customers');
        $query = $this->db->get();

        return $query->result_array();
    }

    // Insert a new customer
    public function add()
    {
        //Customer data array
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'tel' => $this->input->post('tel'),
            'email' => $this->input->post('email'),
            'address' => $this->input->post('address'),
        );

        //Insert a customer
        return $this->db->insert('customers', $data);
    }
}

/* End of file Customer.php */
