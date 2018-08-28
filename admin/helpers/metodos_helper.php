<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(!function_exists('verifica_login')){
	//Verifica se o usuário está logado, caso não estiver então redireciona para a página de loging
	function verifica_login($redirect= '/'){
		$ci = & get_instance();
		if($ci->session->userdata('usuario_logado') != TRUE){
			redirect($redirect, 'refresh');
		}
	}
}

function numeroEmReais($numero) {
	return "R$ " . number_format($numero, 2, ",", ".");
}