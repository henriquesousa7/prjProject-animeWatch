<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manga extends CI_Controller {

	public function listaView()
	{
        $this->load->model("Mangas_model", "manga");

        $dados_mangas["mangas"] = $this->manga->get_mangas();

        chamaView('manga/mangaLista', $dados_mangas);
    }

    public function cadastroView() {
        chamaView('manga/mangaCadastro');
    }

    public function cadastroManga(){
        $this->load->model("Mangas_model", "manga");

        if(!empty($_POST["nomeManga"]) && !empty($_POST["generoManga"]) && !empty($_POST["capsManga"])) {
            $retorno = $this->manga->cadastra_manga($_POST["nomeManga"], $_POST["generoManga"], $_POST["capsManga"]);
            
            if($retorno) {
                echo json_encode(["msg" => "Mangá cadastrado com sucesso", "status" => $retorno]);
            } else {
                echo json_encode(["msg" => "Nao foi possivel cadastrar o mangá", "status" =>$retorno]);
            }
        } else {
            echo json_encode(["msg" => "Nao foi possivel cadastrar o mangá2", "status" =>false]);
        }
    }

    public function adicionarMinhaListaManga($manga_id)
	{
        $this->load->model("Mangas_model", "manga");
        $this->load->model("Mangas_usuario_model", "manga_usuario");

        $dados_animes["mangas"] = $this->manga_usuario->cadastra_manga_usuario($manga_id, $this->session->userdata('id'));

        chamaView('perfil/listaMangas');
    }

}