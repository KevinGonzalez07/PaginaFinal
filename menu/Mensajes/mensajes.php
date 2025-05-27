<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo "Acceso denegado. Debes iniciar sesión.";
    exit();
}


// Conexión a base de datos en línea (Railway)
$host = "turntable.proxy.rlwy.net";
$port = 13510;
$usuario_bd = "root";
$contrasena_bd = "EPQjnQSMDQwTUImBISmWYAlDRXduGNdC";
$nombre_bd = "railway";

$conexion = new mysqli($host, $usuario_bd, $contrasena_bd, $nombre_bd, $port);
if ($conexion->connect_error) {
    die("Error en la conexión: " . $conexion->connect_error);
}

$sql = "SELECT name, telefono, correo, mensaje FROM contacto";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mensajes de Contacto</title>
    <link rel="stylesheet" href="../../estilo.css">
    <style>
        .mensajes-section {
            padding: 60px 30px;
            background-color: #f9fafc;
        }

        .mensajes-section h2 {
            text-align: center;
            font-size: 32px;
            text-transform: uppercase;
            margin-bottom: 30px;
            color: #b10d52;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 16px;
            background-color: white;
        }

        th, td {
            padding: 12px 16px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #ede9a0;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .volver-btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 25px;
            background-color: #b10d52;
            color: white;
            text-decoration: none;
            font-weight: 600;
            border-radius: 4px;
        }

        .volver-btn:hover {
            background-color: blue;
        }

        @media(max-width: 768px) {
            table, th, td {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

    <!-- Encabezado reutilizando estilo -->
    <header class="header" id="Titulo">
        <div class="menu container">
            <a class="logo" href="../../index.php">ABJ</a>
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="../../imagenes/menu.png" class="menu-icono">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="../../menu/IniciarSesion/inicios.html">Inicio de sesión</a></li>
                    <li><a href="../../menu/Beneficios/beneficios.html">Beneficios</a></li>
                    <li><a href="../../menu/Equipo/equipo.html">Equipo</a></li>
                    <li><a href="../../menu/Mantenimiento/Mantenimiento.html">Mantenimiento</a></li>
                    <li><a href="mensajes.php">Mensajes</a></li>
                    <li><a href="../../logout.php">Cerrar sesión</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <h1>Mensajes de contacto</h1>
            <p>Revisa los mensajes enviados por los usuarios a través del formulario.</p>
        </div>
    </header>

    <!-- Sección de mensajes -->
    <section class="mensajes-section container">
        <h2>Mensajes Recibidos</h2>

        <?php if ($resultado->num_rows > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Correo</th>
                        <th>Mensaje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($fila = $resultado->fetch_assoc()): ?>
                        <tr>
                            <td><?= htmlspecialchars($fila['name']) ?></td>
                            <td><?= htmlspecialchars($fila['telefono']) ?></td>
                            <td><?= htmlspecialchars($fila['correo']) ?></td>
                            <td><?= htmlspecialchars($fila['mensaje']) ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No hay mensajes registrados.</p>
        <?php endif; ?>

        <a class="volver-btn" href="../../principa.php">Volver al inicio</a>
    </section>

</body>
</html>

<?php
$conexion->close();
?>
