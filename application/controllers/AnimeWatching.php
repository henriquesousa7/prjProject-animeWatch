<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AnimeWatching extends CI_Controller {

	public function index()
	{
        $this->load->model("Animes_model", "anime");
        $this->load->model("Mangas_model", "manga");

        $dados["animes"] = $this->anime->get_animes();
        $dados["mangas"] = $this->manga->get_mangas();

        chamaView('home/home', $dados);
    }

}