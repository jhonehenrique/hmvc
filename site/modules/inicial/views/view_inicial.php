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


		<div class="col-md-12">
			<h2>Produtos</h2>
			<?php foreach ($produtos as $key => $value) : ?>
				<ul>
					<li><?=anchor("produto/{$value['id']}", $value["titulo"])?></li>
					<li><?=auto_typography(character_limiter($value["descricao"], 30))?></li>
					<li><?=numeroEmReais($value["preco"]);?></li>
				</ul>
			<?php endforeach ?>
			<?= anchor('formulario', 'Novo Produto', array("class" => "btn btn-primary")) ?>
		</div>
	</div>
</div>
