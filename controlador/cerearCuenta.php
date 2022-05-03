<?php

include '../backend/sesion.php';

$nombre = $_POST['n_cNombre'];
$appelido = $_POST['n_cApellido'];
$correo = $_POST['n_cCorreo'];
$contraseña = $_POST['n_cClave'];

$objeto = new SESION;                                      //SE CREA UN OBJETO Y SE LE ASIGNA LA CLASE
$objeto -> Conectar('localhost','root','','pokedex');     //CONEXIÓN A DB CON EL METODO
$objeto -> Crear_USUARIO($nombre,$appelido,$correo,$contraseña,'b_crear');
$objeto -> IniciarSesion($correo,$contraseña);          //VERIFICACIÓN DE DATOS PARA INICIO DE SESION
                         //CERRAR CONEXION A DB

?>