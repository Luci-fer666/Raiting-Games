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
	<span><a href="Formulario.html">SubirJuegos</a></span>
	<span><a href="registrarse.html" class="botonregistro">Acceder</a></span></p>
	</nav>
</header>
<br>

<?php
//Atrapar Valores del formulario
$Caratula = $_POST['DatoCaratula'];
$Juego = $_POST['DatoJuego'];
$Genero = $_POST['DatoGenero'];
$Distribuidor = $_POST['DatoDistribuidor'];
$Desarrollador = $_POST['DatoDesarrollador'];
$Consolas = $_POST['DatoConsolas'];
$Lanzamiento = $_POST['DatoLanzamiento'];
$Valoracion= 0;

//Abrir conexion con la base de datos
$MiDB = new mysqli("localhost","root","","midb");

//Preparar consulta
$consulta = "INSERT INTO datos (Caratula, Juego, Genero, Distribuidor, Desarrollador, Consolas, Lanzamiento, Valoracion) VALUES ('".$Caratula."', '".$Juego."', '".$Genero."', '".$Distribuidor."', '".$Desarrollador."', '".$Consolas."', '".$Lanzamiento."', '".$Valoracion."')";
$consulta2 = "SELECT Juego FROM datos WHERE Juego LIKE '".$Juego."'";

$JuegoExiste = $MiDB->query($consulta2);
	//Ejecutar Consulta
	if (mysqli_num_rows($JuegoExiste)==0){
		echo	"<p> El Juego se guardo con exito </p>";
		$MiDB->query($consulta);}
	else{
		ECHO	"<p> El juego ya existe </p>";}

//Cerrar conexion
$MiDB->close();

?>
<a href="RaitingGaming.php">Volver al inicio</a>
<a href="Formulario.html">Subir otro juego</a>
</body>
</html>