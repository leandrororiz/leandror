<?php
session_start();
include_once('conexao.php');
//echo "<script src='src/js/script.js' defer></script>";

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$verifica = "SELECT * FROM usuarios WHERE email= '$email' AND senha = '$senha'";
$resultado = mysqli_query($conn, $verifica);

if (mysqli_num_rows($resultado) > 0) {
    // $_SESSION['msg'] = "LOGADO";
    //$_SESSION['msg'] = "<h3 id='msg' class='msg'>LOGADO</h3>";
    header('Location: projetofinal.php');

    // echo "
    // <script>
    //     let login = document.getElementById('login');
    //     let logado = document.getElementById('logado');

    //     login.style.display = 'none';
    //     logado.style.display = 'block';
    // </script>
    
    // ";

} else {

    $_SESSION['msg'] = "<p style='color:red; text-align: center; font-size: larger;' id='msg' class='msg'>Email ou Senha incorretos.</p>";
    header('Location: login.php');
}
exit();
?>