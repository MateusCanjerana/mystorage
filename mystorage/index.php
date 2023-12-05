<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>My Storage</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg nav-warning bg-warning " >
    <div class="container">
      <a class="navbar-brand text-light" href="index.php">My Storage</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar-text" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Geral
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?page=geral-cadastrar">Cadastrar</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="?page=geral-consultar">Consultar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Entrada
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?page=entrada-cadastrar">Cadastrar</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="?page=entrada-consultar">Consultar</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Saída
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="?page=saida-cadastrar">Cadastrar</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="?page=saida-consultar">Consultar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <main>
    <div class="container-fluid">
			<div class="row">
	        	<div class="col-lg-12 mb-5 mt-5 pt-5 pb-5">
              <?php
                      include("config.php");
                          switch(@$_REQUEST["page"]){
                              //geral
                          case "geral-cadastrar":
                              include("geral-cadastrar.php");
                          break;
                          case "geral-consultar":
                              include("geral-consultar.php");
                          break;
                          case "geral-salvar":
                              include("geral-salvar.php");
                          break;
                          break;
                          case "geral-editar":
                              include("geral-editar.php");
                          break;
                          //Entrada
                          case "entrada-cadastrar":
                              include("entrada-cadastrar.php");
                          break;
                          case "entrada-consultar":
                              include("entrada-consultar.php");
                          break;
                          case "entrada-salvar":
                              include("entrada-salvar.php");
                          break;
                          case "entrada-editar":
                            include("entrada-editar.php");
                        break;
                          //Saida
                          case "saida-cadastrar":
                              include("saida-cadastrar.php");
                          break;
                          case "saida-consultar":
                              include("saida-consultar.php");
                          break;
                          case "saida-salvar":
                              include("saida-salvar.php");
                          break;
                          case "saida-editar":
                              include("saida-editar.php");
                          break;
                          default:
                          include("geral-consultar.php");
                      }
              ?>
            </div>
          </div>
        </div>
        <footer class="container-fluid bg-warning">
        <div class="row pt-5 pb-5">
          <section class="col-md-5">
            <h5 class="text-light">Estoque</h5>
            <ul class="nav flex-column">
              <l class="nav-item">
                <a href="?page=geral-consultar" class="nav-link text-dark">Geral</a>
              </li>
              <li class="nav-item">
                <a href="?page=entrada-consultar" class="nav-link text-dark">Entrada</a>
              </li>
              <li class="nav-item">
                <a href="?page=saida-consultar" class="nav-link text-dark">Saída</a>
              </li>
            </ul>
          </section>
          

          <section class="col-md-5 ms-auto">
            <h5 class="text-light">My Storage</h5>
            <p>Meu controle de estoque</p>
          </section>
        </div>
    </footer>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>