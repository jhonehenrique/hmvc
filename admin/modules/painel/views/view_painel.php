  <?php if($this->session->userdata("usuario_logado")) { ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Painel</h1>
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
      <section class="content">
        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"><?=$titulo?></h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="card-body">
                <h1>Bem vindo, <?=$user['nome']?></h1>
                <p><?=$user['nome']?>, você acessou o sistema utilizando o email <strong><?=$user['email']?></strong></p>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Final do conteúdo
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
      <? } else { ?>
        <div class="login-box">
          <div class="login-logo">
            <a href="<?=base_url()?>"><b>Painel</b>Login</a>
          </div>
          <!-- /.login-logo -->
          <div class="card">
            <div class="card-body login-card-body">
              <p class="login-box-msg">Entre com seus dados de acesso!</p>
              <?php 
              echo form_open("painel/login");
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
                "class" => "form-control",
                "maxlength" => "255"
              ));
              echo form_error("senha");
              echo form_button(array(
                "class" => "btn btn-primary",
                "content" => "Login",
                "type" => "submit"
              ));
              echo form_close();
              ?>
              <div class="social-auth-links text-center mb-3">
                <p>- OU -</p>
                <a href="#" class="btn btn-block btn-primary">
                  <i class="fa fa-facebook mr-2"></i> Login com facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                  <i class="fa fa-google-plus mr-2"></i> Login com Google+
                </a>
              </div>
              <!-- /.social-auth-links -->
              <p class="mb-1">
                <a href="#">Esqueci minha senha</a>
              </p>
              <p class="mb-0">
                <a href="<?=base_url('cadastre-se')?>" class="text-center">Criar uma conta</a>
              </p>
            </div>
            <!-- /.login-card-body -->
          </div>
        </div>
        <!-- /.login-box -->
        <? } ?>