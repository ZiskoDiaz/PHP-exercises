<?php


// CLASE PADRE LLAMADA PERSONA //
class Persona{

              private $rut;
              private $nombre;
              private $edad;
              private $genero;

              function __construct( $parametro1,
                                    $parametro2,
                                    $parametro3,
                                    $parametro4)
              {
                  $this->rut    =   $parametro1;
                  $this->nombre =   $parametro2;
                  $this->edad   =   $parametro3;
                  $this->genero =   $parametro4;
              }
              function getRut()
              {
                return $this->rut;
              }
              function getNombre()
              {
                return $this->nombre;
              }
              function getEdad()
              {
                return $this->edad;
              }
              function getGenero()
              {
                return $this->genero;
              }
 
}



//CLASE HIJA LLAMADA TRABAJADOR 

class Trabajador extends Persona {

        private $persona;

        function __construct( $parametro1, 
                              $parametro2, 
                              $parametro3, 
                              $parametro4, 
                              $parametro5){
          parent::__construct($parametro1, $parametro2, $parametro3, $parametro4);

          $this->persona=$parametro5;
         }

          function getTipo(){
            $evaluador=$this->persona;

            if ($evaluador == 1)
            {
            $sueldobase=300000;
            $calculo=$sueldobase-(($sueldobase*7)/100);
            $estado="Soy Trabajador y mi sueldo es base es $ ".$calculo;
            }

          return $estado;
          }

}

// CLASE HIJA LLAMADA DEPORTISTA

class Deportista extends Persona {

             private $persona;


            function __construct( $parametro1, 
            $parametro2, 
            $parametro3, 
            $parametro4, 
            $parametro5){
            parent::__construct($parametro1, $parametro2, $parametro3, $parametro4);

            $this->persona=$parametro5;
            }


            function getTipo(){
            $evaluador=$this->persona;
            if ($evaluador == 2)
            {
              $sueldobase=300000;
              $comida=60000;
              $entrenamiento=30000;
              $calculo=($sueldobase-(($sueldobase*7)/100))-$comida-$entrenamiento;
              $estado="Soy Deportista y mi dinero a fin de mes es  $ ".$calculo;
            }

            return $estado;
            }


}

// CLASE HIJA LLAMADA ESTUDIANTE

class Estudiante extends Persona {

          private $persona;


          function __construct( $parametro1, 
          $parametro2, 
          $parametro3, 
          $parametro4, 
          $parametro5){
          parent::__construct($parametro1, $parametro2, $parametro3, $parametro4);

          $this->persona=$parametro5;
          }



          function getTipo(){
            $evaluador=$this->persona;
            if ($evaluador == 3)
            {
              $sueldobase=100000;
              $pasajes=30000;
              $tareas=15000;
              $calculo=($sueldobase-(($sueldobase*7)/100))-$pasajes-$tareas;
              $estado="Soy Trabajador y mi sueldo es base es $ ".$calculo;
            }

          return $estado;
          }


}

//FIN AL CODIGO DE LAS CLASES

?>



<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width,
                  user-scalable=no,
                  initial-scale=1.0,
                  maximum-scale=1.0,
                  minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="estilos.css">
    <title>Herencia y Polimorfismo</title>
  </head>
  <body>
      <form action="pruebas.php" method="post">

            <br>Ingrese su RUT<br>
            <input type="text" name="rut"><br>
            <br>Ingrese su nombre<br>
            <input type="text" name="nombre"><br>
            <br>Ingrese su Edad<br>
            <input type="text" name="edad"><br>
            <br>Indique su género<br><br>
            <input type="radio" name="genero" value="Hombre" checked> Hombre<br>
            <input type="radio" name="genero" value="Mujer"> Mujer<br>
            <input type="radio" name="genero" value="Otro"> Otro<br>
            <br>Elija el rango en el cual se identifica</p>
              <select name="persona">
                  <option value="#"> Elija Tipo</option>
                  <option value="1">Trabajador</option>
                  <option value="2">Deportista</option>
                  <option value="3">Estudiante</option>
              </select>
            <button type="submit" name="elegir" class="btn btn-success">Elegir</button>
      </form>

 

      <?php

  if(isset($_POST["elegir"]))
    {

              $persona = new Persona    (   $_POST['rut'],
                                            $_POST['nombre'],
                                            $_POST['edad'],
                                            $_POST['genero']);

    }
  if (isset($_POST['persona']))
  {
    if ($_POST['persona']==1)
    {
      $trabajador = new Trabajador  (    $_POST['rut'],
                                      $_POST['nombre'],
                                      $_POST['edad'],
                                      $_POST['genero'],
                                      $_POST['persona']);

      //Para mostrar un dato creado con Private
        echo "Estimado usuario RUT : ".$trabajador->getRut() . "<br>";
        echo "Confirmamos que su nombre es : ".$trabajador->getNombre() . "<br>";
        echo "Su edad es  : ".$trabajador->getEdad() . " años <br>";
        echo "Su genero es : ".$trabajador->getGenero() . "<br>";
        echo "Entonces digo : ".$trabajador->getTipo() . "<br>";

    }

    elseif ($_POST['persona']==2)
    {


      $deportista = new Deportista  (     $_POST['rut'],
                                          $_POST['nombre'],
                                          $_POST['edad'],
                                          $_POST['genero'],
                                          $_POST['persona']);

        //Para mostrar un dato creado con Private
        echo "Estimado usuario RUT : ".$deportista->getRut() . "<br>";
        echo "Confirmamos que su nombre es : ".$deportista->getNombre() . "<br>";
        echo "Su edad es  : ".$deportista->getEdad() . " años <br>";
        echo "Su genero es : ".$deportista->getGenero() . "<br>";
        echo "Entonces digo : ".$deportista->getTipo() . "<br>";

    }


    elseif ($_POST['persona']==3)
    {
      
      $estudiante = new Estudiante  ( $_POST['rut'],
                                      $_POST['nombre'],
                                      $_POST['edad'],
                                      $_POST['genero'],
                                      $_POST['persona']);
        
        //Para mostrar un dato creado con Private
         echo "Estimado usuario RUT : ".$estudiante->getRut() . "<br>";
         echo "Confirmamos que su nombre es : ".$estudiante->getNombre() . "<br>";
         echo "Su edad es  : ".$estudiante->getEdad() . " años <br>";
         echo "Su genero es : ".$estudiante->getGenero() . "<br>";
         echo "Entonces digo : ".$estudiante->getTipo() . "<br>";

    }
  }

      
?>
  </body>
</html>