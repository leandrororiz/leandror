<!doctype html>
<html lang="pt-BR">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Politica de Privacidade - Mundo dos Filmes</title>
    <link rel="icon" href="logo.png" id="logo">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="projeto.css">
</head>
<style>
    h2,
    h3,
    h4 {
        color: white;
    }

    h2 {
        margin-left: 0px;
        text-decoration: underline;
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
        <h2>Política de Privacidade</h2>
        <h3>Introdução</h3>
        <p>Bem-vindo ao <strong style="color:red">Mundo dos Filmes</strong>, o seu portal de filmes favoritos! Nós levamos a sua privacidade a sério e estamos comprometidos em proteger as suas informações pessoais. Esta Política de Privacidade explica como coletamos, usamos, divulgamos e protegemos as suas informações quando você visita e utiliza nosso site.</p>
        <h3>Informações que Coletamos</h3>
        <h4>1. Informações Pessoais:</h4>
        <p>Quando você se registra em nosso site, assinando nossa plataforma ou criando uma conta, podemos coletar informações pessoais, como:</p>
        <ul>
            <li>Nome</li>
            <li>Endereço de e-mail</li>
            <li>Informações de contato</li>
        </ul>
        <h4>2. Informações de Navegação:</h4>
        <p>Quando você visita nosso site, coletamos automaticamente informações sobre a sua visita, incluindo:</p>
        <ul>
            <li>Endereço IP</li>
            <li>Tipo de navegador</li>
            <li>Páginas visitadas</li>
            <li>Data e hora da visita</li>
        </ul>
        <h4>3. Cookies e Tecnologias Semelhantes:</h4>
        <p>Usamos cookies e tecnologias semelhantes para melhorar a sua experiência de navegação e fornecer conteúdo personalizado. Os cookies são pequenos arquivos de dados armazenados no seu dispositivo. Você pode configurar seu navegador para recusar cookies, mas isso pode afetar a funcionalidade do site.</p>
        <h3>Como Usamos Suas Informações</h3>
        <p>Usamos suas informações para:</p>
        <ul>
            <li>Melhorar o Serviço: Personalizar a sua experiência e melhorar nosso site com base nas suas preferências.</li>
            <li>Comunicação: Enviar atualizações, newsletters e promoções, se você optou por recebê-las.</li>
            <li>Análise: Monitorar o uso do site e coletar dados analíticos para entender o comportamento do usuário.</li>
        </ul>
        <h3>Compartilhamento de Informações</h3>
        <p>Não vendemos, trocamos ou alugamos suas informações pessoais a terceiros. No entanto, podemos compartilhar suas informações com:</p>
        <ul>
            <li>Prestadores de Serviços: Terceiros que auxiliam na operação do nosso site, como provedores de hospedagem e serviços de análise.</li>
            <li>Requisitos Legais: Se exigido por lei ou para proteger nossos direitos e segurança, podemos divulgar suas informações.</li>
        </ul>
        <h3>Segurança</h3>
        <p>Implementamos medidas de segurança apropriadas para proteger suas informações pessoais contra acesso não autorizado, alteração, divulgação ou destruição. No entanto, nenhuma transmissão de dados pela Internet é completamente segura, e não podemos garantir a segurança absoluta.</p>
        <h3>Seus Direitos</h3>
        <p>Você tem o direito de:</p>
        <ul>
            <li>Acessar e Corrigir: Solicitar acesso às suas informações pessoais e corrigir qualquer informação incorreta.
            </li>
            <li>Excluir: Solicitar a exclusão de suas informações pessoais, salvo em casos onde a retenção seja exigida por lei.
            </li>
            <li>Optar por Não Receber: Optar por não receber comunicações promocionais a qualquer momento.
            </li>
        </ul>
        <h3>Alterações na Política de Privacidade</h3>
        <p>Podemos atualizar esta Política de Privacidade periodicamente para refletir mudanças em nossas práticas ou requisitos legais. Recomendamos que você revise esta página regularmente para estar ciente de quaisquer alterações.</p>
        <h3>Contato</h3>
        <p>Se você tiver dúvidas ou preocupações sobre esta Política de Privacidade ou sobre como tratamos suas informações, entre em contato conosco em:</p>
        <ul>
            <li>Email: mundodosfilmes@gmail.com</li>
            <li>Endereço: QNG, Área Especial 39 / Taguatinga - DF</li>
        </ul>
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