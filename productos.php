<?php
    include './pito.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include './layouts/head.php';
    ?>
    <title>CyC Acabados Arquitectónicos | Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/productos.css">
</head>
<body>
    <?php
        include './layouts/header.php';
    ?>
     <div class="part1">
        <div class="titlePart">
            <h1 class="titlePart"><?php echo $can?></h1>
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
                <div class="bannerGaleriaMain" id="fondo">
                    <div class="btnMoveGaleria">
                        <div class="izq btns">
                            <img src="./assets/img/productos/Vector 4.svg" alt="" class="btnIzq flecha">
                        </div>
                        <div class="der btns">
                            <img src="./assets/img/productos/Vector 2.svg" alt="" class="btnDer flecha">
                        </div>
                    </div>
                </div>
                <div class="imgsContainer">
                    <div class="imgSecundarias" id="container_galery">
                        <div class="imgItemGaleria" id="container_galery_son" style="background-image: url(./assets/img/productos/<?php ?>); background: #5a1c5a;"></div>
                        <div class="imgItemGaleria" id="container_galery_son" style="background-image: url(./assets/img/productos/<?php ?>); background: #5c3109;"></div>
                        <div class="imgItemGaleria" id="container_galery_son" style="background-image: url(./assets/img/productos/<?php ?>); background: #005d36;"></div>
                    </div>
                </div>
            </div>

        </div>
     </div>
    <?php
        include './layouts/footer.php';
    ?>
    <script>
        function realizaProceso(v1){
            var parametros = {
                "can" : v1,
            };
            console.log(parametros)
            $.ajax({
                    data:  v1, //datos que se envian a traves de ajax
                    url:   './pito.php', //archivo que recibe la peticion
                    type:  'POST', //método de envio
                    beforeSend: function () {
                        console.log("esperando")
                            // $("#resultado").html("Procesando, espere por favor...");
                    },
                    success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                        console.log("success")   
                        // $("#resultado").html(response);
                    }
            });
        }
    </script>
    <script src="./assets/js/galery_move.js"></script>  
</body>
</html>