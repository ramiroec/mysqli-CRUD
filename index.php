<?php
include 'conexion.php';
$sql = "select * from users";
$resultado = $db->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            text-decoration: none;
            margin-right: 10px;
        }

        a.edit {
            color: #0074d9;
        }

        a.delete {
            color: #ff4136;
        }

        a.insert {
            display: block;
            text-align: center;
            background-color: #0074d9;
            color: #fff;
            padding: 10px;
            margin: 20px 0;
            border-radius: 5px;
            text-decoration: none;
        }

        a.insert:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lista de Usuarios</h1>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Position</th>
                <th>Actions</th>
            </tr>

            <?php while($fila = $resultado->fetch_assoc()): ?>
            <tr>
                <td><?php echo $fila['name']; ?></td>
                <td><?php echo $fila['email']; ?></td>
                <td><?php echo $fila['position']; ?></td>
                <td>
                    <a class="edit" href="editar.php?id=<?php echo $fila['id']; ?>">Edit</a>
                    <a class="delete" href="borrar.php?id=<?php echo $fila['id']; ?>">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        <a class="insert" href="insertar.html">Insert New Record</a>
    </div>
</body>
</html>
