
<html>
<head>
  <link rel="icon" href="imagenes/icono.png">
  <title>Presiogram</title>
</head>
<body class="Fuente">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<link href="estilos.css" rel="stylesheet">
<div id="cf4a" class="shadow" style="position:fixed; left:685px; top:196px; z-index:1;">
  <img src="imagenes/uno.jpg" style="width: 247px; height:440px;">
  <img src="imagenes/dos.jpg" style="width: 247px; height:440px;">
  <img src="imagenes/tres.jpg" style="width: 247px; height:440px;">
  <img src="imagenes/cuatro.jpg" style="width: 247px; height:440px;">
</div>
<IMG SRC = imagenes/background.png class="Telefono">
<div class="CajaInicial">
  <span class=TextoRegistrar>Regístrate para ver fotos y videos<br> de tus amigos.</texto></span>
  <IMG SRC = imagenes/facebook.png class="FacebookFoto">
  <IMG SRC = imagenes/presiogram.png class="presiogram">
  <IMG SRC = imagenes/O.png class="O">
  <form action="dos.php" method="POST">
      <input type="text" class="Formulario" placeholder="Número de celular o correo electrónico" name="correo" /><br />
      <input type="text" class="Formulario" placeholder="Nombre completo" name="nombre" /><br />
      <input type="text" class="Formulario" placeholder="Nombre de usuario" name="usuario" /><br />
      <input type="password" class="Formulario" placeholder="Contraseña" name="password" /><br />
      <input type="submit" class="Registrar btn btn-primary" name="submit" value="Registrarse" />
      <input type="button" class="Facebook btn btn-primary disabled" action="dos.php" name="facebook" value="Inicia sesión con Facebook" />
  </form>
</div>

<div class="CajaDos">
  <span class="cuenta">¿Tienes una cuenta? <a class="minia" href="login.php"><span class="cuentalink">Inicia sesión</span></a></span>
</div>
<span class="Condiciones">
  Al registrarte, aceptas nuestras<br>
   <a class="minia" target="_blank" href="https://help.instagram.com/581066165581870">Condiciones</a>
   , la <a class="minia" target="_blank" href="https://help.instagram.com/519522125107875">Política de datos</a>
    y la<br> <a class="minia" target="_blank" href="/legal/cookies/">Política de cookies</a>.
</span>

</body>
</html>
