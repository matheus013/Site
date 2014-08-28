<html>
    <body>
        <?php
        
        //Setando valores das variáveis
        $nomeProgramacao = $_POST ["nomeProgramacao"];
        $descricao = $_POST ["descricao"];
        $horario = $_POST ["horario"];
        $numVagas = $_POST ["numVagas"];
        $xmlCertificados = $_POST ["xmlCertificados"];

         // Estabelecendo conexão com o banco de dados      
        include 'connectDB.php';

        // Inserindo dados na tabela
        $query = "INSERT INTO Participante (nomeProgramacao, descricao, horario, numVagas,
		xmlCertificado) 
        VALUES ('$nomeCompleto', '$descricao', '$horario', '$numVagas', '$xmlCertificados')";

        mysql_query($query, $conexao);

        echo "Seu cadastro foi realizado com sucesso!<br>Agradecemos a atenção.";
        
        //Encerrando conexão com o banco de dados
        mysql_close();
        ?> 
    </body>
</html>