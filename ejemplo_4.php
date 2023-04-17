<?php 

//CADENA DE CONEXION AL SERVIDOR Y BASE DE DATOS
$connection = mysqli_connect("localhost","root","","luz_natalia");

//PARA VERIFICAR SI EXISTE ALGUN ERROR
if(!$connection){
    die("LA CONEXION FALLO: ".mysqli_connect_error());
}
echo "CONECTADO EXITOSAMENTE CON PROCEDIMIENTOS :) :) ;)";

//CERRAR LA CONEXION
mysqli_close($connection);
?>