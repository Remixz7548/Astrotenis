<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9.0.4/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/estilos.css">
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
                <h1><a href="/">Astrotenis</a></h1>
            </div>
            <div class="derecho">
                <a href="{{ route('logout') }}" class="cerrar-admin">Cerrar Sesión</a>
            </div>
        </div>
    </nav>
    <!--===================SECTION===================-->
    @yield('contenido')
    <script src="js/app.js"></script>

</body>
</html>