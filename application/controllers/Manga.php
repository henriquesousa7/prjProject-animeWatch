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

            $refatorado_titulo = trim($_POST["nomeManga"]);
		    $dir = './uploads/manga';
            
            verificar_diretorio($dir);

            $config['upload_path']          = $dir;
            $config['allowed_types']        = 'jpg|png|jpeg|pdf';
            $config['max_size']             = 10000;
            $config['max_width']            = 0;
			$config['max_height']           = 0;
			$config['file_name']            = 'MANGA_' . $refatorado_titulo;

            $this->upload->initialize($config);

            if ($this->upload->do_upload("imagemManga")) {
                $imagem_data = $this->upload->data();
                $data['img'] = $dir.$imagem_data['file_name'];
    
                $tipo_arquivo = strstr($imagem_data['file_name'], '.');
                $dirTag = $dir . '/' . $imagem_data['file_name'];
    
                if($this->manga->cadastra_manga($_POST["nomeManga"], $_POST["generoManga"], $_POST["capsManga"], $dirTag)){
                    redirect("AnimeWatching");
                }
            }
        } else {
            redirect("AnimeWatching");
        }
    }

    public function adicionarMinhaListaManga($manga_id)
	{
        $this->load->model("Mangas_model", "manga");
        $this->load->model("Mangas_usuario_model", "manga_usuario");

        $dados_animes["mangas"] = $this->manga_usuario->cadastra_manga_usuario($manga_id, $this->session->userdata('id'));

        redirect("perfil/listaMangas");
    }

}