<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Laravel App')</title>
<meta name="description" content="@yield('description', 'Descripción por defecto de la aplicación')">

<!-- Font Awesome Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">

<!-- Styles CSS -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Roboto', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
    
    /* Estilos globales que se repiten en todas las páginas */
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
    
    /* Responsive global */
    @media (max-width: 768px) {
        .section-title {
            font-size: 28px;
        }
        
        .btn-outline {
            margin-left: 0;
            margin-top: 15px;
        }
    }
</style>

<!-- Estilos específicos de cada página -->
@yield('styles')