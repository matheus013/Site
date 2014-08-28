<?php
    session_start();
    include 'checkSession.php';
    include 'checkPrivilege.php';
    include 'connectDB.php';
    include 'nomeProgramacao.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<a href="listaProgramacao.php"><button type="button" id="voltar">Voltar</button></a><br><br>
<?php
// Obtendo id via url
        $id = $_GET['id'];
        
    $query = mysql_query("SELECT * FROM Participante WHERE p1 = '$id' OR p2 = '$id' ORDER BY nomeCompleto");
   
    
    echo nome($id).'<br>';
    
    echo 'Inscritos:<br><br>';
    while($user = mysql_fetch_array($query)){
        ?>
<a href="VerCadastro.php?id=<?php echo $user['id'] ?>"><?php echo $user['nomeCompleto']; ?></a><br>
    <?php
    }
    mysql_close();
?>