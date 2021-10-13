<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Files_model extends CI_Model {

	public function insert_files($tipo, $nome, $caminho){

		$files = array(
			'tipo' => $tipo,
			'nome' => $nome,
            'caminho' => $caminho
		);
		
		return $this->db->insert('files', $files);
	}


	public function get_files($id_file, $tipo, $caminho){

		$this->db->select("*")
				->from('files')
				->where('id', $id_file)
				->where('tipo', $tipo)
				->where('caminho', $caminho);

		$resultado = $this->db->get();
		
		return $resultado->result_array();
	}

}