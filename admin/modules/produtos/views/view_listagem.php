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
    <div class="col-md-12 text-right"><a class="btn btn-success newproduct" href="<?=base_url('produtos/manutencao')?>"><i class="fa fa-plus" aria-hidden="true"></i>Adicionar</a></div>

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
            <th></th>
          </tr>
          <?php foreach ($produtos as $key => $value) : ?>

            <tr>
              <td><?=$value["id"]?></td>
              <td><?=anchor("produto/{$value['id']}", $value["titulo"])?></td>
              <td><?=numeroEmReais($value["preco"]);?></td>
              <td>

                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                 <i class='fa fa-trash-o' aria-hidden='true'></i>
               </button>
               <button class="btn btn-primary"><?=anchor("produto/{$value['id']}", "<i class='fa fa-pencil-square-o' aria-hidden='true'></i>")?></button>
             </td>


           </tr>
         <?php endforeach ?>
       </table>
     </div>
   </div>
 </div>
</div>
<!-- /.content-wrapper -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir Produto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Tem certeza que deseja excluir esse produto?
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
      <?php 
      echo form_open("produtos/delete");              
      echo form_input(array(
        "name" => "id",
        "type" => "hidden",
        "value" => $value["id"]
      ));
      echo form_button(array(
        "class" => "btn btn-primary",
        "content" => "Sim",
        "type" => "submit"
      ));
      echo form_close(); 
      ?>

    </div>
  </div>
</div>
</div>



