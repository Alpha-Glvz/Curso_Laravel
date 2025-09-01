<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenid@</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background-color: #000;
            color: #fff;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        header {
            background-color: #000;
            padding: 20px 0;
            border-bottom: 2px solid #ff0000;
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
        }
        
        .nav-links a:hover {
            color: #ff0000;
        }
        
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="%23000"/><path d="M0 0L100 100" stroke="%23200" stroke-width="2"/><path d="M100 0L0 100" stroke="%23200" stroke-width="2"/></svg>');
            background-size: cover;
            height: 80vh;
            display: flex;
            align-items: center;
            text-align: center;
            padding: 0 20px;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #ff0000;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .hero p {
            font-size: 20px;
            margin-bottom: 30px;
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
        }
        
        .btn:hover {
            background-color: #cc0000;
        }
        
        .features {
            padding: 80px 0;
            background-color: #111;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 50px;
            color: #ff0000;
            font-size: 36px;
        }
        
        .feature-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .feature-card {
            background-color: #1a1a1a;
            padding: 30px;
            border-radius: 5px;
            border-top: 3px solid #ff0000;
            text-align: center;
        }
        
        .feature-card h3 {
            color: #ff0000;
            margin-bottom: 15px;
        }
        
        footer {
            background-color: #000;
            padding: 30px 0;
            text-align: center;
            border-top: 2px solid #ff0000;
        }
        
        .social-links {
            margin-bottom: 20px;
        }
        
        .social-links a {
            color: #fff;
            margin: 0 10px;
            font-size: 20px;
            transition: color 0.3s;
        }
        
        .social-links a:hover {
            color: #ff0000;
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .hero p {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="logo">BIENVENIDO</div>
                <ul class="nav-links">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Acerca de</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
    
    <section class="hero">
        <div class="hero-content">
            <h1>BIENVENIDO A NUESTRO SITIO</h1>
            <p>Descubre todo lo que tenemos para ofrecerte con el poder y la pasión de nuestros colores.</p>
            <a href="#" class="btn">Comenzar Ahora</a>
        </div>
    </section>
    
    <section class="features">
        <div class="container">
            <h2 class="section-title">Nuestros Servicios</h2>
            <div class="feature-grid">
                <div class="feature-card">
                    <h3>Diseño Web</h3>
                    <p>Creación de sitios web modernos y atractivos con las últimas tendencias en diseño.</p>
                </div>
                <div class="feature-card">
                    <h3>Desarrollo</h3>
                    <p>Desarrollo de aplicaciones web robustas y escalables para todo tipo de negocios.</p>
                </div>
                <div class="feature-card">
                    <h3>Marketing Digital</h3>
                    <p>Estrategias de marketing digital para aumentar tu presencia en línea y generar leads.</p>
                </div>
            </div>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="social-links">
                <a href="#">Facebook</a>
                <a href="#">Twitter</a>
                <a href="#">Instagram</a>
                <a href="#">LinkedIn</a>
            </div>
            <p>&copy; 2023 Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>