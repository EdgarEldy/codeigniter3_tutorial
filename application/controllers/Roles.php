<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Roles extends CI_Controller {

    //Constructor
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Role');
        
        //Do your magic here
    }
    
    public function index()
    {
        $data['roles'] = $this->Role->getRoles();
        return $this->render('templates/default', 'content', 'roles/index', $data);
    }

    //Add a role
    public function add()
    {
        //Setting validation rules
        $this->form_validation->set_rules('role_name', 'Role name', 'required');


        if ($this->form_validation->run() == FALSE) {
            return $this->render('templates/default', 'content', 'roles/add');
        } else {
            //Save role
            $this->Role->add();

            //Set flash message
            $this->session->set_flashdata('role_saved', 'Role has been saved successfully !');

            //Load roles/index view
            return redirect('roles');
        }
    }

    //Show the form for editing a role
    public function edit($id)
    {
        $data['role'] = $this->Role->edit($id);
        $this->render('templates/default', 'content', 'roles/edit', $data);
    }

}

/* End of file Roles.php */
