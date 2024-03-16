<html>
<head>
	<title>Formulario Quejas Acueducto</title>
	<!-- CSS -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<?php

	?>
	<div class="container">
		<div class="form-container">
			<form action="insert.php" method="post">
				<div class="input-row">
					<label>Nombre Completo</label>
					<input type="text" name="name" placeholder="Ingrese su nombre completo">
				</div>
				<div class="input-row">
					<label>Correo Electrónico</label>
					<input type="email" name="email" placeholder="Ingrese su correo electrónico">
				</div>
				<div class="input-row">
					<label>Ciudad</label>
					<input type="text" name="city" placeholder="Ingrese su ciudad">
				</div>
				<div class="input-row">
					<label>Solicitud / Queja</label>
					<textarea name="queja" placeholder="Ingrese su solicitud o queja"></textarea>
				</div>
				<div class="input-row">
					<input type="submit" name="bsubmit" value="Enviar">
					<input type="reset" name="breset" value="Restablecer">
				</div>
			</form>
		</div>

		<div class="table-container">
			<?php
			include 'dbcon.php';
			$selectquery = "select * from clientes";
			$selres = mysqli_query($con1,$selectquery);
			?>
			<table>
				<tr>
					<th>ID</th>
					<th>Nombre Completo</th>
					<th>Correo Electrónico</th>
					<th>Ciudad</th>
					<th>Solicitud / Queja</th>
				</tr>
				
				<?php
				while($row = mysqli_fetch_array($selres))
				{
					echo "<tr>
							<td>".$row['id']."</td>
							<td>".$row['nombre']."</td>
							<td>".$row['email']."</td>
							<td>".$row['ciudad']."</td>
							<td>".$row['queja']."</td>
						</tr>";
				}
				?>
			</table>
		</div>
	</div>
	<footer>
		<div class="footer-container">
			<ul>
				<li><h2>Como enviar la información capturada del formulario a una dirección de correo electrónico con PHP:</h2></li>
				<li><a href="https://academiausbbogedu-my.sharepoint.com/:w:/g/personal/adsilvam_academia_usbbog_edu_co/EQjoOAIqRGBJmryWm84uzHYBcrjnhEi3tHHkEW5Nv3gUzg?e=jnpbz3"
				target="_blank" rel="noopener noreferrer">Link al documento</a></li>
			</ul>
		</div>
	</footer>
</body>
</html>