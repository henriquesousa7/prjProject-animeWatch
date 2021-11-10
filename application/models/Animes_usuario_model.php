<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Animes_usuario_model extends CI_Model {

	public function get_animes_usuario($usuario_id){

		$this->db->select('*')
				->from('anime_usuario')
				->join("anime", "anime_usuario.anime_id = anime.id")
				->where("anime_usuario.usuario_id", $usuario_id);
		
		$resultado = $this->db->get();
		
		if($resultado->num_rows() > 0){
			return $resultado->result_array();
		}		
		return NULL;
	}

	public function get_anime_usuario($anime_usuario_id){

		$this->db->select('*')
				->from('anime_usuario')
				->where("anime_usuario.anime_usuario_id", $anime_usuario_id);
		
		$resultado = $this->db->get()->row();
		
		if(!empty($resultado)){
			return $resultado;
		}		
		return NULL;
	}

	public function cadastra_anime_usuario($anime_id, $usuario_id){

		$dados_anime_usuario = array(
            'anime_id' => $anime_id,
            'usuario_id' => $usuario_id
		);
	
		return $this->db->insert('anime_usuario', $dados_anime_usuario);
	}

	public function atualizar_anime_usuario($anime_usuario_id, $episodio, $status) {

		$dados_anime_usuario = array(
            'episodio_atual' => $episodio,
			'status' => $status
		);

		$this->db->where('anime_usuario_id', $anime_usuario_id);
   		return $this->db->update('anime_usuario', $dados_anime_usuario);

	}	
}