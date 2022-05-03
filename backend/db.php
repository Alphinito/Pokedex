<?php

//CLASE DE CONEXIÓN A BASE DE DATOS Y CRUD
class CONx{

    public $c0;

    public function Conectar($server,$user,$pass,$db)
    {
    $conexion0 = mysqli_connect($server, $user, $pass) or die ("NO SE HA PODIDO CONECTAR CON EL SERVIDOR DE BASE DE DATOS"); //ESTA VARIABLE ALMACENA EL RESULTADO DE LA FUNCIÓN mysqli PARA VERIFICAR EL EXITO DE LA CONEXIÓN

    $this->c0 = $conexion0;

    $basededatos = mysqli_select_db($conexion0, $db)or die('Upss... RETRUECANOS!, NO SE PUEDO CONECTAR A LA BASE DE DATOS'); //ESTA VARIABLE ALMACENA EL RESULTADO DE LA VARIABLE mysqli_select_db  
    }
    
    public function Desconectar(){
        mysqli_close( $this->c0 ); //ESTE METODO CIERRA LA CONEXIÓN A LA DB
    }

    //FUNCIÓN PARA CREAR NUEVO USUARIO
    public function Crear_USUARIO($Nombre,$Apellido,$Correo,$Clave,$boton)
    {
        if(isset($_POST[$boton])){
            $insertar = "INSERT INTO USUARIOS (USU_NOMBRE, USU_APELLIDO, USU_CORREO, USU_CLAVE) VALUES ('$Nombre', '$Apellido','$Correo', '$Clave')";
            $resultado = mysqli_query( $this->c0, $insertar ) or die ( "NO SE PUDO INSERTAR EN LA BD");
        }
        
    }
}