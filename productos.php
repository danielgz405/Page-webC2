<?php
    $id = 7;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include './layers/head.php';
    ?>
    <title>CyC Acabados Arquitectónicos | Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/productos.css">
</head>
<body>
    <?php
        include './layers/header.php';
    ?>
     <div class="part1">
        <div class="titlePart">
            <h1 class="titlePart"><?php ?></h1>
            <p class="contendPart">
                Te ayudamos Con La Asesoría y Visualización De Tu Proyecto,
                Asesoramiento De Materiales, Acabados y Propuesta De Iluminació
            </p>
        </div>
        <div class="contendPart1">
            <div class="containerImgProduct">
                <div class="imgProduct" style="background-image: url(./assets/img/productos/pisoslaminados1.jpg<?php ?>);"></div>
            </div>
            <div class="descriptionProduct">
                <h1 class="descriptionTitle">Sobre este Producto</h1>
                <p class="descriptionContend">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim ligula ac eleifend egestas. Donec pharetra, sapien quis cursus fermentum, arcu augue varius turpis, a pellentesque arcu orci ut sapien. Praesent porttitor dui id quam aliquam bibendum. Sed et pellentesque sapien, vel fringilla tortor. Quisque non dui sed felis porta maximus id quis magna. Curabitur laoreet ex et purus tristique, ut tempor justo feugiat. Nunc a leo <?php ?></p>
                <h2 class="precioProductTitle">Precio Base</h2>
                <p class="precioProductDescription">161.000 (99.901 m2)<?php ?></p>
                <a href="" class="btnProduct">Adquirir</a>
            </div>
        </div>
        <div class="contend2Part1">
            <div class="titlePart">
                <h1 class="titlePart">Detalles</h1>
            </div>
            <ol class="detallesList">
                <input required type="text" class="input" name="" id="" placeholder="Cuantos m2 necesitas?">
                <li class="detallesList mt-2" >Total Cajas: <?php ?></li>
                <li class="detallesList">Total Metros: <?php ?></li>
                <li class="detallesList">Uso: <?php ?></li>
                <li class="detallesList">Acabado: <?php ?></li>
                <li class="detallesList">Formato: <?php ?></li>
                <li class="detallesList">Metros por Caja: <?php ?></li>
                <li class="detallesList">Color: <?php ?></li>
                <li class="detallesList">Marca: <?php ?></li>
                <li class="detallesList">Referencia: <?php ?></li>
            </ol>
        </div>
        <div>
            <div class="titlePart">
                <h1 class="titlePart">Galeria</h1>
            </div>
            <div class="galeriaDinamica">
                <div class="bannerGaleriaMain">
                    <div class="imgSecundarias">
                        <div class="imgItemGaleria" style="background-image: url(./assets/img/productos/<?php ?>);"></div>
                    </div>
                    <div class="btnMoveGaleria">
                        <div class="izq">
                            <img src="./assets/img/productos/Vector 4.svg" alt="" class="btnIzq">
                        </div>
                        <div class="der">
                            <img src="./assets/img/productos/Vector 2.svg" alt="" class="btnDer">
                        </div>
                    </div>
                </div>
            </div>

        </div>
     </div>
    <?php
        include './layers/footer.php';
    ?>

    <!--
    <script>
        function realizaProceso(valorCaja1, valorCaja2){
                var parametros = {
                        "valorCaja1" : valorCaja1,
                        "valorCaja2" : valorCaja2
                };
                $.ajax({
                        data:  parametros, //datos que se envian a traves de ajax
                        url:   'ejemplo_ajax_proceso.php', //archivo que recibe la peticion
                        type:  'post', //método de envio
                        beforeSend: function () {
                                $("#resultado").html("Procesando, espere por favor...");
                        },
                        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                                $("#resultado").html(response);
                        }
                });
        }
    </script>
     -->
</body>
</html>