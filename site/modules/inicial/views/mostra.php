<div class="col-md-12">
<h2>Produtos</h2>
<?php foreach ($produtos as $key => $value) : ?>
	<ul>
		<li><?=anchor("mostra?id={$value['id']}", $value["titulo"])?></li>
		<li><?=$value["descricao"]?></li>
		<li><?=numeroEmReais($value["preco"]);?></li>
	</ul>
<?php endforeach ?>
<?= anchor('formulario', 'Novo Produto', array("class" => "btn btn-primary")) ?>
</div>