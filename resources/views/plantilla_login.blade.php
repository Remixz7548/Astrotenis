<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9.0.4/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @yield('metadatos')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Astrotenis | @yield('titulos')</title>
</head>
<body>
    <!--===================MENU===================-->
    <nav>
        <div class="menu-opc">
            <div class="izquierda">
            </div>
            <div class="centro">
                <h1><a href="/Login">Astrotenis</a></h1>
            </div>
            <div class="derecho">
            </div>
        </div>
            
        <div class="menu">
            <ul class="links">
            </ul>
            <div class="search">
            </div>
            <div class="search-box">
            </div>
        </div>
    </nav>
    @yield('encabezado')
    <!--===================SECTION===================-->
    @yield('contenido')

    
    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9.0.4/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>