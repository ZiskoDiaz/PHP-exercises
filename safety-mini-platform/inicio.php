<?php
error_reporting(0);
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
            <h2>Plataforma de Administración</h2>
        </div>
    </header>

    <div style="overflow:auto">
    <ul>
    <font face="arial">
    <li><a href="inicio.php">Inicio</a></li>
    </ul>
    </div>
    <div class="main">

        <article>
            <center>
            <fieldset>
              <form action="cuenta_usuario.php" method="post">
                <legend><b>Inicie sesión : </b></legend><br>

                Usuario : <br>
                <input name="usuario" type="text" >
                <br><br>
                Contraseña:<br>
                <input name="password" type="password" >
                <br><br>
            </center>
            </fieldset>
            <br>
            <center> <input type="submit" value="Iniciar Sesión"> </input> </center>

					</form>
        </article>
        <footer>
            <div style="background-color:#003173;text-align:center;padding:5px;margin-top:7px;">
                Fdcaro © copyright
            </div>
        </footer>
</body>

</html>

';

?>
