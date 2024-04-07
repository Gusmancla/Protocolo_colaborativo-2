<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = 'root';
$password = ''; 
$dbname = 'opiniones_db'; // Nombre de la base de datos

try {
    // Creación de una nueva conexión PDO a la base de datos
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Establecimiento del modo de error para mostrar excepciones
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Mensaje de éxito en la conexión
    echo "Conexión exitosa";
} catch(PDOException $e) {
    // Manejo de excepciones en caso de error de conexión
    echo "Error de conexión: " . $e->getMessage();
}
?>
?>
