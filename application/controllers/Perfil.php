<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {

	public function listaAnimes()
	{
        chamaView('perfil/listaAnimes');
    }

    public function listaMangas() {
        chamaView('perfil/listaMangas');
    }

    public function myperfil() {
        chamaView('perfil/myPerfil');
    }

}