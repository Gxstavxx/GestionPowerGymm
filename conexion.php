<?php
$servername = "b8mdzmrdi0ebsdgsmhql-mysql.services.clever-cloud.com"; // Servidor, usualmente "localhost"
$username = "umgounumngu5bdpl"; // Usuario de la base de datos
$password = "Vb5l4IcA9KzmM8OIbVsG"; // Contraseña del usuario, usualmente en blanco para XAMPP
$database = "b8mdzmrdi0ebsdgsmhql"; // Nombre de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
