<?php
include('conexao.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Breaking Bad Figurinhas</title>
	<link rel="shortcut icon" href="imgs/gifWalter.gif" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="bulma.min.css">
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="container has-text-centered">
		<br></br>
		<h2 class="title has-text-grey">Bem vindo ao Breaking Bad Figurinhas!</h2>
		<h2 class="title has-text-grey">Digite o nome de um personagem com letras em caixa alta para consultar dados dele!</h2>
		<form action="botaoPesquisar.php" method="POST">
			<div class="input-busca">
				<input class="input" type="text" placeholder="digite aqui..." name="nome">
				<button class="button is-info" type="submit">Buscar Personagem</button>
			</div>	
		</form>
		<img src="imgs/gifWalter.gif" class="gifWalter">
	</div>

	<footer>
		<p class="footer">Código fonte ‍<a href="https://github.com/Gabrielcefetzada/BreakingBadFigurinhas">aqui.</a></p>
	</footer>
</body>
</html>

