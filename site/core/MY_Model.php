<?php
class MY_Model extends CI_Model {
	public function buscarTodos(){
		return $this->db->get("produtos")->result_array();
	}
}
