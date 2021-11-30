<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if(!$this->session->has_userdata('usuario')){
			chamaView('login/login');
		} else {
			redirect("animeWatching");
		}
	}

	public function cadastro_usuario()
	{
		chamaView('login/cadastro');
	}

	public function cadastrarUsuario()
	{
		$this->load->model("Usuarios_model", 'usuarios');
        
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

		if(!empty($senha) && !empty($usuario)) {
			if($this->usuarios->cadastra_usuario($usuario, md5($senha))) {
				redirect("login");
			} else {
				redirect("login");
			}
		}
	}

}
