<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('head')?>
</head>
<body class="hold-transition sidebar-mini login-page">
	<?php if ($this->session->userdata('usuario_logado')) { ?> 
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
				<!-- Left navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
					</li>

				</ul>
				<!-- Right navbar links -->
				<ul class="navbar-nav ml-auto">
					<li><a href="<?=base_url('painel/logout')?>">Sair <i class="fa  fa-sign-out"></i></a></li>
				</ul>
			</nav>
			<!-- /.navbar -->

			<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
				<!-- Brand Logo -->
				<a href="<?=base_url()?>" class="brand-link">
					<span class="brand-text font-weight-light">ADMINISTRADOR</span>
				</a>
				<!-- Sidebar -->
				<div class="sidebar">
					<!-- Sidebar user (optional) -->
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<a href="<?=base_url()?>">Painel Developer</a>
					</div>
					<!-- Sidebar Menu -->
					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          	with font-awesome or any other icon font library -->
          	<li class="nav-item has-treeview">
          		<a href="#" class="nav-link">
          			<i class="nav-icon fa fa-dashboard"></i>
          			<p>
          				Dashboard
          				<i class="right fa fa-angle-left"></i>
          			</p>
          		</a>
          		<ul class="nav nav-treeview" style="display: none;">
          			<li class="nav-item">
          				<a href="../../index.html" class="nav-link">
          					<i class="fa fa-circle-o nav-icon"></i>
          					<p>Perfil</p>
          				</a>
          			</li>
          			<li class="nav-item">
          				<a href="../../index2.html" class="nav-link">
          					<i class="fa fa-circle-o nav-icon"></i>
          					<p>Configurações</p>
          				</a>
          			</li>
          		</ul>
          	</li>	
          	<li class="nav-item has-treeview">
          		<a href="<?=base_url('produtos')?>" class="nav-link">
          			<i class="nav-icon fa fa-book"></i>
          			<p>Produtos<i class="fa fa-angle-left right"></i></p>
          		</a>
          	</li>
               <li class="nav-item has-treeview">
                    <a href="<?=base_url('inicial')?>" class="nav-link">
                         <i class="nav-icon fa fa-book"></i>
                         <p>Institucional<i class="fa fa-angle-left right"></i></p>
                    </a>
               </li>

          </ul>
     </nav>
     <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
<div class="main-header">
	<?php $this->load->view('messages')?>
</div>
</div>
<? } else { ?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php $this->load->view('messages')?>
			</div>
		</div>
	</div>
<? } ?>
