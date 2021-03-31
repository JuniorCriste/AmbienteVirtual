<?php
session_start();
if(!$_SESSION['eMail']) {
    $_SESSION['endatual'] = $_SERVER['REQUEST_URI'];
    $_SESSION['endatual'] =  "..".$_SESSION['endatual'];
    header('Location: ../global/login.php');
    exit();
}
