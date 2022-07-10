
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/contact.css">
    <title>CyC Acabados Arquitectónicos | Home</title>
</head>
<body>
    <?php
        include './layouts/bodyScript.php';
    ?>
    <?php
        include './layouts/header.php';
    ?>
    <div class="part1" id="contact">
        <div class="titlePart">
            <h1 class="titlePart">Contactanos</h1>
            <p class="contendPart">
                Te ayudamos Con La Asesoría y Visualización De Tu Proyecto,
                Asesoramiento De Materiales, Acabados y Propuesta De Iluminació
            </p>
        </div>
        <div id="respa" class="alert" role="alert"></div>
        <div class="contendPart1">
            <div class="ContactIcon">
                <img class="imgContact" src="./assets/img/Header/c2.png" alt="">
                <h5 class="titleContact">C y C</h5>
                <h7 class="subtitleContact">Centro de Diseño y Construccion</h7>
            </div>
            <div class="contact">
                <form method="POST" class="form" id="contactoForm" onsubmit="return enviar();">
                    <input required type="email" class="input" name="email" id="email" placeholder="Correo Electronico">
                    <input required type="text" class="input" name="name" id="name" placeholder="Nombre">
                    <input required type="number" class="input" name="phone" id="phone" placeholder="Telefono"><br>
                    <textarea required name="text" id="mensaje" class="input" placeholder="Mensaje"></textarea>
                    <input type="submit" class="btnInput" value="Send" id="boton">
                </form>
            </div>
        </div>
    </div>
    <script>
        const stylesAwait = "text-align: center;position: relative;width: 80vh;margin-left: auto;margin-right: auto;color: #05090b;font-family: 'Poppins Semi Bold';font-size: 12;padding: 1rem;background: linear-gradient(to bottom, #dfdfff, #2af5d0);left: 0rem;border-radius: 10px;box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;"; 
        function enviar() {
            var dataen = $('#contactoForm').serialize();
            var form = $("#contactoForm");
            var max = 0;
            var time;
            $.ajax({
                type: 'post',
                url: './send.php',
                data: dataen,
                dataType: 'html',
                beforeSend: function () {
                    $("#respa").html('<div style="'+stylesAwait+'" ><p>Procesando, espere por favor...</p></div>');
                },
                success: function (resp) {
                    time = setInterval(function () {document.getElementById('respa').style.display = 'none';clearInterval(time);}, 4000);
                    $("#respa").html(resp);
                }
            });
            return false;
        }
    </script>
    <script>
        var tope=0;
        var intervalo;
        intervalo = setInterval(mensaje,300);
        function mensaje() {
            window.location.href = "#contact";
            tope++;
            if (tope>=1) {
                clearInterval(intervalo);
            }
        }
    </script>
    <?php
        include './layouts/footer.php';
    ?>
</body>
</html>