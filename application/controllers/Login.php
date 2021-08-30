<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		if(!$this->session->has_userdata('usuario')){
			chamaView('login/login');
		} else {
			//redirect("animeWatching");
			echo $this->session->userdata('usuario');
		}
	}

}
