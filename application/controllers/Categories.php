<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Categories extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category');

        //Do your magic here
    }

    //Show all product categories
    public function index()
    {
        $data['categories'] = $this->Category->getCategories();
        return $this->render('templates/default', 'content', 'categories/index', $data);
    }

    //Add a product category
    public function add()
    {
        //Setting validation rules
        $this->form_validation->set_rules('category_name', 'Category name', 'required');


        if ($this->form_validation->run() == FALSE) {
            return $this->render('templates/default', 'content', 'categories/add');
        } else {
            //Save product category
            $this->Category->add();

            //Set flash message
            $this->session->set_flashdata('category_saved', 'Product category has been saved successfully !');

            //Load categories/index view
            return redirect('categories');
        }
    }

    //Show the form for editing a product category
    public function edit($id)
    {
        $data['category'] = $this->Category->edit_category($id);
        $this->render('templates/default', 'content', 'categories/edit', $data);
    }

    //Update a product category
    public function update()
    {
        $this->Category->update_category();
        $this->session->set_flashdata('category_updated', 'Product category has been updated successfully !');
        redirect('categories');
    }
}

/* End of file Categories.php */
