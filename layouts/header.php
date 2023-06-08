<?php
  require "/xampp/htdocs/ezestore2/db.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EzeCell | ¡Celulares en cuotas sin interes!</title>
    <meta name="description" content="Renova tu celular al mejor precio del mercado, hasta seis cuotas sin interes, compra totalmente segura y sin moverte de tu casa" />
    <!----===== STYLES ===== -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <!----===== GOOGLE FONTS ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap" rel="stylesheet">
</head>
<body>

     <!----===== HEADER ===== -->
    <header class="header">

        <a href="index.php" class="header__logo">
            <img src="images/logo.png" alt="Eze Cell" class="header__logo-img">
        </a>

        <nav class="nav" id="nav">
            <ul class="nav__redes">
                <li class="nav__redes-li">
                    <a href="#" class="nav__redes-a nav__redes-fb">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav__redes-li">
                    <a href="#" class="nav__redes-a nav__redes-ig">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav__redes-li">
                    <a href="#" class="nav__redes-a nav__redes-wsp">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
            <form class="nav__form" action="index.php" method="post" autocomplete="off">
                <input type="search" name="buscar" class="buscar" id="buscar" onkeyup="consulta_buscador($('#buscar').val());" placeholder="Buscar marca o modelo">
                <a href="index.php#celulares-ancla" class="form__ancla">
                    <button type="button" class="nav__form-search-icon" name="buscarBtn" id="buscarBtn" onclick="buscarNav();"><i class="fa fa-search" aria-hidden="true"></i></button>
                </a>

                <div class="search-container" id="search-container" style="display: none;">
                    
                <div id="search-loader" class="search-loader" style="display: none;">
                <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
                </div>
                
                <div class="search-result" id="search-result" style="display: none;">
                </div>

                <h1 class="search__result-p" id="searchNoResult" style="display: none;">Sin resultados</h1>


                </div>

            </form>
        </nav>
        <div class="header__bars" id="bars-menu" onclick="menu()">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </div>

    </header>

     <!----===== GOOGLE FONTS ===== -->
</body>