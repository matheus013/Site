<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/main.css">
    <body bgcolor="#FFFFFF">

<?php
    include 'testeFormularios.php';
    
    $email = testInput($_POST['email']);
    
    include 'connectDB.php';
    
    $query = mysql_query("SELECT * FROM Participante WHERE email = '$email'");
    
    if(mysql_num_rows($query) > 0)
        while($user = mysql_fetch_array($query)){
        $name = $user['nomeCompleto'];
        $subject = "XV SENQ - Recuperação de senha";
        $senha = $user['senha'];
        $message = "Olá $name, uma recuperação de senha foi solicitada\n para sua incrição na XVSENQ, a senha cadastrada em nosso sistema é:\n $senha \n\n Atenciosamente,\n Equipe XVSENQ. ";
        mail($email,$subject,$message,"XVSENQ");
        echo 'Obrigado, sua senha foi enviada para o email cadastrado.';
        }
    else
        echo 'Desculpe, o email inserido não está cadastrado em nosso sistema.';
    
     mysql_close();
?>
    </body>
    

