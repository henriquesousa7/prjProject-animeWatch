<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function listaAnimes()
	{
        $this->load->model("Animes_model", "anime");
        $this->load->model("Animes_usuario_model", "anime_usuario");

        $dados_animes["animes"] = $this->anime_usuario->get_animes_usuario($this->session->userdata('id'));

        chamaView('perfil/listaAnimes');
    }

    public function listaMangas() {
        $this->load->model("Mangas_model", "manga");
        $this->load->model("Mangas_usuario_model", "manga_usuario");

        $dados_animes["mangas"] = $this->manga_usuario->get_mangas_usuario($this->session->userdata('id'));

        chamaView('perfil/listaMangas');
    }

    public function myperfil() {
        chamaView('perfil/myPerfil');
    }

}