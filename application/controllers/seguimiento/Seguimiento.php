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

	public function aspirantesTotal()
	{
		$data = array(
			'carreras' => $this->Seguimiento_model->getCarreras()
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('seguimiento/list_preinscriptos_total', $data);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/list_preinscripto');
		$this->load->view("layouts/close_body");
	}

	public function listAdmitidos()
	{
		$data = array(
			'carreras' => $this->Seguimiento_model->getCarreras()
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('seguimiento/list_admitidos', $data);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/list_admitidos');
		$this->load->view("layouts/close_body");
	}
	

	public function totalInscripto()
	{
		$carrera = $this->input->post("data_carrera");
		$num = 1;
		$data = array();

		$result = $this->Seguimiento_model->getInscriptoPorCarrera($carrera);
		$path = base_url() . 'seguimiento/seguimiento/getDataAspirante/';

		if (!empty($result)) {

			foreach ($result as $r) {
				$boton = "<a href='" . $path . $r->id . "' class='btn btn-info'><span class='fa  fa-search'></span></a>";
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
					$r->carrera,
					$boton
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

	public function totalInscriptoTotal()
	{
		$carrera = $this->input->post("data_carrera");
		$num = 1;
		$data = array();

		$result = $this->Seguimiento_model->getInscriptoPorCarreraTotal($carrera);
		$path = base_url() . 'seguimiento/seguimiento/getDataAspirante/';

		if (!empty($result)) {

			foreach ($result as $r) {
				$boton = "<a href='" . $path . $r->id . "' class='btn btn-info'><span class='fa  fa-search'></span></a>";
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
					$r->carrera,
					$boton
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

	public function getDataAspirante($id)
	{
		$lapso = '2-2022';
		$data = array(
			'data_aspirante'        => $this->Seguimiento_model->getValidarDataAspirante($id),
			'cantidad_admitidos'    => intval($this->Seguimiento_model->getCantidadAdmitidos($lapso)->total),
			'cantidad_electro'      => intval($this->Seguimiento_model->getCantidadAceptadosElectronicaElectrotecnia($lapso)->total),
			'cantidad_educacion'    => intval($this->Seguimiento_model->getCantidadAceptadosEducacion($lapso)->total),
			'cantidad_mecanica'     => intval($this->Seguimiento_model->getCantidadAceptadosMecanica($lapso)->total),
			'cantidad_informatica'  => intval($this->Seguimiento_model->getCantidadAceptadosInformatica($lapso)->total),
			'cantidad_admin_empre'  => intval($this->Seguimiento_model->getCantidadAceptadosAdministracionEmpresa($lapso)->total),
			'cantidad_contaduria'   => intval($this->Seguimiento_model->getCantidadAceptadosContaduria($lapso)->total)

		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('seguimiento/validar_documentos', $data);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/validar_documentos');
		$this->load->view("layouts/close_body");
	}

	public function admitidos()
	{
		//echo "<pre>";	var_dump($_POST);echo "</pre>";exit;
		$id_aspirante  = $this->input->post("id_aspirante");
		$cedula        = $this->input->post("cedula");
		$fecha         = $this->input->post("fecha_actual");
		$p_nombre      = $this->input->post("p_nombre");
		$s_nombre      = $this->input->post("s_nombre");
		$p_apellido    = $this->input->post("p_apellido");
		$s_apellido    = $this->input->post("s_apellido");
		$fecha_nac     = $this->input->post("fechanac");
		$direccion     = $this->input->post("direccion");
		$email_to        = $this->input->post("email");
		$telefono      = $this->input->post("telefono");
		$carrera       = $this->input->post("carrera");
		$sexo          = $this->input->post("sexo");
		$titulo_check  = $this->input->post("titulo_check");
		$notas_check   = $this->input->post("notas_check");
		$cedula_check  = $this->input->post("cedula_check");
		$rusnies_check = $this->input->post("rusnies_check");
		$observaciones = $this->input->post("observaciones");
		$verificado_por = $this->session->userdata('username');
		$lapso         = '2-2022';
		$estatus = '';
		$fecha_preuniversitario = '';
		$mensaje_email = '';
		$email_from = '';

		//con este condicional le damos el estatus al aspirante dependiendo de los documentos entregados
		if ($titulo_check == 'on' && $notas_check == 'on' && $cedula_check == 'on' && $rusnies_check == 'on') {
			$estatus = 'Aceptado';
		} else if ($titulo_check == 'on' && $notas_check == 'on' && $cedula_check == 'on' && $rusnies_check == '') {
			$estatus = 'Aceptado con observaciones';
		} else {
			$estatus = 'No aceptado';
		}

		$cantidad_admitidos = intval($this->Seguimiento_model->getCantidadAdmitidos($lapso)->total); // verifico en la tabla admitidos cuantos van para hacer los grupos y convierto a entero el resultado
		$electronica = 'Electrónica';
		$electrotecnia = 'Electrotecnia';
		$mecanica = 'Mecánica';
		$informatica = 'Informática';
		$adm_empresa = 'Administración de empresas';
		$contaduria = 'Contaduría';

		$cantidad_procesados_elect = intval($this->Seguimiento_model->getCantidadProcesadosElect($lapso, $electronica, $electrotecnia)->total); // verifico en la tabla admitidos cuantos van para hacer los grupos y convierto a entero el resultado
		$cantidad_procesados_mecanica = intval($this->Seguimiento_model->getCantidadProcesadosMecanica($lapso, $mecanica)->total); // verifico en la tabla admitidos cuantos van para hacer los grupos y convierto a entero el resultado
		$cantidad_procesados_informatica = intval($this->Seguimiento_model->getCantidadProcesadosInformatica($lapso, $informatica)->total); // verifico en la tabla admitidos cuantos van para hacer los grupos y convierto a entero el resultado
		$cantidad_procesados_admempresa = intval($this->Seguimiento_model->getCantidadProcesadosAdministacionEmpresa($lapso, $adm_empresa)->total); // verifico en la tabla admitidos cuantos van para hacer los grupos y convierto a entero el resultado
		$cantidad_procesados_contaduria = intval($this->Seguimiento_model->getCantidadProcesadosContaduria($lapso, $contaduria)->total); // verifico en la tabla admitidos cuantos van para hacer los grupos y convierto a entero el resultado
		
		if (($cantidad_admitidos <= 50 && $carrera == 'Educación integral') || ($cantidad_admitidos <= 50 && $carrera == 'Educación preescolar') || ($cantidad_admitidos <= 50 && $carrera == 'Educación especial')) { //verifico la cantidad de admitidos y se crea el primer grupo de 50
			if (($carrera == 'Educación integral' && $estatus == 'Aceptado con observaciones') || ($carrera == 'Educación preescolar' && $estatus == 'Aceptado con observaciones') || ($carrera == 'Educación especial' && $estatus == 'Aceptado con observaciones')) {
				$fecha_preuniversitario = '22 de marzo de 2022 a las 08:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con parte de los requisitos solicitados, resultando faltante o no correspondiente el certificado de OPSU/Rusnies, por tanto, queda en la condición de pendiente por consignar y le será solicitado más adelante. Deberá tramitarlo para consignarlo en su momento. Para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . ' Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if (($carrera == 'Educación integral' && $estatus == 'Aceptado') || ($carrera == 'Educación preescolar' && $estatus == 'Aceptado') || ($carrera == 'Educación especial' && $estatus == 'Aceptado')) {
				$fecha_preuniversitario = '22 de marzo de 2022 a las 8:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con los requisitos correspondientes para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . '. Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if (($carrera == 'Educación integral' && $estatus == 'No aceptado') || ($carrera == 'Educación preescolar' && $estatus == 'No aceptado') || ($carrera == 'Educación especial' && $estatus == 'No aceptado')) {
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted no ha cumplido con los requisitos correspondientes, le invitamos a participar en el siguiente proceso de Selección y Admisión. Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos. Estaremos esperando su regreso.';
			}
		} else if (($cantidad_admitidos > 50 && $carrera == 'Educación integral') || ($cantidad_admitidos > 50 && $carrera == 'Educación preescolar') || ($cantidad_admitidos > 50 && $carrera == 'Educación especial')) { //verifico la cantidad de admitidos y se crea el segundo grupo de 50
			if (($carrera == 'Educación integral' && $estatus == 'Aceptado con observaciones') || ($carrera == 'Educación preescolar' && $estatus == 'Aceptado con observaciones') || ($carrera == 'Educación especial' && $estatus == 'Aceptado con observaciones')) {
				$fecha_preuniversitario = '22 de marzo de 2022 a las 10:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con parte de los requisitos solicitados, resultando faltante o no correspondiente el certificado de OPSU/Rusnies, por tanto, queda en la condición de pendiente por consignar y le será solicitado más adelante. Deberá tramitarlo para consignarlo en su momento. Para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . ' Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if (($carrera == 'Educación integral' && $estatus == 'Aceptado') || ($carrera == 'Educación preescolar' && $estatus == 'Aceptado') || ($carrera == 'Educación especial' && $estatus == 'Aceptado')) {
				$fecha_preuniversitario = '22 de marzo de 2022 a las 10:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con los requisitos correspondientes para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . '. Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if (($carrera == 'Educación integral' && $estatus == 'No aceptado') || ($carrera == 'Educación preescolar' && $estatus == 'No aceptado') || ($carrera == 'Educación especial' && $estatus == 'No aceptado')) {
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted no ha cumplido con los requisitos correspondientes, le invitamos a participar en el siguiente proceso de Selección y Admisión. Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos. Estaremos esperando su regreso.';
			}
		}

		if (($cantidad_procesados_elect <= 65 && $carrera == 'Electrónica') || ($cantidad_procesados_elect <= 65 && $carrera == 'Electrotecnia')) { //verifico la cantidad de admitidos y se crea el primer grupo de 65
			if (($estatus == 'Aceptado con observaciones')) {
				$fecha_preuniversitario = '29 de marzo de 2022 a las 08:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con parte de los requisitos solicitados, resultando faltante o no correspondiente el certificado de OPSU/Rusnies, por tanto, queda en la condición de pendiente por consignar y le será solicitado más adelante. Deberá tramitarlo para consignarlo en su momento. Para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . ' Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'Aceptado') {
				$fecha_preuniversitario = '29 de marzo de 2022 a las 8:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con los requisitos correspondientes para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . '. Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'No aceptado') {
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted no ha cumplido con los requisitos correspondientes, le invitamos a participar en el siguiente proceso de Selección y Admisión. Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos. Estaremos esperando su regreso.';
			}
		} else if (($cantidad_procesados_elect > 65 && $carrera == 'Electrónica') || ($cantidad_procesados_elect > 65 && $carrera == 'Electrotecnia') ) { //verifico la cantidad de admitidos y se crea el primer grupo de 65
			if (($estatus == 'Aceptado con observaciones')) {
				$fecha_preuniversitario = '29 de marzo de 2022 a las 10:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con parte de los requisitos solicitados, resultando faltante o no correspondiente el certificado de OPSU/Rusnies, por tanto, queda en la condición de pendiente por consignar y le será solicitado más adelante. Deberá tramitarlo para consignarlo en su momento. Para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . ' Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'Aceptado') {
				$fecha_preuniversitario = '29 de marzo de 2022 a las 10:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con los requisitos correspondientes para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . '. Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'No aceptado') {
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted no ha cumplido con los requisitos correspondientes, le invitamos a participar en el siguiente proceso de Selección y Admisión. Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos. Estaremos esperando su regreso.';
			}
		} 

		if ($cantidad_procesados_mecanica <= 60 && $carrera == 'Mecánica') { //verifico la cantidad de admitidos y se crea el primer grupo de 50
			if (($estatus == 'Aceptado con observaciones')) {
				$fecha_preuniversitario = '05 de abril de 2022 a las 08:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con parte de los requisitos solicitados, resultando faltante o no correspondiente el certificado de OPSU/Rusnies, por tanto, queda en la condición de pendiente por consignar y le será solicitado más adelante. Deberá tramitarlo para consignarlo en su momento. Para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . ' Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'Aceptado') {
				$fecha_preuniversitario = '05 de abril de 2022 a las 8:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con los requisitos correspondientes para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . '. Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'No aceptado') {
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted no ha cumplido con los requisitos correspondientes, le invitamos a participar en el siguiente proceso de Selección y Admisión. Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos. Estaremos esperando su regreso.';
			}
		} else if ($cantidad_procesados_mecanica > 60 && $carrera == 'Mecánica') { //verifico la cantidad de admitidos y se crea el primer grupo de 50
			if (($estatus == 'Aceptado con observaciones')) {
				$fecha_preuniversitario = '05 de abril de 2022 a las 10:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con parte de los requisitos solicitados, resultando faltante o no correspondiente el certificado de OPSU/Rusnies, por tanto, queda en la condición de pendiente por consignar y le será solicitado más adelante. Deberá tramitarlo para consignarlo en su momento. Para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . ' Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'Aceptado') {
				$fecha_preuniversitario = '05 de abril de 2022 a las 10:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con los requisitos correspondientes para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . '. Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'No aceptado') {
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted no ha cumplido con los requisitos correspondientes, le invitamos a participar en el siguiente proceso de Selección y Admisión. Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos. Estaremos esperando su regreso.';
			}
		}

		if ($cantidad_procesados_informatica <= 60 && $carrera == 'Informática') { //verifico la cantidad de admitidos y se crea el primer grupo de 50
			if (($estatus == 'Aceptado con observaciones')) {
				$fecha_preuniversitario = '12 de abril de 2022 a las 08:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con parte de los requisitos solicitados, resultando faltante o no correspondiente el certificado de OPSU/Rusnies, por tanto, queda en la condición de pendiente por consignar y le será solicitado más adelante. Deberá tramitarlo para consignarlo en su momento. Para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . ' Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'Aceptado') {
				$fecha_preuniversitario = '12 de abril de 2022 a las 8:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con los requisitos correspondientes para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . '. Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'No aceptado') {
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted no ha cumplido con los requisitos correspondientes, le invitamos a participar en el siguiente proceso de Selección y Admisión. Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos. Estaremos esperando su regreso.';
			}
		} else if ($cantidad_procesados_informatica > 60  && $carrera == 'Informática') { //verifico la cantidad de admitidos y se crea el primer grupo de 50
			if (($estatus == 'Aceptado con observaciones')) {
				$fecha_preuniversitario = '12 de abril de 2022 a las 10:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con parte de los requisitos solicitados, resultando faltante o no correspondiente el certificado de OPSU/Rusnies, por tanto, queda en la condición de pendiente por consignar y le será solicitado más adelante. Deberá tramitarlo para consignarlo en su momento. Para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . ' Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'Aceptado') {
				$fecha_preuniversitario = '12 de abril de 2022 a las 10:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con los requisitos correspondientes para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . '. Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'No aceptado') {
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted no ha cumplido con los requisitos correspondientes, le invitamos a participar en el siguiente proceso de Selección y Admisión. Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos. Estaremos esperando su regreso.';
			}
		}

		if ($cantidad_procesados_admempresa <= 60 && $carrera == 'Administración de empresas') { //verifico la cantidad de admitidos y se crea el primer grupo de 50
			if (($estatus == 'Aceptado con observaciones')) {
				$fecha_preuniversitario = '26 de abril de 2022 a las 08:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con parte de los requisitos solicitados, resultando faltante o no correspondiente el certificado de OPSU/Rusnies, por tanto, queda en la condición de pendiente por consignar y le será solicitado más adelante. Deberá tramitarlo para consignarlo en su momento. Para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . ' Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'Aceptado') {
				$fecha_preuniversitario = '26 de abril de 2022 a las 8:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con los requisitos correspondientes para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . '. Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'No aceptado') {
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted no ha cumplido con los requisitos correspondientes, le invitamos a participar en el siguiente proceso de Selección y Admisión. Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos. Estaremos esperando su regreso.';
			}
		} else if ($cantidad_procesados_admempresa > 60  && $carrera == 'Administración de empresas') { //verifico la cantidad de admitidos y se crea el primer grupo de 50
			if (($estatus == 'Aceptado con observaciones')) {
				$fecha_preuniversitario = '26 de abril de 2022 a las 10:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con parte de los requisitos solicitados, resultando faltante o no correspondiente el certificado de OPSU/Rusnies, por tanto, queda en la condición de pendiente por consignar y le será solicitado más adelante. Deberá tramitarlo para consignarlo en su momento. Para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . ' Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'Aceptado') {
				$fecha_preuniversitario = '26 de abril de 2022 a las 10:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con los requisitos correspondientes para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . '. Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'No aceptado') {
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted no ha cumplido con los requisitos correspondientes, le invitamos a participar en el siguiente proceso de Selección y Admisión. Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos. Estaremos esperando su regreso.';
			}
		}

		if ($cantidad_procesados_contaduria <= 60 && $carrera == 'Contaduría') { //verifico la cantidad de admitidos y se crea el primer grupo de 50
			if (($estatus == 'Aceptado con observaciones')) {
				$fecha_preuniversitario = '03 de mayo de 2022 a las 08:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con parte de los requisitos solicitados, resultando faltante o no correspondiente el certificado de OPSU/Rusnies, por tanto, queda en la condición de pendiente por consignar y le será solicitado más adelante. Deberá tramitarlo para consignarlo en su momento. Para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . ' Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'Aceptado') {
				$fecha_preuniversitario = '03 de mayo de 2022 a las 8:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con los requisitos correspondientes para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . '. Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'No aceptado') {
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted no ha cumplido con los requisitos correspondientes, le invitamos a participar en el siguiente proceso de Selección y Admisión. Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos. Estaremos esperando su regreso.';
			}
		} else if ($cantidad_procesados_contaduria > 60  && $carrera == 'Contaduría') { //verifico la cantidad de admitidos y se crea el primer grupo de 50
			if (($estatus == 'Aceptado con observaciones')) {
				$fecha_preuniversitario = '03 de mayo de 2022 a las 10:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con parte de los requisitos solicitados, resultando faltante o no correspondiente el certificado de OPSU/Rusnies, por tanto, queda en la condición de pendiente por consignar y le será solicitado más adelante. Deberá tramitarlo para consignarlo en su momento. Para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . ' Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'Aceptado') {
				$fecha_preuniversitario = '03 de mayo de 2022 a las 10:00 a.m.';
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted ha cumplido con los requisitos correspondientes para continuar con el proceso de Selección y Admisión 2-2022. Debe asistir a las instalaciones del IUJO Barquisimeto el día ' . $fecha_preuniversitario . '. Se requiere: Traer cuaderno y lápiz. Cumplir con todas las normas de bioseguridad. Le esperamos. La puntualidad es indispensable.';
			} else if ($estatus == 'No aceptado') {
				$email_from = 'bqtoverificacionyseleccion@iujo.edu.ve';
				$mensaje_email = 'usted no ha cumplido con los requisitos correspondientes, le invitamos a participar en el siguiente proceso de Selección y Admisión. Debe estar pendiente de la página web del instituto y nuestras redes sociales. Pronto habrá una nueva oportunidad, prepare los recaudos. Estaremos esperando su regreso.';
			}
		}

		

		$fecha = date("Y-m-d", strtotime($fecha)); //cambio formato a la fecha para guardarla en la base de datos

		//se prepara para enviar el email con los datos seleccionados
		// $this->load->library('email');
		// $this->email->from($email_from);
		// $this->email->to($email_to);
		// $this->email->subject('Selección de aspirante.');
		// $this->email->message('Estimado (a) aspirante ' . $p_nombre . ' ' . $p_apellido . ' cédula de identidad ' . $cedula . ', ' . $mensaje_email);
		// $this->email->send();
        
		if ($estatus == 'Aceptado' || $estatus == 'Aceptado con observaciones') {

			$data  = array(
				'fecha'         => $fecha,
				'cedula'        => $cedula,
				'nombre1'       => strtoupper($p_nombre),
				'nombre2'       => strtoupper($s_nombre),
				'apellido1'     => strtoupper($p_apellido),
				'apellido2'     => strtoupper($s_apellido),
				'telefono'      => $telefono,
				'direccion'     => strtoupper($direccion),
				'email'         => $email_to,
				'status'        => $estatus,
				'fechanac'      => $fecha_nac,
				'sexo'          => strtoupper($sexo),
				'titulo_check'  => $titulo_check,
				'cedula_check'  => $cedula_check,
				'notas_check'   => $notas_check,
				'rusnies_check' => $rusnies_check,
				'observaciones' => $observaciones,
				'verificado_por' => $verificado_por,
				'carrera'       => $carrera,
				'lapso'         => $lapso
			);

			$data_update = array(
				'status' => '0'
			); //con este valor le cambio el estatus al aspirante en la tabla aspirante

			if ($this->Seguimiento_model->saveAdmitido($data, $data_update, $id_aspirante)) {
				$this->session->set_flashdata("trueee", "Se guardo el registro satisfactoriamente...");
				redirect(base_url() . "seguimiento/seguimiento");
			} else {
				$this->session->set_flashdata("falseee", "No se pudo guardar el registro...");
				redirect(base_url() . "seguimiento/seguimiento");
			}
		}else if ($estatus == 'No aceptado') {

			$data_update = array(
				'status' => '2'
			); //con este valor le cambio el estatus al aspirante en la tabla aspirante

			if ($this->Seguimiento_model->saveNoAceptado($data_update, $id_aspirante)) {
				$this->session->set_flashdata("trueee", "Se guardo el registro satisfactoriamente...");
				redirect(base_url() . "seguimiento/seguimiento");
			} else {
				$this->session->set_flashdata("falseee", "No se pudo guardar el registro...");
				redirect(base_url() . "seguimiento/seguimiento");
			}
		}
		
	}

	public function totalAdmitidos()
	{
		$carrera = $this->input->post("data_carrera");
		$num = 1;
		$data = array();
		$observacion = '';

		$result = $this->Seguimiento_model->getAdmitidosPorCarrera($carrera);

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
					$r->email,
					$r->carrera,
					$observacion
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

	public function listNoAceptados()
	{
		$data = array(
			'carreras' => $this->Seguimiento_model->getCarreras()
		);
		$this->load->view('layouts/header');
		$this->load->view('layouts/aside');
		$this->load->view('seguimiento/list_no_aceptados', $data);
		$this->load->view('layouts/footer');
		$this->load->view('layouts/list_no_aceptados');
		$this->load->view("layouts/close_body");
	}

	public function totalNoAceptados()
	{
		$carrera = $this->input->post("data_carrera");
		$num = 1;
		$data = array();
		

		$result = $this->Seguimiento_model->getNoAceptadosPorCarrera($carrera);

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
