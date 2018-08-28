<div class="container">
	<div class="row">
		

		<?php if($this->session->flashdata("success")) { ?>
			<div class="col-md-12">
				<p class="alert alert-success"><?=$this->session->flashdata("success")?></p>
			</div>
		<? } ?>
		<?php if($this->session->flashdata("danger")) { ?>
			<div class="col-md-12">
				<p class="alert alert-danger"><?=$this->session->flashdata("danger")?></p>
			</div>
		<? } ?>


		<?php if($this->session->userdata("usuario_logado")) { ?>
			<div class="col-md-12">
				<?= anchor('usuarios/logout', 'Sair', array("class" => "btn btn-primary")) ?>
			</div>
		<?php } else{ ?>

		<div class="col-md-12">
			<h2>Cadastro</h2>
			<?php 
			echo form_open("usuarios/novo");
			echo form_label("Nome", "nome");
			echo form_input(array(
				"name" => "nome",
				"id" => "nome",
				"class" => "form-control",
				"maxlength" => "255"
			));
			echo form_label("E-mail", "email");
			echo form_input(array(
				"name" => "email",
				"id" => "email",
				"class" => "form-control",
				"maxlength" => "255"
			));
			echo form_label("Senha", "senha");
			echo form_password(array(
				"name" => "senha",
				"id" => "senha",
				"class" => "form-control",
				"maxlength" => "255"
			));
			echo form_button(array(
				"class" => "btn btn-primary",
				"content" => "Cadastrar",
				"type" => "submit"
			));
			echo form_close();
			?>
		</div>
		

		


		<div class="col-md-12">
			<h2>Login</h2>
			<?php 
			echo form_open("usuarios/login");
			echo form_label("E-mail", "email");
			echo form_input(array(
				"name" => "email",
				"id" => "email",
				"class" => "form-control",
				"maxlength" => "255"
			));
			echo form_label("Senha", "senha");
			echo form_password(array(
				"name" => "senha",
				"id" => "senha",
				"class" => "form-control",
				"maxlength" => "255"
			));
			echo form_button(array(
				"class" => "btn btn-primary",
				"content" => "Login",
				"type" => "submit"
			));
			echo form_close();
			?>
		</div>

		<?php } ?>
	</div>
</div>
