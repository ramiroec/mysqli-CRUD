<?php
include 'conexion.php';
$sql = "insert into users (name, email, position) values ('$_REQUEST[name]','$_REQUEST[email]', '$_REQUEST[position]')";

if(! $db->query($sql)){
     die("Error ejecutando: $db->error");
}
print "Insertado con éxito";
?>

