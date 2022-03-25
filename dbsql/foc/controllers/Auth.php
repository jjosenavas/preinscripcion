<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usuario_model");
        $this->load->model("Foc_model");
    }

    public function index()
    {
        $this->load->view("foc/foc_info");
    }

    public function login()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $res = $this->Usuario_model->loginFoc($username, $password);

        if (!$res) {
            $this->session->set_flashdata("error", "El usuario o la contraseña son incorrectos");
            redirect(base_url() . "auth");
        } else {
            $data_estudiante = $this->Foc_model->getDataParticipante($username);
            $existe = $this->Foc_model->getParticipanteCurso($data_estudiante->id);
            
            if ($existe) {
                $this->load->view("layouts/header_ini");
                $this->load->view("foc/error");
                $this->load->view("layouts/footer");
                $this->load->view("layouts/close_body");
            } else {
                $data  = array(
                    'id' => $res->id,
                    'usuarios' => $res->usuarios,
                    'login_foc' => TRUE
                );

                $this->session->set_userdata($data);
                redirect(base_url() . "foc/foc/focRegistro");
            }
        }
    }

    public function logout($id_estudiante,$periodo)
    {
        $data_estudiante = $this->Foc_model->getRegistroCurso($id_estudiante,$periodo);
      // var_dump($data_estudiante);exit;
        $data = array(
            'cursos' => $this->Foc_model->getRegistroCurso($id_estudiante,$periodo),
           
        );
        $this->load->view("layouts/header_pre");
        $this->load->view("foc/planilla_curso", $data);
        $this->load->view("layouts/footer");
        $this->load->view("layouts/close_body");
        $this->session->sess_destroy();
       
    }
}
