<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php 
			echo form_open("inicial/novo");

			echo form_label("Nome", "nome");
			echo form_input(array(
				"name" => "titulo",
				"class" => "form-control",
				"id" => "nome",
				"maxlength" => "255",
				"value" => set_value("titulo", "")
			));
			echo form_error("titulo");

			echo form_label("Preço", "preco");
			echo form_input(array(
				"name" => "preco",
				"class" => "form-control",
				"id" => "preco",
				"maxlength" => "255",
				"value" => set_value("preco", ""),
				"type" => "number"
			));
			echo form_error("preco");

			echo form_textarea(array(
				"name" => "descricao",
				"class" => "form-control",
				"id" => "rescricao",
				"value" => set_value("descricao", "")
		
			));
			echo form_error("descricao");

			echo form_button(array(
				"class" => "btn btn-primary",
				"content" => "Cadastrar",
				"type" => "submit"
			));

			echo form_close();
			?>
		</div>
	</div>
</div>