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
<center>
<div id="preview">

<?php
echo "<div id='texto'>
<center>
<div class='titucert'>Certificado</div>
Certificamos que o aluno<br />
" . $_SESSION['Nome'] . " " .$_SESSION['Sobrenome'] . "<br/>
concluiu com aproveitamento positivo<br />
<b>Técnicas de Filmagem e Enquadramento</b> <br />
Na data <br />
    php
</center>
</div>
<div id='cod'>
Registro: php<br/>
Verificação: informaticode.store/valida
<br /><br />"
?>

<center>
<button id="btGerarPDF">Salvar em PDF</button>
</center>
</div>

<img id="backcert" src="../../img/certi.png">

</div>


<div id="editor"></div>

</center>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.1.1/jspdf.umd.min.js">
var doc = new jsPDF();
var specialElementHandlers = {
    '#editor': function (element, renderer) {
        return true;
    }
};

$('#btGerarPDF').click(function () {
    doc.fromHTML($('#preview').html(), 15, 15, {
        'width': 170,
            'elementHandlers': specialElementHandlers
    });
    doc.save('exemplo.pdf');
});
</script>







</body>
</html>
