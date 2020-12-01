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
<div id="nomeaula">Plano Zoom IN e Zoom OUT</div>
<div id="g1">
<div id="videoaula">
<video id="youtubehere" controls="controls" width="720" height="405">
<source src="https://drive.google.com/uc?export=download&id=17DMgWgeIisAymFUiwuqvC5-xNsr8KE6A" type='video/mp4'/>
</video>


</div>
<div id="descaula">
<a href="04.php">
<img src="../../img/anterior.png"></a> 
<a href="06.php">
<img src="../../img/proximo.png"> </a><br />
O zoom serve para aproximar um detalhe, seja para mostrar melhor uma parte, seja para transmitir uma emoção, como por exemplo um susto com o protagonista. 
</div>
</div>
</body>
</html>
