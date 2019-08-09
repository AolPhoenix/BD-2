<?php

  $con = pg_connect("host=localhost dbname=postgres user=postgres password=root");

    if(isset($_POST['registro'])) {
        session_start();
        $correo = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['password'];
        $query = "INSERT INTO usuarios(usuario, nombre, correo, pass, descripcion, fotoperfil, cantidad_seguidores, cantidad_publicaciones, cantidad_seguido) Values('$usuario', '$nombre', '$correo', '$clave', '', 'imagenes/default.png', 0, 0, 0)";
        $res = pg_query($con, $query) or header('Location: inicio.php');

      }
    elseif(isset($_POST['login'])) {
        session_start();
        $usuario = $_POST['usuario'];
        $clave = $_POST['password'];
        $res = pg_query($con, "SELECT usuario, pass, fotoperfil from usuarios where usuario = '".$usuario."'");
        $row=pg_fetch_assoc($res);
        $fotoperfil = $row['fotoperfil'];
        if($row['pass'] != $clave){
            header('Location: login.php');
        }



      }
    elseif(isset($_POST['variable1'])) {
      session_start();
      $usuario = $_POST['variable1'];
      $fotoperfil = $_POST['variable2'];
    }


  ?>

<html>
<head>
  <link rel="icon" href="imagenes/icono.png">
  <title>Página Principal • Presiogram</title>
</head>
<link href="estilos.css" rel="stylesheet">
<body class="fondo" style="font-family: 'Open Sans';">

  <div class="principal_arriba">
    <img src="imagenes/icono1.png" alt="" class="icono1">
    <img src="imagenes/presiogram.png" alt="" class="presio">
    <buscar_caja><input type="search" id="search" placeholder="Buscar" class="buscar"></buscar_caja>
    <img src="imagenes/brujula.png" alt="" class="brujula">
    <img src="imagenes/corazon.png" alt="" class="corazon">
    <form method=post action='perfil.php'>
      <input type="image" name="imgbtn" src="imagenes/persona.png"  alt="persona" class="persona">
      <input type="hidden" name="variable1" value='<?php echo $usuario ?>'>
      <input type="hidden" name="variable2" value='<?php echo $fotoperfil ?>'>
    </form>

  </div>
  <div class="caja_foto">
  </div>
  <div class="caja_foto">
  </div>
  <div class="caja_foto">
  </div>
  <div class="caja_usuario">
    <?php
    if(isset($fotoperfil)){
      echo "<img src='".$fotoperfil."' alt='error' class='imagenperfil'>";
    }
    else{
      echo "<img src='imagenes/default.png' alt='error' class='imagenperfil'>";
    }
    ?>
    <span class="textousuario"><?php echo $usuario ?></span>
  </div>
</body>

</html>
