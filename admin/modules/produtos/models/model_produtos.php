<?php
class Model_produtos extends CI_Model {
	public function buscarTodos(){
		return $this->db->get("produtos")->result_array();
	}
	public function salva($produtos) {
		$this->db->insert("produtos", $produtos);
		//$this->db->update("produtos", $produtos);
		//$this->db->delete("produtos", $produtos);
	}
	// public function editar($produtos) {
	// 	$this->db->update("produtos", $produtos);
	// }


    public function editar($produtos, $id) {
    return $this->db->get_where("produtos", array("id" => $id))->row_array();
    $this->db->update("produtos", $produtos);
    }

	public function busca($id) {
		return $this->db->get_where("produtos", array("id" => $id))->row_array();
	}
	
	public function get_produtos_linke($termos){
		$this->db->like('titulo', $termos);
		return $this->db->get("produtos")->result_array();
	}

}
