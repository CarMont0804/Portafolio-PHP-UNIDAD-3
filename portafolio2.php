<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <link rel="stylesheet" href="portafoliom.css">
</head>
<body>
    <div class="container">
        <div class="profile">
            <img src="mont.JPG" alt="Tu Foto">
            <h1>Mont<3</h1>
        </div>
        
        <div class="content-container">
            <header>
                <h1>Mi Portafolio</h1>
                <nav class="menu">
                    <ul>
                        <li><a href="#sobre_mi">Sobre Mí</a></li>
                        <li><a href="#educacion">Educación</a></li>
                        <li><a href="#habilidades">Habilidades</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </nav>
            </header>

            <div id="sobre_mi" class="content">
                <h2>Sobre Mí</h2>
                <p>¡Hola! Mi nombre es Carmen Montserrat Ortega Gonzalez, tengo 19 años, actualmente estoy cursando 
                    la Universidad en la Universidad Politecnica de Lázaro Cardenas, estoy en la carrera de Ingenieria
                    en Sotfware y estoy en 5to Cuatrimestre.
                </p>
                <p>
                    Me gusta aprender cosas nuevas, soy muy proactiva si no puedo resolver algo siempre busco la manera
                    de hacerlo, siempre me gusta ser amable con todos, soy honesta y responsable. Me gusta mucho ir a la playa,
                    uno de mis  objetivos principales es dominar el ingles y terminar mi carrera.
                </p>
            </div>
            
            <div id="educacion" class="content">
                <h2>Educación</h2>
                <ul>
                    <li>Tecnica en Informatica - Colegio Nacional de Educación Profesional Tecnico (2019-2022)</li>
                    <li>Certificación Word y Power Point - Plataforma de cursos (2022)</li>
                    <li>Ingenieria en Sotfware en curso - Universidad Politecnica de Lazaro Cardenas </li>
                </ul>
            </div>
            
            <div id="habilidades" class="content">
                <h2>Habilidades</h2>
                <ul>
                    <li>Manejo amplio de computadoras</li>
                    <li>Uso de aplicaciones web</li>
                    <li>Conocimiento medio de Word, excel y power point</li>
                    <li>Marketing</li>
                    <li>Proyectos en HTML: <a href="https://github.com/CarMont0804">github</a></li>
                </ul>
            </div>
            
            <div id="contacto" class="content">
                <h2>Contacto</h2>
                <p>Puedes contactarme a través de:</p>
                <ul>
                    <li>Email: monseortegis@gmail.com</li>
                    <li>Teléfono: 7531532412</li>
                    <li>Instagram: mont.gonzalezz</li>
                </ul>
                <?php include 'datosformulario.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>
