<?php
echo "<script src=js/script.js></script>";

$dbhost= "localhost"; //host donde esta la base de datos
$dbname= "tienda"; //nombre de BD
$dbuser= "root"; //user name
$dbpass= ""; //password de usuario

/* session_start(); */
$nombre= $_POST['nombre'];
$usuario= $_POST['nombreUsuario'];
$correo= $_POST['correo'];
$contraseña= $_POST['contraseña'];

//Conexión
$conexion= mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Problemas con la conexión");
//Sentencia
$sql= "INSERT INTO `usuarios` (`id_usuario`, `nombre_usuario`, `nick_usuario`, `correo_usuario`, `contraseña_usuario`) 
VALUES ('NULL', '$nombre', '$usuario', '$correo', '$contraseña');";

mysqli_query($conexion, "SELECT * FROM tienda");
mysqli_query($conexion, $sql);
mysqli_close($conexion);

include "login.html";
echo "<script>mostrarAlerta('Usuario registrado correctamente','error',1)</script>";