
<?php
include('db.php');
$name=$_POST["nombre"];
$ape=$_POST["apellidos"];
$cor=$_POST["correo"];
$numC=$_POST["numeroCuenta"];
$uni=$_POST["universidad"];
$sem=$_POST["semestre"];
$gru=$_POST["grupo"];
$tur=$_POST["turno"];
$con=$_POST["contraseña"];
$gen=$_POST["genero"];


$conexion=mysqli_connect("localhost","root","","transmisiondatos");

$consulta="INSERT INTO usuario (nombre, apellidos, correo, numeroCuenta, universidad, semestre, grupo, turno, contraseña, genero) VALUES ('$name', '$ape', '$cor', '$numC', '$uni', '$sem', '$gru', '$tur', '$con', '$gen' )";
$resultado=mysqli_query($conexion,$consulta);

header("Location: ../index.html");

mysqli_close($conexion);
?>
<!DOCTYPE html>
<html lang="es">
   <head>
      <link rel="stylesheet" href="../css/login.css" />
      <link rel="stylesheet" href="../css/estilos.css" />
      <link rel="shortcut icon" type="image/x-icon" href="../images/Icono.png" />
   </head>
</html>