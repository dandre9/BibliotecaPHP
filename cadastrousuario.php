<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <script src="JS/jquery-3.2.1.min.js"></script>
        <script src="JS/javaScript.js"></script>
    </script>
    <meta charset="UTF-8"/>
    <title>Biblioteca Cadastro de Usuário</title>
</head>
<body align="center">
    <div align="left" style="position:absolute; width:300px; left:50%; top:50%; margin-top: -150px; margin-left:-150px;">
        <h1 align="center">Cadastro de Usuário</h1>
        <div style="background-color:#CCCCCC; padding:10px;">
            <form action="Principal.php" method="post">
                Nome de usuário:<br>
                <input type="text" id="usuario" name="usuario" style="width:95%;"/><br>
                Senha para acesso:<br>
                <input type="password" name="senha" style="width:95%; margin-bottom: 10px;"/><br>
                <input type="submit" value="Cadastrar"/>
            </form>
        </div>
    </div>
</body>
</html>