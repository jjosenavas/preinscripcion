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
	{	$lapso = '2-2022'
;		$data = array(
	    'total_total'   => $this->Seguimiento_model->getCantidadPreinscriptos($lapso),
		'total'         => $this->Seguimiento_model->getCantidadPreinscriptosEducacion($lapso),
		'integral'      => $this->Seguimiento_model->getCantidadEducacionIntegral($lapso),
		'preescolar'    => $this->Seguimiento_model->getCantidadEducacionPreescolar($lapso),
		'especial'      => $this->Seguimiento_model->getCantidadEducacionEspecial($lapso),
		'electronica'   => $this->Seguimiento_model->getCantidadElectronica($lapso),
		'electrotecnia' => $this->Seguimiento_model->getCantidadElectrotecnia($lapso),
		'mecanica'      => $this->Seguimiento_model->getCantidadMecanica($lapso),
		'informatica'   => $this->Seguimiento_model->getCantidadInformatica($lapso),
		'administracion'=> $this->Seguimiento_model->getCantidadAdministracion($lapso),
		'contaduria'    => $this->Seguimiento_model->getCantidadContaduria($lapso)
	   );
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('inicio/inicio', $data);
		$this->load->view('layouts/footer');
		$this->load->view("layouts/close_body");
	}
}
