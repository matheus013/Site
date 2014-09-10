<?php

//conectando com o localhost - mysql
$host = 'mysql.hostinger.com.br';
$user = 'u642109495_icone';
$pass = 'matheus23';
$nomeBanco = 'u642109495_icone';
$conexao = mysql_connect($host, $user, $pass);

if (!$conexao){
     ?>
	 <script type="text/javascript">
	 alert("Aconteceu um erro.");
	 </script>
	 <meta http-equiv="refresh" content="0;url=http://www.iconejr.com">
	 <?php
	 }
//conectando com a tabela do banco de dados
$banco = mysql_select_db($nomeBanco, $conexao);
if (!$banco){
    ?>
	 <script type="text/javascript">
	 alert("Aconteceu um erro.");
	 </script>
	 <meta http-equiv="refresh" content="0;url=http://www.iconejr.com">
	 <?php
	}
?>
