<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Model
{

//Constructor
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

//Getting users with their respective roles query
	public function getUsers()
	{
		$this->db->select('*');
		$this->db->from('roles');
		$this->db->join('users', 'roles.id = users.role_id', 'inner');
		$query = $this->db->get();
		$result = $query->result_array();

		return !empty($result) ? $result : false;
	}

	// Insert a user query
	public function add($data)
	{
		//Insert user
		return $this->db->insert('users', $data);
	}

}

/* End of file User.php */
