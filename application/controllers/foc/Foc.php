<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foc extends CI_Controller
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
            redirect(base_url() . "foc/foc");
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

    public function focRegistro()
    {
        $cedula_foc = $this->session->userdata('usuarios');

        $data_estudiante = $this->Foc_model->getDataParticipante($cedula_foc);

        $data = array(
            'cursos' => $this->Foc_model->getCursosFoc($data_estudiante),
            'id_estudiante' => $data_estudiante->id
        );
        $this->load->view("layouts/header_ini");
        $this->load->view("foc/registro_curso", $data);
        $this->load->view("layouts/footer");
        $this->load->view("layouts/close_body");
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'foc/foc/');
    }

    public function store()
    {
        $id_estudiante = $this->input->post("id_estudiante");
        $curso_1 = $this->input->post("curso_1");
        $curso_2 = $this->input->post("curso_2");
       
            $data  = array(
                'id_curso'      => $curso_1,
                'id_estudiante' => $id_estudiante
            );
            $data2  = array(
                'id_curso'      => $curso_2,
                'id_estudiante' => $id_estudiante
            );
       

        if ($this->Foc_model->saveCursoEstudiante($data, $data2)) {

            redirect(base_url() . "foc/foc/");
        } else {
           
            redirect(base_url() . "foc/foc/");
        }
    }
}
