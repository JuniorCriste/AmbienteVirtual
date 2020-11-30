<?php
session_start();
include('conecta.php');

if(empty($_POST['eMail']) || empty($_POST['Senha'])) {
    header('Location: login.php');
    exit();
}

$eMail = mysqli_real_escape_string($conn, $_POST['eMail']);
$Senha = mysqli_real_escape_string($conn, $_POST['Senha']);


$query = "select * from tbt_user where eMail = '{$eMail}' and Senha = '{$Senha}'";
$BuscaNome = "select Nome from tbt_user where eMail = '$eMail'";
$BuscaSNome = "select Sobrenome from tbt_user where eMail = '$eMail'";

$result = mysqli_query($conn, $query);
$resultBN = mysqli_query($conn, $BuscaNome);
$resultSBN = mysqli_query($conn, $BuscaSNome);

$row = mysqli_num_rows($result);
$rowBN = mysqli_fetch_assoc($resultBN);
$rowBSN = mysqli_fetch_assoc($resultSBN);

$Nome = $rowBN['Nome'];

$Sobrenome = $rowBSN['Sobrenome'];

if($row == 0) {
    header('Location: login.php');
    exit();
} else {
    $_SESSION['eMail'] = $eMail;
    $_SESSION['Nome'] = $Nome;
    $_SESSION['Sobrenome'] = $Sobrenome;
    header('Location: redirecionar.htm');
    exit();
}
