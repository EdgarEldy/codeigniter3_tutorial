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

	//Get user's email and password
	public function login($email, $password)
	{
		//Get user's email and password
		$query = $this->db->get_where('users', array(
			'email' => $email,
			'password' => $password
		));

		if ($query->num_rows() == 1) {
			return $query->row(0)->id;
		} else {
			return false;
		}
	}

	//Get user by first name
	public function get_user_by_firstname($id)
	{
		$this->db->select('first_name');
		$this->db->where('id', $id);
		$query = $this->db->get('users');
		$d = array_shift($query->result_array());
		return $d['first_name'];
	}

}

/* End of file User.php */
