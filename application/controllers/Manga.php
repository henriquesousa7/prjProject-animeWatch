<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manga extends CI_Controller {

	public function listaView()
	{
        chamaView('manga/mangaLista');
    }

    public function cadastroView() {
        chamaView('manga/mangaCadastro');
    }

    public function cadastroManga(){}

}