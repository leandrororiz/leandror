<?php
session_start();
include_once('conexao.php');
?>
<!doctype html>
<html lang="pt-BR">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listar - Mundo dos Filmes</title>
    <link rel="icon" href="logo.png" id="logo">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="projeto.css">
</head>

<style>
    main h2 {
        margin-left: 920px; 
        text-decoration: underline;
        color: red;
    }

    main p {
        color: darkgrey;
        margin-left: 230px;
        font-size: large;
    }

    #s10{
        color: red;
        margin-left: 43%;
    }

    #cad{
        margin-left: 43%;
    }

    .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 2rem;
            border-radius: 12px;
            background-color: black;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border: 1px solid #dee2e6;
            margin-right: 70%;
            margin-left: -5%;
        }

        

        /* .button {
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
          }

          .button{
            background-color: #6c757d;
        }

        .button{
            background-color: #5a6268;
        }

        .button {
            background-color: red;
        }

        .button {
            background-color: darkred;
        } */
        
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
    <h2>Listar</h2>
</main>
<br><br><br>
<section id="s10">

<div class="form-container">

    <?php
    if (isset($_SESSION['msg'])) {
        echo ($_SESSION['msg']);
        unset($_SESSION['msg']);
    }

    // Receber o número da página
    $pagina_atual = filter_input(INPUT_GET, 'pagina', FILTER_SANITIZE_NUMBER_INT);
    $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
   
    //Setar a quantidade de itens por página
    $qnt_result_pg = 2;
   
    //Calcular o inicio da visualização
    $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;
    $select_user = "SELECT * FROM usuarios LIMIT $inicio, $qnt_result_pg";
    $selected_user = mysqli_query($conn, $select_user);
   
    //Paginação - Somar a quantidade de usuários
    $result_pg = "SELECT COUNT(id) as num_result FROM usuarios";
    $resultado_pg = mysqli_query($conn, $result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);
    
    //Quantidade de página
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);
   
    
    while ($row_user = mysqli_fetch_assoc($selected_user)) {
        echo "ID: <span style='color: white;'>" . $row_user['id'] . "</span><br>";
        echo "Nome: <span style='color: white;'>" . $row_user['nome'] . "</span><br>";
        echo "E-mail: <span style='color: white;'>" . $row_user['email'] . "</span><br>";
        echo "CPF: <span style='color: white;'>" . $row_user['cpf'] . "</span><br>";
        echo "Senha: <span style='color: white;'>" . $row_user['senha'] . "</span><br>";
        echo "<a href='edit_usuario.php?id=". $row_user['id']. "' class='button' > Editar</a> | ";
        echo "<a href='proc_apagar_usuarios.php?id=". $row_user['id']. "'>Apagar</a> <br> ";
    }
  
   
    //Limitar os links antes e depois
    $max_links = 2;
    echo "<a href='listar.php?pagina=1'>Primeira</a>";

    for ($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++) {
        if ($pag_ant >= 1) {
            echo "<a href='listar.php?pagina=$pag_ant'>$pag_ant</a>";
        }
    }

    echo "$pagina_atual";

    for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++) {
        if ($pag_dep <= $quantidade_pg) {
            echo "<a href='listar.php?pagina=$pag_dep'>$pag_dep</a>";
        }
    }

    echo "<a href='listar.php?pagina=$quantidade_pg'>Última</a>";

    ?>

</div>

    </section>
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