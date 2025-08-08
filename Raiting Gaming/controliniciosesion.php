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
$Usuario = $_POST['DatoUsuario'];
$Email = $_POST['DatoEmail'];
$Contrasenia = $_POST['DatoContrasenia'];

//Abrir conexion con la base de datos
$MiDB = new mysqli("localhost","root","","midb");

//Preparar consulta
$consulta = "SELECT Usuario, Email, Contrasenia FROM usuarios WHERE Usuario LIKE '".$Usuario."'";

//Ejecutar consulta
$UsuarioExiste = $MiDB->query($consulta);
	if (mysqli_num_rows($UsuarioExiste)!=0){
    $usuarioEncontrado = $UsuarioExiste->fetch_assoc();
		if ($usuarioEncontrado['Contrasenia'] != $Contrasenia) {
			ECHO "<p>El Email o la contraseña son incorrectos</p>";
		} elseif ($usuarioEncontrado['Email'] != $Email) {
			ECHO "<p>El Email o la contraseña son incorrectos</p>";
		} else {
			//Generar cokie
			ECHO "<p> Iniciaste sesion con exito </p>";}}
			//<script type="text/javascript">
			//	function createCookie(fieldname, fieldvalue, expiry) {
			//	var date = new Date();
			//	date.setTime(date.getTime()+ (expiry*24*60*60*1000));
			//	var expires = "expires=" + date.toGMTString();
			//	document.cookie = fieldname + "=" + fieldvalue + ";" + expires + ";path=/";}
			//</script> 
	else{
		ECHO "<p> El usuario no existe </p>";}

//Cerrar conexion
$MiDB->close();
?>

<a href="registrarse.html">Registrarse</a>
<a href="iniciarsesion.html">Iniciar sesion</a>
</body>
</html>