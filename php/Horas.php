<html>
    <body>
        <?php
// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Obtendo informações do usuário
        $query = mysql_query("SELECT * FROM usuario");
		?>
				<td>
                    <a href="home.php"><button type="button" id="logout">Voltar</button></a>
                </td>
		<?php
        while ($user = mysql_fetch_array($query)) {
            ?>

            <div id="profile">
				Nome completo: <?php echo $user['nome']; ?><br>
                Horas Trabalhadas: <?php echo $user['horas']; ?><br>
						
	        </div>
			<br>
			
            <?php
			
        } //encerra o loop while
        mysql_close();
        ?>
    </body>    
</html>