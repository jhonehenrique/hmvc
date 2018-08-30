  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <?php if (isset($produto["id"]) && $produto["id"] != 0){ ?>
              <h1>Editar Produtos</h1>
            <? } else { ?>
              <h1>Adicionar Produtos</h1>
            <? } ?>
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

    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Informe os dados do seu cadastro</h3>
        </div>
        <!-- /.card-header -->
        <?php if (isset($produto["id"]) && $produto["id"] != 0){ ?>
          <div class="card-body">
            <div class="form-group">
              <?php 
              echo form_open("produtos/editar");              
              echo form_input(array(
                "name" => "id",
                "type" => "hidden",
                "value" => $produto["id"]
              ));
              echo form_error("titulo");

              echo form_label("Nome", "nome");
              echo form_input(array(
                "name" => "titulo",
                "class" => "form-control",
                "id" => "nome",
                "maxlength" => "255",
                "value" => $produto["titulo"]
              ));
              echo form_error("titulo");
              echo form_label("Preço", "preco");
              echo form_input(array(
                "name" => "preco",
                "class" => "form-control",
                "id" => "preco",
                "maxlength" => "255",
                "value" => $produto["preco"],
                "type" => "number"
              ));
              echo form_error("preco");
              echo form_label("Descrição", "descricao");
              echo form_textarea(array(
                "name" => "descricao",
                "class" => "form-control",
                "id" => "rescricao",
                "value" => $produto["descricao"]
              ));
              echo form_error("descricao");
              ?>
            </div>
          </div>
        <? } else { ?>
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
        <? } ?>
        <!-- /.card-body -->
        <div class="card-footer">
          <div>
            <ul>
              <li><?php echo form_button(array(
                "class" => "btn btn-success",
                "content" => "<i class='fa fa-check' aria-hidden='true'></i> Salvar",
                "type" => "submit"
                )); ?></li>
                <li><a class="btn btn-primary" href="<?=base_url('produtos')?>"><i class="fa fa-ban" aria-hidden="true"></i> Cancelar</a></li>
              </ul>

            </div>

          </div>

          <?php 
          echo form_close();
          ?>
        </div>

      </div>
      <!-- /.card -->
    </div>
  </div>
    <!-- /.content-wrapper -->