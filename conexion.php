<?php
//conexion a la base de datos

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'jeep';

// $db = mysqli_connect($server, $user, $password, $database);

// mysqli_query($db, "SET NAMES 'utf8'");


//iniciar la sesion.
//en caso de que se produzca algun error en el envio de formulario, el archivo 'registro.php' se encargara
//de crear la sesion correspondiente y devolverla al 'index.php' con la informacion de fallo, dentro de la sesion.

session_start();


?>
