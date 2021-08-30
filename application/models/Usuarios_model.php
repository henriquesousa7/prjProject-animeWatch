<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Usuarios_model extends CI_Model {

	public function get_usuario($usuario){

		$this->db->select('*')
				->from("usuario")
				->where("usuario", $usuario);
		
		$resultado = $this->db->get();
		
		if($resultado->num_rows() > 0){
			return $resultado->result_array();
		}		
		return NULL;
	}

	public function get_usuarios(){

		$this->db->select('*')
				->from('usuario');
		
		$resultado = $this->db->get();
		
		if($resultado->num_rows() > 0){
			return $resultado->result_array();
		}		
		return NULL;
	}

	public function cadastra_usuario($usuario, $senha){

		$dados_usuario = array(
            'usuario' => $usuario,
            'senha' => $senha
		);
	
		return $this->db->insert('usuario', $dados_usuario);
	}
}