<?php

class BaseDatos{
    protected $conexion;

    public function__construct()
    {
        if(!isset($this->conexion)){
            $this->conexion=mysqli_connect('localhost','root','','auto');
        }
    return true;
    }

    public function desconectar(){
        if(isset($this->conexion)){
            mysqli_close($this->conexion);
        }
    }

    public function consulta($sql){
        $resultado=mysqli_query($this->conexion, $sql);
        return $resultado;
    }

    public function affected (){
        if(mysqli_affected_rows($this_conexion)>0){
            return 1;
        }else{
            return 0;
        }
    }
}


class Auto{

    private $patente;
    private $marca;
    private $modelo;
    private $anio;
}


function getDatos(){

    $datos=array();

    $datos["patente"]=$this->patente;
    $datos["marca"]=$this->marca;
    $datos["modelo"]=$this->modelo;
    $datos["anio"]=$this->anio;

    return $datos;
}

//Servicio

    public_function insertar(){

    }


// ESTO VA EN OTRA PAGINA DE MOMENTO TRABAJARE AQUI //
// nombre: insertar.php

require_once ("basedatos.php");
require_once ("auto.php");

//creando conexion a la bd//

$conexion=new BaseDatos(); // conexion a la base de datos//

//Capturar datos del form
$a="HTTP80";
$b="Q2";
$c="AUDI";
$d="2019";

// objeto AUTO1
$auto1=new Auto($a,$b,$c,$d);

//insertar datos en la BD
$sql=$auto1->insertar();

//consulta ejecución
$resultado=$conexion->consulta($sql);

//evaluar que paso con la insercion

    if ($conexion->affected()>0){
        echo "registro existoso";
    }else{
        echo "fallo en registro";
    }

?>