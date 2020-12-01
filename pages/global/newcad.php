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






$ExisteEmail = "select eMail from tbt_user where eMail = '{$eMail}'";

$resultEE = mysqli_query($conn, $ExisteEmail);

$rowEE = mysqli_num_rows($resultEE);

$result_usuario = "INSERT INTO tbt_user (Nome, Sobrenome, eMail, Celular, Senha, created, Certificado, Conclusao) VALUES ('$Nome', '$Sobrenome', '$eMail', '$Celular', '$Senha', NOW(), '0', '0')";






if($rowEE == 0) {
    $resultado_usuario = mysqli_query($conn, $result_usuario);
    $_SESSION['recado'] = "<p style='color: green;'>Cadastrado! Agora Faça seu login...</p>";    
    header('Location: login.php'); 

} else {
    $_SESSION['erroe'] = "<p style='color: red;'>Esse email já foi cadastrado! Use outro ou entre em contato com o suporte...</p>";    
    header('Location: cadastro.php'); 

}

