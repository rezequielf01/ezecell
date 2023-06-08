<?php
  require "ezestore2/db.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celular Samsung A12 - EzeCell</title>
    <meta name="description" content="Compra el celular que a vos te gusta a un precio inmejorable y paga en cuotas sin interes." />
    <link rel="stylesheet" href="css/producto.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="css/slick-theme.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <!----===== FANCY BOX ===== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    <!----===== GOOGLE FONTS ===== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap" rel="stylesheet">
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    
    <?php
        require "layouts/header.php";
    ?>

    <?php
        require "layouts/aside.php";
    ?>

    <div id="preloader" class="loader-section">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>

    <div class="preloader-bg" id="preloader-bg">
    </div>
    <main class="main" id="main">


        <section class="producto-section">

        <?php
                    include("db.php");
                    $query = "SELECT * FROM celulares WHERE marca = 'samsung' and modelo = 'a03s'";
                    $resultado = $conexion->query($query);

                    while ($row = $resultado->fetch_assoc()){
    
                        $id = $row["id"];
                        $marca = $row["marca"];
                        $modelo = $row["modelo"];
                        $precio = $row["precio"];
                        $estado = $row["estado"];
                        $img = $row["img"];
                        $color = $row["color"];
                        $url = $row["url"];
                        $stock = $row["stock"];
                        $memoria = $row["memoria"];
                        $cuotas = $precio / 6;
                        
                        ?>
    
    <section class="slider-contenedor">
        <div class="slider-for" id="slider-for">

            <a
                data-fancybox="slider-desktop"
                data-src="images/s-a03s/samsung-a03s.png">
                <img class="slider__img slider-img__zoom" src="images/s-a03s/samsung-a03s-small.png"/>
            </a>

            <a
                data-fancybox="slider-desktop"
                data-src="images/s-a03s/samsung-a03s-big-dos.png">
                <img class="slider__img slider-img__zoom" src="images/s-a03s/samsung-a03s-small-dos.png"/>
            </a>

            <a
                data-fancybox="slider-desktop"
                data-src="images/s-a03s/samsung-a03s-big-tres.png">
                <img class="slider__img slider-img__zoom" src="images/s-a03s/samsung-a03s-small-tres.png"/>
            </a>

            <a
                data-fancybox="slider-desktop"
                data-src="images/s-a03s/samsung-a03s-big-cuatro.png">
                <img class="slider__img slider-img__zoom" src="images/s-a03s/samsung-a03s-small-cuatro.png"/>
            </a>

        </div>

        <div class="slider-nav" id="slider-nav">

            <div>
            <img class="slider__img" src="images/s-a03s/samsung-a03s-small.png" style="width:50%;">
            </div>

            <div>
            <img class="slider__img" src="images/s-a03s/samsung-a03s-small-dos.png" style="width:50%;">
            </div>

            <div>
            <img class="slider__img" src="images/s-a03s/samsung-a03s-small-tres.png" style="width:50%;">
            </div>

            <div>
            <img class="slider__img" src="images/s-a03s/samsung-a03s-small-cuatro.png" style="width:50%;">
            </div>

        </div>
        
    </section>

    <section class=""></section>

            <div id="slider-mobile">
                    <a
                        data-fancybox="slider-mobile"
                        data-src="images/s-a03s/samsung-a03s.png">
                        <img class="slider__img" src="images/s-a03s/samsung-a03s-small.png"/>
                    </a>

                    <a
                        data-fancybox="slider-mobile"
                        data-src="images/s-a03s/samsung-a03s-big-dos.png">
                        <img class="slider__img" src="images/s-a03s/samsung-a03s-small-tres.png"/>
                    </a>

                    <a
                        data-fancybox="slider-mobile"
                        data-src="images/s-a03s/samsung-a03s-big-tres.png">
                        <img class="slider__img" src="images/s-a03s/samsung-a03s-small-dos.png"/>
                    </a>

                    <a
                        data-fancybox="slider-mobile"
                        data-src="images/s-a03s/samsung-a03s-big-cuatro.png">
                        <img class="slider__img" src="images/s-a03s/samsung-a03s-small-cuatro.png"/>
                    </a>
            </div>

    




        <div class="producto-info">
            <h1 class="producto-info__h1"> <?php echo $marca." ".$modelo ." ".$memoria.""?> </h1>
            <div id="producto-box" class="producto-box">
                <span class="producto-info__span"> <?php echo "$".number_format($precio,2) ?></span>
                <span class="producto-info__cuotas"> <?php echo "En cuotas x6 $".number_format($cuotas,2) ?></span>
            </div>

            <div class="producto-info-dos">

                <span class="producto-info__span2"> <?php if($color = "Azul") {
                    echo "Color: <div class='color__blue'></div>";
                }
                ?></span>
                <span class="producto-info__span2"> <?php echo "Estado: ".$estado ?></span>
                <span class="producto-info__span2"> <?php if($stock >= 1){
                    echo "<h5 class='producto__stock'>EN STOCK</h5>";
                }
                else{
                    echo "<h5 class='producto__sinstock'>SIN STOCK</h5>";
                } ?></span>

            </div>

            <p class="producto-info__p">Lo que tenes que saber de este producto:</p>
            <ul class="producto-info__ul">
                <li class="producto-info__li">
                    Dispositivo liberado.
                </li>
                <li class="producto-info__li">
                    Garantía por 3 meses.
                </li>
                <li class="producto-info__li">
                    Cámara cuádruple de hasta 48 MP.
                </li>
                <li class="producto-info__li">
                    Procesador MediaTek MT6739V Quad-Core de 1.3GHz con 2GB de RAM.
                </li>
                <li class="producto-info__li">
                    Batería de 5,000 mAh.
                </li>
                <li class="producto-info__li">
                    Memoria interna de 128GB.
                </li>
                <li class="producto-info__li">
                    Cargador tipo c.
                </li>
                <li class="producto-info__li">
                    Con reconocimiento facial y sensor de huella dactilar.
                </li>
            </ul>
            <?php if($stock > 0 ){
            ?>
                <br>
                    <div class="pay-button">
                        <script id="pay-btn" style="background: red;" src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                        data-preference-id="395172918-2c66c1ba-cea0-4bfe-90bc-e08d9149c8e7" data-source="button">
                        </script>
                    </div>
                <?php
            }?>
        </div>

                    <?php

                    }
                ?>

        </section>
        

        <div class="warning">
            <h3 class="warning__h3"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> ATENCION <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></h3>
            <p class="warning__p">Si ya realizaste una compra o querés devolver un producto, contactános a través de nuestras redes sociales.</p>
        </div>

        <section class="tab-container">

            <div class="tab-box">
                <button class="tab__btn active-tab">Descripcion</button>
                <button class="tab__btn">Caracteristicas</button>
            </div>

            <div class="content-box">

                <div class="content active-tab">
                    <p>Con un diseño elegante y resistente, el nuevo moto e32 te da el estilo que querés. Viví una experiencia visual fluida con la pantalla HD+ de 6.5" y 90 Hz. Potenciá tu creatividad usando el sistema de triple cámara con IA y enfoque rápido. Además, obtené un procesador potente y una batería duradera de 5000 mAh. El moto e32 ofrece más que solo diseño.</p>
                </div>

                <div class="content">
                    <ul class="content__ul">
                        <li class="content__li">Modelo: MOTO E32 XT2227-1</li>
                        <li class="content__li">Procesador: Octa core 1.6GHz</li>
                        <li class="content__li">Memoria RAM: 4GB</li>
                        <li class="content__li">Memoria interna: 64GB (Expandible hasta 1TB)</li>
                        <li class="content__li">Batería: 5000mAh</li>
                        <li class="content__li">Sistema Operativo: Android 11</li>
                        <li class="content__li">Cámara Principal: 16MP 2MP 2MP</li>
                        <li class="content__li">Cámara Frontal: 8MP</li>
                        <li class="content__li">Resolución pantalla: 720 x 1600, HD+, 269, HiD, 90 Hz</li>
                        <li class="content__li">Medidas: (Alto x Ancho x Prof) 163.95 x 74.94 x 8.49</li>
                        <li class="content__li">Peso: 184g</li>
                        <li class="content__li">USB-C Cargador 10W USB-A</li>
                    </ul>
                </div>

            </div>
        </section>

    </main>

    <?php require "layouts/footer.php" ?>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="scripts/slick.js"></script>
    <script src="scripts/slick.min.js"></script>
    <script src="scripts/producto.js"></script>
    <script src="https://kit.fontawesome.com/18e24e909e.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="scripts/preloader.js"></script>
    <script src="scripts/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>
</html>