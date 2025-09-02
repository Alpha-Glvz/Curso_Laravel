<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
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
        .contact-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8));
            padding: 100px 0;
            text-align: center;
        }
        
        .contact-hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #ff0000;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .contact-hero p {
            font-size: 20px;
            max-width: 800px;
            margin: 0 auto 30px;
            color: #ccc;
        }
        
        /* Sección de Contacto */
        .contact-section {
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
        
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }
        
        .contact-info {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 8px;
            border-left: 4px solid #ff0000;
        }
        
        .contact-info h3 {
            color: #ff0000;
            margin-bottom: 20px;
            font-size: 24px;
        }
        
        .contact-detail {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }
        
        .contact-icon {
            font-size: 24px;
            color: #ff0000;
            margin-right: 15px;
            min-width: 30px;
            text-align: center;
        }
        
        .contact-text h4 {
            color: #fff;
            margin-bottom: 5px;
        }
        
        .contact-text p {
            color: #ccc;
        }
        
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 30px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: #252525;
            border-radius: 50%;
            transition: all 0.3s;
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }
        
        .social-links a:hover {
            background-color: #ff0000;
            transform: translateY(-3px);
        }
        
        .contact-form {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 8px;
            border-right: 4px solid #ff0000;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #fff;
            font-weight: 500;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            background-color: #252525;
            border: 1px solid #333;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #ff0000;
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
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
            width: 100%;
        }
        
        .btn:hover {
            background-color: #cc0000;
        }
        
        /* Mapa */
        .map-section {
            padding: 80px 0;
            background-color: #000;
        }
        
        .map-container {
            border: 2px solid #ff0000;
            border-radius: 8px;
            overflow: hidden;
            height: 400px;
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        /* FAQ Section */
        .faq-section {
            padding: 80px 0;
            background-color: #111;
        }
        
        .accordion {
            margin-top: 30px;
        }
        
        .accordion-item {
            background-color: #1a1a1a;
            border: 1px solid #333;
            border-radius: 5px;
            margin-bottom: 15px;
            overflow: hidden;
        }
        
        .accordion-header {
            padding: 20px;
            background-color: #252525;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .accordion-header h3 {
            color: #fff;
            font-size: 18px;
            margin: 0;
        }
        
        .accordion-icon {
            color: #ff0000;
            font-size: 20px;
        }
        
        .accordion-content {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        
        .accordion-content.active {
            max-height: 300px;
            padding: 20px;
        }
        
        .accordion-content p {
            color: #ccc;
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
            
            .contact-hero h1 {
                font-size: 36px;
            }
            
            .contact-hero p {
                font-size: 18px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .contact-container {
                grid-template-columns: 1fr;
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
                    CONTACTO
                </a>
                <ul class="nav-links">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/servicios">Servicios</a></li>
                    <li><a href="/portafolio">Portafolio</a></li>
                    <li><a href="/acerca">Acerca de</a></li>
                    <li><a href="/contact" class="active">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="contact-hero">
        <div class="container">
            <h1>Contáctanos</h1>
            <p>Estamos aquí para ayudarte. Ponte en contacto con nosotros para cualquier consulta o solicitud de información.</p>
        </div>
    </section>
    
    <!-- Sección de Contacto -->
    <section class="contact-section">
        <div class="container">
            <h2 class="section-title">Cómo Puedes Encontrarnos</h2>
            <div class="contact-container">
                <div class="contact-info">
                    <h3>Información de Contacto</h3>
                    
                    <div class="contact-detail">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Dirección</h4>
                            <p>Av. Principal #123, Ciudad, País</p>
                        </div>
                    </div>
                    
                    <div class="contact-detail">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Teléfono</h4>
                            <p>+1 234 567 8900</p>
                        </div>
                    </div>
                    
                    <div class="contact-detail">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Email</h4>
                            <p>info@miservicio.com</p>
                        </div>
                    </div>
                    
                    <div class="contact-detail">
                        <div class="contact-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="contact-text">
                            <h4>Horario de Atención</h4>
                            <p>Lun - Vie: 9:00 AM - 6:00 PM<br>Sáb: 10:00 AM - 2:00 PM</p>
                        </div>
                    </div>
                    
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3>Envíanos un Mensaje</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Nombre Completo</label>
                            <input type="text" id="name" class="form-control" placeholder="Tu nombre" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Correo Electrónico</label>
                            <input type="email" id="email" class="form-control" placeholder="tu@email.com" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="phone">Teléfono (Opcional)</label>
                            <input type="tel" id="phone" class="form-control" placeholder="+1 234 567 8900">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Asunto</label>
                            <input type="text" id="subject" class="form-control" placeholder="Asunto del mensaje" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Mensaje</label>
                            <textarea id="message" class="form-control" placeholder="Escribe tu mensaje aquí..." required></textarea>
                        </div>
                        
                        <button type="submit" class="btn">Enviar Mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Mapa -->
    <section class="map-section">
        <div class="container">
            <h2 class="section-title">Nuestra Ubicación</h2>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d396196.3170103765!2d-74.25987625!3d40.69750005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNueva%20York!5e0!3m2!1ses!2sus!4v1685480000000!5m2!1ses!2sus" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    
    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Preguntas Frecuentes</h2>
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3>¿Cuál es el tiempo de respuesta habitual?</h3>
                        <span class="accordion-icon">+</span>
                    </div>
                    <div class="accordion-content">
                        <p>Normalmente respondemos a todas las consultas dentro de las 24 horas hábiles. Para consultas urgentes, recomendamos contactarnos por teléfono.</p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3>¿Ofrecen soporte técnico después del proyecto?</h3>
                        <span class="accordion-icon">+</span>
                    </div>
                    <div class="accordion-content">
                        <p>Sí, ofrecemos diferentes planes de soporte técnico según las necesidades de tu proyecto. Contáctanos para más información sobre nuestros servicios de mantenimiento.</p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3>¿Trabajan con clientes internacionales?</h3>
                        <span class="accordion-icon">+</span>
                    </div>
                    <div class="accordion-content">
                        <p>Absolutamente. Trabajamos con clientes de todo el mundo. Utilizamos herramientas de colaboración remota que nos permiten trabajar eficientemente sin importar la ubicación.</p>
                    </div>
                </div>
                
                <div class="accordion-item">
                    <div class="accordion-header">
                        <h3>¿Cuáles son las formas de pago aceptadas?</h3>
                        <span class="accordion-icon">+</span>
                    </div>
                    <div class="accordion-content">
                        <p>Aceptamos transferencias bancarias, tarjetas de crédito y PayPal. Para proyectos grandes,通常 establecemos un plan de pagos escalonado.</p>
                    </div>
                </div>
            </div>
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
        // Funcionalidad para el acordeón de FAQs
        document.querySelectorAll('.accordion-header').forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                const icon = header.querySelector('.accordion-icon');
                
                // Cerrar otros acordeones abiertos
                document.querySelectorAll('.accordion-content').forEach(item => {
                    if (item !== content && item.classList.contains('active')) {
                        item.classList.remove('active');
                        item.previousElementSibling.querySelector('.accordion-icon').textContent = '+';
                    }
                });
                
                // Alternar el acordeón actual
                content.classList.toggle('active');
                icon.textContent = content.classList.contains('active') ? '-' : '+';
            });
        });
        
        // Validación básica del formulario
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Aquí iría la lógica para enviar el formulario
            alert('¡Gracias por tu mensaje! Te contactaremos pronto.');
            this.reset();
        });
    </script>
</body>
</html>