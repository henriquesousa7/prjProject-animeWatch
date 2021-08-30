<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anime extends CI_Controller {

	public function listaView()
	{
        chamaView('anime/animeLista');
    }

    public function cadastroView() {
        chamaView('anime/animeCadastro');
    }

}