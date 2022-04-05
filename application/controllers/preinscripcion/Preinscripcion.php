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
	$fecha_actual                = strtotime(date("d-m-Y", time()));
    $fecha_informatica_desde     = strtotime("04-04-2022");
    $fecha_informatica_hasta     = strtotime("08-04-2022");
    $fecha_admin_empre_desde     = strtotime("18-04-2022");
    $fecha_admin_empre_hasta     = strtotime("22-04-2022");
    $fecha_contaduria_desde      = strtotime("25-04-2022");
    $fecha_contaduria_hasta      = strtotime("29-04-2022");

    $carrera_ofertada = '';
    if ($fecha_actual >= $fecha_informatica_desde && $fecha_actual <= $fecha_informatica_hasta) {
        $carrera_ofertada = "Informática";
    } else if ($fecha_actual >= $fecha_admin_empre_desde && $fecha_actual <= $fecha_admin_empre_hasta) {
        $carrera_ofertada = "Administración de empresas";
    } else if ($fecha_actual >= $fecha_contaduria_desde && $fecha_actual <= $fecha_contaduria_hasta) {
        $carrera_ofertada = "Contaduría";
    } 
		$periodo = "2-2022";
		$data = array(
			'total' => $this->Aspirante_model->getCantidadPreinscriptos($periodo, $carrera_ofertada)			
		);
		$this->load->view("layouts/header_ini");
		$this->load->view("preinscripcion/informacion", $data);
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
		$fecha_actual                = strtotime(date("d-m-Y", time()));
		$fecha_educacion_desde       = strtotime("14-03-2022");
		$fecha_educacion_hasta       = strtotime("18-03-2022");
		$fecha_electronica_desde     = strtotime("21-03-2022");
		$fecha_electronica_hasta     = strtotime("25-03-2022");
		$fecha_mecanica_desde        = strtotime("28-03-2022");
		$fecha_mecanica_hasta        = strtotime("01-04-2022");
		$fecha_informatica_desde     = strtotime("04-04-2022");
		$fecha_informatica_hasta     = strtotime("08-04-2022");
		$fecha_admin_empre_desde     = strtotime("18-04-2022");
		$fecha_admin_empre_hasta     = strtotime("22-04-2022");
		$fecha_contaduria_desde      = strtotime("25-04-2022");
		$fecha_contaduria_hasta      = strtotime("29-04-2022");
		$fecha_rezagados_desde       = strtotime("02-05-2022");
		$fecha_rezagados_hasta       = strtotime("03-05-2022");

		$correo_envio = '';
		$fecha_limite = '';

		if ($fecha_actual >= $fecha_educacion_desde && $fecha_actual <= $fecha_educacion_hasta) {
			$correo_envio = "admisioniujoeducacion@gmail.com";
			$fecha_limite = 'Sábado 19-03-2022';
		} else if ($fecha_actual >= $fecha_electronica_desde && $fecha_actual <= $fecha_electronica_hasta) {
			$correo_envio = "admisioniujoelectro@gmail.com";
			$fecha_limite = 'Sábado 26-03-2022';
		} else if ($fecha_actual >= $fecha_mecanica_desde && $fecha_actual <= $fecha_mecanica_hasta) {
			$correo_envio = "admisioniujomecanica@gmail.com";
			$fecha_limite = 'Sábado 02-04-2022';
		} else if ($fecha_actual >= $fecha_informatica_desde && $fecha_actual <= $fecha_informatica_hasta) {
			$correo_envio = "admisioniujoinformatica@gmail.com";
			$fecha_limite = 'Sábado 09-04-2022';
		} else if ($fecha_actual >= $fecha_admin_empre_desde && $fecha_actual <= $fecha_admin_empre_hasta) {
			$correo_envio = "admisioniujoadm@gmail.com";
			$fecha_limite = 'Sábado 23-04-2022';
		} else if ($fecha_actual >= $fecha_contaduria_desde && $fecha_actual <= $fecha_contaduria_hasta) {
			$correo_envio = "admisioniujocontaduria@gmail.com";
			$fecha_limite = 'Sábado 30-04-2022';
		} else if ($fecha_actual >= $fecha_rezagados_desde && $fecha_actual <= $fecha_rezagados_hasta) {

			$fecha_limite = 'Sábado 30-04-2022';
		}

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
		//$rusnies       = $this->input->post("rusnie");
		$serial_titulo = $this->input->post("serial");


		$nun_planilla = $this->Aspirante_model->numeroPlanilla();
		++$nun_planilla;
		$cantidad = strlen($nun_planilla);
		$cero = '';
		$lapso = '2-2022';

		if ($cantidad == 1) {
			$cero = '0000' . $nun_planilla;
		} else if ($cantidad == 2) {
			$cero = '000' . $nun_planilla;
		} else if ($cantidad == 3) {
			$cero = '00' . $nun_planilla;
		} else if ($cantidad >= 4) {
			$cero = '0' . $nun_planilla;
		}


		$data  = array(
			'cedula'        => $cedula,
			'nombre1'       => ucwords($p_nombre),
			'nombre2'       => ucwords($s_nombre),
			'apellido1'     => ucwords($p_apellido),
			'apellido2'     => ucwords($s_apellido),
			'fechanac'      => $fecha_nac,
			'lugarnac'      => ucwords($lug_nac),
			'sexo'          => $sexo,
			'estadocivil'   => $edo_civil,
			'direccion'     => $direccion,
			'email'         => $email,
			'telefono'      => $telefono,
			'plantel'       => ucwords($plantel),
			'egreso'        => $ano_egreso,
			'carrera'       => $carrera,
			'serial_titulo' => $serial_titulo,
			'status'        => '1',
			'planilla'      => $cero,
			'lapso'         => $lapso
		);


		if ($this->Aspirante_model->save($data)) {

			$this->load->library('email');

			$this->email->from($correo_envio);
			$this->email->to($email);
			$this->email->subject('Envío de documentos luego de la preinscripción.');
			$this->email->message('Estimado (a) aspirante ' . ucwords($p_nombre) . ' ' . ucwords($p_apellido) . ' cédula de identidad ' . $cedula . ', usted se ha registrado de forma satisfactoria en la carrera: ' . $carrera . ' El siguiente paso es el envío inmediato de los siguentes documentos en formato digital con extensión .jpg (imagen debidamente escaneados) y que sean legibles: Cédula de identidad, Título de bachiller, Planilla Opsu / Rusnies, Notas Certificadas. Deben ser enviados al correo: ' . $correo_envio . '. En caso de no poder enviarlos inmediatamente, tendrá como fecha límite para enviar: ' . $fecha_limite . '. No dejes para última hora el envío de los mismos.');
			$this->email->send();

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

		$data = array(
			'cedula' => $cedula
		);

		if ($ce = $this->Aspirante_model->getAspiranteNew($cedula)) {

			$this->load->view("layouts/header_pre");
			$this->load->view("preinscripcion/planilla_aspirante", $ce);
			$this->load->view("layouts/footer");
			$this->load->view("layouts/close_body");
		} else {

			$this->load->view("layouts/header_ini");
			$this->load->view("preinscripcion/registro_aspirante", $data);
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

	public function comprobarCedula()
	{
		$cedula_aspirante = $this->input->post("cedula");
		$respuesta = $this->Aspirante_model->comprobarCedulaAspirante($cedula_aspirante);

		if ($respuesta > 0) {
			echo "Cédula ya registrado en la base de datos";
		}
	}

	public function comprobarRusnies()
	{
		$rusnie_aspirante = $this->input->post("rusnie");
		$respuesta = $this->Aspirante_model->comprobarRusnieAspirante($rusnie_aspirante);

		if ($respuesta > 0) {
			echo "Código RUSNIES ya registrado en la base de datos";
		}
	}

	public function comprobarTitulo()
	{
		$titulo_aspirante = $this->input->post("serial");
		$respuesta = $this->Aspirante_model->comprobarTituloAspirante($titulo_aspirante);

		if ($respuesta > 0) {
			echo "Serial del título ya está registrado en la base de datos";
		}
	}
}
