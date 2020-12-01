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
<div id="nomeaula">Gravação e Remoção de Ruídos</div>
<div id="g1">
<div id="videoaula">

<iframe id="youtubehere" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" title="Interface" width="720" height="405" src="https://www.youtube-nocookie.com/embed/Xs_SmwSIZNg?modestbranding=1&amp;autoplay=false&amp;rel=0&amp;iv_load_policy=3&amp;enablejsapi=1&amp;"></iframe>

</div>
<div id="descaula">
<a href="11.php">
<img src="../../img/anterior.png"></a> 
<a href="13.php">
<img src="../../img/proximo.png"> </a> <br/>
Gravar áudio é muito importante, mas ainda mais importante é a qualidade dele, então eventualmente precisamos tratar esse áudio removendo ruídos indesejados.
</div>
</div>
</body>
</html>
