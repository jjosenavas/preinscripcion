<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Preinscripcion extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Aspirante_model');
    }

    public function index()
    {
        $this->load->view("layouts/header_pre");
		$this->load->view("preinscripcion/informacion");
		$this->load->view("layouts/footer");
		$this->load->view("layouts/close_body");
    }
    
    public function RegistroAspirante()
    {
        $this->load->view("layouts/header_pre");
		$this->load->view("preinscripcion/registro_aspirante");
		$this->load->view("layouts/footer");
        $this->load->view("layouts/validation");
		$this->load->view("layouts/close_body");
    }
    
    public function store(){
		$cedula        = $this->input->post("cedula");
		$p_nombre      = $this->input->post("p_nombre");
		$s_nombre      = $this->input->post("s_nombre");
		$p_apellido    = $this->input->post("p_apellido");
		$s_apellido    = $this->input->post("s_apellido");
        $fecha_nac     = $this->input->post("fecha_nac");
		$lug_nac       = $this->input->post("lug_nac");
		$sexo          = $this->input->post("sexo");
		$edo_civil     = $this->input->post("estado_civil");
		$direccion     = $this->input->post("direccion");
        $email         = $this->input->post("email");
		$telefono      = $this->input->post("telefono");
		$plantel       = $this->input->post("plantel");
		$ano_egreso    = $this->input->post("ano_egre");
		$carrera       = $this->input->post("carrera");
        $rusnies       = $this->input->post("rusnie");
		$serial_titulo = $this->input->post("serial");

		$data  = array(
			'cedula' => $cedula, 
			'nombre1' => $p_nombre,
			'nombre2' => $s_nombre,
			'apellido1' => $p_apellido,
			'apellido2' => $s_apellido,
            'fechanac' => $fecha_nac,
            'lugarnac' => $lug_nac,             
            'sexo' => $sexo,             
			'estadocivil' => $edo_civil,
            'direccion' => $direccion,
            'email' => $email,
            'telefono' =>$telefono,
            'plantel' => $plantel,
            'egreso' => $ano_egreso,
			'carrera' => $carrera,
            'rusnies'  =>$rusnies,
            'serial_titulo' =>$serial_titulo,
			'status' => '1'					      
		);

		
		if ($this->Aspirante_model->save($data)) {
			redirect(base_url()."preinscripcion/preinscripcion");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."preinscripcion/preinscripcion/RegistroAspirante");
		}
	}
    
}
