
<?php
include('includes/db.php');

if(isset($_GET['id']) == false){
    echo "es necesario enviar un id";
    die;
}
$id = $_GET['id'];
$sql = "SELECT * from mascotas where id = $id";
$mascota = DB::query($sql);

$mascota = mysqli_fetch_object($mascota);
if(!$mascota){
    echo "el usuario no existe";
    die;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar</title>
</head>
<body bgcolor="#207cf9" ><br><br><br>
<center>
<form action="guardar_mascotas.php" method="post">
<font color="#ffffff">
<h2> <u>Actualizacion de Datos</u> </h2>
</font>  
      <input  type="hidden" name="id"  value="<?=$mascota->id?>">
  
  <div >
    <label for=""><b>Nombre Mascota: </b> </label>  <br>
    <input type="text" name="nombre" size="30" value="<?=$mascota->nombre?>">
  </div><br>

  <div>
    <label for=""><b>Raza: </b> </label>  <br>
    <input type="text" name="raza" size="30" value="<?=$mascota->raza?>">
  </div> <br><br><br>
 <div>
 <input type="submit" value="Guardar"/> 
 <input type="button" onclick="location.href='index.php';" value=" Ver Registros "/>
 </div>
 
</form>
</center>
</body>
</html>
