 <?php

// MUDE O NOME DESSE ARQUIVO PARA conecta.php
// PREENCHA COM SEU ACESSO E BANCO DE DADOS
// TEM UM PRINT DO MEU BANCO EM img/database/estrutura_table.png PARA VOCÊ MONTAR SUA ESTRUTURA IGUAL

$servidor = "servidor";
$usuario = "usuario";
$senha = "senha";
$dbname = "nomedatabela";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);


