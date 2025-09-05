<!DOCTYPE html>
<html lang="es">
<head>
    @include('layouts.head')
</head>
<body>
    <!-- Header -->
    @include('layouts.header')

    <!-- Contenido principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Scripts -->
    @include('layouts.scripts')
</body>
</html>