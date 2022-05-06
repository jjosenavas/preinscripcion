<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Consulta extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Encuesta_model");
        $this->load->model("Seguimiento_model");
    }

    public function index()
    {
        $data = array(
            'carreras' => $this->Seguimiento_model->getCarreras()
        );
        $this->load->view("layouts/header_ini");
        $this->load->view("encuesta/encuesta", $data);
        $this->load->view("layouts/footer");
       // $this->load->view("layouts/validar_documentos");
        $this->load->view("layouts/close_body");
    }

    public function comprobarCedula()
    {
        $cedula = $this->input->post("cedula");
        $respuesta = $this->Encuesta_model->comprobarCedula($cedula);

        if ($respuesta > 0) {
            echo "Usted ya realizó la consulta";           
        }
    }

    public function store()
    {      
 
        $cedula     = $this->input->post("cedula");
        $si_no      = $this->input->post("radio1");
        $trabajo    = $this->input->post("trabajo");
        $otro       = $this->input->post("otro");
        $fecha      = date('Y-m-d H:i:s');

        $respuesta = $this->Encuesta_model->comprobarEstudiante($cedula);
        $respuesta_ya = $this->Encuesta_model->comprobarYaParticipo($cedula);
        if ($respuesta > 0) {
            if($respuesta_ya >0) {
                $this->session->set_flashdata("error_ya", "Ya usted participo en la encuesta, no se ha tomado en cuenta este registro, gracias...");
                redirect(base_url() . "encuesta/consulta");
            }else {
                $data  = array(
                    'cedula'  => $cedula,
                    'respuesta' => $si_no,
                    'trabajo' => $trabajo,
                    'otro' => $otro,
                    'fecha' => $fecha
                );


                if ($this->Encuesta_model->save($data)) {
                    $this->session->set_flashdata("listo", "Encuesta respondida satisfactoriamente, gracias!");
                    redirect(base_url() . "encuesta/consulta");
                } else {
                    $this->session->set_flashdata("error", "No se pudo guardar la informacion");
                    redirect(base_url() . "encuesta/consulta");
                }
            }
            
        }else{
            $this->session->set_flashdata("error_no", "Esto es una consulta única y exclusiva para los estudiantes del IUJO Barquisimeto y usted no lo es, gracias...");
            redirect(base_url() . "encuesta/consulta");
        }
       
    }

   
}
