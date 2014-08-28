<html>
    <body>
        <?php
// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Obtendo informações do usuário
        $query = mysql_query("SELECT * FROM Participante");

        while ($user = mysql_fetch_array($query)) {
            ?>

            <div id="profile">
			<?php
			$pag = $user['pagamento'];
			if($pag == 1){ 
			?>
                Nome completo: <?php echo $user['nomeCompleto']; ?><br>
                Email: <?php echo $user['email']; ?><br>
				Atividades >>
				<?php $id = $user['escolha11'];
				$queryP = mysql_query("SELECT * FROM Programacao WHERE id = '$id'");
				$str = mysql_fetch_array($queryP);
				?><br>
				Escolha: <?php echo $str['nome']; ?><br>
				<?php $id = $user['escolha12']; 
				$queryP = mysql_query("SELECT * FROM Programacao WHERE id = '$id'");
				$str = mysql_fetch_array($queryP);
				?><br>
				Escolha: <?php echo $str['nome']; ?><br>
				<?php $id = $user['escolha21'];
				$queryP = mysql_query("SELECT * FROM Programacao WHERE id = '$id'");
				$str = mysql_fetch_array($queryP);
				?><br>
				Escolha: <?php echo $str['nome']; ?><br>
				<?php $id = $user['escolha22'];
				$queryP = mysql_query("SELECT * FROM Programacao WHERE id = '$id'");
				$str = mysql_fetch_array($queryP);
				?><br>
				Escolha: <?php echo $str['nome']; ?><br>			
	            </div>
			<br>
			
            <?php
			}
        } //encerra o loop while
        mysql_close();
        ?>
    </body>    
</html>