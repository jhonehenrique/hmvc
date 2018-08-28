  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="titlemiddle">Listagem de Produtos</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                <li class="breadcrumb-item active"><?=$titulo?></li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
      <!-- Main content -->
      <div class="col-md-12 text-right"><a class="btn btn-success newproduct" href="<?=base_url('produtos/formulario')?>"><i class="fa fa-plus" aria-hidden="true"></i>Adicionar</a></div>

      <div class="col-12">
        <div class="card">
          <div class="card-header">

          <?php if(!empty($query)) { ?>
            <h3 class="card-title">Resultado da busca por <strong><?=$query?></strong> retornou <strong><?=count($produtos)?></strong> resultado(s).</h3>
            <? } else { ?>
              <h3 class="card-title">Você pode utilizar o sistema de busca para encontrar o que procura!</h3>
            <? } ?>
            
            <div class="card-tools">
				
				<form action="<?=base_url('produtos')?>" method="post">
              		<div class="input-group input-group-sm" style="width: 250px;">
                		<input type="text" name="pesquisar" class="form-control float-right" placeholder="Buscar">
                	<div class="input-group-append">
                  		<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                	</div>
              		</div>
              </form>
            </div>


          </div>
          <div class="card-body table-responsive p-0">
            <table class="table table-hover table-bordered">
               <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Preço</th>
              </tr>
              <?php foreach ($produtos as $key => $value) : ?>
             
              <tr>
                <td><?=$value["id"]?></td>
                <td><?=$value["titulo"]?></td>
                <td><?=numeroEmReais($value["preco"]);?></td>
              </tr>
               <?php endforeach ?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content-wrapper -->