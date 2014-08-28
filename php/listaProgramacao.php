<?php 
    session_start();
    include 'checkSession.php';
    include 'checkPrivilege.php';
    include 'connectDB.php';
?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<a href="ConsultarCadastros.php"><button type="button" id="voltar">Voltar</button></a><br>
<?php    
    $query = mysql_query("SELECT * FROM Programacao ORDER BY nome");
    
    mysql_close();
            ?>
        <table>
            <tr>
                <td>id</td>
                <td>Nome</td>
                <td>Vagas</td>
            </tr>
            <?php
        while($thing = mysql_fetch_array($query)) {
            ?>
                <tr>
                <td><?php echo $thing['id']; ?></td>
                <td><a href="inscritosProgramacao.php?id=<?php echo $thing['id'] ?>">
                    <?php echo $thing['nome'] ?>
                    </a></td>
                <td><?php echo $thing['vagas'] ?></td>
                </tr>
            <?php
        } //encerra o looping while
        ?>