<!-- Scripts globales -->
<script>
    // Funcionalidad para el menú móvil
    document.addEventListener('DOMContentLoaded', function() {
        // Toggle mobile menu
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        if (mobileMenuBtn) {
            mobileMenuBtn.addEventListener('click', function() {
                document.querySelector('.nav-links').classList.toggle('active');
            });
        }
        
        // Cerrar menú al hacer clic en un enlace (en móviles)
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelector('.nav-links').classList.remove('active');
            });
        });
    });
</script>

<!-- Scripts específicos de cada página -->
@yield('scripts')