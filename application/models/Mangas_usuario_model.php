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

	public function cadastra_manga_usuario($manga_id, $usuario_id){

		$dados_manga_usuario = array(
            'manga_id' => $manga_id,
            'usuario_id' => $usuario_id
		);
	
		return $this->db->insert('manga_usuario', $dados_manga_usuario);
	}
}