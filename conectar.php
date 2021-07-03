<?php

//conexión con la base de datos//
$user="root";
$pass="";
$server="localhost";
$db="registro_trabajador";
$conectar=mysqli_connect($server, $user, $pass, $db);


$sueldo_base=0;
$liquido=0;

$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$area=$_POST['cargo'];
$sueldo_base=$_POST['sueldo_base'];
$liquido= $sueldo_base-($sueldo_base*0.2);



$insertar = sprintf("INSERT INTO trabajador (nombre,
																						apellidos,
																						area,
																						sueldo_base,
																						liquido)
												VALUES 		( '" .$nombre. "',
																		'" .$apellidos. "',
																		'" .$area."',
																		'" .$sueldo_base. "',
																		'" .$liquido. "')");



/*Si el resultado de la instruccion es verdadero*/
if (mysqli_query($conectar, $insertar))
{
	header ("location: diag.php");
}
else {
	echo "<h1>Error: ".$insertar."</h1><br /><h3>".mysqli_error($conectar);
}

//Cerrar conexión
mysqli_close($conectar);
?>
