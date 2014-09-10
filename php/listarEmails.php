<?php
session_start();
    include 'checkSession.php';
    include 'checkPrivilege.php';
    include 'connectDB.php';
    
    $query = mysql_query("SELECT * FROM Participante ORDER BY email");
    
    echo '<div class="title">Lista de email de inscritos no evento</div><br><br>';
    
    while($user = mysql_fetch_array($query)){
        echo $user['email'].";";
    }
    
    mysql_close();
?>


<br><br>
<a href="ConsultarCadastros.php"><button type="button" id="home">Voltar</button></a>