<?php 
    session_start();
    include 'checkSession.php';
    include 'checkPrivilege.php';
    ?>
<html>
    <body>
        <html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <a href="home.php"><button type="button" id="home">Home</button></a>
        <a href="verPagos.php"><button type="button" id="pagos">Adiministradores</button></a>
        <a href="listaProgramacao.php"><button type="button" id="programacao">Frequencia</button></a>
        <a href="listarEmails.php"><button type="button" id="listaemails">Lista de emails</button></a>
        <?php
        
        // Estabelecendo conexão com banco de dados
        include 'connectDB.php';

        // Obtendo informações do usuário
        $query = mysql_query("SELECT * FROM usuario ORDER BY nome");
            ?>
        <table>
            <?php
        while($user = mysql_fetch_array($query)) {
            ?>
                <tr>
                    <td><a href="VerCadastro.php?id=<?php echo $user['id'] ?>"><?php echo $user['nome']; ?></a></td>
                <td><a href="confirmarPagamento.php?id=<?php echo $user['id'] ?>">
                    <?php if($user['level'] != 1)
                        echo 'Promover'; ?>
                    </a></td>
                </tr>
            <?php
        } //encerra o looping while
        mysql_close();
        ?>
        </table>
    </body>    
</html>




