<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de Nosotros - Diseño Rojo y Negro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #0a0a0a;
            color: #fff;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        /* Header y Navegación */
        header {
            background-color: #000;
            padding: 20px 0;
            border-bottom: 2px solid #ff0000;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #ff0000;
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .logo i {
            margin-right: 10px;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 30px;
        }
        
        .nav-links a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 500;
        }
        
        .nav-links a:hover, .nav-links a.active {
            color: #ff0000;
        }
        
        /* Hero Section */
        .about-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8));
            padding: 100px 0;
            text-align: center;
        }
        
        .about-hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #ff0000;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .about-hero p {
            font-size: 20px;
            max-width: 800px;
            margin: 0 auto 30px;
            color: #ccc;
        }
        
        /* Sección de Introducción */
        .intro-section {
            padding: 80px 0;
            background-color: #111;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            color: #ff0000;
            font-size: 36px;
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: #ff0000;
        }
        
        .intro-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        
        .intro-text h2 {
            color: #ff0000;
            margin-bottom: 20px;
            font-size: 28px;
        }
        
        .intro-text p {
            color: #ccc;
            margin-bottom: 20px;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 30px;
        }
        
        .stat-item {
            text-align: center;
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 8px;
            border-bottom: 3px solid #ff0000;
        }
        
        .stat-number {
            font-size: 36px;
            font-weight: bold;
            color: #ff0000;
            margin-bottom: 10px;
        }
        
        .stat-text {
            color: #ccc;
            font-size: 16px;
        }
        
        .intro-image {
            position: relative;
        }
        
        .intro-image img {
            width: 100%;
            border-radius: 8px;
            border: 2px solid #ff0000;
        }
        
        .image-placeholder {
            width: 100%;
            height: 350px;
            background: linear-gradient(45deg, #1a1a1a, #252525);
            border-radius: 8px;
            border: 2px solid #ff0000;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ff0000;
            font-size: 20px;
        }
        
        /* Sección de Valores */
        .values-section {
            padding: 80px 0;
            background-color: #000;
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .value-card {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 8px;
            border-left: 4px solid #ff0000;
            text-align: center;
            transition: transform 0.3s;
        }
        
        .value-card:hover {
            transform: translateY(-5px);
        }
        
        .value-icon {
            font-size: 40px;
            color: #ff0000;
            margin-bottom: 20px;
        }
        
        .value-card h3 {
            color: #ff0000;
            margin-bottom: 15px;
            font-size: 22px;
        }
        
        .value-card p {
            color: #ccc;
        }
        
        /* Sección de Equipo */
        .team-section {
            padding: 80px 0;
            background-color: #111;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .team-member {
            background-color: #1a1a1a;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s;
            text-align: center;
        }
        
        .team-member:hover {
            transform: translateY(-5px);
        }
        
        .member-image {
            height: 250px;
            background: linear-gradient(45deg, #252525, #1a1a1a);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ff0000;
            font-size: 60px;
        }
        
        .member-info {
            padding: 20px;
        }
        
        .member-info h3 {
            color: #ff0000;
            margin-bottom: 5px;
            font-size: 20px;
        }
        
        .member-role {
            color: #ccc;
            margin-bottom: 15px;
            font-style: italic;
        }
        
        .member-desc {
            color: #999;
            margin-bottom: 15px;
            font-size: 14px;
        }
        
        .member-social {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        
        .member-social a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            background-color: #252525;
            border-radius: 50%;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        
        .member-social a:hover {
            background-color: #ff0000;
        }
        
        /* Sección de Historia */
        .history-section {
            padding: 80px 0;
            background-color: #000;
        }
        
        .timeline {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .timeline:before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 100%;
            background-color: #ff0000;
        }
        
        .timeline-item {
            display: flex;
            margin-bottom: 40px;
            position: relative;
        }
        
        .timeline-item:nth-child(odd) {
            flex-direction: row-reverse;
        }
        
        .timeline-content {
            width: 45%;
            padding: 20px;
            background-color: #1a1a1a;
            border-radius: 8px;
            border: 1px solid #333;
            position: relative;
        }
        
        .timeline-content:after {
            content: '';
            position: absolute;
            top: 20px;
            width: 20px;
            height: 20px;
            background-color: #1a1a1a;
            transform: rotate(45deg);
        }
        
        .timeline-item:nth-child(even) .timeline-content:after {
            right: -10px;
            border-right: 1px solid #333;
            border-top: 1px solid #333;
        }
        
        .timeline-item:nth-child(odd) .timeline-content:after {
            left: -10px;
            border-left: 1px solid #333;
            border-bottom: 1px solid #333;
        }
        
        .timeline-year {
            position: absolute;
            top: 10px;
            width: 60px;
            height: 60px;
            background-color: #ff0000;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            z-index: 1;
        }
        
        .timeline-item:nth-child(even) .timeline-year {
            left: calc(50% - 30px);
        }
        
        .timeline-item:nth-child(odd) .timeline-year {
            right: calc(50% - 30px);
        }
        
        .timeline-content h3 {
            color: #ff0000;
            margin-bottom: 10px;
        }
        
        .timeline-content p {
            color: #ccc;
        }
        
        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9));
            text-align: center;
        }
        
        .cta-section h2 {
            color: #ff0000;
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        .cta-section p {
            color: #ccc;
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 18px;
        }
        
        .btn {
            display: inline-block;
            background-color: #ff0000;
            color: #fff;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s;
            text-align: center;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        
        .btn:hover {
            background-color: #cc0000;
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid #ff0000;
            color: #ff0000;
            margin-left: 15px;
        }
        
        .btn-outline:hover {
            background-color: #ff0000;
            color: #fff;
        }
        
        /* Footer */
        footer {
            background-color: #000;
            padding: 50px 0 20px;
            border-top: 2px solid #ff0000;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-column h3 {
            color: #ff0000;
            margin-bottom: 20px;
            font-size: 20px;
        }
        
        .footer-column p, .footer-column li {
            color: #ccc;
            margin-bottom: 10px;
        }
        
        .footer-column ul {
            list-style: none;
        }
        
        .footer-column a {
            color: #ccc;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-column a:hover {
            color: #ff0000;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #1a1a1a;
            border-radius: 50%;
            transition: background-color 0.3s;
        }
        
        .social-links a:hover {
            background-color: #ff0000;
        }
        
        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid #333;
            color: #666;
            font-size: 14px;
        }
        
        /* Responsive */
        @media (max-width: 968px) {
            .intro-content {
                grid-template-columns: 1fr;
            }
            
            .timeline:before {
                left: 30px;
            }
            
            .timeline-item {
                flex-direction: row !important;
            }
            
            .timeline-content {
                width: calc(100% - 80px);
                margin-left: 80px;
            }
            
            .timeline-content:after {
                left: -10px !important;
                border-left: 1px solid #333 !important;
                border-bottom: 1px solid #333 !important;
                border-right: none !important;
                border-top: none !important;
            }
            
            .timeline-year {
                left: 0 !important;
                right: auto !important;
            }
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .about-hero h1 {
                font-size: 36px;
            }
            
            .about-hero p {
                font-size: 18px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
            
            .btn-outline {
                margin-left: 0;
                margin-top: 15px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <i class="fas fa-fire"></i>
                    ACERCA DE
                </a>
                <ul class="nav-links">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/servicios">Servicios</a></li>
                    <li><a href="/portafolio">Portafolio</a></li>
                    <li><a href="/acerca" class="active">Acerca de</a></li>
                    <li><a href="/contact">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <h1>Nuestra Historia</h1>
            <p>Conoce más sobre nosotros, nuestra misión, visión y el equipo detrás de nuestro éxito.</p>
        </div>
    </section>
    
    <!-- Sección de Introducción -->
    <section class="intro-section">
        <div class="container">
            <h2 class="section-title">Quiénes Somos</h2>
            <div class="intro-content">
                <div class="intro-text">
                    <h2>Innovación y Pasión por el Diseño</h2>
                    <p>Somos una empresa dedicada a proporcionar soluciones digitales de alta calidad. Desde nuestros inicios en 2010, hemos trabajado incansablemente para superar las expectativas de nuestros clientes.</p>
                    <p>Nuestra filosofía se basa en la creencia de que el diseño excepcional y la funcionalidad robusta pueden coexistir para crear experiencias digitales transformadoras.</p>
                    
                    <div class="stats-grid">
                        <div class="stat-item">
                            <div class="stat-number">13+</div>
                            <div class="stat-text">Años de Experiencia</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">350+</div>
                            <div class="stat-text">Proyectos Completados</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">98%</div>
                            <div class="stat-text">Clientes Satisfechos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">25+</div>
                            <div class="stat-text">Profesionales</div>
                        </div>
                    </div>
                </div>
                
                <div class="intro-image">
                    <div class="image-placeholder">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección de Valores -->
    <section class="values-section">
        <div class="container">
            <h2 class="section-title">Nuestros Valores</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovación</h3>
                    <p>Buscamos constantemente nuevas formas de resolver problemas y mejorar nuestras soluciones.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Compromiso</h3>
                    <p>Nos dedicamos por completo a cada proyecto, asegurando los más altos estándares de calidad.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Confianza</h3>
                    <p>Construimos relaciones basadas en la honestidad, transparencia y confianza mutua.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <h3>Excelencia</h3>
                    <p>Nos esforzamos por superar expectativas en cada aspecto de nuestro trabajo.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección de Equipo -->
    <section class="team-section">
        <div class="container">
            <h2 class="section-title">Nuestro Equipo</h2>
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-image">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="member-info">
                        <h3>Carlos Rodríguez</h3>
                        <div class="member-role">CEO & Fundador</div>
                        <p class="member-desc">Con más de 15 años de experiencia en desarrollo web y liderazgo de equipos.</p>
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="member-info">
                        <h3>Ana Martínez</h3>
                        <div class="member-role">Directora de Diseño</div>
                        <p class="member-desc">Especialista en UX/UI con una pasión por crear interfaces intuitivas y hermosas.</p>
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="member-info">
                        <h3>Javier López</h3>
                        <div class="member-role">Desarrollador Senior</div>
                        <p class="member-desc">Experto en tecnologías frontend y backend con amplia experiencia en proyectos complejos.</p>
                        <div class="member-social">
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-stack-overflow"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-image">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="member-info">
                        <h3>María González</h3>
                        <div class="member-role">Especialista en Marketing</div>
                        <p class="member-desc">Estratega digital con amplia experiencia en crecimiento de marcas y engagement.</p>
                        <div class="member-social">
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fas fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Sección de Historia -->
    <section class="history-section">
        <div class="container">
            <h2 class="section-title">Nuestra Historia</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">2010</div>
                    <div class="timeline-content">
                        <h3>Fundación</h3>
                        <p>Nacimos como una pequeña startup con la visión de revolucionar el diseño web en nuestra región.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2013</div>
                    <div class="timeline-content">
                        <h3>Primera Expansión</h3>
                        <p>Abrimos nuestra segunda oficina y duplicamos nuestro equipo para satisfacer la creciente demanda.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2016</div>
                    <div class="timeline-content">
                        <h3>Reconocimiento Internacional</h3>
                        <p>Ganamos nuestro primer premio internacional por innovación en diseño web y experiencia de usuario.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2020</div>
                    <div class="timeline-content">
                        <h3>Adaptación Digital</h3>
                        <p>Implementamos exitosamente modelos de trabajo remoto, expandiendo nuestro alcance global.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-year">2023</div>
                    <div class="timeline-content">
                        <h3>Presente y Futuro</h3>
                        <p>Seguimos innovando con tecnologías emergentes como IA y realidad aumentada en nuestros proyectos.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>¿Listo para comenzar tu próximo proyecto?</h2>
            <p>Contáctanos hoy mismo y descubre cómo podemos ayudarte a alcanzar tus objetivos digitales.</p>
            <a href="#" class="btn">Contáctanos</a>
            <a href="#" class="btn btn-outline">Ver Servicios</a>
        </div>
    </section>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>Nuestra Empresa</h3>
                    <p>Ofrecemos soluciones digitales de alta calidad con más de 10 años de experiencia en el mercado.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <div class="footer-column">
                    <h3>Enlaces Rápidos</h3>
                    <ul>
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Portafolio</a></li>
                        <li><a href="#">Acerca de</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Servicios</h3>
                    <ul>
                        <li><a href="#">Desarrollo Web</a></li>
                        <li><a href="#">Apps Móviles</a></li>
                        <li><a href="#">Marketing Digital</a></li>
                        <li><a href="#">Diseño Gráfico</a></li>
                        <li><a href="#">Ciberseguridad</a></li>
                    </ul>
                </div>
                
                <div class="footer-column">
                    <h3>Contacto</h3>
                    <p><i class="fas fa-map-marker-alt"></i> Av. Principal #123, Ciudad</p>
                    <p><i class="fas fa-phone"></i> +1 234 567 8900</p>
                    <p><i class="fas fa-envelope"></i> info@miservicio.com</p>
                </div>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 Todos los derechos reservados. Diseñado con <i class="fas fa-heart" style="color: #ff0000;"></i></p>
            </div>
        </div>
    </footer>

    <script>
        // Animación para los números de estadísticas
        function animateValue(element, start, end, duration) {
            let startTimestamp = null;
            const step = (timestamp) => {
                if (!startTimestamp) startTimestamp = timestamp;
                const progress = Math.min((timestamp - startTimestamp) / duration, 1);
                element.innerHTML = Math.floor(progress * (end - start) + start);
                if (progress < 1) {
                    window.requestAnimationFrame(step);
                }
            };
            window.requestAnimationFrame(step);
        }
        
        // Ejecutar la animación cuando se desplaza a la sección
        document.addEventListener('DOMContentLoaded', function() {
            const statElements = document.querySelectorAll('.stat-number');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const element = entry.target;
                        const value = parseInt(element.textContent);
                        animateValue(element, 0, value, 2000);
                        observer.unobserve(element);
                    }
                });
            }, { threshold: 0.5 });
            
            statElements.forEach(element => {
                observer.observe(element);
            });
        });
    </script>
</body>
</html>