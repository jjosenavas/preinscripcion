<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admitidos extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admitidos_model');
    }

    public function index()
    {
        $this->load->view("layouts/header_ini");
        $this->load->view("admitidos/inicio_admitidos");
        $this->load->view("layouts/footer");
        $this->load->view("layouts/validar_cedula");
        $this->load->view("layouts/close_body");
    }

    public function verificarAdmitidos()
    {
        $cedula = $this->input->post("cedula");
        $data = array(
            'data_admitido' => $this->Admitidos_model->getAdmtido($cedula)
        );
        //var_dump($data);exit;
        if ($data["data_admitido"] != NULL) {
          
            $this->load->view('layouts/header_ini');
            $this->load->view('admitidos/admitidos', $data);
            $this->load->view('layouts/footer');
            //$this->load->view('layouts/list_preinscripto');
            $this->load->view("layouts/close_body");

        } else if ($data["data_admitido"] == NULL) { 
           
            $this->load->view('layouts/header_ini');
            $this->load->view('admitidos/no_participante');
            $this->load->view('layouts/footer');
            //$this->load->view('layouts/list_preinscripto');
            $this->load->view("layouts/close_body");
        }
        
    }
    
}
