<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper("form");
		$this->load->model("model_usuarios");
	}

	public function index() {

		//$this->output->enable_profiler(TRUE);
		$dados['titulo'] = 'Developer Tools';
		$this->load->template('view_usuarios', $dados);
	}

	public function novo() {
		$usuario = array(
			"nome" => $this->input->post("nome"),
			"email" => $this->input->post("email"),
			"senha" => md5($this->input->post("senha"))
		);
		$this->model_usuarios->salva($usuario);
		$this->session->set_flashdata("success", "Parabéns, você está registrado!");
		redirect('usuarios');
	}

	public function login() {
		$email = $this->input->post("email");
		$senha = md5($this->input->post("senha"));
		$usuario = $this->model_usuarios->buscarPorEmaileSenha($email, $senha);
		
		if($usuario) {
			$this->session->set_userdata("usuario_logado", $usuario);
			$this->session->set_flashdata("success", "Logado com sucesso!");
		}else {
			$this->session->set_flashdata("danger", "Acesso negado!");
		}

		redirect('usuarios');
	}

	public function logout() {
		$this->session->unset_userdata("usuario_logado");
		$this->session->set_flashdata("success", "Deslogado!");
		redirect('usuarios');
	}
}
