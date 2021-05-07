<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Migrate extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here

        //Load migration library
        if (!$this->input->is_cli_request()) {
            show_error('You don\'t have permission for this action');
            return;
        }
        $this->load->library('migration');
    }


    public function index()
    {
    }
}

/* End of file Migrate.php */
