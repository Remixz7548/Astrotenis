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
                <ion-icon class="icon-search" name="search-outline"></ion-icon>
            </div>
            <div class="centro">
                <h1><a href="/">Astrotenis</a></h1>
            </div>
            <div class="derecho">
                <a href="{{ route('logout') }}" class="cerrar-admin">Cerrar Sesión</a>
                <a href=""><ion-icon class="heart-outline" name="heart-outline"></ion-icon></a>
                <a href=""><ion-icon name="bag-outline"></ion-icon></a>
            </div>
        </div>
            
        <div class="menu">
            <ul class="links">
                <li>
                    <a href="/Hombres">Hombres</a>
                </li>
                <li>
                    <a href="/Mujeres">Mujeres</a>
                </li>
                <li>
                    <a href="/Niños">Niños</a>
                </li>
                <li>
                    <a href="/Lanzamientos">Nuevos Lanzamientos</a>
                </li>
            </ul>
            <div class="search">
                <ion-icon class="icon-close" name="close-outline"></ion-icon>
            </div>
            
            <div class="search-box">
                <input type="text" placeholder="Buscar aqui . . ." name="" id="">
            </div>
        </div>
    </nav>
    @yield('encabezado')
    <!--===================SECTION===================-->
    @yield('contenido')

    <!--===================FOOTER===================-->
    <footer>
        <div class="diviciones">
            <div class="divicion">
                <h1>Enlaces</h1>
                <p><a href="/Hombres">Hombres</a></p>
                <p><a href="/Mujeres">Mujeres</a></p>
                <p><a href="/Niños">Niños</a></p>
                <p><a href="/Lanzamientos">Nuevos Lanzamientos</a></p>
                <p><a href="/Mapa">Mapa del Sitio</a></p>
            </div>
            <div class="divicion">
                <h1>Categorias</h1>
                <p><a href="/Hombres">Tenis</a></p>
                <p><a href="/Mujeres">Tenis LifeStyles</a></p>
                <p><a href="/Niños">Running</a></p>
                <p><a href="/Lanzamientos">Fútbol</a></p>
                <p><a href="/Mapa">Sandalias</a></p>
            </div>
            <div class="divicion"></div>
            <div class="divicion">
                <h1>Social</h1>
                <div class="social-networks">
                    <a href="https://www.facebook.com/nike/" target="_blank" class="facebook"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="https://twitter.com/nike" class="twitter" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="https://wa.me/523112531235" class="whatsapp" target="_blank"><ion-icon name="logo-whatsapp"></ion-icon></a>
                    <a href="https://www.youtube.com/user/NIKE" target="_blank" class="youtube"><ion-icon name="logo-youtube"></ion-icon></a>
                </div>
                <div class="img">
                    <img src="img/logo.png" alt="">
                </div>
                
            </div>
        </div>
        <p class="copy">© 2022 por Astrotenis</p>
    </footer>
    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@9.0.4/swiper-bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/script.js"></script>
</body>
</html>