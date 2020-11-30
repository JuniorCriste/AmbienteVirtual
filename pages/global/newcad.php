<?php
session_start();
include_once("conecta.php");

    $Nome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
    $Sobrenome = filter_input(INPUT_POST, 'Sobrenome', FILTER_SANITIZE_STRING);
    $eMail = filter_input(INPUT_POST, 'eMail', FILTER_SANITIZE_EMAIL);
    $Celular = filter_input(INPUT_POST, 'Celular', FILTER_SANITIZE_STRING);
    $Senha = filter_input(INPUT_POST, 'Senha', FILTER_SANITIZE_STRING);

echo "Nome é: $Nome <br>";
echo "Sobrenome é: $Sobrenome <br>";
echo "Email é: $eMail <br>";
echo "Celular é: $Celular <br>";
echo "Senha é: $Senha <br>";

$result_usuario = "INSERT INTO tbt_user (Nome, Sobrenome, eMail, Celular, Senha, created) VALUES ('$Nome', '$Sobrenome', '$eMail', '$Celular', '$Senha', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);


if(mysqli_insert_id($conn)) {
    $_SESSION['recado'] = "<p style='color: green;'>Cadastrado! Agora Faça seu login...</p>";
    header("Location: login.php");
}




