<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anime extends CI_Controller {

	public function listaView()
	{
        $this->load->model("Animes_model", "anime");

        $dados_animes["animes"] = $this->anime->get_animes();

        chamaView('anime/animeLista', $dados_animes);
    }

    public function cadastroView() {
        chamaView('anime/animeCadastro');
    }

    public function cadastroAnime(){
        $this->load->model("Animes_model", "anime");

        if(!empty($_POST["nomeAnime"]) && !empty($_POST["generoAnime"]) && !empty($_POST["epsAnime"])) {
            $retorno = $this->anime->cadastra_anime($_POST["nomeAnime"], $_POST["generoAnime"], $_POST["epsAnime"]);

            if($retorno) {
                echo json_encode(["msg" => "Anime cadastrado com sucesso", "status" => true]);
            } else {
                echo json_encode(["msg" => "Nao foi possivel cadastrar o anime", "status" =>false]);
            }
        } else {
            echo json_encode(["msg" => "Nao foi possivel cadastrar o anime", "status" =>false]);
        }
    }

    public function adicionarMinhaListaAnime($anime_id)
	{
        $this->load->model("Animes_model", "anime");
        $this->load->model("Animes_usuario_model", "anime_usuario");

        $dados_animes["animes"] = $this->anime_usuario->cadastra_anime_usuario($anime_id, $this->session->userdata('id'));

        redirect("perfil/listaAnimes");
    }

}