<header>
    <div class="container">
        <nav>
            <a href="{{ route('home') }}" class="logo">
                <i class="fas fa-fire"></i>
                {{ config('app.name', 'Laravel') }}
            </a>
            <ul class="nav-links">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Inicio</a></li>
                <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Servicios</a></li>
                <li><a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portafolio</a></li>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Acerca de</a></li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contacto</a></li>
            </ul>
            
            <!-- Mobile menu button (opcional) -->
            <div class="mobile-menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </div>
</header>

<style>
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
    
    .mobile-menu-btn {
        display: none;
        color: #fff;
        font-size: 24px;
        cursor: pointer;
    }
    
    @media (max-width: 768px) {
        .nav-links {
            display: none;
            flex-direction: column;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: #000;
            padding: 20px;
            border-top: 1px solid #333;
        }
        
        .nav-links.active {
            display: flex;
        }
        
        .nav-links li {
            margin: 10px 0;
        }
        
        .mobile-menu-btn {
            display: block;
        }
    }
</style>

<script>
    // Toggle mobile menu
    document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
        document.querySelector('.nav-links').classList.toggle('active');
    });
</script>