<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Mangas_usuario_model extends CI_Model {

	public function get_mangas_usuario($usuario_id){

		$this->db->select('*')
				->from('manga_usuario')
				->join("manga", "manga_usuario.manga_id = manga.id")
				->where("manga_usuario.usuario_id", $usuario_id);
		
		$resultado = $this->db->get();
		
		if($resultado->num_rows() > 0){
			return $resultado->result_array();
		}		
		return NULL;
	}

	public function get_manga_usuario($manga_usuario_id){

		$this->db->select('*')
				->from('manga_usuario')
				->where("manga_usuario.manga_usuario_id", $manga_usuario_id);
		
		$resultado = $this->db->get()->row();
		
		if($resultado){
			return $resultado;
		}		
		return NULL;
	}

	public function cadastra_manga_usuario($manga_id, $usuario_id){

		$dados_manga_usuario = array(
            'manga_id' => $manga_id,
            'usuario_id' => $usuario_id
		);
	
		return $this->db->insert('manga_usuario', $dados_manga_usuario);
	}

	public function atualizar_manga_usuario($manga_usuario_id, $capitulo, $status) {

		$dados_manga_usuario = array(
            'capitulo_atual' => $capitulo,
			'status' => $status
		);

		$this->db->where('manga_usuario_id', $manga_usuario_id);
   		return $this->db->update('manga_usuario', $dados_manga_usuario);

	}	
}