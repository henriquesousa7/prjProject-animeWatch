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
        $this->load->model("Files_model", "files");

        if(!empty($_POST["nomeAnime"]) && !empty($_POST["generoAnime"]) && !empty($_POST["epsAnime"])) {
            $retorno = $this->anime->cadastra_anime($_POST["nomeAnime"], $_POST["generoAnime"], $_POST["epsAnime"]);

            $refatorado_titulo = trim($_POST["nomeAnime"]);
		    $dir = './uploads/anime/' . 'ANIME_' . $refatorado_titulo;

            if($retorno) {
                verificar_diretorio($dir);

                $config['upload_path']          = $dir;
                $config['allowed_types']        = 'jpg|png|jpeg|pdf';
                $config['max_size']             = 10000;
                $config['max_width']            = 0;
				$config['max_height']           = 0;
				$config['file_name']            = 'ANIME_' . $refatorado_titulo;
				
				$this->upload->initialize($config);

                if ($this->upload->do_upload("imagemAnime")) {
                    $imagem_data = $this->upload->data();
                    $data['img'] = $dir.$imagem_data['file_name'];
    
                    $tipo_arquivo = strstr($imagem_data['file_name'], '.');
    
                    if($this->files->insert_files($tipo_arquivo, $refatorado_titulo, $dir)){
                        redirect("AnimeWatching");
                    }
                }
            } else {
                redirect("AnimeWatching");
            }
        } else {
            redirect("AnimeWatching");
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