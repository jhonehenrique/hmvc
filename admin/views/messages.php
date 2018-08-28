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