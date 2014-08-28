<?php 
    session_start();
    include 'checkSession.php';
    include 'checkPrivilege.php';
// Obtendo id via url
        $id = $_GET['id'];

// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Selecionando todos os usuários com o id recebido
        $query = mysql_query("SELECT * FROM Participante WHERE id = $id");

while($user = mysql_fetch_array($query)){
        if($user['privilegio'] < 1){ //Evita que admnistradores sejam deletados
        mysql_query("DELETE FROM Participante WHERE id = $id "); // instrução que deleta o cadastro
        echo 'Cadastro excluido com sucesso.<br>';
        }
        else
            echo 'Impossivel excluir o cadastro.<br>';
}
    mysql_close();
    
    
?>
<a href="ConsultarCadastros.php"><button type="button" id="home">Voltar</button></a>