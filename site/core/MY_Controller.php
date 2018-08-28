<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('inicial/model_inicial');
		$this->load->helper(array("url","form","currency"));
		$this->dados['global_titulo'] = 'jhone';
	}

}
