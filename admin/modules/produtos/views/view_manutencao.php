  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="titlemiddle">Cadastro de Produtos</h1>
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
    <div class="col-md-12 text-right"><a class="btn btn-primary newproduct" href="<?=base_url('produtos')?>">Cancelar</a></div>
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Informe os dados do seu produto</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->

        <div class="card-body">
          <div class="form-group">
            <?php 
            echo form_open("produtos/novo");
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
            echo form_label("Descrição", "descricao");
            echo form_textarea(array(
              "name" => "descricao",
              "class" => "form-control",
              "id" => "rescricao",
              "value" => set_value("descricao", "")
            ));
            echo form_error("descricao");
            ?>
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
         <?php 
         echo form_button(array(
          "class" => "btn btn-success",
          "content" => "Salvar",
          "type" => "submit"
        ));
         echo form_close();
         ?>
       </div>

     </div>
     <!-- /.card -->
   </div>
 </div>
    <!-- /.content-wrapper -->