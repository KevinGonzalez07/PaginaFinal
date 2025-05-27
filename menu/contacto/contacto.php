<?php

$host = "turntable.proxy.rlwy.net";
$port = 13510;
$usuario_bd = "root";
$contrasena_bd = "EPQjnQSMDQwTUImBISmWYAlDRXduGNdC";
$nombre_bd = "railway";

$conexion = new mysqli($host, $usuario_bd, $contrasena_bd, $nombre_bd, $port);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$nombre = $_POST['name'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];

// Insertar datos en la tabla 'contacto'
$sql = "INSERT INTO contacto (name, telefono, correo, mensaje)
        VALUES ('$nombre', '$telefono', '$correo', '$mensaje')";

if ($conexion->query($sql) === TRUE) {
    // Redirigir a principa.html
    header("Location: ../../principa.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conexion->error;
}

// Cerrar conexión
$conexion->close();
?>
