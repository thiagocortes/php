<?php
	include 'conexao.php';

	$query = "SELECT * FROM materia";

	$sql = mysql_query($query);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Organizado de trabalhos da faculdade</title>
<link rel="stylesheet" type="text/css" href="estilos/css.css">
</head>
<body>
	<table id="exibir_trabalho" border="1px">
		<tr>
			<th> Disciplina </th>
			<th> Professor </th>
			<th> Assunto </th>
			<th> Data da entrega </th>
			<th> Data Lançamento </th>
			<th> Nota </th>
			<th> Situação </th>
		</tr>
		<?php
			while($resultado = mysql_fetch_array($sql)){
		?>
			<tr>
				<td><?php echo $resultado ['materia']; ?></td>
				<td><?php echo $resultado ['professor']; ?></td>
				<td><?php echo $resultado ['assunto']; ?></td>	
				<td><?php echo $resultado ['dataentrega']; ?></td>	
				<td><?php echo $resultado ['datalancamento']; ?><td>
				<td><?php echo $resultado ['nota']; ?></td>
				<td><?php echo $resultado ['status']; ?></td>
				<td><?php echo "Editar / Excluir"; ?></td>
			</tr>
			<?php } ?>
		
	</table>

</body>
</html>