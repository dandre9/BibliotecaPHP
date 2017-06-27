<?php

//echo $_POST['user'] . " " . $_POST['pass'];

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

$query = "SELECT * FROM `usuarios` WHERE Login LIKE '" . $_POST['user'] . "'";
$result = mysql_query($query);


if ($is_query_run = mysql_query($query)) {
    if (mysql_num_rows($result) == 0) {
        $query = "INSERT INTO `usuarios` (`Login`, `Senha`) VALUES ('" . $_POST['user'] . "', '" . md5($_POST['pass']) . "')";
        if ($is_query_run = mysql_query($query)) {
            echo "Cadastro realizado com sucesso.";
        } else {
            echo "Query nao executada (INSERT).";
        }
    } else {
        echo "Usuário já existe no sistema.";
    }
} else {
    echo "Query nao executada (SELECT).";
}
?>