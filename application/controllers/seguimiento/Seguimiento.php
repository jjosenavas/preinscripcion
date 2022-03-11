<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Seguimiento extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Seguimiento_model');
	}

	public function index()
	{			
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('seguimiento/list_preinscripto');
		$this->load->view('layouts/footer');
        $this->load->view('layouts/list_preinscripto');
		$this->load->view("layouts/close_body");
	}

	
}
