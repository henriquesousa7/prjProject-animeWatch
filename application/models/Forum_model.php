<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Forum_model extends CI_Model {

	public function get_forum(){

		$this->db->select('*')
				->from('forum')
                ->join("usuario", "usuario.id = forum.id_usuario");
		
		$resultado = $this->db->get();
		
		if($resultado->num_rows() > 0){
			return $resultado->result_array();
		}		
		return NULL;
	}

	public function cadastra_forum($titulo, $resenha, $usuario){

		$dados_forum = array(
            'titulo' => $titulo,
            'resenha' => $resenha,
            'id_usuario' => $usuario
		);
	
		return $this->db->insert('forum', $dados_forum);
	}
}