<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Organizado de trabalhos da faculdade</title>
<link rel="stylesheet" type="text/css" href="estilos/css.css">
</head>
<?php
	include 'conexao.php';
?>
<body>
	<div id="cadastro_trabalho">
		<div id="interno">
		<fieldset>
			<legend>Adicionar Trabalhos</legend>
		<form method="POST" action="enviar.php">
			<label>
				<input type="text" name="disciplina" placeholder="Disciplina" required="required">
			</label>
			<label>
				<input type="text" name="professor" placeholder="Professor" required="required">
			</label>
			<label>
				<input type="text" name="assunto" placeholder="Assunto">
			</label>
			<div class="data">
				<label>
					<input type="date" name="data_lancamento" placeholder="Data de Lançamento">
				</label>
				<label>
					<input type="date" name="data_entrega" placeholder="Data de Entrega" required="required">
				</label>
			</div>
			<div class="status">
				<label>
					<select name="status">
						<option>Nulo</option>
						<option>Fazendo</option>
						<option>Terminando</option>
						<option>Finalizado</option>
						<option>Entregue</option>
					</select>
				</label>
				<label>
					<input type="number" name="nota" placeholder="Nota">
				</label>
			</div>	
			<input type="submit" value="Cadastrar Trabalho">	
		</form>
		</fieldset>
	</div>
	</div>
	<?php
	include 'view.php';
	?>
</body>
</html>