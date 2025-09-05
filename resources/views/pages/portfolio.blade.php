@extends('layouts.app')

@section('title', 'Nuestro Portafolio')
@section('description', 'Descubre nuestros proyectos más recientes y cómo hemos ayudado a nuestros clientes a alcanzar sus objetivos.')

@section('styles')
<style>
    /* Estilos específicos del portafolio */
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
    
    /* ... (todos los estilos específicos del portafolio que creamos anteriormente) ... */
</style>
@endsection

@section('content')
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
    
    <!-- Resto del contenido del portafolio -->
    <!-- ... -->
@endsection

@section('scripts')
<script>
    // Scripts específicos del portafolio
    document.addEventListener('DOMContentLoaded', function() {
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
        
        // ... resto de scripts específicos del portafolio
    });
</script>
@endsection