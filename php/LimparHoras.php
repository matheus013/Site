<html>
    <body>
        <?php
// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Obtendo informações do usuário
        $query = mysql_query("SELECT * FROM usuario");
		$clear = '0';
		
        while ($user = mysql_fetch_array($query)) {
            			
			mysql_query("UPDATE usuario SET horas = $clear ");
			
        } //encerra o loop while
        mysql_close();
        ?>
	<meta http-equiv="refresh" content="1;home.php">
    </body>    
</html>