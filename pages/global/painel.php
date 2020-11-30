<?php
session_start();
include('verificaaut.php');
?>

<b>email:</b> <?php echo $_SESSION['eMail']; ?> <br>
<b>nome:</b> <?php echo $_SESSION['Nome']; ?> <br>
<b>sobrenome:</b> <?php echo $_SESSION['Sobrenome']; ?> <br>


