<?php
include 'conexion.php';
$sql = "select * from users where id='$_REQUEST[id]'";
$resultado = $db->query($sql);
$fila = $resultado->fetch_assoc();
?>
<form action=actualizar.php>
<input type=hidden name=id value='<?php print $fila['id'];?>'>
Nombre: <input type=text name=name value='<?php print $fila['name'];?>'><br>
Email: <input type=text name=email value='<?php print $fila['email'];?>'><br>
Cargo: <input type=text name=position value='<?php print $fila['position'];?>'><br>
<input type=submit>
</form>

