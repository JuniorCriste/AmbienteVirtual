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

$result = mysqli_query($conn, $query);
$resultBN = mysqli_query($conn, $BuscaNome);

$row = mysqli_num_rows($result);
$rowBN = mysqli_fetch_assoc($resultBN);

$Nome =  $rowBN['Nome'];

if($row == 0) {
    header('Location: login.php');
    exit();
} else {
    $_SESSION['eMail'] = $eMail;
    $_SESSION['Nome'] = $Nome;
    header('Location: painel.php');
    exit();
}
