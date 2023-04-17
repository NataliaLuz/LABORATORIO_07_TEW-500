<?php 

//CONEXION AL SERVIDOR CON PDO CON ERROR
try {
    $connection = new PDO("mysql:host=localhost;dbname=luz_natalia","root","");
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "CONECTADO EXITOSAMENTE CON PDO :)";
} catch (PDOException $e) {
    echo "LA CONEXION FALLO :( ".$e->getMessage();
}

?>