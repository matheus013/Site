<html>
    <body>
        <?php
        include 'testeFormularios.php';
        //Setando valores das variÃ¡veis
        
        $nome = testInput($_POST ["nome"]);
        $email = testInput($_POST ["email"]);
        $telefone = testInput($_POST ["telefone"]);
        $senha = testInput($_POST ["senha"]);
              
        // Estabelecendo conexÃ£o com o banco de dados        
        include 'connectDB.php';
        
        // Verifica se o email ja está cadastrado
        $query = mysql_query("SELECT * FROM usuario WHERE email = '$email'");
        if(mysql_num_rows($query) > 0){
            mysql_close();
            echo '<a class="alert">Erro: N&atilde;o foi poss&iacute;vel concluir a inscri&ccedil;&atilde;o, o email submetido j&aacute; foi cadastrado.</a>';
        }        
        else{
        // Inserindo dados na tabela
        $query = "INSERT INTO usuario(nome,email,senha,telefone) 
				  VALUES('$nome','$email','$senha','$telefone')";
                                          
        if(mysql_query($query, $conexao)){
                echo '<a class="alert">Sua inscri&ccedil;&atilde;o foi efetuada com sucesso.</a>';
				}
        else{
                echo '<a class="alert">Erro: N&atilde;o foi poss&iacute;vel concluir seu cadastro.</a>';
				}
        
        //Encerrando conexÃ£o com o banco de dados
        mysql_close();
        }
        ?>
        <a href="index.php"><button type="button" id="voltar">Voltar</button></a>
    </body>
</html>