<!-- validando login -->
<!-- <?php
session_start();
include_once 'conexao.php';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $dados = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $dados['email'];
        $_SESSION['senha'] = $dados['senha'];
        header("Location: projetofinal.php");
    } else {
        $_SESSION['msg'] = "<p style='color:red'>Email ou senha incorretos!</p>";
        header("Location: projetofinal.php");
    }
    // mysqli_close($conn);
}
?> -->

<!doctype html>
<html lang="pt-BR">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - Mundo dos Filmes</title>
    <link rel="icon" href="logo.png" id="logo">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="projeto.css">
</head>
<style>
    main h2 {
        text-align: center;
        margin-left: 0;
        text-decoration: underline;
        color: red;
    }

    main p {
        color: darkgrey;
        margin-left: 230px;
        font-size: large;
    }

    #nomes {
        color: red;
        margin-left: 43%;
    }

    #cad {
        margin-left: 878px;
    }

    .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 2rem;
            border-radius: 12px;
            background-color: black;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border: 1px solid #dee2e6;
        }

        .form-container label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: red;
        }

  
        
    
        .form-container input[type="email"],
        .form-container input[type="password"] {
            width: calc(100% - 2rem);
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 2px solid #ced4da;
            border-radius: 8px;
            font-size: 0.875rem;
        }

        .form-container input[type="submit"],
        .form-container input[type="button"] {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
          
         
            
        }

        

        .form-container input[type="submit"] {
            background-color: red;
        }

        .form-container input[type="submit"]:hover {
            background-color: darkred;
        }

        .form-container input[type="button"] {
            background-color: #6c757d;
        }

        .form-container input[type="button"]:hover {
            background-color: #5a6268;
        }
</style>

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
        <h2>Login</h2>
    </main>
    <br><br><br>
    <?php
    if (isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <div class="form-container">
            <form action="funcaologin.php" method="post">
                <label for="email">E-mail:</label>
                <input required type="email" name="email" id="email" placeholder="Digite o seu email"><br>
                <label for="senha">Senha:</label>
                <input type="password" required name="senha" id="senha" placeholder="Digite sua Senha"><br>
                <input type="submit" value="Login"> 
            </form>
        </div>
    <br><br>
    <br><br>

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