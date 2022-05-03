<?php

include 'db.php';

//CLASE PARA VALIDAR LOGIN Y CREAR SESIONES 
class SESION extends CONx{

    public $USU_nombre;
    public $USU_primerI;

    public $USU_correo;
    public $USU_clave;

    //METODO PARA INICIO SE SESIÓN DE USUARIOS
    public function IniciarSesion($Cor,$Cla){
        session_start();

        $_SESSION["USU"] = array();

        //SE CREA UNA CONSULTA A LA BASE DE DATOS Y SE EJECUTA
        $consulta = "SELECT * FROM USUARIOS WHERE USU_CORREO = '$Cor' AND USU_CLAVE = '$Cla'";
        $ejecutarC = mysqli_query($this->c0, $consulta);

        //CON EL RESULTADO DE LA CONSULTA SE VERIFICA SI LOS DATOS EXISTEN EN LA BASE DE DATOS
        $filas = mysqli_num_rows($ejecutarC);
        if($filas>0){

            $this -> USU_correo = $Cor;
            $_SESSION["USU"]['COR'] = $this -> USU_correo;
            $this -> USU_clave = $Cor;
            $_SESSION["USU"]['CLA'] = $this -> USU_clave;

            //CONSULTA PARA EXTRAER EL 'NOMBRE' DE LA BASE DE DATOS Y PODERLO USAR EN EL CODIGO
            $ConsultaNombre = "SELECT USU_NOMBRE FROM USUARIOS WHERE USU_CORREO = '$Cor' AND USU_CLAVE = '$Cla'";
            $Nombre = mysqli_query($this->c0, $ConsultaNombre);
            while ($columna = mysqli_fetch_array($Nombre))
            {
                $this -> USU_nombre = $columna['USU_NOMBRE'];
                $_SESSION["USU"]['NOMBRE'] = $this -> USU_nombre;
            }

            //CONSULTA PARA EXTRAER EL 'PRIMER INICIO' DE LA BASE DE DATOS Y PODERLO USAR EN EL CODIGO
            $ConsultaPI = "SELECT PRIMER_INICIO FROM USUARIOS WHERE USU_CORREO = '$Cor' AND USU_CLAVE = '$Cla'";
            $pi = mysqli_query($this->c0, $ConsultaPI);
            while ($columna = mysqli_fetch_array($pi))
            {
                $this -> USU_primerI = $columna['PRIMER_INICIO'];
                $_SESSION["USU"]['PI'] = $this -> USU_primerI;
            }


            //SI LOS DATOS DEL LOGIN SON CORRECTOS, SE REDIRECCIONA A:
            header("location:../frontend/public/home.php");
            
        }else{

            //SI LOS DATOS SON INCORRECTOS SE EJECUTA:
            echo " <h1>DATOS INCORRECTOS</h1> ";
        }
    }
    
    //METODO PARA COMPROBAR SI HAY UNA SESIÓN EXISTENTE ACTUALMENTE
    public function ComprobarSesion(){

        if(!isset($_SESSION["USU"])){
            header("location:../public/login.html");            
        }
    }

    //METODO PARA MARCAR EL PRIMER INICIO DE SESIÓN COMO '1'
    public function PrimerInicio(){
        $actualizar = "UPDATE USUARIOS SET PRIMER_INICIO = '1' WHERE USU_CORREO = '{$_SESSION["USU"]['COR']}'";
        $resultado = mysqli_query( $this->c0, $actualizar ) or die ( "NO SE ACTUALIZO EL REGISTRO");
    }

    //METODO PARA CERRAR LA SESIÓN
    public function CerrarSesion(){
        session_start();
        session_destroy();
        header("location:../frontend/public/login.html");  
    }
}