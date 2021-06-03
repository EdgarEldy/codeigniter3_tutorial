<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product');
        $this->load->model('Category');
        
        
        //Do your magic here
    }


    //Getting products with their categories
    public function index()
    {
        $data['products'] = $this->Product->getProducts();
        return $this->render('templates/default', 'content', 'products/index', $data);
    }

    //Add a product
    public function add()
    {
        //Getting categories
        $data['categories'] = $this->Category->getCategories();

        //Setting validation rules
        $this->form_validation->set_rules('category_id', 'Category id', 'required');
        $this->form_validation->set_rules('product_name', 'Product name', 'required');
        $this->form_validation->set_rules('unit_price', 'Unit price', 'required');


        if ($this->form_validation->run() == FALSE) {
            return $this->render('templates/default', 'content', 'products/add', $data);
        } else {
            //Save product category
            $this->Product->add();

            //Set flash message
            $this->session->set_flashdata('product_saved', 'Product has been saved successfully !');

            //Load categories/index view
            return redirect('products');
        }
    }
}

/* End of file products.php */
