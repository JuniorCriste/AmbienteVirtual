<?php
session_start();
if(!$_SESSION['eMail']) {
    $_SESSION['endatual'] = $_SERVER['REQUEST_URI'];
  //  $_SESSION['endatual'] =  "".substr($_SESSION['endatual'], 1);
    header('Location: ../global/login.php');
    exit();
}
