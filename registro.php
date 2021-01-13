<?php

if(isset($_POST)){

    //conexion a la base de datos
    require_once 'conexion.php';

    if(!isset($_SESSION)){
        session_start();
    }

   //recoger datos del formulario
    $nombre = isset($_POST['name']) ? mysqli_real_escape_string($db, $_POST['name']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, $_POST['email']) : false;
    $telefono = isset($_POST['tel']) ? mysqli_real_escape_string($db, $_POST['tel']) : false;
    $mensaje = isset($_POST['mensaje']) ? mysqli_real_escape_string($db, $_POST['mensaje']) : false;

    $errores = array();

    //validar datos 
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        
        $nombre_validado = true;

    }else{

        $nombre_validado = false;
        $errores['nombre'] = 'Ingrese un nombre';
    
    }

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
    
        $email_validado = true;

    }else{
    
        $email_validado = false;
        $email = null;
    }

    if(!empty($telefono) && !preg_match("/[a-zA-Z]/", $telefono)){
        $telefono_validado = true;
    }else{
        $errores['telefono'] = 'Debe ingresar un numero valido';
    }

    if(!empty($mensaje)){
        $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
    }

    $guardar_usuario = false;
    if(count($errores) == 0){
        //guardar usuario en base de datos 
        $guardar_usuario = true;

        //ingresar dato a la tabla de la base de datos
        
        $sql = "INSERT INTO consultas VALUES(null, '$nombre', $telefono, '$mensaje', CURDATE());";
        $guardar = mysqli_query($db, $sql);

        if($guardar){
            $_SESSION['registrado'] = 'El registro se ha completado con exito!';
        
        }else{

            $_SESSION['errores']['general'] = 'Fallo al guardar los datos';
        }


    }else{
        //mostrar errores

        $_SESSION['errores'] = $errores;
 
    }
    
}

header('Location: index.php');


?>