<?php
class Model_produtos extends CI_Model {
	public function buscarTodos(){
		return $this->db->get("produtos")->result_array();
	}
	public function salvar($produtos) {
		$this->db->insert("produtos", $produtos);
	}
	public function editar($produtos) {
		$this->db->where('id', $produtos['id']);
		$this->db->update('produtos', $produtos);
		return;
	}
	public function delete($produtos) {
		$this->db->where('id', $produtos['id']);
		$this->db->delete('produtos', $produtos);
		return;
	}
	public function busca($id) {
		return $this->db->get_where("produtos", array("id" => $id))->row_array();
	}
	public function get_produtos_linke($termos){
		$this->db->like('titulo', $termos);
		return $this->db->get("produtos")->result_array();
	}
}
