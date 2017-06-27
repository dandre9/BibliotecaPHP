<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8"/>
		<title>Biblioteca</title>
	</head>
	<body>		
		<?php
			$mysql_host = 'localhost';
			$mysql_user = 'root';
			$mysql_password = '';
				
			@mysql_connect($mysql_host, $mysql_user, $mysql_password);
			mysql_set_charset('utf8');
			
			if(!@mysql_connect($mysql_host, $mysql_user, $mysql_password)){
				die('Não foi possível conectar ao banco de dados.');		
			}else if(!@mysql_select_db('biblioteca')){
				die('Não foi possível conectar ao banco de dados.');		
			}else{
				echo "Conexão efetuada com sucesso.<br>";	
			}
			
			$query = "SELECT * FROM `usuarios` WHERE Login LIKE '" . $_POST['usuario'] . "' AND Senha LIKE '" . $_POST['senha'] . "'";
			
			echo $query . "<br>";
			
			if($is_query_run = mysql_query($query)){
				echo "Query executada.<br>";	
				while($query_execute = mysql_fetch_assoc($is_query_run)){
					echo $query_execute['Login'] . " - " .$query_execute['Senha'] . "<br>";
				}	
			}else{
				echo "Query NÃO executada.";
			}			
		?>
	</body>
</html>