<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafolio</title>
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
        .portfolio-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8));
            padding: 100px 0;
            text-align: center;
        }
        
        .portfolio-hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #ff0000;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .portfolio-hero p {
            font-size: 20px;
            max-width: 800px;
            margin: 0 auto 30px;
            color: #ccc;
        }
        
        /* Filtros */
        .filters {
            padding: 40px 0;
            background-color: #111;
            text-align: center;
        }
        
        .filter-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
        }
        
        .filter-btn {
            background-color: #1a1a1a;
            color: #fff;
            border: 1px solid #333;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .filter-btn:hover, .filter-btn.active {
            background-color: #ff0000;
            border-color: #ff0000;
        }
        
        /* Portafolio Grid */
        .portfolio-section {
            padding: 60px 0;
            background-color: #000;
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
        
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .portfolio-item {
            background-color: #1a1a1a;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
        }
        
        .portfolio-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(255, 0, 0, 0.1);
        }
        
        .portfolio-image {
            height: 250px;
            overflow: hidden;
            position: relative;
        }
        
        .portfolio-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .portfolio-item:hover .portfolio-image img {
            transform: scale(1.05);
        }
        
        .portfolio-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            display: flex;
            align-items: flex-end;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s;
        }
        
        .portfolio-item:hover .portfolio-overlay {
            opacity: 1;
        }
        
        .portfolio-category {
            background-color: #ff0000;
            color: #fff;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }
        
        .portfolio-info {
            padding: 20px;
        }
        
        .portfolio-info h3 {
            color: #ff0000;
            margin-bottom: 10px;
            font-size: 20px;
        }
        
        .portfolio-info p {
            color: #ccc;
            margin-bottom: 15px;
            font-size: 14px;
        }
        
        .portfolio-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 15px;
        }
        
        .portfolio-tag {
            background-color: #252525;
            color: #ccc;
            padding: 3px 8px;
            border-radius: 3px;
            font-size: 12px;
        }
        
        .portfolio-links {
            display: flex;
            gap: 10px;
        }
        
        .portfolio-link {
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
        
        .portfolio-link:hover {
            background-color: #ff0000;
        }
        
        /* Estadísticas */
        .stats-section {
            padding: 80px 0;
            background-color: #111;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }
        
        .stat-item {
            text-align: center;
            padding: 30px;
            background-color: #1a1a1a;
            border-radius: 8px;
            border-bottom: 3px solid #ff0000;
        }
        
        .stat-icon {
            font-size: 40px;
            color: #ff0000;
            margin-bottom: 15px;
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
        
        /* Proceso de Trabajo */
        .process-section {
            padding: 80px 0;
            background-color: #000;
        }
        
        .process-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            counter-reset: step-counter;
        }
        
        .process-step {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 8px;
            border-left: 4px solid #ff0000;
            position: relative;
            counter-increment: step-counter;
        }
        
        .process-step:before {
            content: counter(step-counter);
            position: absolute;
            top: -15px;
            left: -15px;
            width: 40px;
            height: 40px;
            background-color: #ff0000;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 18px;
        }
        
        .process-step h3 {
            color: #ff0000;
            margin-bottom: 15px;
            font-size: 20px;
        }
        
        .process-step p {
            color: #ccc;
        }
        
        /* Testimonios */
        .testimonials-section {
            padding: 80px 0;
            background-color: #111;
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
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            overflow-y: auto;
            padding: 20px;
        }
        
        .modal-content {
            background-color: #1a1a1a;
            max-width: 900px;
            margin: 40px auto;
            border-radius: 8px;
            overflow: hidden;
            position: relative;
        }
        
        .modal-close {
            position: absolute;
            top: 15px;
            right: 15px;
            width: 40px;
            height: 40px;
            background-color: #ff0000;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 10;
            font-size: 20px;
        }
        
        .modal-image {
            height: 400px;
            overflow: hidden;
        }
        
        .modal-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .modal-body {
            padding: 30px;
        }
        
        .modal-body h2 {
            color: #ff0000;
            margin-bottom: 15px;
            font-size: 28px;
        }
        
        .modal-category {
            background-color: #ff0000;
            color: #fff;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            display: inline-block;
            margin-bottom: 15px;
        }
        
        .modal-body p {
            color: #ccc;
            margin-bottom: 20px;
            line-height: 1.8;
        }
        
        .modal-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 25px;
        }
        
        .detail-item h4 {
            color: #ff0000;
            margin-bottom: 8px;
            font-size: 16px;
        }
        
        .detail-item p {
            color: #ccc;
            margin-bottom: 0;
        }
        
        .modal-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 25px;
        }
        
        .modal-tag {
            background-color: #252525;
            color: #ccc;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 12px;
        }
        
        .modal-links {
            display: flex;
            gap: 15px;
        }
        
        .modal-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background-color: #ff0000;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        
        .modal-link:hover {
            background-color: #cc0000;
        }
        
        /* Responsive */
        @media (max-width: 968px) {
            .portfolio-grid {
                grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            }
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .portfolio-hero h1 {
                font-size: 36px;
            }
            
            .portfolio-hero p {
                font-size: 18px;
            }
            
            .section-title {
                font-size: 28px;
            }
            
            .filter-buttons {
                gap: 10px;
            }
            
            .filter-btn {
                padding: 8px 15px;
                font-size: 14px;
            }
            
            .btn-outline {
                margin-left: 0;
                margin-top: 15px;
            }
            
            .modal-image {
                height: 300px;
            }
            
            .modal-details {
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
                    PORTAFOLIO
                </a>
                <ul class="nav-links">
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/servicios">Servicios</a></li>
                    <li><a href="/portafolio" class="active">Portafolio</a></li>
                    <li><a href="/acerca">Acerca de</a></li>
                    <li><a href="/contact">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <!-- Hero Section -->
    <section class="portfolio-hero">
        <div class="container">
            <h1>Nuestro Portafolio</h1>
            <p>Descubre nuestros proyectos más recientes y cómo hemos ayudado a nuestros clientes a alcanzar sus objetivos.</p>
        </div>
    </section>
    
    <!-- Filtros -->
    <section class="filters">
        <div class="container">
            <h2 class="section-title">Nuestros Trabajos</h2>
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="web">Desarrollo Web</button>
                <button class="filter-btn" data-filter="app">Apps Móviles</button>
                <button class="filter-btn" data-filter="design">Diseño UX/UI</button>
                <button class="filter-btn" data-filter="branding">Branding</button>
            </div>
        </div>
    </section>
    
    <!-- Portafolio Grid -->
    <section class="portfolio-section">
        <div class="container">
            <div class="portfolio-grid">
                <!-- Proyecto 1 -->
                <div class="portfolio-item" data-category="web">
                    <div class="portfolio-image">
                        <div style="width:100%;height:100%;background:linear-gradient(45deg, #1a1a1a, #252525);display:flex;align-items:center;justify-content:center;color:#ff0000;font-size:20px;">
                            <i class="fas fa-laptop-code"></i>
                        </div>
                        <div class="portfolio-overlay">
                            <span class="portfolio-category">Web</span>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <h3>E-commerce Moderno</h3>
                        <p>Plataforma de comercio electrónico con diseño responsive y pasarela de pago integrada.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">React</span>
                            <span class="portfolio-tag">Node.js</span>
                            <span class="portfolio-tag">MongoDB</span>
                        </div>
                        <div class="portfolio-links">
                            <a href="#" class="portfolio-link" data-project="1">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="portfolio-link">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Proyecto 2 -->
                <div class="portfolio-item" data-category="app">
                    <div class="portfolio-image">
                        <div style="width:100%;height:100%;background:linear-gradient(45deg, #1a1a1a, #252525);display:flex;align-items:center;justify-content:center;color:#ff0000;font-size:20px;">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="portfolio-overlay">
                            <span class="portfolio-category">App Móvil</span>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <h3>App de Fitness</h3>
                        <p>Aplicación móvil para seguimiento de entrenamientos y planificación nutricional.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">React Native</span>
                            <span class="portfolio-tag">Firebase</span>
                            <span class="portfolio-tag">Redux</span>
                        </div>
                        <div class="portfolio-links">
                            <a href="#" class="portfolio-link" data-project="2">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="portfolio-link">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Proyecto 3 -->
                <div class="portfolio-item" data-category="design">
                    <div class="portfolio-image">
                        <div style="width:100%;height:100%;background:linear-gradient(45deg, #1a1a1a, #252525);display:flex;align-items:center;justify-content:center;color:#ff0000;font-size:20px;">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <div class="portfolio-overlay">
                            <span class="portfolio-category">UX/UI</span>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <h3>Rediseño de Plataforma SaaS</h3>
                        <p>Rediseño completo de interfaz para mejorar la experiencia de usuario y engagement.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">Figma</span>
                            <span class="portfolio-tag">Adobe XD</span>
                            <span class="portfolio-tag">User Testing</span>
                        </div>
                        <div class="portfolio-links">
                            <a href="#" class="portfolio-link" data-project="3">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="portfolio-link">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Proyecto 4 -->
                <div class="portfolio-item" data-category="branding">
                    <div class="portfolio-image">
                        <div style="width:100%;height:100%;background:linear-gradient(45deg, #1a1a1a, #252525);display:flex;align-items:center;justify-content:center;color:#ff0000;font-size:20px;">
                            <i class="fas fa-pen-fancy"></i>
                        </div>
                        <div class="portfolio-overlay">
                            <span class="portfolio-category">Branding</span>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <h3>Identidad Corporativa</h3>
                        <p>Desarrollo de identidad visual completa para startup de tecnología.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">Logo</span>
                            <span class="portfolio-tag">Branding</span>
                            <span class="portfolio-tag">Style Guide</span>
                        </div>
                        <div class="portfolio-links">
                            <a href="#" class="portfolio-link" data-project="4">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="portfolio-link">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Proyecto 5 -->
                <div class="portfolio-item" data-category="web">
                    <div class="portfolio-image">
                        <div style="width:100%;height:100%;background:linear-gradient(45deg, #1a1a1a, #252525);display:flex;align-items:center;justify-content:center;color:#ff0000;font-size:20px;">
                            <i class="fas fa-globe"></i>
                        </div>
                        <div class="portfolio-overlay">
                            <span class="portfolio-category">Web</span>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <h3>Sitio Corporativo</h3>
                        <p>Desarrollo de sitio web corporativo con CMS personalizado y blog integrado.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">WordPress</span>
                            <span class="portfolio-tag">PHP</span>
                            <span class="portfolio-tag">JavaScript</span>
                        </div>
                        <div class="portfolio-links">
                            <a href="#" class="portfolio-link" data-project="5">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="portfolio-link">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Proyecto 6 -->
                <div class="portfolio-item" data-category="app">
                    <div class="portfolio-image">
                        <div style="width:100%;height:100%;background:linear-gradient(45deg, #1a1a1a, #252525);display:flex;align-items:center;justify-content:center;color:#ff0000;font-size:20px;">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="portfolio-overlay">
                            <span class="portfolio-category">App Móvil</span>
                        </div>
                    </div>
                    <div class="portfolio-info">
                        <h3>App de E-commerce</h3>
                        <p>Aplicación nativa para iOS y Android para marketplace de productos artesanales.</p>
                        <div class="portfolio-tags">
                            <span class="portfolio-tag">Swift</span>
                            <span class="portfolio-tag">Kotlin</span>
                            <span class="portfolio-tag">Stripe</span>
                        </div>
                        <div class="portfolio-links">
                            <a href="#" class="portfolio-link" data-project="6">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="#" class="portfolio-link">
                                <i class="fas fa-link"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Estadísticas -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-project-diagram"></i>
                    </div>
                    <div class="stat-number">150+</div>
                    <div class="stat-text">Proyectos Completados</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number">85+</div>
                    <div class="stat-text">Clientes Satisfechos</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <div class="stat-number">12+</div>
                    <div class="stat-text">Años de Experiencia</div>
                </div>
                
                <div class="stat-item">
                    <div class="stat-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="stat-number">24</div>
                    <div class="stat-text">Premios Obtenidos</div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Proceso de Trabajo -->
    <section class="process-section">
        <div class="container">
            <h2 class="section-title">Nuestro Proceso</h2>
            <div class="process-steps">
                <div class="process-step">
                    <h3>Consulta</h3>
                    <p>Analizamos tus necesidades y objetivos para entender completamente el proyecto.</p>
                </div>
                
                <div class="process-step">
                    <h3>Planificación</h3>
                    <p>Desarrollamos una estrategia detallada con cronogramas y hitos definidos.</p>
                </div>
                
                <div class="process-step">
                    <h3>Diseño</h3>
                    <p>Creamos prototipos y diseños que se alinean con tus objetivos y identidad de marca.</p>
                </div>
                
                <div class="process-step">
                    <h3>Desarrollo</h3>
                    <p>Implementamos las soluciones utilizando las mejores prácticas y tecnologías.</p>
                </div>
                
                <div class="process-step">
                    <h3>Pruebas</h3>
                    <p>Realizamos pruebas exhaustivas para garantizar calidad y funcionalidad.</p>
                </div>
                
                <div class="process-step">
                    <h3>Lanzamiento</h3>
                    <p>Desplegamos el proyecto y proporcionamos soporte continuo post-lanzamiento.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonios -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">Lo Que Dicen Nuestros Clientes</h2>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <p class="testimonial-text">El rediseño de nuestra plataforma superó todas nuestras expectativas. Hemos visto un aumento del 40% en la retención de usuarios desde el lanzamiento.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">LR</div>
                        <div class="author-info">
                            <h4>Laura Rodríguez</h4>
                            <p>Directora de Producto, TechSolutions</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">Trabajar con su equipo fue una experiencia excepcional. Su atención al detalle y comprensión de nuestras necesidades fue impresionante.</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">MG</div>
                        <div class="author-info">
                            <h4>Miguel González</h4>
                            <p>CEO, InnovateStartup</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <p class="testimonial-text">La aplicación móvil que desarrollaron para nosotros ha recibido elogios constantes de nuestros usuarios. ¡El rendimiento es excelente!</p>
                    <div class="testimonial-author">
                        <div class="author-avatar">CP</div>
                        <div class="author-info">
                            <h4>Carolina Pérez</h4>
                            <p>Directora de Marketing, HealthApp</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>¿Listo para comenzar tu próximo proyecto?</h2>
            <p>Contáctanos hoy mismo y recibe una consultoría gratuita para discutir cómo podemos ayudar a tu negocio a crecer.</p>
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

    <!-- Modal para detalles del proyecto -->
    <div class="modal" id="projectModal">
        <div class="modal-content">
            <div class="modal-close" id="modalClose">
                <i class="fas fa-times"></i>
            </div>
            <div class="modal-image">
                <div style="width:100%;height:100%;background:linear-gradient(45deg, #1a1a1a, #252525);display:flex;align-items:center;justify-content:center;color:#ff0000;font-size:60px;">
                    <i class="fas fa-laptop-code" id="modalImageIcon"></i>
                </div>
            </div>
            <div class="modal-body">
                <h2 id="modalTitle">Título del Proyecto</h2>
                <span class="modal-category" id="modalCategory">Web</span>
                <p id="modalDescription">Descripción del proyecto.</p>
                
                <div class="modal-details">
                    <div class="detail-item">
                        <h4>Cliente</h4>
                        <p id="modalClient">Nombre del Cliente</p>
                    </div>
                    <div class="detail-item">
                        <h4>Fecha</h4>
                        <p id="modalDate">Enero 2023</p>
                    </div>
                    <div class="detail-item">
                        <h4>Duración</h4>
                        <p id="modalDuration">3 meses</p>
                    </div>
                    <div class="detail-item">
                        <h4>Presupuesto</h4>
                        <p id="modalBudget">$5,000 - $10,000</p>
                    </div>
                </div>
                
                <div class="modal-tags" id="modalTags">
                    <span class="modal-tag">HTML</span>
                    <span class="modal-tag">CSS</span>
                    <span class="modal-tag">JavaScript</span>
                </div>
                
                <div class="modal-links">
                    <a href="#" class="modal-link" id="modalLiveLink" target="_blank">
                        <i class="fas fa-external-link-alt"></i> Ver Proyecto
                    </a>
                    <a href="#" class="modal-link" id="modalGithubLink" target="_blank">
                        <i class="fab fa-github"></i> Código Fuente
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Datos de los proyectos
        const projects = {
            1: {
                title: "E-commerce Moderno",
                category: "Web",
                description: "Plataforma de comercio electrónico con diseño responsive y pasarela de pago integrada. Desarrollada con las últimas tecnologías para garantizar una experiencia de usuario excepcional y alto rendimiento.",
                client: "FashionStore",
                date: "Marzo 2023",
                duration: "4 meses",
                budget: "$10,000 - $15,000",
                tags: ["React", "Node.js", "MongoDB", "Stripe", "Redux"],
                liveLink: "#",
                githubLink: "#",
                imageIcon: "fas fa-laptop-code"
            },
            2: {
                title: "App de Fitness",
                category: "App Móvil",
                description: "Aplicación móvil para seguimiento de entrenamientos y planificación nutricional. Incluye funciones de tracking en tiempo real, planificación de dietas y sincronización con wearables.",
                client: "FitLife",
                date: "Enero 2023",
                duration: "5 meses",
                budget: "$15,000 - $20,000",
                tags: ["React Native", "Firebase", "Redux", "Google Fit API"],
                liveLink: "#",
                githubLink: "#",
                imageIcon: "fas fa-mobile-alt"
            },
            3: {
                title: "Rediseño de Plataforma SaaS",
                category: "Diseño UX/UI",
                description: "Rediseño completo de interfaz para mejorar la experiencia de usuario y engagement. Implementación de nuevo sistema de diseño y mejora de flujos de usuario.",
                client: "CloudSolutions Inc.",
                date: "Noviembre 2022",
                duration: "2 meses",
                budget: "$7,000 - $9,000",
                tags: ["Figma", "Adobe XD", "User Testing", "Design System"],
                liveLink: "#",
                githubLink: "#",
                imageIcon: "fas fa-paint-brush"
            },
            4: {
                title: "Identidad Corporativa",
                category: "Branding",
                description: "Desarrollo de identidad visual completa para startup de tecnología. Incluye diseño de logo, paleta de colores, tipografía y guía de estilo completa.",
                client: "NexTech Startup",
                date: "Agosto 2022",
                duration: "1 mes",
                budget: "$3,000 - $5,000",
                tags: ["Logo", "Branding", "Style Guide", "Adobe Illustrator"],
                liveLink: "#",
                githubLink: "#",
                imageIcon: "fas fa-pen-fancy"
            },
            5: {
                title: "Sitio Corporativo",
                category: "Web",
                description: "Desarrollo de sitio web corporativo con CMS personalizado y blog integrado. Diseño moderno y optimizado para SEO con panel de administración fácil de usar.",
                client: "Global Enterprises",
                date: "Junio 2022",
                duration: "3 meses",
                budget: "$8,000 - $12,000",
                tags: ["WordPress", "PHP", "JavaScript", "Custom Theme"],
                liveLink: "#",
                githubLink: "#",
                imageIcon: "fas fa-globe"
            },
            6: {
                title: "App de E-commerce",
                category: "App Móvil",
                description: "Aplicación nativa para iOS y Android para marketplace de productos artesanales. Incluye carrito de compras, pasarela de pago y sistema de valoraciones.",
                client: "ArteManual",
                date: "Abril 2022",
                duration: "6 meses",
                budget: "$20,000 - $25,000",
                tags: ["Swift", "Kotlin", "Stripe", "Firebase"],
                liveLink: "#",
                githubLink: "#",
                imageIcon: "fas fa-shopping-cart"
            }
        };

        // Funcionalidad de filtrado
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', () => {
                // Quitar clase active de todos los botones
                document.querySelectorAll('.filter-btn').forEach(btn => {
                    btn.classList.remove('active');
                });
                
                // Añadir clase active al botón clickeado
                button.classList.add('active');
                
                // Obtener el filtro
                const filter = button.getAttribute('data-filter');
                
                // Filtrar proyectos
                document.querySelectorAll('.portfolio-item').forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Funcionalidad del modal
        const modal = document.getElementById('projectModal');
        const modalClose = document.getElementById('modalClose');
        
        // Abrir modal al hacer clic en el botón de ver
        document.querySelectorAll('.portfolio-link[data-project]').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const projectId = link.getAttribute('data-project');
                openModal(projectId);
            });
        });
        
        // Cerrar modal
        modalClose.addEventListener('click', () => {
            modal.style.display = 'none';
        });
        
        // Cerrar modal al hacer clic fuera del contenido
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });
        
        // Función para abrir el modal con los datos del proyecto
        function openModal(projectId) {
            const project = projects[projectId];
            
            if (project) {
                document.getElementById('modalTitle').textContent = project.title;
                document.getElementById('modalCategory').textContent = project.category;
                document.getElementById('modalDescription').textContent = project.description;
                document.getElementById('modalClient').textContent = project.client;
                document.getElementById('modalDate').textContent = project.date;
                document.getElementById('modalDuration').textContent = project.duration;
                document.getElementById('modalBudget').textContent = project.budget;
                document.getElementById('modalImageIcon').className = project.imageIcon;
                document.getElementById('modalLiveLink').href = project.liveLink;
                document.getElementById('modalGithubLink').href = project.githubLink;
                
                // Actualizar tags
                const tagsContainer = document.getElementById('modalTags');
                tagsContainer.innerHTML = '';
                project.tags.forEach(tag => {
                    const tagElement = document.createElement('span');
                    tagElement.className = 'modal-tag';
                    tagElement.textContent = tag;
                    tagsContainer.appendChild(tagElement);
                });
                
                // Mostrar modal
                modal.style.display = 'block';
            }
        }

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
                        const value = parseInt(element.textContent.replace('+', ''));
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