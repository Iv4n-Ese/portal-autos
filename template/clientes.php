<?php

$textNombre = (isset($_POST['textNombre']))?$_POST['textNombre']:"";
$textApellido = (isset($_POST['textApellido']))?$_POST['textApellido']:"";
$textIdentificador = (isset($_POST['textIdentificador']))?$_POST['textIdentificador']:"";

$accion = (isset($_POST['accion']))?$_POST['accion']:"";

$guardaCorrecto=false;

// cargar archivo conexion
include("conexion/db.php");

switch($accion){
    case "btnRegistrarCliente":
          
        $sentencia = $pdo ->prepare("INSERT INTO clientes (Nombre,
            Apellido,
            identificador)
        VALUES ('$textNombre',
            '$textApellido',
            '$textIdentificador')");
        
        $sentencia -> execute();        
        
        if ($sentencia){            
            $guardaCorrecto=true;
        }

    break;
     
    default:        
    break;
}

?>