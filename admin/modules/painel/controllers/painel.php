<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper("form");
		$this->load->library('form_validation');
		$this->load->model("model_{$this->router->class}");
	}

	public function index() {
		$dados['titulo'] = 'Administrador';
		$dados['user'] = $this->session->userdata('usuario_logado', $dados);
		//echo "<pre>"; print_r($dados);
		$this->load->template('view_painel', $dados);
	}

	public function cadastro() {
		$dados['titulo'] = 'Developer Tools';
		$this->load->template('view_cadastro', $dados);
	}

	public function novo() {
		$this->form_validation->set_rules('nome', 'nome', 'required');
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('senha', 'senha', 'required');
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");

		if ($this->form_validation->run() == FALSE) {
			$this->load->template('view_cadastro');
		}else{ 

			$usuario = array(
				"nome" => $this->input->post("nome"),
				"email" => $this->input->post("email"),
				"senha" => md5($this->input->post("senha"))
			);
			$this->model_painel->salva($usuario);
			$this->session->set_flashdata("success", "Parabéns, você está registrado!");
			redirect('/');
		}
	}

	public function login() {
		$this->form_validation->set_rules('email', 'email', 'required|valid_email');
		$this->form_validation->set_rules('senha', 'senha', 'required');
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");

		if ($this->form_validation->run() == FALSE) {
			$this->load->template('view_painel');
		} else {

			$email = $this->input->post("email");
			$senha = md5($this->input->post("senha"));
			$usuario = $this->model_painel->buscarPorEmaileSenha($email, $senha);

			if($usuario) {
				$this->session->set_userdata("usuario_logado", $usuario);
				$this->session->set_flashdata("success", "Logado com sucesso!");
			}else {
				$this->session->set_flashdata("danger", "Acesso negado!");
			}
			redirect('/');
		}
	}

	public function logout() {
		$this->session->unset_userdata("usuario_logado");
		$this->session->set_flashdata("success", "Deslogado!");
		redirect('/');
	}
}
