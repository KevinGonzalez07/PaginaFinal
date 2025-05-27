<?php
session_start();
$sesionIniciada = isset($_SESSION['usuario']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La pitaya Feliz</title>
</head>

<body>

    <header class="header" id="Titulo">

        <div class=" menu container">
                <a class="logo" href="#Titulo">ABJ</a>
                <input type="checkbox" id="menu"/>
                <label for="menu">
                    <img src="imagenes/menu.png" class="menu-icono">
                </label>
                <nav class="navbar">
                <ul>
                    <li><a href="menu/IniciarSesion/inicios.html">Inicio de sesion</a></li>
                    <li><a href="menu/Beneficios/beneficios.html">Beneficios</a></li>
                    <li><a href="menu/Equipo/equipo.html">Equipo</a></li>
                    <li><a href="menu/Mantenimiento/Mantenimiento.html">Mantenimiento</a></li>
                    <?php if ($sesionIniciada): ?>
                     <li><a href="menu/Mensajes/mensajes.php">Mensajes</a></li>
                    <?php endif; ?>
                    <?php if ($sesionIniciada): ?>
                     <li><a href="logout.php">Cerrar sesión</a></li>
                    <?php endif; ?>


                </ul>

            </nav>
        </div>

        <div class="header-content container">
            <h1>La Pitaya Feliz</h1>
           <p> Descubre el apasinante mundo de la pitaya,Donode agricultores
                responsables se encuentran en la innovacion.Nos dedicamos a
                ofrecerte mejores frutos,cultivados con amor y respeto por 
                la naturaleza
           </p>
             <a href="menu/contacto/contacto.html" class="btn-1">Contáctanos</a>
        </div>

    </header>
        

   <section class="pitaya">
    
        <div class="pitaya-content Container">
           <h2>Los diferentes Tipos de Pitayas</h2>
           <p class="txt-p">
            Hay tres variedades principales de pitahayas que son comunes en todo el mundo.
           </p>
            <div class="grupo-pitayas">

                 <div class="pitaya-1">
                    <img src="imagenes/amarilla.jpg" alt="">
                     <h3>Pitaya Amarilla</h3>    
                     <p> tiene una piel amarilla brillante y 
                        una pulpa blanca suave con pequeñas 
                        semillas negras.</p>  

                 </div>
                 <div class="pitaya-1">
                    <img src="imagenes/blanca.jpg" alt="">
                     <h3>Pitaya Blanca</h3>    
                     <p> su exterior es rojo y rosa con pulpa blanca.</p>  

                 </div>
                 <div class="pitaya-1">
                    <img src="imagenes/roja.jpg" alt="">
                     <h3>Pitaya Roja</h3>    
                     <p> tiene una piel roja vibrante y una pulpa roja
                         o rosa con pequeñas semillas negras.</p>  

                 </div>
             </div>
         </div>
   </section>     

     <section class="general">

        <div class="general-1">
            <h2>Innovacion Agricola</h2>
            <p>
                Nos esforzamos por implementar tecnologías avanzadas en nuestros procesos de cultivo. 
                Esto nos permite mejorar la eficiencia y la calidad de nuestros productos, asegurando
                 que cada fruto sea excepcional.
            </p>
        </div>
        <div class="general-2"></div>

     </section>

     <section class="general">
        <div class="general-3"></div>
        <div class="general-1">
            <h2>Educacion Y conciencia</h2>
            <p>
                Promovemos la educación sobre las prácticas agrícolas sostenibles y 
                los beneficios de la pitaya. Creemos que una comunidad informada es
                 clave para el éxito de la agricultura responsable.
            </p>
        </div>
        
     </section>

    <section class="general">
        
        <div class="general-1">
            <h2>Trabajo en equipo</h2>
            <p>
                Contamos con un equipo de profesionales apasionados que trabajan juntos 
                para alcanzar nuestros objetivos. La colaboración es fundamental en cada
                 aspecto de nuestro cultivo y producción.
            </p>
        </div>
        <div class="general-4"></div>
     </section>

     <footer class="footer">
        <div class="links">
            <h3>Conectate con nosotros y se parte de este mundo</h3>
            <ul>
                <li><a href="mailto:lapitayafeliz@gmail.com"> Correo Electronico</a></li>
                <li><a href="https://web.whatsapp.com/">Tel.8682372162</a> </li>
                <li><a href="#Titulo">Ir al comienzo</a> </li>
            </ul>

        </div>

     </footer>

    
</body>
</html>