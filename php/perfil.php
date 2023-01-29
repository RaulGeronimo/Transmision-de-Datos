<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Transmisión de Datos</title>
      <link rel="shortcut icon" href="../images/Icono.png" type="image/x-icon">
      <link rel="stylesheet" href="../css/normalize.css">
      <link rel="stylesheet" href="../css/estilos.css">
      <link rel="stylesheet" href="../css/perfil.css">
   </head>
   <body>
      <header class="unidad">
         <nav class="nav container">
            <div class="nav__logo">
               <h2 class="nav__title">Transmisión de Datos</h2>
            </div>
            <ul class="nav__link nav__link--menu">
               <li class="nav__items">
                  <a href="../inicio.html" class="nav__links">Inicio</a>
               </li>
               <li class="nav__items">
                  <a href="../Contacto.html" class="nav__links">Contacto</a>
               </li>
               <li class="nav__items">
                  <a href="../apoyo.html" class="nav__links">Material de Apoyo</a>
               </li>
               <li class="nav__items">
                  <a href="../Perfil.html" class="nav__links">Perfil</a>
               </li>
               <img src="../images/close.svg" class="nav__close">
            </ul>
            <div class="nav__menu">
               <img src="../images/menu.svg" class="nav__img">
            </div>
         </nav>
      </header>
      <main>


          <?php
          /*include('db.php');
          $usuario = $_POST['cuenta'];
          $conexion=mysqli_connect("localhost","root","","TransmisionDatos");
          $var_consulta="SELECT * FROM usuario where numeroCuenta='$usuario'";
          $resultado=mysqli_query($conexion,$consulta); */

        include("Conexion.php");
        $link=Conectarse();
        $codigo = $_POST['cuenta'];
        $var_consulta= "select * from usuario where numeroCuenta = $codigo";
        
        $var_query = $link->query($var_consulta);
        
        while ($var_fila=$var_query->fetch_array())
        {
        $Nombre=$var_fila[1];
        $Apellidos=$var_fila[2];
        $Correo=$var_fila[3];
        $Cuenta=$var_fila[4];
        $universiad=$var_fila[5];
        $semestre=$var_fila[6];
        $grupo=$var_fila[7];
        $turno=$var_fila[8];
        $genero=$var_fila[10];
        }
          ?>



         <section class="seccion-perfil-usuario">
            <div class="perfil-usuario-header">
            </div>
            <div class="perfil-usuario-body">
               <div class="perfil-usuario-bio">
                  <h3 class="titulo">Usuario</h3>
               </div>
               <div class="perfil-usuario-footer">
                  <ul class="lista-datos">
                     <li><img src="../images/Perfil/Escuela.svg" class="perfil__icons"></i> Nombre: <?php echo $Nombre,"<br>" ,$Apellidos; ?> </li>
                     <li><img src="../images/Perfil/cuenta.svg" class="perfil__icons"></i> Numero de Cuenta: <?php echo $Cuenta; ?> </li>
                     <li><img src="../images/Perfil/correo.svg" class="perfil__icons"></i> Correo Institucional: <?php echo $Correo; ?> </li>
                     <li><img src="../images/Perfil/Genero.svg" class="perfil__icons"></i> Sexo: <?php echo $genero; ?> </li>
                  </ul>
                  <ul class="lista-datos">
                     <li><img src="../images/Perfil/Universidad.svg" class="perfil__icons"></i> Universidad: <?php echo $universiad; ?> </li>
                     <li><img src="../images/Perfil/semestre.svg" class="perfil__icons"></i> Semestre: <?php echo $semestre; ?> </li>
                     <li><img src="../images/Perfil/Grupo.svg" class="perfil__icons"></i> Grupo: <?php echo $grupo; ?> </li>
                     <li><img src="../images/Perfil/Turno.svg" class="perfil__icons"></i> Turno: <?php echo $turno; ?> </li>
                  </ul>
               </div>
               <div class="perfil-usuario-header">
               </div>
            </div>
         </section>


      </main>
      <script src="./js/menu.js"></script>
   </body>
</html>