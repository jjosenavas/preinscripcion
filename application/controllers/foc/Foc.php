<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foc extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usuario_model");
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
            redirect(base_url(). "foc/foc/");
        } else {

            $data  = array(

                'id' => $res->id,
                'nombre' => $res->usuarios,
                'login' => TRUE
            );

            $this->session->set_userdata($data);
            redirect(base_url() . "foc/foc/focRegistro");
        }
    }

    public function focRegistro()
    {
        $this->load->view("layouts/header_ini");
        // $this->load->view("foc/foc_info");
        $this->load->view("layouts/footer");
		$this->load->view("layouts/close_body");
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
