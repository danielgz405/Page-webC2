<?php
    $id = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include './layouts/head.php';
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/admin.css">
    <title>CyC Acabados Arquitectónicos | ADMIN</title>
</head>
<body>
    <?php
        include './layouts/bodyScript.php';
    ?>
    <?php
        include './layouts/header.php';
    ?>
    <div id="login" class="login">
        <div class="titlePart">
            <h1 class="titlePart">Iniciar Sesion</h1>
            <p class="contendPart">
                Aqui podras configurar la bd de la pagina
            </p>
        </div>
        <form class="form" id="contactoForm" onsubmit="return enviar();">
            <input required autoComplete="name" type="text" class="input" name="name" id="name" placeholder="nombre">
            <input required autoComplete="current-password" type="password" class="input" name="password" id="password" placeholder="contraseña">

            <input type="submit" class="btnInput" value="Send" id="boton">
        </form>
    </div>
    <div>
        <div id="respa"></div>
        <div id="contend"></div>
    </div>
    <?php
        include './layouts/footer.php';
    ?>
    <script>
        const stylesAwait = "text-align: center;position: relative;width: 80vh;margin-left: auto;margin-right: auto;color: #05090b;font-family: 'Poppins Semi Bold';font-size: 12;padding: 1rem;background: linear-gradient(to bottom, #dfdfff, #2af5d0);left: 0rem;border-radius: 10px;box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;"; 
        function enviar() {

            var dataen = `${$("#contactoForm").serialize()}`;
            var allData = dataen;
            console.log(allData)
            
            var max = 0;
            var time;
            $.ajax({
                type: 'post',
                url: './sendPass.php',
                data: allData,
                dataType: 'html',
                beforeSend: function () {
                    $("#respa").html('<div style="'+stylesAwait+'" ><p>Procesando, espere por favor...</p></div>');
                },
                success: function (resp) {
                    document.getElementById('respa').style.display = 'none'
                    document.getElementById('login').style.display = 'none'
                    $("#contend").html(resp);
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
            window.location.href = "#login";
            tope++;
            if (tope>=1) {
                clearInterval(intervalo);
            }
        }
    </script>
</body>
</html>