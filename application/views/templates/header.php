<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataControl WEB</title>
    <link rel="stylesheet" href="<?php echo base_url("libs/bootstrap/css/bootstrap.css"); ?>" />
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/my-login.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/style.css"); ?>">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="<?php echo base_url("libs/bootstrap/js/bootstrap.js"); ?>"></script>
    <script src="<?php echo base_url("assets/my-login.js"); ?>"></script>
</head>
<body>
<?php if($this->session->has_userdata('usuario')) : ?>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    
    <!-- Brand/logo -->
    <div>
      <img src="<?= base_url("assets/images/logo.png") ?>" alt="Logo" width="30" class="mb-3">
      <a class="navbar-brand" href="<?= base_url("animeWatching") ?>">AnimesWatching</a>
    </div>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
  <!-- Links -->

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCadastro" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Anime
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownCadastro">
              <a class="dropdown-item" href="<?= base_url("anime/cadastroView"); ?>">Cadastrar</a>
              <a class="dropdown-item" href="<?= base_url("anime/listaView"); ?>">Listar</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCadastro" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mangá
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownCadastro">
              <a class="dropdown-item" href="<?= base_url("manga/cadastroView"); ?>">Cadastrar</a>
              <a class="dropdown-item" href="<?= base_url("manga/listaView"); ?>">Listar</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownOS" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Meu perfil
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownOS">
              <a class="dropdown-item" href="<?= base_url("perfil/listaAnimes"); ?>">Minha lista de Animes</a>
              <a class="dropdown-item" href="<?= base_url("perfil/listaMangas"); ?>">Minha lista de Mangás</a>
          </li>
      </ul>
      <div class="ml-auto">
        <?= anchor('perfil/myPerfil', $this->session->userdata('usuario'), array("class" => "btn btn-primary"))?>
        <?= anchor('session/logout','Logout', array("class" => "btn btn-danger"))?>
      </div>
    </div>
  </nav>
<?php endif; ?>

<!-- <p class="alert-success"><?= $this->session->flashdata('success'); ?></p> -->
<!-- <p class="alert-danger"><?= $this->session->flashdata('danger'); ?></p> -->