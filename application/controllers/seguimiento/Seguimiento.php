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
		$data = array(
			'carreras' => $this->Seguimiento_model->getCarreras()
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('seguimiento/list_preinscripto', $data);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/list_preinscripto');
		$this->load->view("layouts/close_body");
	}

	public function totalInscripto()
	{
		$carrera = $this->input->post("data_carrera");
		$num = 1;
		$data = array();

		$result = $this->Seguimiento_model->getInscriptoPorCarrera($carrera);

		if (!empty($result)) {
           
			foreach ($result as $r) {
			
				$data[] = array(
					$num++,
					$r->cedula,
					$r->nombre1,
					$r->nombre2,
					$r->apellido1,
					$r->apellido2,
					$r->fechanac,
					$r->sexo,					
					$r->direccion,
					$r->telefono,
					$r->email,					
					$r->carrera					
				);
			}
		} else {
			$data = [];
		}

		$result = array(
			"data" => $data
		);

		echo json_encode($result);
	}
}
