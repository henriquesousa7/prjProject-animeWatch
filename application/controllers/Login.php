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

	public function efetuarLogin()
	{
        $this->load->model("Usuarios_model");
        
        $usuario = $this->input->post('usuario');
        $senha = $this->input->post('senha');
        
        $dados_usuario = $this->Usuarios_model->get_usuario($usuario);

        if($dados_usuario != NULL){
            if(md5($senha) === $dados_usuario[0]["senha"]){

                $dados_session = array(
                                'id' => $dados_usuario[0]['id'],
                                'usuario' => $dados_usuario[0]['usuario']
                );
                $this->session->set_userdata($dados_session);
                $this->session->set_flashdata('success', 'Logado com succeso');
                redirect("animeWatching");
            }else{
                $this->session->set_flashdata('danger', 'Usuario ou senha invalido');
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('danger', 'Login invalido, conta invalida');
            redirect('login');
        }
    }

}
