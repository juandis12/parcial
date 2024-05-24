

<!DOCTYPE html>
<html lang="en" class="hydrated">

<head>
    <meta charset="UTF-8"><style data-styles="">ion-icon{visibility:hidden}.hydrated{visibility:inherit}</style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS Styles -->
    <link rel="stylesheet" href="css/estilos.css">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icons/favicon-32x32.png">

    <!-- Animate CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Juan Diego Ruiz | Estudiante Ingenieria En Sistemas</title>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <h1>Juan Diego Ruiz</h1>
        <ul class="navigation">
            <li><a href="#about" class="nav-link">About</a></li>
            <li><a href="#skills" class="nav-link">Skills</a></li>
            <li><a href="#projects" class="nav-link">Projects</a></li>
            <li><a href="#contact" class="nav-link">Contact</a></li>
        </ul>
        <button class="burger-menu" id="burger-menu">
            <ion-icon class="bars md hydrated" name="menu-outline" role="img" aria-label="menu outline"></ion-icon>
            <!-- <ion-icon class="times" name="close-outline"></ion-icon> -->
        </button>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="about">
        <img src="imagenes/yo_2-removebg-preview.png" alt="Juan" loading="lazy" class="hero-img">
        <div class="bio animate__animated animate__shakeX">
            <h2 class="bio-title">About Me</h2>
            <p class="bio-text">
                Soy Estudiante de Ingeniería en Sistemas, actualmente vivo en Flandes/Tolima.
                Me agrada la idea de trabajar en equipo, pienso que es una manera de conectar con nuevas habilidades y
                de brindar mi conocimiento al equipo con el fin de mejorar la productividad en el desarrollo de algún
                producto digital. Me gusta descubrir cosas nuevas a diario y ser un activo valioso en cualquier equipo
                en el que me desarrolle, por lo que estoy aprendiendo constantemente e investigando acerca de las nuevas
                tendencias.
            </p>
        </div>
    </section>

    <!-- More about -->
    <section class="more-about">
        <h2>More About Me</h2>
        <p>
            Soy estudiante, apasionado por aprender y siempre en busca de nuevas oportunidades para
            crecer. Me esfuerzo por mejorar cada día y tengo un fuerte deseo de convertirme en uno de los
            mejores en mi campo. Estoy abierto a nuevos desafíos y tengo experiencia trabajando con HTML CSS JAVA SCRIpt y Figma, además de
            realizar proyectos freelance. Con mi actitud positiva y determinación, creo que puedo aportar valor y
            creatividad a cualquier equipo en el que participe.
        </p>
        <p>
            <h2>juan.ruiz-t@uniminuto.edu.co</h2>
        </p>
        <p>
            <h2>Hablemos!</h2>
        </p>
    </section>

    <!-- Skills section -->
    <section class="skills" id="skills">
        <h2 class="skill-header">My Top Skills</h2>

        <div class="skills-wrapper">
            <div class="first-set animate__animated animate__pulse">
            <img src="icons/icons8-html-5.svg" alt="" loading="lazy" class="icon icon-card">
            <img src="icons/icons8-css3.svg" alt="" loading="lazy" class="icon icon-card">
            <img src="icons/icons8-javascript.svg" alt="" loading="lazy" class="icon icon-card">
            </div>

            <div class="second-set animate__animated animate__pulse">
            <img src="icons/icons8-bootstrap.svg" alt="" loading="lazy" class="icon icon-card">
            <img src="icons/icons8-react-native.svg" alt="" loading="lazy" class="icon icon-card">
            <img src="icons/icons8-git.svg" alt="" loading="lazy" class="icon icon-card">
            </div>
        </div>
    </section>

    <!-- Projects section -->
    <section class="projects" id="projects">
        <h2 class="projects-title">Some of my Recent Projects</h2>
        <div class="projects-container">
            <div class="project-container project-card">
            <img src="imagenes/expenseTracker.png" alt="expense-tracker" loading="lazy" class="project-pic">
            <h3 class="project-title">Expense Tracker</h3>
            
            <a href="#" target="_blank" class="project-link">Check it Out</a>
            </div>
            <div class="project-container project-card">
            <img src="imagenes/netflixClone.png" alt="netflic-clone" loading="lazy" class="project-pic">
            <h3 class="project-title">Netflix Clone</h3>
            
            <a href="#" target="_blank" class="project-link">Check it Out</a>
            </div>
            <div class="project-container project-card">
            <img src="imagenes/greenyEarth.png" alt="greeny-earth" loading="lazy" class="project-pic">
            <h3 class="project-title">Greeny Earth</h3>
            
            <a href="#" target="_blank" class="project-link">Check it Out</a>
            </div>
        </div>
    </section>

    <!-- Contact section -->
    <section class="contact" id="contact">
        <h2>Get In Touch With Me</h2>
        <div class="contact-form-container">
            <div class="contact-form">
            <form action="https://formspree.io/f/xyylnggw" method="POST">
                <div class="form-control">
                <label for="name">Nombre</label>
                <input type="text" id="name" name="sender-name" placeholder="Ingresa tu nombre" class="input-field" required="">
                </div>
                <div class="form-control">
                <label for="email">Email</label>
                <input type="email" id="email" name="sender-email" placeholder="Escribe tu Email" class="input-field" required="">
                </div>
                <div class="form-control">
                <label for="message">Mensaje</label>
                <textarea id="message" cols="60" rows="10" placeholder="Escribe tu mensaje" name="message" class="input-field" required=""></textarea>
                </div>
                <input type="submit" value="Enviar" id="submit-btn" class="submit-btn">
            </form>
            </div>
        </div>
    </section>

    <!-- Social accounts - Fixed to the right -->
    <div class="socials">
        <a href="#" target="_blank"><img src="icons/icons8-twitter-circled.gif" alt="Twitter" loading="lazy" class="socicon"></a>
        <a href="https://instagram.com" target="_blank"><img src="icons/icons8-instagram.gif" alt="Instagram" loading="lazy" class="socicon"></a>
        <a href="#" target="_blank"><img src="icons/icons8-linkedin-circled.gif" alt="Linkedin" loading="lazy" class="socicon"></a>
        <a href="https://github.com/juandis12/parcial" target="_blank"><img src="icons/icons8-github.gif" alt="Github" class="socicon"></a>
    </div>

    <!-- Scroll to top -->
    <i class="scroll-up" id="scroll-up"><img src="icons/icons8-upward-arrow.gif" class="socicon up-arrow" alt=""></i>

    <!-- Footer section -->
    <footer>
        <p class="copy">© Copyright 2021</p>
        <p class="copy">
        Contruido por 
        <a href="https://www.instagram.com" target="_blank">Juan Diego Ruiz Tobon</a>
        </p>
    </footer>

    <!-- Website scripts -->
    <script src="/java/jajjaj.js"></script>

    <!-- Ion icons scripts -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
