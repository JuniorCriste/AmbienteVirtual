<?php
session_start();
include('verificaaut.php');
?>
<DOCTYPE html>
<html lang="pt-br">
<head>
<title> Ambiente Virtual</title>
<link href="../estilo/frame.css" rel="stylesheet">
<link href="../estilo/icones.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Montserrat|Staatliches&display=swap' rel='stylesheet'/>
</head>

<body>
<div id="nomeaula">Tilt e Panoramica</div>
<div id="g1">
<div id="videoaula">
<video id="youtubehere" controls="controls" width="720" height="405">
<source src="https://drive.google.com/uc?export=download&id=1DjQsrm3gHAVi-Ry5QfC63PoX7Pco5eyH" type='video/mp4'/>
</video>

</div>
<div id="descaula">
<a href="06.php">
<img src="../../img/anterior.png"></a> 
<a href="08.php">
<img src="../../img/proximo.png"> </a><br />
Ao contrário do plano sequência, nos planos tilt e panoramica o cinegrafista não segue andando, mas ele movimenta a câmera para um determinado eixo, só que sem sair do lugar.
</div>
</div>
</body>
</html>
