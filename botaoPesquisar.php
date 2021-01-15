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
					<tr>
						<td><?php echo $dado['img_id'];?></td>
						<td><?php echo $dado['nome'];?></td>
						<td><?php echo $dado['ocupacao'];?></td>
						<td><?php echo $dado['temporadas'];?></td>
						<td><?php echo $dado['vivo'];?></td>
						<td><?php echo $dado['apelido'];?></td>
					</tr>
					<?php } ?>

					<?php
					
					switch ($nome) {
						case "PAMELA":
						?>
						<img src="imgs/bbb6muek0tcmbc3g2sog.jpg">
						<?php
						break;

						case "TORTUGA":
						?>
						<img src="imgs/BBWA_Tortuga.jpg">
						<?php
						break;

						case "GUSTAVO FRING":
						?>
						<img src="imgs/BCS_S4_Gustavo_Fring.jpg">
						<?php
						break;

						case "CARMEN":
						?>
						<img src="imgs/Carmen.JPG.jpg.jpg">
						<?php
						break;

						case "THEODORE BENEKE":
						?>
						<img src="imgs/Cast_bb_700x1000_todd-beneke-lg.jpg">
						<?php
						break;

						case "WALTER WHITE":
						?>
						<img src="imgs/cast_bb_700x1000_walter-white-lg.jpg">
						<?php
						break;

						case "DONALD MARGOLIS":
						?>
						<img src="imgs/Donald_Margolis.png">
						<?php
						break;

						case "GRETCHEN SCHARTZ":
						?>
						<img src="imgs/Gretchen_Schwartz.png">
						<?php
						break;

						case "HOLLY":
						?>
						<img src="imgs/Holly.JPG.jpg">
						<?php
						break;

						case "SAXTON":
						?>
						<img src="imgs/Officer_Saxton_-_I.F.T..png">
						<?php
						break;

						case "MARIE SCHARADER":
						?>
						<img src="imgs/Season_2_-_Marie.jpg">
						<?php
						break;
						
						default:
						?>
						<h2 class="title is-3" style="color: red;">Personagem não encontrado. Por favor tente novamente.</h2>;
						<?php
						break;
					}

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