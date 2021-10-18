<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mangas_model extends CI_Model {

	public function get_mangas(){

		$this->db->select('*')
				->from('manga');
		
		$resultado = $this->db->get();
		
		if($resultado->num_rows() > 0){
			return $resultado->result_array();
		}		
		return NULL;
	}

	public function cadastra_manga($nome, $genero, $qtd_caps, $imagem){

		$dados_manga = array(
            'nome_manga' => $nome,
            'genero_manga' => $genero,
            'qtd_caps' => $qtd_caps,
			'imagem' => $imagem
		);
	
		return $this->db->insert('manga', $dados_manga);
	}
}