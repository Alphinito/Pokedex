<?php

include '../backend/sesion.php';

$correo = $_POST['n_correo'];
$clave = $_POST['n_clave'];

$objeto = new SESION;                                      //SE CREA UN OBJETO Y SE LE ASIGNA LA CLASE
$objeto -> Conectar('localhost','root','','pokedex');     //CONEXIÓN A DB CON EL METODO
$objeto -> IniciarSesion($correo,$clave);                //VERIFICACIÓN DE DATOS PARA INICIO DE SESION
                             //CERRAR CONEXION A DB

?>