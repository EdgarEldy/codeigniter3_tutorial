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

	public function add()
	{
		//Get role names
		$data['roles'] = $this->Role->getRoles();

		$this->form_validation->set_rules('first_name', 'First name', 'required');
		$this->form_validation->set_rules('last_name', 'Last name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[customers.email]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Please confirm your password', 'trim|required|matches[password]');

		if ($this->form_validation->run() === FALSE) {
			return $this->render('templates/default', 'content', 'users/add', $data);
		} else {

			//get user data array
			$data = array(
				'role_id' => $this->input->post('role_id'),
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password')),
			);

			//Save user
			if ($this->User->add($data)) {

				//Set flash message if user saved successfully
				$this->session->set_flashdata('user_saved', 'User has been saved successfully !');
				return redirect('users');
			}
			else {
				//Set flash message if user registration failed
				$this->session->set_flashdata('user_failed', 'User registration failed ! Try again !');
				return $this->render('templates/default', 'content', 'users/add');
				
			}
		}
	}
}

/* End of file User.php */
