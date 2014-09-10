<?php
    session_start();
    include 'checkSession.php';
    include 'checkPrivilege.php';
    include 'reservaVaga.php';
// Obtendo id via url
        $id = $_GET['id'];

// Estabelecendo conexão com banco de dados
        include 'connectDB.php';

// Selecionando todos os usuários com o id recebido
        $query1 = mysql_query("UPDATE Participante SET pagamento = '1' WHERE id = $id");
        if($query1)
            echo 'Pagamento confirmado com sucesso.<br>';
        else
            echo 'Impossivel confirmar o pagamento.<br>';
        
        $query2 = mysql_query("SELECT * FROM Participante WHERE id = $id");
        while($user = mysql_fetch_array($query2)){
            if(reserva($user['escolha11'])){
                $p1 = $user['escolha11'];
                echo 'O participante foi inscrito em sua primeira escolha de mini curso.<br>';
                mysql_query("UPDATE Participante SET p1 = '$p1' WHERE id = $id");
            }
            else{
                if(reserva($user['escolha12'])){
                    $p1 = $user['escolha12'];
                    echo 'O participante foi inscrito em sua segunda escolha de mini curso.<br>';
                    mysql_query("UPDATE Participante SET p1 = '$p1' WHERE id = $id");
                    }
                else
                    echo 'Nao existem vagas entre os minicursos que o participante escolheu.<br>';
                }
            if(reserva($user['escolha21'])){
                $p2 = $user['escolha21'];
                echo 'O participante foi inscrito em sua primeira escolha de oficina ou visita.<br>';
                mysql_query("UPDATE Participante SET p2 = '$p2' WHERE id = $id");
            }
            else{
                if(reserva($user['escolha22'])){
                    $p2 = $user['escolha22'];
                    echo 'O participante foi inscrito em sua segunda escolha de oficina ou visita.<br>';
                    mysql_query("UPDATE Participante SET p2 = '$p2' WHERE id = $id");
                    }
                else{
                    echo 'Nao existem vagas entre oficinas ou visitas que o participante escolheu.<br>';
                }
            
            }
        }

        mysql_close();
    
    ?>
<a href="ConsultarCadastros.php"><button type="button" id="home">Voltar</button></a>