<html>
<head>
  <link rel="icon" href="imagenes/icono.png">
  <title>Iniciar sesión • Presiogram</title>
</head>
<link href="estilos.css" rel="stylesheet">

<body class="fondo">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<center>
  <div class="cajalogin">
    <img src="imagenes/presiogram.png" alt="">
    <div class="estiloinput">
      <form action="principal.php" method="post">
      <p><input class="input" type="text" name="usuario" placeholder="Teléfono, usuario o correo electrónico" /></p>
      <p><input class="input" type="password" name="password" placeholder="Contraseña" /></p>
      <button class="boton Fuente" type="submit" name="login" action="principal.php">Iniciar sesion </button>
      </form>
    </div>
    <img src="imagenes/barra.png" alt="">
    <div>
    <img src="imagenes/fb.png" alt="" class="fb"> <button type="button" class="letras btn disabled" style="background-color:#fff;">Iniciar sesion con facebook</button>
    </div>
  </div>
  <div class="cajalogin" style="height:52px;">
    ¿No tienes cuenta?<a href="inicio.php" class="minia" style="color:#3897f0;"> Registrate</a>
  </div>
</center>
</html>
