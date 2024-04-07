<?php
// Inclusión del archivo de conexión a la base de datos
include 'C:\wamp64\www\PROTOCOLO_COLABORATIVO\opiniones\conexionbd.php';
// Consulta a la base de datos para obtener todas las opiniones
$sentencia = $db->query("SELECT * FROM opiniones;");
// Obtención de los resultados de la consulta en forma de objetos
$dato = $sentencia->fetchAll(PDO::FETCH_OBJ);
// Impresión de los resultados
print_r($dato);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPINIONES</title>
</head>

<body>
    <!-- Tabla de visualización de las opiniones -->
    <center>
        <h3>REGISTRO DE OPINIONES</h3>
        <table>
            <tr>
                <!-- Encabezados de la tabla -->
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Email</td>
                <td>Telefono</td>
                <td>Asunto</td>
                <td>Mensaje</td>
            </tr>
            <!-- Iteración sobre los resultados de la consulta para mostrar cada opinión -->
            <?php foreach ($dato as $verOpiniones) { ?>
                <tr>
                    <!-- Celdas con los datos de cada opinión -->
                    <td>
                        <?php echo $verOpiniones->nombre; ?>
                    </td>
                    <td>
                        <?php echo $verOpiniones->apellidos; ?>
                    </td>
                    <td>
                        <?php echo $verOpiniones->email; ?>
                    </td>
                    <td>
                        <?php echo $verOpiniones->telefono; ?>
                    </td>
                    <td>
                        <?php echo $verOpiniones->asunto; ?>
                    </td>
                    <td>
                        <?php echo $verOpiniones->mensaje; ?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </center>
</body>

</html>