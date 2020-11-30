<?php
session_start();
if(!$_SESSION['eMail']) {
    header('Location: login.php');
    exit();
}
