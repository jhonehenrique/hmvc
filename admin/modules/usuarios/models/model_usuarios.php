<?php
class Model_usuarios extends CI_Model {
	public function buscarTodos(){
		return $this->db->get("usuarios")->result_array();
	}
	public function salva($usuarios) {
		$this->db->insert("usuarios", $usuarios);
	}
	public function busca($id) {
		return $this->db->get_where("usuarios", array("id" => $id))->row_array();
	}
	
	public function get_usuarios_linke($termos){
		$this->db->like('nome OR email', $termos);
		return $this->db->get("usuarios")->result_array();
	}

}
