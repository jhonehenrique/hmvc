<!DOCTYPE HTML>
 <html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <title>Developer Tools</title>
    <link href="<?=base_url('site/assets/lib/bootstrap/css/bootstrap.css')?>" rel="stylesheet"/>
    <link href="<?=base_url('site/assets/css/style.css')?>" rel="stylesheet"/>
    <link href="<?=base_url('site/assets/css/fonts.css')?>" rel="stylesheet"/>
    <script src="<?=base_url('site/assets/lib/jquery/jquery-3.3.1.min.js')?>"></script>
    <script src="<?=base_url('site/assets/lib/bootstrap/js/bootstrap.js')?>"></script>
</head>
<body>
	<header>
        <div class="container">
        	<h1 class="logo"><a href="<?=base_url()?>">Developer Tools</a></h1>
			<nav class="navbar navbar-expand-md menu">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarCollapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
						  <a class="nav-link" href="<?=base_url()?>">Home <span class="sr-only">(current)</span></a>
						</li>
						<!-- <li class="nav-item">
						  <a class="nav-link disabled" href="#">Disabled</a>
						</li> -->
					</ul>
					<div class="mt-md-0">
						<ul class="nav nav-pills">
						  <li class="nav-item dropdown">
						    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Login</a>
						    <div class="dropdown-menu">
						      <a class="dropdown-item" href="<?=base_url('usuarios')?>">Cadastre-se</a>
						      <div role="separator" class="dropdown-divider"></div>
						      <a class="dropdown-item" href="<?=base_url('admin')?>">Painel</a>
						    </div>
						  </li>
						</ul>
					</div>  
				  <!-- <form class="form-inline mt-2 mt-md-0">
				    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
				    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				  </form> -->
				</div>
			</nav>
        </div>
    </header>