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

    //Get role data by id
    public function edit($id)
    {
        $query = $this->db->get_where('roles', array(
            'id' => $id
        ));
        return $query->row_array();
    }

    //Update a role
    public function update()
    {
        $data = array(
            'role_name' => $this->input->post('role_name')
        );
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('roles', $data);
    }
}

/* End of file Role.php */
