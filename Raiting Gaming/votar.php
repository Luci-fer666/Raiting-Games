<!DOCTYPE html>
<html>
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
<?php 
	$NuevoVoto=0;
	$id = $_POST['Luci'];
	//chequear si esta seteado 'mas' o 'menos'
	if(isset($_POST['like'])){
		$Operacion= "sumar";}
	else{
		$Operacion= "restar";}
	//echo "<p>Operación: "$Operacion"</p>";
	$db = new mysqli("localhost", "root", "", "midb");
	//$consulta = "SELECT Valoracion FROM datos WHERE id='".$id."'"; 
	
	//$Valoraciones=$db->query($consulta);
	//$Valoracion=$Valoraciones->fetch_assoc();
	
	//$NuevoValoracion=$Valoracion['Valoracion'];
	
		//Consulta para guardar Valoraciones 
		$ActualizaValoracionPositiva = "UPDATE datos SET ValoracionPositiva = ValoracionPositiva + 1 WHERE id='".$id."'";
		$ActualizaValoracionTotal = "UPDATE datos SET Valoracion = Valoracion + 1 WHERE id='".$id."'";
	//IF para ver si es positiva
	if ($Operacion == "sumar") {
		$db->query($ActualizaValoracionPositiva);
	}
	$db->query($ActualizaValoracionTotal);
	
	
	$resultado = $db->affected_rows;
	if($resultado>0){
		//mensaje positivo
		echo "<h2 style='color: green;'>Valoracion subida correctamente!</h2>";} 
		else {
		//mensaje negativo
		echo "<h2 style='color: red;'>ERROR</h2>";}
	$db->close()
?>
<a href="RaitingGaming.php">Volver</a>
</body>
</html>