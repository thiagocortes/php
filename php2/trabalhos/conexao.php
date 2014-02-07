<meta charset="UTF-8">
<?php
	$host = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "trabalhos";

	$con = mysql_connect($host,$usuario,$senha) or die ("não fio possivel conectar ao host");
	$conexao_banco = mysql_select_db($banco) or die ("não fio possivel conectar o banco de dados");

?>