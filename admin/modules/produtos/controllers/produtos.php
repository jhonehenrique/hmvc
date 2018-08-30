<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper("form");
		$this->load->library('form_validation');
		$this->load->model("model_{$this->router->class}");
		$this->load->helper(array("metodos"));
	}
	public function index() {
		verifica_login();
		$produtos = $this->model_produtos->buscarTodos();
		$termos = $this->input->post('pesquisar');
		$produtos = $this->model_produtos->get_produtos_linke($termos);
		$dados = array("produtos" => $produtos);
		$dados['query'] = $termos;
		$dados['titulo'] = 'Produtos';
		//echo "<pre>";print_r($dados);
		$this->load->template('view_listagem', $dados);
	}
	public function manutencao() {
		$dados['titulo'] = 'Adicionar';
		$this->load->template('view_manutencao', $dados);
	}
	public function novo() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo', 'titulo', 'required');
		$this->form_validation->set_rules('preco', 'preco', 'required');
		$this->form_validation->set_rules('descricao', 'descricao', 'trim|required|min_length[10]');
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");
		if($this->form_validation->run() == FALSE) {
			$dados['titulo'] = 'Manutenção';
			$this->load->template('view_manutencao',$dados);		
		}else {
			$usuarioLogado = $this->session->userdata("usuario_logado");
			$produtos = array(
				"titulo" => $this->input->post("titulo"),
				"preco" => $this->input->post("preco"),
				"descricao" => $this->input->post("descricao"),
				"id_usuario" => $usuarioLogado["id"]
			);
			$this->model_produtos->salvar($produtos);
			$this->session->set_flashdata("success", "Produto cadastrado com sucesso!");
			redirect('produtos');
		}
	}	
	public function editar() {
		$this->load->library('form_validation');
		$this->form_validation->set_rules('titulo', 'titulo', 'required');
		$this->form_validation->set_rules('preco', 'preco', 'required');
		$this->form_validation->set_rules('descricao', 'descricao', 'trim|required|min_length[10]');
		$this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");
		if($this->form_validation->run() == FALSE) {
			$dados['titulo'] = 'Manutenção';
			$this->load->template('view_manutencao',$dados);		
		}else {
			$usuarioLogado = $this->session->userdata("usuario_logado");
			$produtos = array(
				"id" => $this->input->post("id"),
				"titulo" => $this->input->post("titulo"),
				"preco" => $this->input->post("preco"),
				"descricao" => $this->input->post("descricao"),
				"id_usuario" => $usuarioLogado["id"]
			);
			$this->model_produtos->editar($produtos);
			$this->session->set_flashdata("success", "Salvo com sucesso!");
			redirect('produtos');
		}
	}
	public function delete() {
		$usuarioLogado = $this->session->userdata("usuario_logado");
		$produtos = array(
			"id" => $this->input->post("id"),
		);
		$this->model_produtos->delete($produtos);
		$this->session->set_flashdata("success", "Excluído com sucesso!");
		redirect('produtos');
	}
	public function mostra($id) {
		$this->load->model("model_produtos");
		$produto = $this->model_produtos->busca($id);
		$dados = array("produto" => $produto);
		$dados['titulo'] = 'Editar';
		$this->load->template('view_manutencao', $dados);
	}
}
