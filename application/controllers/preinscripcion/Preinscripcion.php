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
		$this->load->view("layouts/fechas");
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

	public function store()
	{
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

		//Indicamos el protocolo a utilizar
		$config['protocol'] = 'smtp';

		//El servidor de correo que utilizaremos
		$config["smtp_host"] = 'smtp.gmail.com';

		//Nuestro usuario
		$config["smtp_user"] = 'jjosenavasp@gmail.com';

		//Nuestra contraseña
		$config["smtp_pass"] = 'oriana20';

		//El puerto que utilizará el servidor smtp
		$config["smtp_port"] = '587';

		//El juego de caracteres a utilizar
		$config['charset'] = 'utf-8';

		//Permitimos que se puedan cortar palabras
		$config['wordwrap'] = TRUE;

		//El email debe ser valido 
		$config['validate'] = true;

		//Establecemos esta configuración
		$this->email->initialize($config);

		//Ponemos la dirección de correo que enviará el email y un nombre
		$this->email->from('jjosenavasp@gmail.com', 'Prueba');
		/*
         Ponemos el o los destinatarios para los que va el email
      
       */
		$this->email->to($email, $p_nombre . ' ' . $p_apellido);

		

		//Definimos el mensaje a enviar
		$this->email->message(
			"Email: " . $email .
				" Mensaje: " . 'Esto es el mensaje'
		);
		if ($env = $this->email->send()) {
			$si =2;
		} else {
			$si =0;
		}

       


		$nun_planilla = $this->Aspirante_model->numeroPlanilla();
		++$nun_planilla;

		$data  = array(
			'cedula'        => $cedula,
			'nombre1'       => $p_nombre,
			'nombre2'       => $s_nombre,
			'apellido1'     => $p_apellido,
			'apellido2'     => $s_apellido,
			'fechanac'      => $fecha_nac,
			'lugarnac'      => $lug_nac,
			'sexo'          => $sexo,
			'estadocivil'   => $edo_civil,
			'direccion'     => $direccion,
			'email'         => $email,
			'telefono'      => $telefono,
			'plantel'       => $plantel,
			'egreso'        => $ano_egreso,
			'carrera'       => $carrera,
			'rusnies'       => $rusnies,
			'serial_titulo' => $serial_titulo,
			'status'        => $si,
			'planilla'      => $nun_planilla,
		);


		if ($this->Aspirante_model->save($data)) {

			$id_aspirante = $this->Aspirante_model->lastID();
			redirect(base_url() . "preinscripcion/preinscripcion/resultadoRegistro/$id_aspirante");
		} else {
			$this->session->set_flashdata("error", "No se pudo guardar la informacion");
			redirect(base_url() . "preinscripcion/preinscripcion/RegistroAspirante");
		}
	}

	public function verificarAspirante()
	{
		$cedula = $this->input->post("cedula");

		if ($ce = $this->Aspirante_model->getAspiranteNew($cedula)) {

			$this->load->view("layouts/header_pre");
			$this->load->view("preinscripcion/planilla_aspirante", $ce);
			$this->load->view("layouts/footer");
			$this->load->view("layouts/close_body");
		} else {
			$this->load->view("layouts/header_pre");
			$this->load->view("preinscripcion/registro_aspirante");
			$this->load->view("layouts/footer");
			$this->load->view("layouts/validation");
			$this->load->view("layouts/close_body");
		}
	}

	public function resultadoRegistro($id)
	{
		$result = $this->Aspirante_model->getAspiranteRegi($id);

		$this->load->view("layouts/header_pre");
		$this->load->view("preinscripcion/planilla_registro", $result);
		$this->load->view("layouts/footer");
		$this->load->view("layouts/close_body");
	}
}
