<?php
session_start();
?>
<DOCTYPE html>
<html lang="pt-br">
<link href="../estilo/frame.css" rel="stylesheet">
<meta charset="utf-8">
<center>
<div id="titulof"> 😍 Acessar:<br/></div>
<div id="forms">
<form method="POST" action="acessar.php">
<div id="preencher">

<?php
    if(isset($_SESSION['recado'])){
    echo $_SESSION['recado'];
    unset($_SESSION['recado']);
    }
?>

<div id="campos"> 
    <div class="campo">
    E-mail<br />
    <input type="email" name="eMail" placeholder="seuemail@mail.com" required="required">
    </div>
    
   <div class="campo">
    Senha<br />
    <input type="password" name="Senha" placeholder="A senha de acesso" required="required">
    </div>
    
</div>
<br />
<input type="submit" value="     Acessar     "> 
<br />
<br />
<a href="newcad.htm"> <p style="font-size:15px;">Não tenho conta, <b>Criar uma</b>!</a>
</div>
</form>
</div>
</html>
