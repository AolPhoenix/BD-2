<?php
  $con = pg_connect("host=localhost dbname=postgres user=postgres password=A34p9dil");

    if(isset($_POST['submit'])) {
        session_start();
        $correo = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['password'];
      }

        $query = "INSERT INTO usuarios(usuario, nombre, correo, clave) Values('$usuario', '$nombre', '$correo', '$clave')";
        $res = pg_query($con, $query) or die (pg_last_error($con));
  ?>
