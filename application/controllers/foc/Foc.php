<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usuario_model");
        $this->load->model("Foc_model");
        $this->load->model("Seguimiento_model");
    }

    public function index()
    {
        $data = array(
            'carreras' => $this->Seguimiento_model->getCarreras()
        );
        $this->load->view("layouts/header");
        $this->load->view("layouts/aside");
        $this->load->view("foc/listado_inscripto", $data);
        $this->load->view("layouts/footer");
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

   
}
