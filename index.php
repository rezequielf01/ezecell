<?php
  require "db.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EzeCell | Celulares en cuotas sin interes</title>
    <meta name="description" content="Renova tu celular al mejor precio del mercado, hasta seis cuotas sin interes, compra totalmente segura y sin moverte de tu casa" />
    <!----===== STYLES ===== -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" type="text/css" href="css/preloader.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <!----===== GOOGLE FONTS ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap" rel="stylesheet">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

     <!----===== HEADER ===== -->
    <?php
        include("layouts/header.php");
        include("layouts/aside.php");
    ?>

    <!----===== PRELOADER ===== -->
    <div id="preloader" class="loader-section">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

    <!----===== HERO ===== -->
    <main class="main">

        <section class="hero">

            <div class="hero-txt">

                <h1 class="hero__txt-h1">!Renovate al mejor precio¡</h1>
                <p class="hero__txt-p">Hasta 6 cuotas sin interes</p>

                <div class="hero-flex">

                    <div class="hero-txt-icon">
                        <img class="hero__icon-img" src="images/img2-banner.png" alt="">
                        <p class="hero__icon-p">90 Dias de garantia</p>
                    </div>

                    <div class="hero-txt-icon">
                        <img class="hero__icon-img" src="images/img3-banner.png" alt="">
                        <p class="hero__icon-p">Envios a todo el pais</p>
                    </div>

                </div>
            </div>

            <div class="hero-img">
                <img class="hero-img__img" src="images/img-banner.png" alt="">
            </div>

        </section>

        <!----===== SEPARADOR ===== -->
        <aside class="separador-container">

            <div class="separador-box">
                <img class="separador__box-img" src="images/entrega-gratis.png" alt="">
                <span class="separador__box-span">ENVIOS GRATIS</span>
            </div>

            <div class="separador-box">
                <img class="separador__box-img" src="images/cuotas.png" alt="">
                <span class="separador__box-span">Hasta 6 cuotas</span>
            </div>

            <div class="separador-box">
                <img class="separador__box-img" src="images/caja-de-devolucion.png" alt="">
                <span class="separador__box-span">7 dias de devolucion</span>
            </div>

        </aside>

        <!----===== OFERTAS ===== -->
        <section class="ofertas">

            <h2 class="ofertas__titulo">¡OFERTAZOS!</h2>

            <div class="ofertas-carousel">

            <?php
                    include("db.php");
                    $query = "SELECT * FROM ofertas WHERE stock > 0";
                    $resultado = $conexion->prepare($query);
                    $resultado->execute();

                    while ($row = $resultado->fetch(PDO::FETCH_ASSOC)){

                        $preciOriginal = $row["preciouno"];
                        $preciOferta = $row["preciodos"];
                        
                        ?>
    
                        <article class="ofertas-wrapp">             
                            <a href="<?php echo $url; ?>" class="ofertas-card">
                                <div class="ofertas-card-img">
                                    <img class="ofertas__img" src="data:image/png;base64, <?php echo base64_encode($row['img']); ?>">
                                </div>
                                <div class="ofertas-info">
                                    <h2 class="ofertas__nombre"><?php echo $row["marca"]." ".$row["modelo"]." ".$row["memoria"]; ?></h2>
                                    <p class="ofertas__estado"><?php echo $row["estado"]; ?></p>
                                    <span class="ofertas-precio__oferta"><?php echo "$".number_format($preciOriginal,2); ?></span>
                                    <span class="ofertas-precio">/ <strike><?php echo "$".number_format($preciOferta,2); ?></strike></span>
                                </div>
                            </a>
                        </article>
    
                    <?php

                    }
                ?>

            </div>

        </section>

        <!----===== LISTA DE CELULARES ===== -->
        <a name="celulares-ancla"></a>
        <section class="lista-celulares">

            <form class="marcas-contenedor" action="filtrador.php" method="get">

                <input class="marca__box" type="button" name="marca" value="todos" id="all" onclick="filtrar_celulares('todos');"></input>

                <input class="marca__box" type="button" name="marca" value="samsung" id="samsung" onclick="filtrar_celulares('samsung');"></input>

                <input class="marca__box" type="button" name="marca" value="motorola" id="motorola" onclick="filtrar_celulares('motorola');"></input>

                <input class="marca__box" type="button" name="marca" value="xiaomi" id="xiaomi" onclick="filtrar_celulares('xiaomi');"></input>

                <input class="marca__box" type="button" name="marca" value="lg" id="lg" onclick="filtrar_celulares('lg');"></input>

            </form>

            <div class="celulares-contenedor" id="celulares-contenedor">

            <div id="preloader-dos" class="preloader-dos" style="display: none;">
                <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
            </div>

            <div class="celulares-box" id="celulares-box">

                <?php
                $query = "SELECT * FROM celulares WHERE stock >= 1";
                $resultado = $conexion->prepare($query);
                $resultado->execute();
                
                while ($row = $resultado->fetch(PDO::FETCH_ASSOC)){
                    ?>
                        <a href="<?php echo $row["url"]; ?>" class="producto-card__a" id="producto-card__a">
                            <article class="producto-card" id="producto-card">
                                <img class="producto-card__img" src="data:image/png;base64, <?php echo base64_encode($row['img']); ?>">
                                <div class="producto-card-info" id="producto-card-info">
                                    <h2 class="producto-card__h2"><?php echo $row["marca"]." ".$row["modelo"]." ".$row["memoria"]; ?></h2>
                                    <p class="producto-card__p"><?php echo $row["estado"]; ?> </p>
                                    <span class="producto-card__precio"><?php echo "$".number_format($row["precio"],2); ?> </span>
                                </div>
                            </article>
                        </a>
                    <?php
                }
                ?>

            </div>


            </div>

        </section>

    </main>
    <!----===== FOOTER ===== -->
    
    <?php require "layouts/footer.php" ?>

     <!----===== SCRIPTS ===== -->
     <script src="scripts/jquery.js"></script>
     <script src="scripts/slick.js"></script>
     <script src="scripts/slick.min.js"></script>
     <script src="scripts/index.js"></script>
     <script src="scripts/preloader.js"></script>
     <script src="https://kit.fontawesome.com/18e24e909e.js" crossorigin="anonymous"></script>
</body>
</html>