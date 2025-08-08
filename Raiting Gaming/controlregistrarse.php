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

<?php
//Atrapar Valores del formulario
$Nombre = $_POST['DatoNombre'];
$Usuario = $_POST['DatoUsuario'];
$Email = $_POST['DatoEmail'];
$Email2 = $_POST['DatoEmail2'];
$Contrasenia = $_POST['DatoContrasenia'];
$Contrasenia2 = $_POST['DatoContrasenia2'];
$Imagen = $_POST['DatoImagen'];

//Abrir conexion con la base de datos
$MiDB = new mysqli("localhost","root","","midb");

//Preparar consulta
$consulta = "INSERT INTO usuarios (Nombre, Usuario, Email, Contrasenia, Imagen) VALUES ('".$Nombre."', '".$Usuario."', '".$Email."', '".$Contrasenia."', '".$Imagen."')";
	
	//Consultar existencia del usuario
	$consulta2 = "SELECT Usuario FROM usuarios WHERE Usuario LIKE '".$Usuario."'";
	$UsuarioExiste = $MiDB->query($consulta2);
	
	//Chequea que la consulta este vacia
	if (mysqli_num_rows($UsuarioExiste)==0){
		//Comprueba si el email y la contraseña son iguales o no 
		if ($Email != $Email2){
			ECHO "<p> El Email escrito no coincide</p>";}
		elseif ($Contrasenia != $Contrasenia2){
			ECHO "<p> La contrasenia escrita no coincide</p>";} 
		else{
			//$Contrasenia = md5($Contrasenia);
			//Escribe los datos del usuario en la base
			$MiDB->query($consulta);
			ECHO "<p> Te registraste con exito</p>";}}	
	else {
		ECHO "<p>Ese usuario ya existe, recarga y pon otro</p>";}

//Cerrar conexion
$MiDB->close();
?>

<a href="registrarse.html">Registrarse</a>
<a href="iniciarsesion.html">Iniciar sesion</a>
</body>
</html>