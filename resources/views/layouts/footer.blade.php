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
                    <li><a href="{{ route('home') }}">Inicio</a></li>
                    <li><a href="{{ route('services') }}">Servicios</a></li>
                    <li><a href="{{ route('portfolio') }}">Portafolio</a></li>
                    <li><a href="{{ route('about') }}">Acerca de</a></li>
                    <li><a href="{{ route('contact') }}">Contacto</a></li>
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
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados. Diseñado con <i class="fas fa-heart" style="color: #ff0000;"></i></p>
        </div>
    </div>
</footer>

<style>
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
</style>