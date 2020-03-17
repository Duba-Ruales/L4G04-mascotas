<?php
include ('includes/db.php');

$sql="SELECT * FROM mascotas";
$result = DB::query($sql);

?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros</title>
</head>
<body bgcolor="#207cf9" >

<center><br><br><br><br>
<font color="#ffffff">
<h2> <u>REGISTRO DE MASCOTAS</u> </h2>
</font>

<table border="1" >
        <tr>
            <th>  id  </th>
            <th>  nombre </th>
            <th>  raza </th> 
            <th colspan="2">  acciones  </th>       
        </tr>

<?php
while($mostrar=mysqli_fetch_array($result)){
?>
        <tr>
            <td>  <?php echo $mostrar['id']?>   </td>
            <td>  <?php echo $mostrar['nombre']?>  </td>
            <td>  <?php echo $mostrar['raza']?>  </td>
            <td> <a href="editar.php?id=<?= $mostrar ['id']?>">&nbsp; Editar &nbsp;</a> </td>
            <td> <a href="" Eliminar >&nbsp; Eliminar &nbsp;</a> </td>
        <tr>
    
 <?php
    }
 ?>
</table><br><br>
<input type="button" onclick="location.href='crear.php'" value=" Agregar Usuario "/>
</center>
</body>
</html>