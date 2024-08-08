<?php
session_start();
include_once("conexao.php");


$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_NUMBER_INT);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

if (empty($nome) || empty($email) || empty($cpf) || empty($senha)) {
    $_SESSION['msg'] = "<p style='color:red;'>Erro ao cadastrar o usuário<p/>";
    header("Location: cadastro.php");
}

$query_verifica_email = "SELECT id FROM usuarios WHERE email = '$email'";
$resultado_verifica_email = mysqli_query($conn, $query_verifica_email);

//Verifica se o cpf já está cadastrado
$query_verifica_cpf = "SELECT id FROM usuarios WHERE cpf = '$cpf'";
$resultado_verifica_cpf = mysqli_query($conn, $query_verifica_cpf);

if ((mysqli_num_rows($resultado_verifica_email) > 0) || (mysqli_num_rows($resultado_verifica_cpf) > 0)) {
    $_SESSION['msg'] = "<p style='color:red; text-align: center; font-size: larger;' id='msg' class='msg'>Email ou CPF já cadastrados.</p>";
    header("location: cadastro.php");
    exit();
}


//echo "Nome: $nome";
//echo "E-mail: $email";

$criar_usuario = "INSERT INTO usuarios (nome, email, cpf, senha ) VALUES ('$nome', '$email', '$cpf', '$senha')";
$usuario_criado = mysqli_query($conn, $criar_usuario);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:green; margin-left: 43%; font-size: larger;'>Usuário cadastrado com sucesso<p/>";
    header("Location: login.php");
}
//  else {
//     $_SESSION['msg'] = "<p style='color:red;'>Erro ao cadastrar o usuário<p/>";
//     header("Location: cadastro.php");
// }
