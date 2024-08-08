<!doctype html>
<html lang="pt-BR">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Relatório - Mundo dos Filmes</title>
    <link rel="icon" href="logo.png" id="logo">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="projeto.css">
</head>
<style>
    h2 {
        margin-left: 0px;
        text-decoration: underline;
    }
    h2,
    h3,
    h4 {
        color: white;
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


    <main style="color:darkgrey; margin-left: 230px; margin-right: 230px">
        <h2>Relatório do Projeto de Desenvolvimento do Site: Mundo dos Filmes</h2>
        <h3>Visão Geral</h3>
        <p>O site <strong style="color:red">Mundo dos Filmes</strong> é uma plataforma voltada para a apresentação e organização de filmes e séries, oferecendo informações e links para uma variedade de conteúdos. O layout é moderno, responsivo e utiliza o framework Bootstrap 5 para garantir uma boa experiência em diferentes dispositivos.</p>
        <h3>Estrutura e Layout</h3>
        <h4>1. Cabeçalho (Header)</h4>
        <ul>
            <li>Logo e Título: O cabeçalho apresenta o logo do site com o nome "Mundo dos Filmes". O logo é um ícone de imagem localizado na parte superior esquerda da página, e o título está ao lado.</li>
            <li>Barra de Navegação: Utiliza uma barra de navegação fixa com menu expansível para diferentes categorias e seções, que inclui:</li>
            
                <ul>
                    <li>Início: Link para a página principal.</li>
                    <li>Categorias: Menu suspenso com links para categorias como Ação, Terror, Comédia, Fantasia e Animação.</li>
                    <li>Lançamentos: Menu suspenso com links para novos lançamentos de filmes.</li>
                    <li>Séries: Link para a seção de séries.</li>
                    <li>Cadastro e Login: Botões destacados para registro e login de usuários.</li>
                </ul>
            
        </ul>
        <h4>2. Corpo Principal (Main)</h4>
        <p>Quando você visita nosso site, coletamos automaticamente informações sobre a sua visita, incluindo:</p>
        <ul>
            <li>Lançamentos: Seção destacando novos lançamentos de filmes com cards que apresentam imagens e descrições curtas.</li>
            <li>Filmes Online: Seção dedicada a filmes disponíveis para visualização online, organizada em cards semelhantes à seção de lançamentos.</li>
            <li>Séries Online: Seção para séries disponíveis online, também organizada em cards com imagens e descrições.</li>
        </ul>
        <h4>3. Rodapé (Footer)</h4>
        <ul>
            <li>Logo e Título: Repetição do logo e título do site.</li>
            <li>Direitos Autorais: Informação sobre direitos autorais.</li>
            <li>Links Importantes: Links para Política de Privacidade e Contato, com destaque em vermelho.</li>
        </ul>
        <h3>Funcionalidade</h3>
        <ul>
            <li>Responsividade: O site é responsivo, utilizando o framework Bootstrap para garantir que o layout se ajuste adequadamente a diferentes tamanhos de tela.</li>
            <li>Navegação: Menus suspensos são exibidos corretamente ao interagir com o mouse (hover) e escondidos quando o mouse é removido.</li>
            <li>Acessibilidade: O site utiliza práticas básicas de acessibilidade, como textos alternativos para imagens e marcações semânticas apropriadas.</li>
        </ul>
        <h3>Elementos Técnicos</h3>
        <ul>
            <li>HTML: O código HTML está bem estruturado, seguindo as boas práticas de marcação semântica.
            </li>
            <li>CSS: O site inclui um arquivo CSS adicional (projeto.css), que é utilizado para personalizar o estilo além do fornecido pelo Bootstrap.
            </li>
            <li>JavaScript: O site inclui scripts para funcionalidades de menu suspenso, que são ativadas por eventos de mouse.
            </li>
        </ul>
        <h3>Conclusão</h3>
        <p>O site <strong style="color:red">Mundo dos Filmes</strong> está bem projetado, com uma navegação intuitiva e uma apresentação clara das seções e conteúdos. A utilização do Bootstrap garante uma aparência moderna e responsiva. O site é adequado para seu propósito de fornecer informações sobre filmes e séries, tanto em termos de funcionalidade quanto de design. A implementação técnica é sólida, e as funcionalidades principais estão operando conforme o esperado.</p>
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