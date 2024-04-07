<?php
if (
    !isset($_POST['nombre']) || !isset($_POST['apellidos']) || !isset($_POST['email']) ||
    !isset($_POST['telefono']) || !isset($_POST['asunto']) || !isset($_POST['mensaje'])
) {
    exit('Todos los campos son requeridos');
}
#CONEXION A LA BASE DE DATOS
include 'C:\wamp64\www\PROTOCOLO_COLABORATIVO\opiniones\conexionbd.php';

#CAMPOS DEL FORMULARIO PARA GUARDAR DATOS
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

#SENTENCIA SQL PARA GUARDAR DATOS
$sentencia = $db->prepare("INSERT INTO opiniones(nombre,apellidos,email,telefono,asunto,mensaje)
VALUES(?,?,?,?,?,?)");
$resultado = $sentencia->execute([$nombre, $apellidos, $email, $telefono, $asunto, $mensaje]);

#VALIDACION DE REDIRECCION
if ($resultado === true) {
    # Mostrar un mensaje de agradecimiento al usuario
    echo '<div style="font-size: 30px; text-align: center; margin-top: 50px;">Gracias por tu opinión.</div>';
    echo '<div style="text-align: center; margin-top: 20px;"><a href="opiniones.php"><button type="button">Dar otra opinión</button></a></div>';
} else {
    echo 'Error en guardar datos';
}
?>
?>