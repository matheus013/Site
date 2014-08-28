<?php

//conectando com o localhost - mysql
$host = 'dbmy0102.whservidor.com';
$user = 'eneej2014';
$pass = 'iconeUFAL';
$banco = 'eneej2014';
$conexao = mysql_connect($host, $user, $pass);

if (!$conexao)
    die("Erro de conexão com localhost, o seguinte erro ocorreu -> " . mysql_error());
//conectando com a tabela do banco de dados
$banco = mysql_select_db($banco, $conexao);
if (!$banco)
    die("Erro de conexão com banco de dados, o seguinte erro ocorreu -> " . mysql_error());
?>
