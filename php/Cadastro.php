<!DOCTYPE html>
<html>
    <html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body id="inscricao" bgcolor="#FFFFFF">
    <link rel="stylesheet" type="text/css" href="css/main.css">
        <script src="js/slots.js"></script><br><br>
    <form name="cadastro" method="post" action="NovoCadastro.php" onsubmit="return slot(); return false;">
        <table>
            <tr>
                <td><input name="nome" type="text" id="nome" placeholder="Nome*"/></td>
            </tr>
            <tr>
                <td><input name="email" type="text" id="email" placeholder="E-mail*"/></td>
            </tr>
            <tr>
                <td><input name="senha" type="password" id="senha" placeholder="Senha*"/></td>
            </tr>
            <tr>
                <td><input name="telefone" type="text" id="telefone" placeholder="Telefone*"/></td>
            </tr>
            
                
            </tr>
            <tr>
                <td>
                        <input name="cadastrar" type="submit" id="cadastrar" value="Cadastrar" /> 
                        <br />
                        
                </td>
            </tr>
        </table>
    </form>
        <div class="sub"><p>O '*' representa os campos obrigat&oacute;rios.</p></div>
</body>
</html>
