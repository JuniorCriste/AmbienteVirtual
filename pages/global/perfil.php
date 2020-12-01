<?php
session_start();
include('verificaaut.php');
?>

<DOCTYPE html>
<html lang="pt-br">
<link href="../estilo/frame.css" rel="stylesheet">
<meta charset="utf-8">
<center>

<div id="titulof"> 🤪 Perfil<br/></div>
<form method="POST" action="atualizar.php">
<div id="preencher">
<b>Atualizar o nome</b> (Aparecerá no certificado!)

<div class="campo">
    Nome<br />
    <input type="text" name="Nome" placeholder="Primeiro nome" required="required">
    </div>
    
    <div class="campo">
    Sobrenome<br />
    <input type="text" name="Sobrenome" placeholder="O restante" required="required">
    </div>
<br />
<button onclick="history.go(-1);">  Voltar  </button>   &nbsp; <input type="submit" value="     Atualizar     ">    
</div>
</form>

</div>

<br />

<hr />
<div id="dados">
<b>DADOS ATUAIS </b> <br />
<b>Email cadastrado:</b> <?php echo $_SESSION['eMail']; ?>  <br />
<b>Nome completo:</b> <?php echo $_SESSION['Nome'] . " " . $_SESSION['Sobrenome']; ?>  <br /> <br />
<a href="https://api.whatsapp.com/send?phone=5527988334621&text=Ol%c3%a1%20Preciso%20de%20suporte" target="_blank">Se precisar de ajuda, contate ao <b>suporte</b></a>.
</div>


</html>
