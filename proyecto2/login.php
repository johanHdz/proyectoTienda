<?php
echo "<script src=js/script.js></script>";
session_start();

$dbhost = "localhost"; //host donde esta la base de datos
$dbname = "tienda"; //nombre de BD
$dbuser = "root"; //user name
$dbpass = ""; //password de usuario

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];
$nickUsuario= "";

//Conexión
$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Problemas con la conexión");

//Para mostrar el nombre dependiendo de los campos
$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE `correo_usuario`= '$correo' && `contraseña_usuario`='$contraseña'");
while ($consulta = mysqli_fetch_array($resultado)) {
    $nickUsuario = $consulta['nick_usuario'];
    mysqli_close($conexion);
    //include "index.php";
}

if($nickUsuario=="") {
    include "login.html";
    echo "<script>mostrarAlerta('Correo y/o contraseña incorrecta','error',2)</script>";
    
} else {
    $_SESSION["usuario"]= "Bienvenido/a  ".$nickUsuario;
    header('Location: index.php');
}
?>