<?php

include("conexion.php");
$sql = "INSERT INTO usuarios(nombre, apellido,edad) VALUES ('migue','Romero','21')";

$res =  $conexion->query($sql);

if($res){
echo"Insercion Exitosa"
}else{
    echo "Fallo la insercion"
}

?>