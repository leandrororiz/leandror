<!doctype html>
<html lang="pt-BR">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>X-MEN - Mundo dos Filmes</title>
    <link rel="icon" href="logo.png" id="logo">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="projeto.css">
</head>

<body>


<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">

<div class="container-fluid">
  <nav>
    <div class="container-fluid">
      <a id="mundo" class="navbar-brand" href="projetofinal.php">
        <img id="img" src="fm.jpg" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
        MUNDO DOS FILMES
      </a>
    </div>
  </nav>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a id="home" class="nav-link active" aria-current="page" href="projetofinal.php">Inicio</a>
      </li>

      <li class="nav-item dropdown" onmouseenter="showDropdown(event)" onmouseleave="hideDropdown(event)">
        <a id="home2" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categorias
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="acao.php">Ação</a></li>
          <li><a class="dropdown-item" href="terror.php">Terror</a></li>
          <li><a class="dropdown-item" href="comedia.php">Comédia</a></li>
          <li><a class="dropdown-item" href="fantasia.php">Fantasia</a></li>
          <li><a class="dropdown-item" href="animacao.php">Animação</a></li>
        </ul>
      </li>

      <li class="nav-item dropdown" onmouseenter="showDropdown(event)" onmouseleave="hideDropdown(event)">
        <a id="home3" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Lançamentos
        </a>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="meumalvado.php">MEU MALVADO FAVORITO</a></li>
          <li><a class="dropdown-item" href="umtiradapesada.php">UM TIRA DA PESADA 4</a></li>
          <li><a class="dropdown-item" href="umlugar.php">UM LUGAR SILECIOSO - DIA UM</a></li>
          <li><a class="dropdown-item" href="deadpool.php">DEADPOOL & WOLWERINE</a></li>
          <li><a class="dropdown-item" href="divertidamente.php">DIVERTIDAMENTE 2</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a id="home4" class="nav-link" href="series.php">Series </a>
      </li>

      <a id="home51"href="cadastro.php"><button id="home5" type="button" class="btn btn-light"><strong>Cadastro</strong></button></a>
      <a href="login.php"><button id="home6"  type="button" class="btn btn-dark">Login</button></a>
      <form  action="processosair.php" method="POST">
            <button id="home7" type="submit" class="btn btn-danger"><strong>Sair</strong></button>
          </form>
    </ul>
  </div>
</div>
</nav>
<iframe class="trailers" src="https://drive.google.com/file/d/1TRwWCFTOBF8DEjRpDWiZyPSBf3kCpXnh/preview" width="1400" height="787" allow="autoplay"></iframe>

    <footer>
        <a id="logoinferior" class="navbar-brand" href="projetofinal.php">
            <img src="fm.jpg" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
            MUNDO DOS FILMES
        </a>

        <p style="margin-top: 4px;"><strong>Todos os direitos reservados &copy; 2024</strong></p>
        <nav>
            <ul style="list-style: none; margin-left: -15px">
                <li><a style="color: red;" href="politica.php">Política de Privacidade</a></li>
                <li><a style="color: red;" href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function showDropdown(event) {
            const dropdownMenu = event.currentTarget.querySelector('.dropdown-menu');
            dropdownMenu.classList.add('show');
        }


        function hideDropdown(event) {
            const dropdownMenu = event.currentTarget.querySelector('.dropdown-menu');
            dropdownMenu.classList.remove('show');
        }
    </script>
</body>

</html>