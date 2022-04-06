<link rel="stylesheet" href="../css/menu.css">

<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



<nav class="navbar navbar-expand-lg navbar-light navbar-light" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <a class="navbar-brand" href="../usuario/user.php">CAVB7</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../produto/exibicao.php">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../usuario/cadastro-us.php"> Private</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../categoria/categoria.php">Categorias</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled " href="../marca/marca.php" >Marcas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../login/logout.php" >Sair</a>
        </li>
      </ul>
    </div>
    
    <form class="d-flex" action="../consulta/consulta.php">

      <input name="pesquisa" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>

    </form>

    
  </div>
</nav>

