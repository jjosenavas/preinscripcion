<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model("Usuario_model");
	}

	
	public function index()
	{
		$data  = array(
			'usuarios' => $this->Usuario_model->getUsuarios(), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("usuario/list",$data);
		$this->load->view("layouts/footer");
		$this->load->view("layouts/delete_user");
		$this->load->view("layouts/close_body");

	}

	public function add(){

		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("usuario/add");
		$this->load->view("layouts/footer");
		$this->load->view("layouts/validation");
		$this->load->view("layouts/close_body");
	}

	public function store(){
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$email = $this->input->post("email");
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$data  = array(
			'nombres' => $nombres, 
			'apellidos' => $apellidos,
			'email' => $email,
			'username' => $username,
			'password' => sha1($password),
			'estado' => "1"
		);

		if ($this->Usuario_model->save($data)) {
			redirect(base_url()."usuarios/usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo guardar la informacion");
			redirect(base_url()."usuarios/usuarios/add");
		}
	}

	public function edit($id){
		$data  = array(
			'usuarios' => $this->Usuario_model->getUsuario($id), 
		);
		$this->load->view("layouts/header");
		$this->load->view("layouts/aside");
		$this->load->view("usuario/edit",$data);
		$this->load->view("layouts/footer");
		$this->load->view("layouts/close_body");
	}

	public function update(){
		$idUsuario = $this->input->post("idUsuario");
		$nombres = $this->input->post("nombres");
		$apellidos = $this->input->post("apellidos");
		$email = $this->input->post("email");
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$data = array(
			'nombres' => $nombres, 
			'apellidos' => $apellidos,
			'email' => $email,
			'username' => $username,
			'password' => $password,
			
		);

		if ($this->Usuario_model->update($idUsuario,$data)) {
			redirect(base_url()."usuarios/usuarios");
		}
		else{
			$this->session->set_flashdata("error","No se pudo actualizar la informacion");
			redirect(base_url()."usuarios/usuarios/edit/".$idUsuario);
		}
	}

	public function view($id){
		$data  = array(
			'usuarios' => $this->Usuario_model->getUsuario($id), 
		);
		$this->load->view("usuario/view",$data);
	}

	public function delete(){
		$id = $this->input->post("id_usuarios");
		
		$data  = array(
			'estado' => "0", 
		);
		$this->Usuario_model->update($id,$data);
		redirect(base_url()."usuarios/usuarios");
	}
}
