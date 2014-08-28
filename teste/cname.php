<html>
    <body>
        <?php
//Recebendo o id do usuário via URL
        $id = $_GET['id'];

// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Obtendo informações do usuário
        $query = mysql_query("SELECT * FROM Programacao WHERE id = '$id'");

        while ($str = mysql_fetch_array($query)) {
            ?>

            <div id="profile">
                Escolha: <?php echo $str['nome']; ?><br>
            </div>


            <?php
        } //encerra o loop while
        mysql_close();
        ?>
    </body>    
</html>




