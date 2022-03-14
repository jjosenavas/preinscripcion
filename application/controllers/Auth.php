<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usuario_model");
    }

    public function index()
    {
        if ($this->session->userdata("login")) {
            redirect(base_url() . "welcome");
        } else {
            $this->load->view("login/login");
        }
    }

    public function login()
    {
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $res = $this->Usuario_model->login($username, sha1($password));       

        if (!$res) {
            $this->session->set_flashdata("error", "El usuario o la contraseña son incorrectos");
            redirect(base_url());
        } else {

            $data  = array(

                'id' => $res->id,
                'nombre' => $res->nombres,
                'username' => $res->username,
                'id_rol' => $res->id_rol,
                'login' => TRUE
            );

            $this->session->set_userdata($data);
            redirect(base_url() . "welcome");
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
    
}
