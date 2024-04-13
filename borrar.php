<?php
include 'conexion.php';
$sql = "delete from users where id='$_REQUEST[id]'";
if(! $db->query($sql) ){
        die("Error ejecutando: $db->error");
} 


header("Location: index.php");

?>



