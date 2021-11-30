<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimesWatching</title>
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("application/assets/css/style.css"); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("application/assets/css/my-login.css"); ?>"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
    <script src="https://github.com/makeusabrew/bootbox/releases/download/v4.4.0/bootbox.min.js"></script>
    <script src="<?php echo base_url("application/assets/js/login/my-login.js"); ?>"></script>
</head>
<body class="fadeIn">
<?php if($this->session->has_userdata('usuario')) : ?>
  <nav class="navbar navbar-expand-md bg-light navbar-light">
    
    <!-- Brand/logo -->
    <div>
      <img src="<?= base_url("application/assets/images/logo.png") ?>" alt="Logo" width="30" class="mb-3">
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
              <?php if($this->session->userdata('usuario') == "admin"): ?>
                <a class="dropdown-item" href="<?= base_url("anime/cadastroView"); ?>">Cadastrar</a>
              <?php endif; ?>
              <a class="dropdown-item" href="<?= base_url("anime/listaView"); ?>">Listar</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCadastro" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Mangá
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownCadastro">
              <?php if($this->session->userdata('usuario') == "admin"): ?>
                <a class="dropdown-item" href="<?= base_url("manga/cadastroView"); ?>">Cadastrar</a>
              <?php endif; ?>
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
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url("forum/listaForum"); ?>" id="navbarForum">
              Fórum
            </a>
          </li>
      </ul>
      <div class="ml-auto">
        <button class="btn btn-primary"><?= $this->session->userdata('usuario')?></button>
        <?= anchor('session/logout','Logout', array("class" => "btn btn-danger"))?>
      </div>
    </div>
  </nav>
<?php endif; ?>

<!-- <p class="alert-success"><?= $this->session->flashdata('success'); ?></p> -->
<!-- <p class="alert-danger"><?= $this->session->flashdata('danger'); ?></p> -->