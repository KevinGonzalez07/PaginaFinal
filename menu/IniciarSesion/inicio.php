<?php
session_start();

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
$correo = $_POST['correo'];
$contrasena = $_POST['Contrasena'];

// Buscar al usuario por correo
$sql = "SELECT * FROM usuarios WHERE correo = '$correo'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows === 1) {
    $usuario = $resultado->fetch_assoc();

    // Verificar la contraseña
    if (password_verify($contrasena, $usuario['contrasena'])) {
        $_SESSION['usuario'] = $usuario['usuario'];
        
        header("Location: ../../principa.php");
        exit();
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "Correo no registrado.";
}

$conexion->close();
?>
