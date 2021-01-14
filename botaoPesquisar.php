<?php
include('conexao.php');
$nome = $_POST['nome'];

$busca_sql = "SELECT * FROM pics.pics WHERE nome = '$nome'";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pesquisando personagens</title>
	<link rel="shortcut icon" href="imgs/gifWalter.gif" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="bulma.min.css" />
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<div class="container has-text-centered">
		<br></br>
		<h3 class="title has-text-grey">Breaking Bad Figurinhas</h3>
		<a href="index%20.php">Voltar ao início</a>
		<div class="content">
			<table class="table">
				<thead> 
					<tr>
						<th>ID no banco de dados</th>
						<th>Nome do personagem</th>
						<th>Ocupação</th>
						<th>Número de temporadas que participou</th>
						<th>Está Vivo?</th>
						<th>Apelido</th>
					</tr>
				</thead>
				<?php
				$query = mysqli_query($conexao, $busca_sql);

				while($dado = mysqli_fetch_assoc($query)){
					?>
					<h2 class="title is-3" style="color: green;">Personagem encontrado!</h2>

					<?php
					if($nome == "PAMELA"){
						?>
						<img src="imgs/bbb6muek0tcmbc3g2sog.jpg">
						<?php
					}

					if($nome == "TORTUGA"){
						?>
						<img src="imgs/BBWA_Tortuga.jpg">
						<?php
					}

					if($nome == "GUSTAVO FRING"){
						?>
						<img src="imgs/BCS_S4_Gustavo_Fring.jpg">
						<?php
					}

					if($nome == "CARMEN"){
						?>
						<img src="imgs/Carmen.JPG.jpg.jpg">
						<?php
					}

					if($nome == "THEODORE BENEKE"){
						?>
						<img src="imgs/Cast_bb_700x1000_todd-beneke-lg.jpg">
						<?php
					}

					if($nome == "WALTER WHITE"){
						?>
						<img src="imgs/cast_bb_700x1000_walter-white-lg.jpg">
						<?php
					}

					if($nome == "DONALD MARGOLIS"){
						?>
						<img src="imgs/Donald_Margolis.png">
						<?php
					}

					if($nome == "GRETCHEN SCHARTZ"){
						?>
						<img src="imgs/Gretchen_Schwartz.png">
						<?php
					}

					if($nome == "HOLLY"){
						?>
						<img src="imgs/Holly.JPG.jpg">
						<?php
					}

					if($nome == "SAXTON"){
						?>
						<img src="imgs/Officer_Saxton_-_I.F.T..png">
						<?php
					}

					if($nome == "MARIE SCHARADER"){
						?>
						<img src="imgs/Season_2_-_Marie.jpg">
						<?php
					}

					if($nome == "VICTOR"){
						?>
						<img class="img-aparecida" src="imgs/Victor2.png">
						<?php
					}

					?>
						<tr>
							<td><?php echo $dado['img_id'];?></td>
							<td><?php echo $dado['nome'];?></td>
							<td><?php echo $dado['ocupacao'];?></td>
							<td><?php echo $dado['temporadas'];?></td>
							<td><?php echo $dado['vivo'];?></td>
							<td><?php echo $dado['apelido'];?></td>
						</tr>
					<?php } 
					?>
					<br><br>
				</table>
			</div>
	</div>
	<footer>
		<p class="footer">Código fonte ‍<a href="https://github.com/Gabrielcefetzada/BreakingBadFigurinhas">aqui.</a></p>
	</footer>
</body>
</html>