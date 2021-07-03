<?php
error_reporting(0);
//conexión con la base de datos//
$user="root";
$pass="";
$server="localhost";
$db="usuarios";
$conectar=mysqli_connect($server, $user, $pass, $db);


$usuario=$_POST['usuario'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$edad=$_POST['edad'];
$password=$_POST['password'];
$cifrado=password_hash($password, PASSWORD_DEFAULT, array ("cost"=>12));
//Consulta para insertar

$insertar = sprintf("INSERT INTO datos_usuario(usuario,nombre,apellido,fecha_nacimiento,edad,password) VALUES ('" . $usuario . "','" . $nombre . "','" . $apellido ."','" . $fecha_nacimiento . "','" . $edad . "','" . $cifrado . "')");


/*Si el resultado de la instruccion es verdadero*/
if (mysqli_query($conectar, $insertar))
{
	echo '
	<!DOCTYPE html>
	<html lang="Spanish">

	<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=0.5">
			<title> Seguridad en Software </title>

			<style>
			ul {
					list-style-type: none;
					margin: 0;
					padding: 0;
					overflow: hidden;
					background-color: #025700;
			}

			li {
					float: left;
			}

			li a {
					display: block;
					color: white;
					text-align: center;
					padding: 7px;
					text-decoration: none;
			}

			li a:hover
			{
					background-color: #000000;
			}
			header
			{
					background-color: #097000;
					padding: 2px;
					text-align: center;
					font-size: 10px;
					color: white;
			}
			footer
			{
			background-color: #097000;
			padding: 5px;
			text-align: center;
			color: rgb(251, 252, 255);
			}
			article
			{
			-webkit-flex: 1;
			-ms-flex: 1;
			flex: 4;
			background-color: #ffffff;
			padding: 15px;
			}

			{
		box-sizing: border-box;
		.right
			{
				background-color:#097000;
				float:left;
				width:20%;
				padding:15px;
				margin-top:7px;
				text-align:center;
			}
		.left
			{
				background-color:#097000;
				float:left;
				width:20%;
				padding:15px;
				margin-top:7px;
				text-align:center;
			}
		@media only screen and (max-width:620px)
		{
			/* For mobile phones: */
					.side, .main, .right
					{
					width:40%;
					}
		}
		</style>

	</head>

	<body style="font-family:Arial ;color:#000000">

			<header>
					<div style="background-color:#097000;padding:1px;text-align:center;">
							<h2>Éxito de Creación de Usuario.</h2>
					</div>
			</header>

			<div style="overflow:auto">
			<ul>
			<font face="arial">
			<li><a href="inicio.php">Cerrar Sesión</a></li>
			</ul>
			</div>
			<div class="main">

					<article>
<fieldset>
									<legend><b>Usuario registrado correctamente </b></legend><br>
									<H4> Inicie sesión </h4>
							</fieldset>
							<br>
</fieldset>
					</article>
					<footer>
							<div style="background-color:#097000;text-align:center;padding:5px;margin-top:7px;">
									Fdcaro © copyright
							</div>
					</footer>
	</body>

	</html>';
}
else {
	echo "<h1>Error: ".$insertar."</h1><br /><h3>".mysqli_error($conectar);
}

//Cerrar conexión
mysqli_close($conectar);
?>
