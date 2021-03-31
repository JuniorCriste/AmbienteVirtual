<?php
session_start();
?>

<DOCTYPE html>
<html lang="pt-br">
<head>
<title> Ambiente Virtual - Técnicas de Filmagem e Enquadramento</title>
<link href="../estilo/frame.css" rel="stylesheet">
<link href="../estilo/icones.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Montserrat|Staatliches&display=swap' rel='stylesheet'/>
</head>

<body>
<div id="nomecurso">Técnicas de Filmagem e Enquadramento</div>
<div id="g1">
<div id="capacurso">
<img src="../../img/capas/tecnicasFilmagem.png" draggable="false">
</div>
<div id="desccurso">
No curso "Técnicas de Filmagem e Enquadramentos" você aprende de forma rápida o básico da cinematografia, os ângulos de filmagem e outras informações úteis de enquadramento. Você também acompanha exemplos que aconteceram no cinema.
</div>
</div>
<div id="aulas">
    <livro> </livro> <a href="00.php">Introdução <play></play> </a><br />
    <livro> </livro> <a href="01.php">Dá pra usar celular como câmera? <play></play> </a><br />
    <livro> </livro> <a href="02.php">Gravação Externa <play></play> </a><br />
    <livro> </livro> <a href="03.php">Plano Geral, Grande Geral e Plano Americano <play></play> </a><br />
    <livro> </livro> <a href="04.php">Plano Sequência <play></play> </a><br />
    <livro> </livro> <a href="05.php">Plano Zoom IN e Zoom OUT <play></play> </a><br />
    <livro> </livro> <a href="06.php">Plongeé e Contra Plongée <play></play> </a><br />
    <livro> </livro> <a href="07.php">Tilt e Panoramica <play></play> </a><br />
    <livro> </livro> <a href="08.php">Plano Subjetivo e Over the Shoulder <play></play> </a><br />
    <livro> </livro> <a href="09.php">Plano Close UP e Big Close UP <play></play> </a><br />
    <livrob> </livrob> <a href="11.php">BÔNUS: Ferramentas Gratuitas Para Produção!<play></play> </a><br />
    <livrob> </livrob> <a href="12.php">BÔNUS: Gravação e Remoção de Ruídos<play></play> </a><br />
    <livrob> </livrob> <a href="13.php">BÔNUS: Edição de Vídeo Completa<play></play> </a><br />
    <livrob> </livrob> <a href="14.php">BÔNUS: Censura Automática no Vídeo<play></play> </a><br />
    <exercicio> </exercicio> <a href="teste.php">Atividade de conclusão <play></play> </a><br />
    <certificado> </certificado> Emitir seu certificado! (Liberado apenas após concluir a atividade)
</div>



<?php
$para = $_SESSION['paralocal'];

if($para == 'eduzz') {
     $_SESSION['eduzz'] = "<p style='color: gold;'>Obrigado por adquirir nosso curso pela Eduzz! Agora faça seu <b> cadastro de aluno </b> e tenha acesso a todo conteúdo!</p>";    
    header('Location: ../global/cadastro.php');
}

?>


<?php
if(!$_SESSION['endatual']){

} else{
?>
<script type="text/javascript">
 window.location.href = <?php echo $_SESSION[endatual] ?> ; 
</script>
<?php } 
?>


</body>
</html>
