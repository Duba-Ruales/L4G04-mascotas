
<?php

include ('includes/db.php');

    $id = $_POST["id"];
    $nombre = $_POST["nombre"]; 
    $raza = $_POST["raza"];   

if($nombre=="" || $raza==""){

}else{
if(isset($id) == false){
    header ('Location: crear.php');
    $sql = "INSERT into mascotas(nombre,raza)values('$nombre', '$raza')"; 
}else{
    header ('Location: index.php');
    $sql = "UPDATE mascotas set nombre='$nombre', raza='$raza' WHERE id='$id'";
}
}
DB::query($sql);
    
?>

