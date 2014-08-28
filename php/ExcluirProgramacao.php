<html>
    <body>
        <?php
// Obtendo id via url
        $idProgramacao = $_GET['idProgramacao'];

// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Instrução para deletar o cadastro do banco de dados
        mysql_query("DELETE FROM Programacao WHERE idProgramacao= '$idProgramacao' ");

// Terminando conexão com o banco de dados
        mysql_close();

        echo "Cadastro excluido com com sucesso.";
        ?>
    </body>
</html>
