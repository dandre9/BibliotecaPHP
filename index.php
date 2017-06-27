<!DOCTYPE html>
<html lang="pt-br">
    <head>
    </script>
    <meta charset="UTF-8"/>
    <title>Biblioteca Login</title>
</head>
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
        </div>
    </div>
</body>
</html>