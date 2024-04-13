<?php
$servername = "139.59.58.139"; 
// Nombre del servidor de la base de datos
$port = 27723; // Puerto de la base de datos
$username = "avnadmin"; // Nombre de usuario de la base de datos
$password = "AVNS_jfvSePC1yFQ2_dYmcbD"; // Contraseña de la base de datos
$dbname = "defaultdb"; // Nombre de la base de datos

// Establecer la conexión
$db = new mysqli($servername, $username, $password, $dbname, $port);
// Verificar la conexión
if ($db->connect_error) {
    die("Conexión fallida: " . $db->connect_error);
}
?>
