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
}

/* End of file Customer.php */
