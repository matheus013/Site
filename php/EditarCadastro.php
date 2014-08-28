<?php
    session_start(); 
    include 'checkSession.php';
    
    $id = $_SESSION['id'];
    
    include 'connectDB.php';
    $query = mysql_query("SELECT * FROM usuario WHERE id = '$id'");
    
    while($user = mysql_fetch_array($query)){
        ?>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="js/slots.js"></script>
    <body id="inscricao" bgcolor="#FFFFFF">
    <link rel="stylesheet" type="text/css" href="css/main.css">
        <br><div class="title">Dados Pessoais</div>
    <form name="edit" method="post" action="edit.php" onsubmit="return slot(); return false;">
        <table>
            <tr>
                <td><?php echo $user['nome']; ?></td>
            </tr>
            <tr>
                <td><?php echo $user['email']; ?></td>
            </tr>
            <tr>
                <td><input name="senha" type="password" id="senha" placeholder="Senha*" value="<?php echo $user['senha']; ?>"/></td>
            </tr>
            <tr>
                <td><input name="telefone" type="text" id="telefone" placeholder="Telefone*" value="<?php echo $user['telefone']; ?>"/></td>
            </tr>
            <tr>
                <td>
                        <input name="editar" type="submit" id="logout" value="Atualizar" /> 
                        <br />
                        
                </td>
            </tr>
            <tr>
                <td>
                    <a href="home.php"><button type="button" id="logout">Voltar</button></a>
                </td>
            </tr>
        </table>
    </form>
                <div class="text">Nome e email não podem ser alterados por questões de segurança. Para esclarecimento de dúvidas favor entrar em contato com a organização do evento.</div>
    </body>



    <?php
    }
    
    mysql_close();
    ?>
