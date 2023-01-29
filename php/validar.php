
<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","transmisiondatos");

$consulta="SELECT*FROM usuario where numeroCuenta='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  header("Location: ../inicio.html");
  die();

}else{
    ?>
    <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
    <?php
    /* include("../login.html"); */
    header("Location: ../index.html");

/*   ?>
  
  <?php */
}
mysqli_free_result($resultado);
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