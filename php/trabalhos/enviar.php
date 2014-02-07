<meta charset="UTF-8">
<?php
	include 'conexao.php';

	$materia = $_POST['disciplina'];
	$professor = $_POST['professor'];
	$assunto = $_POST['assunto'];
	$data_entrega = $_POST['data_entrega'];
	$data_lancamento = $_POST['data_lancamento'];
	$status = $_POST['status'];
	$nota = $_POST['nota'];

	$query = "INSERT INTO materia (materia,professor,assunto,dataentrega,datalancamento,status,nota)values('$materia','$professor','$assunto','$data_entrega','$data_lancamento','$status','$nota')";

	$sql = mysql_query($query);

	if($sql){
		echo "<script> alert('Cadastro efetuado com sucesso!!')</script>";
		header("Location: index.php");
	}
	else{
		echo "<script> alert ('Cadastro não efetuado');</script>";

	}

?>