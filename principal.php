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

    @mysql_connect($mysql_host, $mysql_user, $mysql_password);
    mysql_set_charset('utf8');

    if (!@mysql_connect($mysql_host, $mysql_user, $mysql_password)) {
        die('Não foi possível conectar ao banco de dados.');
    } else if (!@mysql_select_db('biblioteca')) {
        die('Não foi possível conectar ao banco de dados.');
    } else {
        //echo "Conexão efetuada com sucesso.<br>";
    }

    $query = "SELECT * FROM `usuarios` WHERE Login LIKE '" . $_POST['usuario'] . "' AND Senha LIKE '" . $_POST['senha'] . "'";

    //echo $query . "<br>";

    if ($is_query_run = mysql_query($query)) {
        //echo "Query executada.<br>";
//            while ($query_execute = mysql_fetch_assoc($is_query_run)) {
//                echo $query_execute['Login'] . " - " . $query_execute['Senha'] . "<br>";
//            }

        if (@mysql_num_rows($result) == 0) {
            ?>
            <body align="center">
                <div align="left" style="position:absolute; width:300px; left:50%; top:50%; margin-top: -150px; margin-left:-150px;">
                    <h1 align="center">Sistema de acesso</h1>
                    <div style="background-color:#CCCCCC; padding:10px;">                        
                        <form action="Principal.php" method="post">
                            Usuário:<br>
                            <input type="text" id="usuario" name="usuario" style="width:95%;"/><br>
                            Senha:<br>
                            <input type="password" name="senha" style="width:95%; margin-bottom: 10px;"/><br>
                            <input type="submit" value="Ir" style="width: 60px;"/>
                            <a href="cadastrousuario.php" style="margin-left: 130px;">Cadastre-se</a>
                        </form>
                        <p style="color: red;">Usuário ou senha incorreto.</p>
                    </div>
                </div>
            </body>       
            <?php
        }else{
            echo "TABELA COM LIVROS.";
        }
    } else {
        echo "Query NÃO executada.";
    }
    ?>
</html>