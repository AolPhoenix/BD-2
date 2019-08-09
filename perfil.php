<?php $usuario = $_POST['variable1'];
$fotoperfil = $_POST['variable2'];
echo $usuario?>

<form method=post action='principal.php'>
  <input type="hidden" name="variable1" value='<?php echo $usuario ?>'>
  <input type="hidden" name="variable2" value='<?php echo $fotoperfil ?>'>
  <input type="image" name="imgbtn" src="imagenes/persona.png"  alt="persona" class="persona">
</form>

<form action="perfil.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<?php
session_start();
$xd = $_FILES['fileToUpload'];

echo $xd?>
