<?php
class Model_usuarios extends CI_Model {
	public function salva($usuarios) {
		$this->db->insert("usuarios", $usuarios);

	}
	public function buscarPorEmaileSenha($email, $senha) {
		
		$this->db->where("email", $email);
		$this->db->where("senha", $senha);

		$usuario = $this->db->get("usuarios")->row_array();
		return $usuario;

	}
}
