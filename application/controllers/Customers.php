<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Customer');
        
        //Do your magic here
    }

    //Show all customers
    public function index()
    {
        $data['customers'] = $this->Customer->getCustomers();
        return $this->render('templates/default', 'content', 'customers/index', $data);
    }

    //Add a new customer
    public function add()
    {
        //Setting validation rules
        $this->form_validation->set_rules('first_name', 'First name', 'required');
        $this->form_validation->set_rules('last_name', 'Last name', 'required');
        $this->form_validation->set_rules('tel', 'Tel', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');


        if ($this->form_validation->run() == FALSE) {
            return $this->render('templates/default', 'content', 'customers/add');
        } else {

            //Save a customer
            $this->Customer->add();

            //Set flash message
            $this->session->set_flashdata('customer_saved', 'Customer has been saved successfully !');

            //Load customers/index view
            return redirect('customers');
        }
    }

    //Get customer's data and pass to the customers/edit view
    public function edit($id)
    {
        $data['customer'] = $this->Customer->edit($id);
        $this->render('templates/default', 'content', 'customers/edit', $data);
    }

    //Update a customer
    public function update()
    {
        $this->Customer->update();
        $this->session->set_flashdata('customer_updated', 'Customer has been updated successfully !');
        redirect('customers');
    }

    //Delete a customer
    public function delete($id)
    {
        $this->Customer->delete($id);

        // Set flash message
        $this->session->set_flashdata('customer_removed', 'Customer has been removed successfully !');

        redirect('customers');
    }
}

/* End of file Customers.php */
