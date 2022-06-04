
<?php
    switch ($_GET["defineBa"]) {
        case "0":
            //home
            $banner='"./assets/img/Home/banner.jpg"';
            break;
        case "1":
            //servicios
            $banner='"./assets/img/servicios/banner.jpg"';
            break;
        case "2":
            //proyectos
            $banner='"./assets/img/proyectos/banner.jpg"';
            break;
        case "3":
            //about
            $banner='"./assets/img/sobreNosotros/banner.jpg"';
            break;
        case "5":
            //store
            $banner='"./assets/img/store/banner.jpg"';
            break;
        case "6":
            //servicioIndi
            $banner='"./assets/img/serviciosIndi/banner.jpg"';
            break;
        case "7":
            //productos
            $banner='"./assets/img/productos/banner.jpg"';
            break;
        default:
            $banner='"./assets/img/Home/banner.jpg"';
    }

    $id = 4;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include './layouts/head.php';
    ?>
    <link rel="stylesheet" href="./assets/css/contact.css">
    <title>CyC Acabados Arquitectónicos | Home</title>
</head>
<body>
    <?php
        include './layouts/header.php';
    ?>
    <div class="part1">
        <div class="titlePart">
            <h1 class="titlePart">Contactanos</h1>
            <p class="contendPart">
                Te ayudamos Con La Asesoría y Visualización De Tu Proyecto,
                Asesoramiento De Materiales, Acabados y Propuesta De Iluminació
            </p>
        </div>
        <div class="contendPart1">
            <div class="ContactIcon">
                <img class="imgContact" src="./assets/img/Header/c2.png" alt="">
                <h5 class="titleContact">C y C</h5>
                <h7 class="subtitleContact">Centro de Diseño y Construccion</h7>
            </div>
            <div class="contact">
                <form method="POST" class="form" action="">
                    <input required type="text" class="input" name="email" id="email" placeholder="Correo Electronico">
                    <input required type="text" class="input" name="name" id="name" placeholder="Nombre">
                    <input required type="number" class="input" name="phone" id="phone" placeholder="Telefono"><br>
                    <textarea name="text" id="mensaje" class="input" placeholder="Mensaje"></textarea>
                    <input type="submit" class="btnInput" value="Send" id="boton">
                </form>
            </div>
        </div>
    </div>
    <?php
        include './layouts/footer.php';
    ?>
</body>
</html>