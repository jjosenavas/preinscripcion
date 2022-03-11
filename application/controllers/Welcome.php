<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){

        parent::__construct();  
		$this->load->model('Seguimiento_model');    
       
        if (!$this->session->userdata("login")) {
			redirect(base_url());
		}
      }


	public function index()
	{	
		$data = array(
		'total'      => $this->Seguimiento_model->getCantidadPreinscriptos(),
		'integral'   => $this->Seguimiento_model->getCantidadEducacionIntegral(),
		'preescolar' => $this->Seguimiento_model->getCantidadEducacionPreescolar(),
		'especial'   => $this->Seguimiento_model->getCantidadEducacionEspecial()
	   );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('inicio/inicio', $data);
		$this->load->view('layouts/footer');
		$this->load->view("layouts/close_body");
	}
}
