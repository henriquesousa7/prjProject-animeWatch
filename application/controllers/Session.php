<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Session extends CI_Controller {

	public function index()
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

    public function logout() 
    {
        $this->session->sess_destroy();
        redirect("login");
    }
    
}