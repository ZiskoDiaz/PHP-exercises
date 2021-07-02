<?php

$personas = array();
//Variables para Nombres//
$nombre1=" Francisco ";
$nombre2=" Joel ";
$nombre3=" Matias ";
$nombre4=" Jasna ";
//Variables para Rut//
$rut1="11.222.333-4 ";
$rut2="12.222.333-4 ";
$rut3="13.222.333-4 ";
$rut4="14.222.333-4 ";
//Variables para Edad//
$edad1="20 años";
$edad2="22 años";
$edad3="24 años";
$edad4="26 años";
//for ($i=0; $i<10; $i++)
//{
  array_push ($personas,$nombre1, $rut1, $edad1 ."<br>");
  array_push ($personas,$nombre2, $rut2, $edad2."<br>");
  array_push ($personas,$nombre3, $rut3, $edad3."<br>");
  array_push ($personas,$nombre4, $rut4, $edad4."<br>");
//}

for ($i=0; $i<count($personas);$i++)
{
  echo $personas [$i];
}
?>
