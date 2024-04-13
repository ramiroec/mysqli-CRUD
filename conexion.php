<?php
$servername = "localhost"; 
// Nombre del servidor de la base de datos
$port = 3306; // Puerto de la base de datos
$username = "root"; // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "defaultdb"; // Nombre de la base de datos

// Establecer la conexión
$db = new mysqli($servername, $username, $password, $dbname, $port);
// Verificar la conexión
if ($db->connect_error) {
    die("Conexión fallida: " . $db->connect_error);
}
?>
