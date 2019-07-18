<style>

.cajalogin{
  padding-top: 15px;
  background-color: #fff;
  border-style: solid;
  border-width: 1px;
  border-color: #e6e6e6;
  width: 400px;
  margin: 10px;
  padding-bottom: 10px;

}
.fondo{
  background-color: #fafafa;
  padding-top: 15px;
  padding-left: 30px;
  padding-right: 30px;

}
.boton{
  background-color: #3897f0;
  border: 1px solid #3897f0;
  border-radius: 4px;
  color: #fff;
  position: relative;
  width: 100%;
  height: 30;

}
.estiloinput{
  padding-left: 60px;
  padding-right: 60px;
}
.registrar{
  color: blue;
  text-decoration: none;
  font-weight: 600;

}
.input{
  background-color: #fcfcfc;
  border-radius: 2px;
  display: block;
  width: 100%;
  border: 1px solid #e6e6e6;
  position:relative;
  padding: 10px;
}
.letras{
  color:#385185;
  text-decoration: none;
}
.fb{
  margin: 0px 0px -2px;
}

</style>

<body class="fondo">
<center>
  <div class="cajalogin">
    <img src="imagenes/presiogram.png" alt="">
    <div class="estiloinput">
      <form action="comp.php" method="post">
      <p><input class="input" type="text" name="usuario" placeholder="Teléfono, usuario o correo electrónico" /></p>
      <p><input class="input" type="password" name="password" placeholder="Contraseña" /></p>
      <button class="boton" type="submit" action="comp.php">Iniciar sesion </button>
      </form>
    </div>
    <img src="imagenes/barra.png" alt="">
    <div>
    <img src="imagenes/fb.png" alt="" class="fb"> <a href="login.php" class="letras">Iniciar sesion con facebook</a>
    </div>
  </div>
  <div class="cajalogin">
    ¿No tienes cuenta?<a href="inicio.php" class="registrar"> Registrate</a>
  </div>
</center>
