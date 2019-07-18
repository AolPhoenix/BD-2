<?php
  $con = pg_connect("host=localhost dbname=postgres user=postgres password=root");

    if(isset($_POST['submit'])) {
        session_start();
        $correo = $_POST['correo'];
        $nombre = $_POST['nombre'];
        $usuario = $_POST['usuario'];
        $clave = $_POST['password'];
      }
        else {
          echo 'Could not load text!';
        }

        $query = "INSERT INTO usuarios(usuario, nombre, correo, clave) Values('$usuario', '$nombre', '$correo', '$clave')";
        $res = pg_query($con, $query) or die (pg_last_error($con));
        $querydos = "SELECT * FROM usuarios";
        $test = pg_query($con, $querydos);
        $row=pg_fetch_assoc($test);
        echo "<td align='center' width='200'>" . $row['usuario'] . "</td>";
  ?>
