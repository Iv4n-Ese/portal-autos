<?php

// Datos de la conexión modificable
$servidor = "mysql:dbname=db_concesionario;host:127.0.0.1";
$usuario="root";
$password="";

try {    
    $pdo = new PDO($servidor, $usuario, $password) ;
    //echo "Conectado satisfactoriamente...";
} catch (PDOException $e) {
    echo "Conexion mala :( ".$e ->getMessage();
}

?>