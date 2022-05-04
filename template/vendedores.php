<?php

$textNombreV = (isset($_POST['textNombreV']))?$_POST['textNombreV']:"";
$textMarca = (isset($_POST['textMarca']))?$_POST['textMarca']:"";
$textIdentificadorC = (isset($_POST['textIdentificadorC']))?$_POST['textIdentificadorC']:"";

$accion = (isset($_POST['accion']))?$_POST['accion']:"";

$guardaCorrecto=false;

// cargar archivo conexion
include("conexion/db.php");

switch($accion){
    case "btnRegistrarVendedor":
          
        $sentencia = $pdo ->prepare("INSERT INTO vendedores (Nombre,
            Id_vehiculo,
            Id_cliente)
        VALUES ('$textNombreV',
            $textMarca,
            $textIdentificadorC)");
        
        $sentencia -> execute();        
        
        if ($sentencia){            
            $guardaCorrecto=true;
        }

    break;
     
    default:        
    break;
}

?>