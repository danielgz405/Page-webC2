<?php
    $id = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include './layouts/head.php';
    ?>
    <link rel="stylesheet" href="./assets/css/home.css">
    <title>CyC Acabados Arquitectónicos | Home</title>
</head>
<body>
    <?php
        include './layouts/bodyScript.php';
    ?>
    <?php
        include './layouts/header.php';
    ?>
    <div class="part1">
        <div class="titlePart">
            <h1 class="titlePart">Servicios</h1>
            <p class="contendPart">
                Te ayudamos Con La Asesoría y Visualización De Tu Proyecto,
                Asesoramiento De Materiales, Acabados y Propuesta De Iluminació
            </p>
        </div>
        <div class="contendPart1">
            <div class="serviciosParte1">
                <div class="cabeceraParte1">
                    <h2 class="cabeceraTitle">Instalaciones</h2>
                </div>
                <div class="pieParte1">
                    <p class="pieText">Tienda de materiales para la construcción</p>
                    <img src="./assets/img/Home/Icon.png" alt="" class="pieImg">
                    <a href="./servicioIndi.php?servise=0" class="btnPie">Saber Mas</a>
                </div>
            </div>
            <div class="serviciosParte1">
                <div class="cabeceraParte1">
                    <h2 class="cabeceraTitle">Store</h2>
                </div>
                <div class="pieParte1">
                    <p class="pieText">Tienda de materiales para la construcción</p>
                    <img src="./assets/img/Home/Icon.png" alt="" class="pieImg">
                    <a href="./store.php" class="btnPie">Saber Mas</a>
                </div>
            </div>
            <div class="serviciosParte1">
                <div class="cabeceraParte1">
                    <h2 class="cabeceraTitle">Estuco y Pintura</h2>
                </div>
                <div class="pieParte1">
                    <p class="pieText">Tienda de materiales para la construcción</p>
                    <img src="./assets/img/Home/Icon.png" alt="" class="pieImg">
                    <a href="./servicioIndi.php?servise=1" class="btnPie">Saber Mas</a>
                </div>
            </div>
            <div class="serviciosParte1">
                <div class="cabeceraParte1">
                    <h2 class="cabeceraTitle">Muebles en Madera</h2>
                </div>
                <div class="pieParte1">
                    <p class="pieText">Tienda de materiales para la construcción</p>
                    <img src="./assets/img/Home/Icon.png" alt="" class="pieImg">
                    <a href="./servicioIndi.php?servise=2" class="btnPie">Saber Mas</a>
                </div>
            </div>
        </div>
    </div>
    <div class="part2">
        <div class="titlePart">
            <h1 class="titlePart">Productos</h1>
            <p class="contendPart">Tienda de materiales para la construcción</p>
        </div>
        <div class="contendPart2">
            <div class="productoH">
                <div class="productoText">
                    <h3 class="productoTitle">Venta de Techo PVC</h3>
                    <p class="productoContend">
                        Variedad en tonos, calidad en nuestros productos, corazón en nuestros proyectos.
                        Agenda con nosotros! 
                    </p>
                    <a href="./store.php" class="productoBtn">Store</a>
                </div>
                <div class="productoImg">
                    <img src="./assets/img/Home/techo4.png" alt="" class="imgProduct1">
                </div>
            </div>
            <div class="productoHR">
                <div class="productoText">
                    <h3 class="productoTitle">Muebles Personalizados</h3>
                    <p class="productoContend">
                        Diseñamos tus espacios, tu lo imaginas nosotros lo hacemos realidad.
                        Cotiza con  nosotros, programa tu toma de medidas
                    </p>
                    <a href="./store.php" class="productoBtn">Store</a>
                </div>
                <div class="productoImg padding">
                    <img src="./assets/img/Home/closets3.png" alt="" class="imgProduct2">
                </div>
            </div>
            <div class="productoH">
                <div class="productoText">
                    <h3 class="productoTitle">Venta de Pisos Laminados</h3>
                    <p class="productoContend">
                        Variedad en tonos, calidad en nuestros productos, corazón en nuestros proyectos.
                        Agenda con nosotros! 
                    </p>
                    <a href="./store.php" class="productoBtn">Store</a>
                </div>
                <div class="productoImg padding">
                    <img src="./assets/img/Home/pisoslaminados3.png" alt="" class="imgProduct3 ">
                </div>
            </div>
        </div>
    </div>
    <div class="part3" id="localizacion">
        <div class="titlePart">
            <h1 class="titlePart">Ubicacion</h1>
            <p class="contendPart">Tienda de materiales para la construcción</p>
        </div>
        <div class="contendPart3">
            <div class="location">
                <iframe class="googleMaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d653.6489624015063!2d-74.00074945095575!3d5.030846873673058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e406fdbf993541b%3A0x8a7d85a5de8c9d71!2sCra.%207%20%2315-26%2C%20Zipaquir%C3%A1%2C%20Cundinamarca!5e0!3m2!1ses-419!2sco!4v1651598910223!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <?php
        include './layouts/footer.php';
    ?>
</body>
</html>