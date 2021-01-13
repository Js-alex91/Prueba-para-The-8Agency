<?php

function mostrarError($errores, $campo){
    $alerta = '';
    if(isset($errores[$campo]) && !empty($campo)){

        $alerta = "<div class='alerta-error'>".$errores[$campo]."</div>";
    
    }

    return $alerta;

}


function borrarErrores(){
    $borrado = false;

    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
    }

    if(isset($_SESSION['registrado'])){

        $_SESSION['registrado'] = null;
    }

    return $borrado;
}



?>