<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>Produtos</h2>
			<ul>
				<li><?=$produto["titulo"]?></li>
				<li><?=html_escape(character_limiter($produto["descricao"], 30))?></li>
				<li><?=numeroEmReais($produto["preco"]);?></li>
			</ul>
		</div>
	</div>
</div>