<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
require APPPATH."third_party/MX/Loader.php";

class MY_Loader extends MX_Loader {
	public function template($nome, $dados = array()){
			$this->view('header.php', $dados);
			$this->view($nome, $dados);
			$this->view('footer.php');
		}
}