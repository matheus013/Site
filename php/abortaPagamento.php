<?php
session_start();
    include 'checkSession.php';
    include 'checkPrivilege.php';
    include 'reservaVaga.php';
    include 'connectDB.php';
// Obtendo id via url
        $id = $_GET['id'];
        
// Revertendo status de pagamento
        $query = mysql_query("UPDATE Participante SET pagamento = '0' WHERE id = $id");
        if($query)
            echo ' Status de pagamento revertido. <br>';
        else
            echo 'Erro: Nao foi possivel reverter o status de pagamento. <br>';

// Cancelando inscrição nas programações
        $query = mysql_query("SELECT * FROM Participante WHERE id = $id");
        while($user = mysql_fetch_array($query)){
            addVaga($user['p1']);
            mysql_query("UPDATE Participante SET p1 = '0' WHERE id = $id");
            addVaga($user['p2']);
            mysql_query("UPDATE Participante SET p2 = '0' WHERE id = $id");
        }
        
        mysql_close();
?>
<a href="ConsultarCadastros.php"><button type="button" id="voltar">Voltar</button></a>