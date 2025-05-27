<?php
session_start();

$host = "shortline.proxy.rlwy.net";
$port = 17437;
$usuario_bd = "root";
$contrasena_bd = "zABrudYWsowUcMoMbKvErccuHTsGlyWl";
$nombre_bd = "railway";

$conexion = new mysqli($host, $usuario_bd, $contrasena_bd, $nombre_bd, $port);

if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

$nombre_completo = $conexion->real_escape_string($_POST['nombre_completo']);
$correo = $conexion->real_escape_string($_POST['correo']);
$usuario = $conexion->real_escape_string($_POST['usuario']);
$contrasena = $conexion->real_escape_string($_POST['contrasena']);

if (empty($nombre_completo) || empty($correo) || empty($usuario) || empty($contrasena)) {
    echo "Todos los campos son obligatorios.";
    exit;
}

$verificar_usuario = $conexion->query("SELECT * FROM usuarios WHERE correo = '$correo' OR usuario = '$usuario'");
if ($verificar_usuario->num_rows > 0) {
    echo "El correo o nombre de usuario ya está registrado.";
    exit;
}

$contrasena_hash = password_hash($contrasena, PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, correo, usuario, contrasena)
        VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena_hash')";

if ($conexion->query($sql)) {
    header("Location: inicios.html");
    exit;
} else {
    echo "Error al registrar: " . $conexion->error;
}

$conexion->close();
?>
