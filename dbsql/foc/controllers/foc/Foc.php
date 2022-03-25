<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usuario_model");
        $this->load->model("Foc_model");
        if (!$this->session->userdata("login_foc")) {
            redirect(base_url());
        }
    }

    public function focRegistro()
    {
        $cedula_foc = $this->session->userdata('usuarios');

        $data_estudiante = $this->Foc_model->getDataParticipante($cedula_foc);

        $data = array(
            'cursos' => $this->Foc_model->getCursosFoc($data_estudiante),
            'cursosHumana' => $this->Foc_model->getCursosFocHumana($data_estudiante),
            'id_estudiante' => $data_estudiante->id
        );
        $this->load->view("layouts/header_ini");
        $this->load->view("foc/registro_curso", $data);
        $this->load->view("layouts/footer");
        $this->load->view("layouts/close_body");
    }


    public function store()
    { 
        $id_estudiante = $this->input->post("id_estudiante");
        $curso_1 = $this->input->post("id_curso_profesional");
        $curso_2 = $this->input->post("curso_2");
        $periodo = '38';
         for ($i = 0; $i < count($curso_1); $i++) {
                $data  = array(
                    'id_curso'      => $curso_1[$i],
                    'id_estudiante' => $id_estudiante,
                    'periodo'       => $periodo
                );
        }
                $data2  = array(
                    'id_curso'      => $curso_2,
                    'id_estudiante' => $id_estudiante,
                    'periodo'       => $periodo
                );
      

        if ($this->Foc_model->saveCursoEstudiante($data, $data2)) {
            $this->session->set_flashdata("listo", "Te registraste en los cursos de forma satisfactoria...");
            redirect(base_url() . "auth/logout/$id_estudiante/$periodo");
        } else {
            $this->session->set_flashdata("error", "No se pudo guardar la informacion");
            redirect(base_url() . "auth/logout");
        }
    }

     public function planillaCurso($id_estudiante,$periodo)
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
    }
}
