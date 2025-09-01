<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Servicios</title>
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
        
        .nav-links a:hover {
            color: #ff0000;
        }
        
        /* Hero Section */
        .services-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), 
                        url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="%23000"/><path d="M0 0L100 100" stroke="%23200" stroke-width="2"/><path d="M100 0L0 100" stroke="%23200" stroke-width="2"/></svg>');
            background-size: cover;
            padding: 100px 0;
            text-align: center;
        }
        
        .services-hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #ff0000;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .services-hero p {
            font-size: 20px;
            max-width: 800px;
            margin: 0 auto 30px;
            color: #ccc;
        }
        
        /* Servicios */
        .services {
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
        
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .service-card {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 8px;
            border-left: 4px solid #ff0000;
            transition: transform 0.3s, box-shadow 0.3s;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255, 0, 0, 0.1);
        }
        
        .service-icon {
            font-size: 40px;
            color: #ff0000;
            margin-bottom: 20px;
        }
        
        .service-card h3 {
            color: #ff0000;
            margin-bottom: 15px;
            font-size: 24px;
        }
        
        .service-card p {
            color: #ccc;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        
        .service-price {
            font-size: 22px;
            color: #ff0000;
            font-weight: bold;
            margin: 15px 0;
        }
        
        .service-features {
            margin: 15px 0;
            padding-left: 20px;
        }
        
        .service-features li {
            margin-bottom: 8px;
            color: #999;
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
        }
        
        .btn-outline:hover {
            background-color: #ff0000;
            color: #fff;
        }
        
        /* Testimonios */
        .testimonials {
            padding: 80px 0;
            background-color: #000;
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 8px;
            border-right: 4px solid #ff0000;
        }
        
        .testimonial-text {
            color: #ccc;
            font-style: italic;
            margin-bottom: 20px;
            position: relative;
            padding-left: 30px;
        }
        
        .testimonial-text:before {
            content: """;
            font-size: 60px;
            color: #ff0000;
            position: absolute;
            left: 0;
            top: -20px;
            opacity: 0.3;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
        }
        
        .author-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #ff0000;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            font-weight: bold;
        }
        
        .author-info h4 {
            color: #fff;
            margin-bottom: 5px;
        }
        
        .author-info p {
            color: #ff0000;
            font-size: 14px;
        }
        
        /* CTA Section */
        .cta {
            padding: 80px 0;
            background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.9)), 
                        url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="%23000"/><path d="M0 0L100 100" stroke="%23200" stroke-width="2"/><path d="M100 0L0 100" stroke="%23200" stroke-width="2"/></svg>');
            background-size: cover;
            text-align: center;
        }
        
        .cta h2 {
            color: #ff0000;
            font-size: 36px;
            margin-bottom: 20px;
        }
        
        .cta p {
            color: #ccc;
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 18px;
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
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .services-hero h1 {
                font-size: 36px;
            }
            
            .services-hero p {
                font-size: 18px;
            }
            
            .section-title {
                font-size: 28px;
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
                    SERVICIOS
                </a>
                <ul class="nav-links">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#" class="active">Servicios</a></li>
                    <li><a href="#">Portafolio</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="services-hero">
        <div class="container">
            <h1>Nuestros Servicios</h1>
            <p>Ofrecemos soluciones de alta calidad con un diseño excepcional y un rendimiento superior. Descubre cómo podemos ayudarte a alcanzar tus objetivos.</p>
        </div>
    </section>
    
    <!-- Servicios -->
    <section class="services">
        <div class="container">
            <h2 class="section-title">Lo Que Ofrecemos</h2>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Desarrollo Web</h3>
                    <p>Creación de sitios web modernos, responsivos y optimizados para todos los dispositivos y navegadores.</p>
                    <ul class="service-features">
                        <li>Diseño responsivo</li>
                        <li>Optimización SEO</li>
                        <li>Integración con redes sociales</li>
                        <li>Formularios de contacto</li>
                    </ul>
                    <div class="service-price">Desde $599</div>
                    <a href="#" class="btn">Contratar Ahora</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Apps Móviles</h3>
                    <p>Desarrollo de aplicaciones nativas e híbridas para iOS y Android con interfaces intuitivas y atractivas.</p>
                    <ul class="service-features">
                        <li>Desarrollo nativo e híbrido</li>
                        <li>Interfaces intuitivas</li>
                        <li>Publicación en stores</li>
                        <li>Mantenimiento continuo</li>
                    </ul>
                    <div class="service-price">Desde $999</div>
                    <a href="#" class="btn">Contratar Ahora</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Marketing Digital</h3>
                    <p>Estrategias de marketing digital para aumentar tu presencia en línea y generar más clientes potenciales.</p>
                    <ul class="service-features">
                        <li>SEO y SEM</li>
                        <li>Gestión de redes sociales</li>
                        <li>Email marketing</li>
                        <li>Analítica web</li>
                    </ul>
                    <div class="service-price">Desde $399</div>
                    <a href="#" class="btn">Contratar Ahora</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-paint-brush"></i>
                    </div>
                    <h3>Diseño Gráfico</h3>
                    <p>Creación de identidad visual, logotipos, material promocional y diseños que reflejan tu marca.</p>
                    <ul class="service-features">
                        <li>Diseño de logotipos</li>
                        <li>Identidad corporativa</li>
                        <li>Material publicitario</li>
                        <li>Diseño editorial</li>
                    </ul>
                    <div class="service-price">Desde $299</div>
                    <a href="#" class="btn">Contratar Ahora</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3>Hosting & Cloud</h3>
                    <p>Soluciones de alojamiento web y servicios en la nube con máximo rendimiento y disponibilidad.</p>
                    <ul class="service-features">
                        <li>Hosting compartido y VPS</li>
                        <li>Correos corporativos</li>
                        <li>Copias de seguridad</li>
                        <li>Soporte técnico 24/7</li>
                    </ul>
                    <div class="service-price">Desde $49/mes</div>
                    <a href="#" class="btn">Contratar Ahora</a>
                </div>
                
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Ciberseguridad</h3>
                    <p>Protección de tus sistemas y datos con las más avanzadas medidas de seguridad digital.</p>
                    <ul class="service-features">
                        <li>Auditorías de seguridad</li>
                        <li>Protección contra malware</li>
                        <li>Firewalls y VPN</li>
                        <li>Recuperación de datos</li>
                    </ul>
                    <div class="service-price">Desde $799</div>
                    <a href="#" class="btn">Contratar Ahora</a>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonios -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">Opiniones de Clientes</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p class="testimonial-text">Excelente servicio de desarrollo web. Mi sitio quedó exactamente como lo quería y ha generado un aumento del 40% en leads.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">RM</div>
                        <div class="author-info">
                            <h4>Roberto Martínez</h4>
                            <p>CEO, TechSolutions</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">La aplicación móvil que desarrollaron para mi negocio superó todas mis expectativas. Los usuarios están encantados.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">LC</div>
                        <div class="author-info">
                            <h4>Laura Camacho</h4>
                            <p>Directora, Restaurante El Buen Sabor</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">Llevamos años confiando en ellos para nuestro marketing digital. Los resultados siempre son medibles y superiores.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">JG</div>
                        <div class="author-info">
                            <h4>Javier González</h4>
                            <p>Gerente de Marketing, Importaciones JR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA -->
    <section class="cta">
        <div class="container">
            <h2>¿Listo para comenzar tu proyecto?</h2>
            <p>Contáctanos hoy mismo y recibe una consultoría gratuita para discutir cómo podemos ayudar a tu negocio a crecer.</p>
            <a href="#" class="btn">Solicitar Consulta</a>
            <a href="#" class="btn btn-outline">Ver Portafolio</a>
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
</body>
</html>