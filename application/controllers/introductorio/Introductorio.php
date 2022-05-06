<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Introductorio extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Introductorio_model');
    }

    public function index()
    {
        $this->load->view("layouts/header_ini");
        $this->load->view("introductorio/admitidos_introductorio");
        $this->load->view("layouts/footer");
        $this->load->view("layouts/validar_cedula");
        $this->load->view("layouts/close_body");
    }

    public function verificarAceptado()
    {
        $cedula = $this->input->post("cedula");
        $data = array(
                'data_aceptado' => $this->Introductorio_model->getNuevoIngresoIntroductorio($cedula)
            );
        $this->load->view('layouts/header_ini');
        $this->load->view('introductorio/aspirante_admitido_introductorio', $data);
        $this->load->view('layouts/footer');
        $this->load->view('layouts/list_preinscripto');
        $this->load->view("layouts/close_body");
    }

    public function store()
    { 
        //var_dump($_POST);exit;
        $chequeado = $this->input->post("chequeado");
        $cedula = $this->input->post("cedula");

        $data  = array(
            'chequeado' => $chequeado            
        );

        if ($this->Introductorio_model->saveRegistroIntroductorio($data, $cedula)) {
            $this->session->set_flashdata("listo", "Registro realizado de forma satisfactoriamente...");
            redirect(base_url() . "introductorio/introductorio");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar el registro...");
            redirect(base_url() . "introductorio/introductorio");
        }
    }
}
