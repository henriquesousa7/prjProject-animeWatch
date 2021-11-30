<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

	public function listaForum()
	{
        $this->load->model("Forum_model", "forum");

        $dados["forums"] = $this->forum->get_forum();

        chamaView('forum/forum', $dados);
    }

    public function cadastroForum() {
        $this->load->model("Forum_model", "forum");

        echo $_POST["titulo"];
        echo $_POST["resenha"];

        if(!empty($_POST["titulo"]) && !empty($_POST["resenha"])) {
            if($this->forum->cadastra_forum($_POST["titulo"], $_POST["resenha"], $this->session->userdata('id'))){
                echo json_encode("Cadastrado com sucesso");
            } else {
                echo json_encode("Erro no cadastro 1");
            }
        } else {
            echo json_encode("Erro no cadastro 2");
        }
    }

}