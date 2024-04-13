<?php
include 'conexion.php';
$sql = "update users set name='$_REQUEST[name]', email='$_REQUEST[email]', position='$_REQUEST[position]' where id='$_REQUEST[id]'";
if(! $db->query($sql))
{
     die("Error ejecutando: $db->error");
}
header("Location: index.php");
?>

