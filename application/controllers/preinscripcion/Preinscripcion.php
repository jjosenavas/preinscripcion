<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Preinscripcion extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view("layouts/header_pre");
		$this->load->view("preinscripcion/informacion");
		$this->load->view("layouts/footer");
		$this->load->view("layouts/close_body");
    }

    
    
}
