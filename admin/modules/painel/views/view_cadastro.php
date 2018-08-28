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
				<?= anchor('painel/logout', 'Sair', array("class" => "btn btn-primary")) ?>
			</div>
		<?php } else{ ?>
			<body class="hold-transition register-page">
				<div class="register-box">
					<div class="register-logo">
						<a href="<?=base_url()?>"><b>Painel</b>Cadastro</a>
					</div>
					<div class="card">
						<div class="card-body register-card-body">
							<p class="login-box-msg">Cadastre-se</p>
							<?php 
							echo form_open("painel/novo");
							echo form_label("Nome", "nome");
							echo form_input(array(
								"name" => "nome",
								"id" => "nome",
								"class" => "form-control",
								"maxlength" => "255",
								"value" => set_value("nome", "")
							));
							echo form_error("nome");
							echo form_label("E-mail", "email");
							echo form_input(array(
								"name" => "email",
								"id" => "email",
								"class" => "form-control",
								"maxlength" => "255",
								"value" => set_value("email", "")
							));
							echo form_error("email");
							echo form_label("Senha", "senha");
							echo form_password(array(
								"name" => "senha",
								"id" => "senha",
								"class" => "form-control"
							));
							echo form_error("senha");
							echo form_button(array(
								"class" => "btn btn-primary",
								"content" => "Cadastrar",
								"type" => "submit"
							));
							echo form_close();
							?>
							<div class="social-auth-links text-center">
								<p>- OU -</p>
								<a href="#" class="btn btn-block btn-primary">
									<i class="fa fa-facebook mr-2"></i>
									Cadastrar com Facebook
								</a>
								<a href="#" class="btn btn-block btn-danger">
									<i class="fa fa-google-plus mr-2"></i>
									Cadastrar com Google+
								</a>
							</div>
							<a href="<?=base_url()?>" class="text-center">Já sou tenho uma conta</a>
						</div>
						<!-- /.form-box -->
					</div><!-- /.card -->
				</div>
				<!-- /.register-box -->
			<?php } ?>
