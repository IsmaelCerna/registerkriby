<?php
var_dump($_POST);

$host = 'localhost';
$usuario = 'root';
$clave = '';
$base_datos = 'db_kriby';

$conn = new mysqli($host, $usuario, $clave, $base_datos);

if ($conn->connect_error) {
    die('Error de conexión: ' . $conn->connect_error);
}

$usuario = $_POST['usuario'] ?? '';
$clave = $_POST['clave'] ?? '';

if (!empty($usuario) && !empty($clave)) {

    $sql = "INSERT INTO usuarios (usuario, clave) VALUES ('$usuario', '$clave')";

    if ($conn->query($sql) === TRUE) {
        echo "";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "";
}

$conn->close();
?>
