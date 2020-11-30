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
<div id="nomeaula">Gravação Externa</div>
<div id="g1">
<div id="videoaula">
<video id="youtubehere" controls="controls" width="750" height="405">
<source src="https://drive.google.com/uc?export=download&id=195qsnP_RmVsQJtJhKp_rCCSG7iOBgeRg" type='video/mp4'/>
</video>

</div>
<div id="descaula">
<a href="01.php">
<img src="../../img/anterior.png"></a> 
<a href="03.php">
<img src="../../img/proximo.png"> </a> <br />
Agora você vai conhecer alguns populares e importântes ângulos de filmagem, além disso, você entederá como eles funcionam.
</div>
</div>
</body>
</html>
