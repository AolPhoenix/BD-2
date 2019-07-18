<<?php

if(isset($_POST['submit'])) {
        session_start();
        $usuario = $_POST['usuario'];
        $pass = $_POST['password'];

      }
else {
      echo 'Could not load text!';
}
?>
