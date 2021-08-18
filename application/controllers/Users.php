<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

	//Constructor
	public function __construct()
	{
		parent::__construct();

		//Load Role Model
		$this->load->model('Role');

		//Load User Model
		$this->load->model('User');

		//Do your magic here
	}

	//Getting users with their respective roles method
	public function index()
	{
		$data['users'] = $this->User->getUsers();
		return $this->render('templates/default', 'content', 'users/index', $data);
	}

}

/* End of file User.php */
