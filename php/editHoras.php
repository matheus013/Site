<?php 
    session_start(); 
    include 'checkSession.php';
    ?>
<html>
    <body bgcolor="#FFFFFF">
        <html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css">
        <?php
        include 'testeFormularios.php';
        //Setando valores das variÃ¡veis
        $id = $_SESSION['id'];
        $horas = testInput($_POST ["horas"]);
        
        
        // Estabelecendo conexÃ£o com o banco de dados        
        include 'connectDB.php';
        
        $query = mysql_query("UPDATE usuario SET horas = horas + $horas WHERE id = $id");
        if($query)
            echo '<a class="text">Horas adicionadas com sucesso.</a><br>';
			
        else
            echo '<a class="text">Erro: Não foi possível acessar o banco de dados.</a><br>';
        
        mysql_close();
        ?>
    </body>
    <a href="home.php"><button type="button" id="logout">Voltar</button></a>
</html>