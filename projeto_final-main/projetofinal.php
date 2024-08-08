<!doctype html>
<html lang="pt-BR">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mundo dos Filmes</title>
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

          <a id="home51" href="cadastro.php"><button id="home5" type="button" class="btn btn-light"><strong>Cadastro</strong></button></a>
          <a href="login.php"><button id="home6" type="button" class="btn btn-dark">Login</button></a>
          <form  action="processosair.php" method="POST">
            <button id="home7" type="submit" class="btn btn-danger"><strong>Sair</strong></button>
          </form>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <h2>LANÇAMENTOS</h2>
    <section class="cards">

      <div class="card" style="width: 18rem;">
        <a href="meumalvado.php"><img src="FM1.webp" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">MEU MALVADO FAVORITO 4</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="umtiradapesada.php"><img src="FM2.webp" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">UM TIRA DA PESADA 4</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="umlugar.php"><img src="FM3.webp" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">UM LUGAR SILENCIOSO - DIA UM</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="deadpool.php"><img src="FM4.jpg" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">DEADPOOL & WOLWERINE</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="divertidamente.php"><img src="FM5.webp" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">DIVERTIDAMENTE 2</p>
        </div>
      </div>

    </section>

    <h2>FILMES ONLINE</h2>

    <section class="cards">
      <div class="card" style="width: 18rem;">
        <a href="harrypotter.php"><img src="FM6.png" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">HARRY POTTER - PEDRA FILOSOFAL</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="ratatouille.php"><img src="FM7.jpg" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">RATATOUILLE</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="avatar.php"><img src="FM8.jpg" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">AVATAR</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="pobrescriaturas.php"><img src="FM9.jpg" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">POBRES CRIATURAS</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="sextafeira.php"><img src="FM10.webp" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">SEXTA-FEIRA MUITO LOUCA</p>
        </div>
      </div>
    </section><br>

    <section class="cards">
      <div class="card" style="width: 18rem;">
        <a href="osestranhos.php"><img src="FM11.webp" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">OS ESTRANHOS</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="procurandonemo.php"><img src="FM12.jpg" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">PROCURANDO NEMO</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="piratasdocaribe.php"><img src="FM13.jpg" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">PIRATAS DO CARIBE</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="frozen.php"><img src="FM14.jpg" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">FROZEN</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="todomundo.php"><img src="FM15.jpg" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">TODO MUNDO EM PÂNICO</p>
        </div>
      </div>
    </section>

    <h2>SÉRIES ONLINE</h2>

    <section class="cards">
      <div class="card" style="width: 18rem;">
        <a href="percyjackson.php"><img src="FM16.webp" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">PERCY JACKSON</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="verdadessecretas.php"><img src="FM17.webp" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">VERDADES SECRETAS</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="euapatroa.php"><img src="fm21.jpg" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">EU, A PATROA E AS CRIANÇAS</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="gravityfalls.php"><img src="FM19.webp" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">GRAVITY FALLS</p>
        </div>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="xmen.php"><img src="FM20.png" class="card-img-top"></a>
        <div class="card-body">
          <p class="card-text">X-MEN</p>
        </div>
      </div>

    </section>
  </main>

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