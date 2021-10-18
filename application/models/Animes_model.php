<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Animes_model extends CI_Model {

	public function get_animes(){

		$this->db->select('*')
				->from('anime');
		
		$resultado = $this->db->get();
		
		if($resultado->num_rows() > 0){
			return $resultado->result_array();
		}		
		return NULL;
	}

	public function cadastra_anime($nome, $genero, $qtd_eps, $imagem){

		$dados_anime = array(
            'nome_anime' => $nome,
            'genero_anime' => $genero,
            'qtd_eps' => $qtd_eps,
			'imagem' => $imagem
		);
	
		return $this->db->insert('anime', $dados_anime);
	}

	public function get_anime($anime_id){

		$this->db->select('*')
				->from('anime')
				->where("id", $anime_id);
		
		$resultado = $this->db->get();
		
		if($resultado->num_rows() > 0){
			return $resultado->result_array();
		}		
		return NULL;
	}
}