<?php
error_reporting(0);
echo '

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.5">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title> Seguridad en Software </title>

    <style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #274ba6;
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
        background-color: #003173;
        padding: 2px;
        text-align: center;
        font-size: 10px;
        color: white;
    }
    footer
    {
    background-color: #003173;
    padding: 5px;
    text-align: center;
    color: rgb(181, 228, 254);
    }
    article
    {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 4;
    background-color: #ffffff;
    padding: 15px;
    font-size: 15px;
    }

    {
  box-sizing: border-box;
  .right
    {
      background-color:#003173;
      float:left;
      width:20%;
      padding:15px;
      margin-top:7px;
      text-align:center;
    }
  .left
    {
      background-color:#003173;
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
        <div style="background-color:#003173;padding:1px;text-align:center;">
            <h2>Portal Inicio de Sesión</h2>
        </div>
    </header>

    <div style="overflow:auto">
    <ul>
    <font face="arial">
    <li><a href="inicio.php">Inicio</a></li>
    <li><a href="registro.php">Registro</a></li>
    </ul>
    </div>
    <div class="main">

<article>
    <fieldset>
<form name="a" action="registrar.php" method="POST">
<legend><b>Datos de su cuenta :</b></legend><br>
        Usuario : <br>
            <input name="usuario" type="text" placeholder="usuario ..."></br>
        <br>Nombre : <br>
            <input name="nombre" type="text" placeholder="nombre ..."></br>
        <br>Apellido : <br>
            <input name="apellido" type="text" placeholder="apellido ..."></br>
        <br>Fecha Nacimieno : <br>
            <input name="fecha_nacimiento" type="date" placeholder="Cumpleaños ..."></br>
        <br>Edad : <br>
            <input name="edad" type="number" placeholder="edad ..."></br>
        <br>Password : <br>
            <input name="password" type="password" placeholder="password ...">
        <br><br>

    </fieldset>
</article>
<center><input type="submit" value="Registrar Ahora"></center><br>
</form>
</div>
<footer>
    <div style="background-color:#003173;text-align:center;padding:5px;margin-top:7px;">
        Fdcaro © copyright
    </div>
</footer>
</body>
</html>
';

?>
