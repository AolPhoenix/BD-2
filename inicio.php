
<html>
<head>
  <link rel="icon" href="imagenes/icono.png">
  <title>Presiogram</title>
</head>
<body class="Fuente" style="text-align:center;">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<link href="estilos.css" rel="stylesheet">
<div class="fadein" style="display: inline-block; position:relative; left:498px; bottom:283;  z-index:1;">
  <img src="imagenes/uno.jpg" style="width: 247px; height:440px;">
  <img src="imagenes/dos.jpg" style="width: 247px; height:440px;">
  <img src="imagenes/tres.jpg" style="width: 247px; height:440px;">
  <img src="imagenes/cuatro.jpg" style="width: 247px; height:440px;">
</div>
<IMG SRC = imagenes/background.png class="Telefono" style="position:relative;bottom:110px; left:10px;">
<div class="CajaInicial" style="top:50px;">
  <span class="Condiciones">
    Al registrarte, aceptas nuestras<br>
     <a class="minia" target="_blank" href="https://help.instagram.com/581066165581870">Condiciones</a>
     , la <a class="minia" target="_blank" href="https://help.instagram.com/519522125107875">Política de datos</a> y la <a class="minia" target="_blank" href="/legal/cookies/">Política de cookies</a>.
  </span>
  <span class=TextoRegistrar>Regístrate para ver fotos y videos<br> de tus amigos.</texto></span>
  <IMG SRC = imagenes/facebook.png class="FacebookFoto">
  <IMG SRC = imagenes/presiogram.png class="presiogram">
  <IMG SRC = imagenes/O.png class="O">
  <form action="principal.php" method="POST">
      <input type="text" class="Formulario" placeholder="Número de celular o correo electrónico" name="correo" /><br />
      <input type="text" class="Formulario" placeholder="Nombre completo" name="nombre" /><br />
      <input type="text" class="Formulario" placeholder="Nombre de usuario" name="usuario" /><br />
      <input type="password" class="Formulario" placeholder="Contraseña" name="password" /><br />
      <input type="submit" class="Registrar btn btn-primary" name="registro" value="Registrarse" />
      <input type="button" class="Facebook btn btn-primary disabled" action="principal.php" name="facebook" value="Inicia sesión con Facebook" />
  </form>
</div>

<div class="CajaDos" style="top:160;">
  <span class="cuenta">¿Tienes una cuenta? <a class="minia" href="login.php"><span class="cuentalink">Inicia sesión</span></a></span>
</div>


</body>
</html>
