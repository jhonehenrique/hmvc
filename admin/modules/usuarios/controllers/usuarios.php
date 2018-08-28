<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper("form");
		$this->load->library('form_validation');
		$this->load->model("model_{$this->router->class}");
		$this->load->helper(array("metodos"));
	}
	
	public function index() {
		verifica_login();
		$usuarios = $this->model_usuarios->buscarTodos();
		$termos = $this->input->post('pesquisar');
		$usuarios = $this->model_usuarios->get_usuarios_linke($termos);
		$dados = array("usuarios" => $usuarios);
		$dados['query'] = $termos;
		$dados['titulo'] = 'usuarios';
		//echo "<pre>";print_r($dados);
		$this->load->template('view_listagem', $dados);
	}

	public function formulario() {
		$dados['titulo'] = 'Manutenção';
		$this->load->template('view_manutencao', $dados);
	}
	
	public function novo() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome', 'nome', 'required');
		$this->form_validation->set_rules('email', 'email', 'required');
		$this->form_validation->set_rules('senha', 'senha', 'required');
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");

		if($this->form_validation->run() == FALSE) {
			$dados['titulo'] = 'Manutenção';
			$this->load->template('view_manutencao',$dados);		
		}else {
			$usuarioLogado = $this->session->userdata("usuario_logado");
			$usuarios = array(
				"nome" => $this->input->post("nome"),
				"email" => $this->input->post("email"),
				"senha" => $this->input->post("senha")
			);
			$this->model_usuarios->salva($usuarios);
			$this->session->set_flashdata("success", "Produto cadastrado com sucesso!");
			redirect('usuarios');
		}
	}
}
