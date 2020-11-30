<?php
session_start();
include('verificaaut.php');
?>

email: <?php echo $_SESSION['eMail']; ?> <br>
Usuário: <?php echo $_SESSION['Nome']; ?>
