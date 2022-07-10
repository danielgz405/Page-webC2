<?php
    $id = 2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include './layouts/head.php';
    ?>
    <title>CyC Acabados Arquitectónicos | Home</title>
    <link rel="stylesheet" href="./assets/css/proyectos.css">
</head>
<body>
    <?php
        include './layouts/bodyScript.php';
    ?>
    <?php
        include './layouts/header.php';
    ?>
    <div>
        <div class="titlePart">
            <h1 class="titlePart">Proyectos</h1>
            <p class="contendPart">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim 
                ligula ac eleifend egestas. Donec pharetra, sapien quis cursus fermentum, 
                arcu augue varius turpis,
            </p>
        </div>
        <div>
            <div class="galeriaGrid">
                <div class="galeriaImgContainer">
                    <div class="imageLeft imgGaleria" style="background-image: url('./assets/img/proyectos/galery1.jpg');"></div>
                    <div class="imageCenter imgGaleria" style="background-image: url('./assets/img/proyectos/galery2.jpg');"></div>
                    <div class="imageRight imgGaleria" style="background-image: url('./assets/img/proyectos/galery3.jpg');"></div>
                </div>
                <div class="galeriaImgContainer">
                    <div class="imageLeft imgGaleria" style="background-image: url('./assets/img/proyectos/galery4.jpg');"></div>
                    <div class="imageCenter imgGaleria" style="background-image: url('./assets/img/proyectos/galery5.jpg');"></div>
                    <div class="imageRight imgGaleria" style="background-image: url('./assets/img/proyectos/galery6.jpg');"></div>
                </div>
                <div class="galeriaImgContainer">
                    <div class="imageLeft imgGaleria" style="background-image: url('./assets/img/proyectos/galery7.jpg');"></div>
                    <div class="imageCenter imgGaleria" style="background-image: url('./assets/img/proyectos/galery8.jpg');"></div>
                    <div class="imageRight imgGaleria" style="background-image: url('./assets/img/proyectos/galery9.png');"></div>
                </div>
                <div class="galeriaImgContainer">
                    <div class="imageLeft imgGaleria" style="background-image: url('./assets/img/proyectos/galery10.jpg');"></div>
                    <div class="imageCenter imgGaleria" style="background-image: url('./assets/img/proyectos/galery11.jpg');"></div>
                    <div class="imageRight imgGaleria" style="background-image: url('./assets/img/proyectos/galery12.jpg');"></div>
                </div>
            </div>
        </div>
    </div>
    <?php
        include './layouts/footer.php';
    ?>
</body>
</html>