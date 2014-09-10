<?php 
session_start();
/* Se o usuário já estiver logado o redireciona para a pagina home */
    if(isset($_SESSION['login']) && isset($_SESSION['senha']))
    header('location:home.php');
        
?> 
<html>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="js/slots.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">    
    <div class="sub">
    <body id="login">
        
        <a id="log">LOGIN</a>
        <form id="login" name="login" method="post" action="login.php">
            <table>
                <tr>
                    
                    <td><input name="login" type="text" id="emaill" placeholder="email" />
                </tr>
                <tr>
                    
                    <td><input name="senha" type="password" id="senha" placeholder="senha" />
                </tr>
                <tr>
                    <td colspan="2">
                        
                            <input name="cadastrar" type="submit" id="cadastrar" value="Entrar" /> 
							<a href="Cadastro.php"><button type="button" id="cadastro">Inscrever-se</button></a>
                    </td>

                </tr>
            </table>
        </form>
        <a class="text" href="recuperarSenha.html">Recuperar senha</a><br>
		
   
    </body>
</html>
