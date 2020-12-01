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
<div id="nomeaula">Plano Sequência</div>
<div id="g1">
<div id="videoaula">
<video id="youtubehere" controls="controls" width="720" height="405">
<source src="https://drive.google.com/uc?export=download&id=14ZU3V2M8KJWq8R0VagS5qCIraSPRLCvs" type='video/mp4'/>
</video>

</div>
<div id="descaula">
<a href="03.php">
<img src="../../img/anterior.png"></a> 
<a href="05.php">
<img src="../../img/proximo.png"> </a><br />
O plano sequência consiste em um movimento de câmera que segue o personagem, tudo isso sem cortes. Além de ser interativo, ele dá a sensação de expansão.
</div>
</div>
</body>
</html>
