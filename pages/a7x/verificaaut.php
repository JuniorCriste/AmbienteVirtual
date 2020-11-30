<?php
session_start();
if(!$_SESSION['eMail']) {
    header('Location: ../global/login.php');
    exit();
}
