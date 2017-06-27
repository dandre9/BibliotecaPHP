<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title>Biblioteca</title>
    </head>		
    <?php
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_password = '';

    $link = @mysql_connect($mysql_host, $mysql_user, $mysql_password);
    mysql_set_charset('utf8');

    if (!@mysql_connect($mysql_host, $mysql_user, $mysql_password)) {
        die('Não foi possível conectar ao banco de dados.');
    } else if (!@mysql_select_db('biblioteca', $link)) {
        die('Não foi possível conectar ao banco de dados.');
    } else {
        //echo "Conexão efetuada com sucesso.<br>";
    }

    $query = "SELECT * FROM `usuarios` WHERE Login LIKE '" . $_POST['usuario'] . "' AND Senha LIKE '" . md5($_POST['senha']) . "'";
    $result = mysql_query($query);
    //echo $query . "<br>";

    if ($is_query_run = mysql_query($query)) {
        if (@mysql_num_rows($result) == 0) {
            ?>
            <body align="center">
                <div align="left" style="position:absolute; width:300px; left:50%; top:50%; margin-top: -150px; margin-left:-150px;">
                    <h1 align="center">Sistema de acesso</h1>
                    <div style="background-color:#CCCCCC; padding:10px;">                        
                        <form action="Principal.php" method="post">
                            Usuário:<br>
                            <input type="text" name="usuario" style="width:95%;"/><br>
                            Senha:<br>
                            <input type="password" name="senha" style="width:95%; margin-bottom: 10px;"/><br>
                            <input type="submit" value="Ir" style="width: 60px;"/>
                            <a href="cadastrousuario.php" style="margin-left: 130px;">Cadastre-se</a>
                        </form>
                        <p style="color: red;">Usuário ou senha incorreto.</p>
                        <p style="color: red;">Se não possui cadastro, clicar em 'Cadastre-se'.</p>
                    </div>
                </div>
            </body>       
            <?php
        } else {
            echo "TABELA COM LIVROS.";
        }
    } else {
        echo "Query NÃO executada.";
    }
    ?>
</html>