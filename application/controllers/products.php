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
}

/* End of file products.php */
