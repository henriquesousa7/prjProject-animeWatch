<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function listaAnimes()
	{
        $this->load->model("Animes_model", "anime");
        $this->load->model("Animes_usuario_model", "anime_usuario");

        $dados_animes["animes"] = $this->anime_usuario->get_animes_usuario($this->session->userdata('id'));

        chamaView('perfil/listaAnimes', $dados_animes);
    }

    public function listaMangas() {
        $this->load->model("Mangas_model", "manga");
        $this->load->model("Mangas_usuario_model", "manga_usuario");

        $dados_mangas["mangas"] = $this->manga_usuario->get_mangas_usuario($this->session->userdata('id'));

        chamaView('perfil/listaMangas', $dados_mangas);
    }

    public function myperfil() {
        chamaView('perfil/myPerfil');
    }

    public function pegarDadosAnime() {
        $this->load->model("Animes_model", "anime");
        $this->load->model("Animes_usuario_model", "anime_usuario");

        $anime_usuario_id = $_POST["id"];

        $dados_animes = $this->anime_usuario->get_anime_usuario($anime_usuario_id);

        echo json_encode($dados_animes);
    }

    public function atualizarAnimeUsuario() {
        $this->load->model("Animes_model", "anime");
        $this->load->model("Animes_usuario_model", "anime_usuario");

        $anime_usuario_id = $_POST["id"];
        $episodio = $_POST["episodio"];
        $status = $_POST["status"];

        $edicao = $this->anime_usuario->atualizar_anime_usuario($anime_usuario_id, $episodio, $status);

        if($edicao) {
            echo json_encode("Atualizado com sucesso");
        } else {
            echo json_encode("Erro ao atualizar");
        }
    }

    public function pegarDadosManga() {
        $this->load->model("Mangas_model", "manga");
        $this->load->model("Mangas_usuario_model", "manga_usuario");

        $manga_usuario_id = $_POST["id"];

        $dados_mangas = $this->manga_usuario->get_manga_usuario($manga_usuario_id);

        echo json_encode($dados_mangas);
    }

    public function atualizarMangaUsuario() {
        $this->load->model("Mangas_model", "manga");
        $this->load->model("Mangas_usuario_model", "manga_usuario");

        $anime_usuario_id = $_POST["id"];
        $capitulo = $_POST["capitulo"];
        $status = $_POST["status"];

        $edicao = $this->manga_usuario->atualizar_manga_usuario($anime_usuario_id, $capitulo, $status);

        if($edicao) {
            echo json_encode("Atualizado com sucesso");
        } else {
            echo json_encode("Erro ao atualizar");
        }
    }

}