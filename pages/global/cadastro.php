<?php	
session_start();	
?>
<DOCTYPE html>
<html lang="pt-br">
<link href="../estilo/frame.css" rel="stylesheet">
<meta charset="utf-8">
<center>
<div id="titulof"> 🧐 Cadastro:<br/></div>
<div id="forms">

<form method="POST" action="newcad.php">
<div id="preencher">

<?php	
    if(isset($_SESSION['erroe'])){	
    echo $_SESSION['erroe'];	
    unset($_SESSION['erroe']);	
    }	

?>	

<div id="campos">
    <div class="campo">
    Nome<br />
    <input type="text" name="Nome" placeholder="Primeiro nome" required="required">
    </div>
    
    <div class="campo">
    Sobrenome<br />
    <input type="text" name="Sobrenome" placeholder="O restante" required="required">
    </div>
    
    <div class="campo">
    E-mail<br />
    <input type="email" name="eMail" placeholder="seuemail@mail.com" required="required">
    </div>
    
    <div class="campo">
    Celular<br />
    <input type="tel" name="Celular" placeholder="DDD+número" required="required" pattern="[0-9]{null}">
    </div>
    
    <div class="campo">
    Senha<br />
    <input type="password" name="Senha" placeholder="A senha de acesso" required="required">
    </div>
    
</div>
<br />
<input type="reset" value="Limpar">
<input type="submit" value="     Criar Conta     "> 
<br />
<br />
<a href="login.php"><p style="font-size:15px;">Já possuo conta, <b>acessar</b>!</p></a>
</div>
</form>
</div>
</div>
</html>
