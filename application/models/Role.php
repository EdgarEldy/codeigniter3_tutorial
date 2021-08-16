<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Role extends CI_Model
{

    //Constructor
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    // Get all roles
    public function getRoles()
    {
        $this->db->select('*');
        $this->db->from('roles');
        $query = $this->db->get();

        return $query->result_array();
    }

    // Insert a role
    public function add()
    {
        //Role data array
        $data = array(
            'role_name' => $this->input->post('role_name')
        );

        //Insert role
        return $this->db->insert('roles', $data);
    }
}

/* End of file Role.php */
