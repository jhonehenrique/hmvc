<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model("model_inicial");
		$this->load->helper(array("currency"));
		$this->load->helper("typography");

	}

	public function index() {
		$produtos = $this->model_inicial->buscarTodos();
		$dados = array("produtos" => $produtos);
		$dados['titulo'] = 'Developer Tools';
		$this->load->template('view_inicial', $dados);
	}

	public function formulario() {
		$this->load->template('view_formulario');
	}
	
	public function novo() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo', 'titulo', 'required');
		$this->form_validation->set_rules('preco', 'preco', 'required');
		$this->form_validation->set_rules('descricao', 'descricao', 'trim|required|min_length[10]');
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");

		if($this->form_validation->run() == FALSE) {
			$this->load->template('view_formulario');		
		}else {
			$usuarioLogado = $this->session->userdata("usuario_logado");
			$produtos = array(
				"titulo" => $this->input->post("titulo"),
				"preco" => $this->input->post("preco"),
				"descricao" => $this->input->post("descricao"),
				"id_usuario" => $usuarioLogado["id"]
			);
			$this->model_inicial->salva($produtos);
			$this->session->set_flashdata("success", "Produto cadastrado com sucesso!");
			redirect('/');
		}
	}

	public function mostra($id) {
		$this->load->model("model_inicial");
		$produto = $this->model_inicial->busca($id);
		$dados = array("produto" => $produto);
		$this->load->template('view_mostra', $dados);
	}

}
