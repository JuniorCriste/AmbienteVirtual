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
<div id="nomeaula">Plano Geral, Grande Geral e Plano Americano</div>
<div id="g1">
<div id="videoaula">
<video id="youtubehere" controls="controls" width="750" height="405">
<source src="https://drive.google.com/uc?export=download&id=1uMjEik-m7SfHWLYRdQGGfcK6gH4-stjo" type='video/mp4'/>
</video>

</div>
<div id="descaula">
<a href="02.php">
<img src="../../img/anterior.png"></a> 
<a href="04.php">
<img src="../../img/proximo.png"> </a><br />
Conheça agora o plano geral, plano grande geral e o cinematográfico plano americano.
</div>
</div>
</body>
</html>
