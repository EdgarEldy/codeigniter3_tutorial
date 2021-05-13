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
}

/* End of file Categories.php */
