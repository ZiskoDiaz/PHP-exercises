<?php

class Persona {

  private $nombre;
  private $edad;
  private $direccion;
  private $sueldobase;
  private $dctoAFP;
  private $dctoSALUD;
  private $sliquido;

  function __construct ($parametro1,
                        $parametro2,
                        $parametro3,
                        $parametro4,
                        $parametro5,
                        $parametro6)
      {
          $this->nombre=$parametro1;
          $this->edad=$parametro2;
          $this->direccion=$parametro3;
          $this->sueldobase=$parametro4;
          $this->dctoAFP=$parametro5;
          $this->dctoSALUD=$parametro6;
      }

// <---- función para Nombre Completo ----> //
      function getNombre ()
      {
          return $this->nombre;
      }

// <---- función para Edad ----> //
      function getEdad ()
      {
          return $this->edad;
      }

// <---- función para Direccion ----> //
      function getDireccion ()
      {
          return $this->direccion;
      }

// <---- función para Sueldo_Base ----> //
      function getSueldobase ()
      {
          return $this->sueldobase;
      }

// <---- función para Dcto AFP----> //
      function getAfp ()
      {
          return $this->dctoAFP;
      }

// <---- función para Dcto SALUD ----> //
      function getSalud ()
      {
          return $this->dctoSALUD;
      }

//<---- función del calculo de descuento ---->//
      function getSueldoliquido()
      {
          $salud=$this->dctoSALUD;
          $afp=$this->dctoAFP;
          $sb=$this->sueldobase;
          //Aquí hacemos el calculo //
          $calculo= $sb-($sb*($afp+$salud)/100);
          return $calculo;
      }
}

?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Trabajador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie-edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  </head>
  <body>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <div class="container"><h3>Ingrese los siguientes datos solicitados.</h3></div>

<!-- PRUEBA DE CODIGO EN BOOTSTRAP -->
    <!-- <br><br>
    <div class="container">
      <div class="row">
        <div class="  col-sm-12   col-md-12   col-lg-12   col-xl-12   border">Header</div>
      </div>
      <div class="row">
        <div class="  d-none      d-md-block  d-lg-block  d-xl-block
                      d-sm-none   col-md-6    col-lg-3    col-xl-4    border">Izquierda</div>
        <div class="  col-sm-12   col-md-6    col-lg-6    col-xl-4    border">Centro</div>
        <div class="  col-sm-12   col-md-12   col-lg-3    col-xl-4    border">Derecha</div>
      </div>
      <div class="row">
        <div class="  col-sm-12   col-md-12   col-lg-12   col-xl-12 border">Footer</div>
      </div> -->

<!-- fin de las pruebas -->
</div>

    <br><br>
    <div class="container">
      <form class="row "action="trabajador.php" method="POST">
        <div class="col-sm-12   col-md-12   col-lg-4   col-xl-4 ">
          <br>Nombre<br>
          <input type="text" name="nombre" placeholder="Ingrese su nombre">
          <br>edad<br>
          <input type="text" name="edad" placeholder="Ingrese edad">
        </div>
        <div class="col-sm-12   col-md-12   col-lg-4   col-xl-4 ">
              <br>direccion<br>
              <input type="text" name="direccion" placeholder="Ingrese direccion">
              <br>sueldo base<br>
              <input type="text" name="sb" placeholder="Ingrese sueldo base">
        </div>
        <div class"col-sm-12   col-md-12   col-lg-4   col-xl-4 ">
              <br>AFP<br>
              <input type="text" name="afp" placeholder="% de descuento">
              <br>Salud<br>
              <input type="text" name="salud" placeholder="%de descuento">
              <br>
              <br><br>
        </div>
        <div class="col-12">
              <button type="submit" name="calcular" class="btn btn-success">Calcular</button>

        </div><br><br>

      </form>
    </div>

    <div class="container">
      <?php
          //Creando el objeto o Instanciando la clase Cuenta
          if(isset($_POST['calcular'])){
              $trabajador = new Persona($_POST['nombre'],
                                        $_POST['edad'],
                                        $_POST['direccion'],
                                        $_POST['sb'],
                                        $_POST['afp'],
                                        $_POST['salud']);

              //Para mostrar un dato creado con Private
              echo $trabajador->getNombre() . "<br>";
              echo $trabajador->getEdad() . "<br>";
              echo $trabajador->getDireccion() . "<br>";
              echo $trabajador->getSueldobase() . "<br>";
              echo $trabajador->getAfp() . "<br>";
              echo $trabajador->getSalud() . "<br>";
              echo "<kbd>".$trabajador->getSueldoliquido() . "</kbd><br>";
          }
      ?>
    </div>
  </body>
</html>
