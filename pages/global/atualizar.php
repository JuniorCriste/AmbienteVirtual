<?php
session_start();
include('conecta.php');
include('verificaaut.php');

$NNome = filter_input(INPUT_POST, 'Nome', FILTER_SANITIZE_STRING);
$NSobrenome = filter_input(INPUT_POST, 'Sobrenome', FILTER_SANITIZE_STRING);


$eMail = $_SESSION['eMail'];
// $Nome = mysqli_real_escape_string($conn, $_POST['eMail']);
// $Sobrenome = mysqli_real_escape_string($conn, $_POST['eMail']);


$atualize = "update tbt_user set Nome='{$NNome}', Sobrenome='{$NSobrenome}' where eMail='{$eMail}'";


$atualizeJa = mysqli_query($conn, $atualize);

$_SESSION['Nome'] = $NNome;
$_SESSION['Sobrenome'] = $NSobrenome;


header('Location: perfil.php');


