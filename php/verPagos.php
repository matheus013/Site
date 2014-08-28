<?php 
    session_start();
    include 'checkSession.php';
    include 'checkPrivilege.php';
    include 'connectDB.php';
?>
<a href="ConsultarCadastros.php"><button type="button" id="home">Voltar</button></a><br>
<?php   
    $query = mysql_query("SELECT * FROM Participante WHERE pagamento='1' ORDER BY nomeCompleto");
    echo '<br><div class="tittle"></div>Incri&ccedil;&otilde;es confirmadas:<br><br>';
    echo '<table>';
    while($user = mysql_fetch_array($query)){
        ?>
        <tr>
            <td><a href="VerCadastro.php?id=<?php echo $user['id'] ?>"><?php echo $user['nomeCompleto']; ?></a></td>
            <td><a href="abortaPagamento.php?id=<?php echo $user['id'] ?>">
                    <?php if($user['pagamento'] != 0)
                        echo 'Abortar'; ?>
            </a></td>
        </tr>
    <?php
    }
    echo '</table>';
    mysql_close();
?>