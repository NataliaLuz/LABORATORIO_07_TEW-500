<?php 

//CONEXION AL SERVIDOR AL OBJETO
$connection = new mysqli("localhost","root","","luz_natalia");

//PARA VERIFICAR SI EXISTE ALGUN ERROR
if(!$connection){
    die("LA CONEXION FALLO: ".$connection->connect_error);
}
echo "CONECTADO EXITOSAMENTE CON OBJETOS :) :) ;)";

//CERRAR LA CONEXION
mysqli_close($connection);
?>