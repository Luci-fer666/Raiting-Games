<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Raiting Gaming</title>
	<link rel="stylesheet" href="EstiloPage.css">
</head>
<body>
<header class="encabezado">
	<p class="titulo"><strong>Raiting Gaming</strong></p>
	<img src="https://cdn.dribbble.com/users/3205217/screenshots/6780133/gaming_logo_4x.jpg" width= "120px" height= "120px">
	
	<nav>
	<p><span><a href="RaitingGaming.php" class="butoninicio">Inicio</a></span>
	<form action="busqueda.php" method="post"><span><input type="text" name="busqueda" placeholder="Busca tu juego aqui"></span>
	<span><button type="submit">Buscar</button></span></form>
	<span><a href="Formulario.html">SubirJuegos</a></span>
	<span><a href="registrarse.html" class="botonregistro">Acceder</a></span></p>
	</nav>
</header>
<br>

<div>
	<strong>Listado de juegos</strong>
</div>

<hr>
<div>
<table> 
	<thead> 
		<tr> 
			<th class="seccion">Caratula</th>
			<th class="seccion">Juego</th>
			<th class="seccion">Genero</th>
			<th class="seccion">Distribuidor</th>
			<th class="seccion">Desarrollador</th>
			<th class="seccion">Consolas</th>
			<th class="seccion">Lanzamiento</th>
			<th class="seccion">Valoracion</th>
			<th class="seccion">Reseñas</th>
		</tr>
	</thead>
	<tbody> 
		<?php
			//Conectar con la base
			$MiDB = new mysqli("localhost","root","","midb");
			//Preparar consulta
			$consulta = "SELECT * FROM datos";
			//Ejecutar Consulta
			$juegos= $MiDB->query($consulta);
			//Procesar Registros
			// Iterar sobre los resultados obtenidos
			WHILE ($juego =$juegos ->  fetch_assoc()){
					$total = $juego['Valoracion'];
					$positivas = $juego['ValoracionPositiva'];
				echo	"<tr>";
				echo	"<td><img class=caratula src='".$juego['Caratula']."'></td>";
				echo 	"<td>".$juego['Juego']."</td>";
				echo 	"<td>".$juego['Genero']."</td>";
				echo 	"<td>".$juego['Distribuidor']."</td>";
				echo 	"<td>".$juego['Desarrollador']."</td>";
				echo 	"<td>".$juego['Consolas']."</td>";
				echo 	"<td>".$juego['Lanzamiento']."</td>";
					// Calcular la valoración en porcentaje de 5
					if ($total > 0) {
						$valoracionFinal = round(($positivas / $total) * 5);}
					else {
						$valoracionFinal = 5;}
				echo 	"<td>".$valoracionFinal." / 5 
						<form action='votar.php' method='POST' style='display:inline-block;'>
						<button class='valoracionboton' type='submit' name='like'>+</button>
						<button class='valoracionboton' type='submit' name='dislike'>-</button>
						<input type='hidden' name='Luci' value='".$juego['id']."'>
						</form>
						</td>";
				echo	"<td> Un total de ".$juego['Valoracion']." personas reseñaron</td>";
				echo "</tr>";}
			//Cerrar conexion
			$MiDB->close();
		?> 
	</tbody>
	</table>
</div>
</body>
</html>