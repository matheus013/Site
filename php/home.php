<?php 
    session_start(); 
    include 'checkSession.php';
    include 'nomeProgramacao.php';
    ?>
<body id="home">
    <html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css">
<?php

$id = $_SESSION['id'];

/* Consultando dados do usuário no banco de dados */
include 'connectDB.php';

$query = mysql_query("SELECT * FROM usuario WHERE id = $id");

while($user = mysql_fetch_array($query)){

?>
<div class="title">Dados Cadastrais</div>
<a class="text">Bem vindo <?php echo $user['nome'];?></a>
<br><br>

            <table id="profile">
                <tr><td>Nome:</td><td> <?php echo $user['nome'];?></td></tr>
                <tr><td>Email:</td><td> <?php echo $user['email']; ?></td></tr>
				<tr><td>Telefone:</td><td> <?php echo $user['telefone']; ?></td></tr>
				<tr><td>Horas Trabalhadas:</td><td> <?php echo $user['horas'];?></td></tr>
                <tr><td>Nivel:</td><td>
                    <?php if($user['level']!=1)
                            echo 'Membro';
                          else
                              echo 'Admin';                        
                    ?>
                    </td></tr>
            </table>
            <div class="sub"></div>

            <?php
        } //encerra o loop while
        mysql_close();
?>
            <br>
<a href="logout.php"><button type="button" id="logout">Logout</button></a>
<a href="EditarCadastro.php"><button type="button" id="logout">Atualizar dados</button></a>
<a href="addHoras.php"><button type="button" id="logout">Atualizar Horas</button></a>

<?php
if($_SESSION['level'] == 1){
echo '<br><a href="ConsultarCadastros.php"><button type="button" id="gerenciar">Gerenciar</button></a>';
echo '<a href="Horas.php"><button type="button" id="gerenciar">Historico de Horas</button></a>';
echo '<a href="LimparHoras.php"><button type="button" id="gerenciar">Zeras Horas</button></a>';
}
?>
</body>