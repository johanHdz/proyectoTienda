<?php
echo "<script src=js/script.js></script>";

$dbhost = "localhost"; //host donde esta la base de datos
$dbname = "tienda"; //nombre de BD
$dbuser = "root"; //user name
$dbpass = ""; //password de usuario

$nombreFigura= $_POST["nombre"];
$cantidadFigura= $_POST["cant"];
$idFigura="";

if ($nombreFigura == "figuraRem") {
    $idFigura = 1;
} if ($nombreFigura == "figuraDeku") {
    $idFigura = 2;
} if ($nombreFigura == "figuraGoku") {
    $idFigura = 3;
}
// echo "Nombre: ".$nombreFigura."<br>";
// echo "Cant: ".$cantidadFigura."<br>";
// echo "id: ".$idFigura."<br>";
    
//Conexión
$conexion = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("Problemas con la conexión");

//Sentencia
$sql = "UPDATE `productos` SET `cantidad` = (`productos`.`cantidad` - '$cantidadFigura') 
WHERE `productos`.`id` = '$idFigura';";

try {
    mysqli_query($conexion, "SELECT * FROM tienda");
    mysqli_query($conexion, $sql);
    mysqli_close($conexion);
} catch (Exception $e) {
    echo "<p class='mensaje__compra'>Error en el pago: ".$e."</p>";
}

include "index.php";
echo "<script>alert('Su compra se ha realizado exitosamente')</script>";