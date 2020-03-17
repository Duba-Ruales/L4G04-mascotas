<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body bgcolor="#207cf9"> <br><br><br><br>
<center>
<font color="#ffffff">
<h2> <u>¡REGISTRA TU MASCOTA!</u> </h2><br>
</font>

 <form action="guardar_mascotas.php" method="post">
  
  <div class="form-group">
    <label for=""><b>Nombre Mascota: </b> </label>  <br>
    <input type="text" name="nombre"  minlength="1" maxlength="40" required ="">
    <br><br>
  </div>

  <div class="form-group">
    <label for=""><b>Raza: </b> </label>  <br>
    <input type="text" name="raza"   minlength="1" maxlength="40" required =""> 
    <br><br>
  </div> <br><br>
 
 <input type="submit" value="Guardar"/> 
 <input type="button" onclick="location.href='index.php';" value=" Ver Registros "/>
 </form>
</center>
<br>
<br><br><br>

</body>
</html>