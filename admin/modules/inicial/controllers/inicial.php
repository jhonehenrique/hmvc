<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicial extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this->load->helper("form");
		$this->load->model("model_inicial");
	}
	public function index() {
		verifica_login();	
		$dados['titulo'] = 'Developer Tools';
		$this->load->template('view_inicial', $dados);
	}
}
