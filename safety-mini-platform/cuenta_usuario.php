<?php
error_reporting(0);
try{

	session_start ();
	error_reporting(0);
	$usuario=$_POST['usuario'];
	$_SESSION [$usuario]=$_POST["usuario"];

	// $cifrado=$_POST['password'];
	// $user="administrador";
	// $pass="181369426";
	// $server="localhost";
	// $db="usuarios";
	// $conectar=mysqli_connect($server, $user, $pass, $db);
	//
	// $ip= $_SERVER["REMOTE_ADDR"];
	// //Consulta para insertar
	// $insertar = sprintf("INSERT INTO control (ubicacion, usuario) VALUES ('" . $ip . "','" . $usuario . "')");
	// if (mysqli_query($conectar, $insertar))
	// {
	// }
	//
	// else
	// {
	// 	echo "<h1>Error: ".$insertar."</h1><br /><h3>".mysqli_error($conectar);
	// }


$contador=0;
$base=new PDO("mysql:host=localhost; dbname=colegio_admision" , "root", "");
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql="SELECT * FROM usuario WHERE usuario= :usuario";

$resultado=$base->prepare($sql);
$resultado->execute(array(":usuario"=>$usuario));
while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
	//echo "Usuario: " . $registro['usuario'] . " Contraseña: " . $registro['password'] . "<br>";
	if(password_verify($cifrado, $registro['password'])){
		$contador++;
	}
	}
 	if($contador>0){


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
                <h2>Bienvenido a su Plataforma</h2>
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
                  <form action="cuenta_usuario.php" method="post">
                    <legend><b>Bienvenido Usuario :"'.$usuario.'"</b></legend><br>
                    <br><br><br>

										<br><br><br>
                </fieldset>
                <h5><br>
								</form>
								</article>



            <footer>
                <div style="background-color:#097000;text-align:center;padding:5px;margin-top:7px;">
                    Fdcaro © copyright
                </div>
            </footer>

    </body>

    </html>

    ';


 	}
	else{

		if (!isset ($_SESSION["usuario"]))
		{
			header ("location:inicio.php");
		}

 }
 	$resultado->closeCursor();
 }
 catch(Exception $e){
 	die("Error: " . $e->getMessage());
 }


?>
