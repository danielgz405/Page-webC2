<?php
    $id = 6;
    include("cn.php");
    $galeriaByDefault;
    $galeria;
    if(isset($_GET["servise"])) {
		$servise = $_GET["servise"].'b';
        switch ($servise) {
            case "0b":
                //Instalaciones
                $title='Instalaciones';
                $description='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim ligula ac eleifend egestas. Donec pharetra, sapien quis cursus fermentum, arcu augue varius turpis, a pellentesque arcu orci ut sapien. Praesent porttitor dui id quam aliquam bibendum. Sed et pellentesque sapien, vel fringilla tortor. Quisque non dui sed felis porta maximus id quis magna. Curabitur laoreet ex et purus tristique, ut tempor justo feugiat. Nunc a leo';
                $price='120.000 COP';
                $image='./assets/img/servicios/maxresdefault.jpg';
                break;
            case "1b":
                //Estuco y Pintura
                $title='Estuco y Pintura';
                $description='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim ligula ac eleifend egestas. Donec pharetra, sapien quis cursus fermentum, arcu augue varius turpis, a pellentesque arcu orci ut sapien. Praesent porttitor dui id quam aliquam bibendum. Sed et pellentesque sapien, vel fringilla tortor. Quisque non dui sed felis porta maximus id quis magna. Curabitur laoreet ex et purus tristique, ut tempor justo feugiat. Nunc a leo';
                $price='220.000 COP';
                $image='./assets/img/servicios/como-pintar-techos-sin-salpicar-pasos-620x349.jpg';
                break;
            case "2b":
                //Muebles en Madera
                $title='Muebles en Madera';
                $description='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim ligula ac eleifend egestas. Donec pharetra, sapien quis cursus fermentum, arcu augue varius turpis, a pellentesque arcu orci ut sapien. Praesent porttitor dui id quam aliquam bibendum. Sed et pellentesque sapien, vel fringilla tortor. Quisque non dui sed felis porta maximus id quis magna. Curabitur laoreet ex et purus tristique, ut tempor justo feugiat. Nunc a leo';
                $price='520.000 COP';
                $image='./assets/img/servicios/274165568_860045744788336_4703714102050422884_n.png';
                break;
        }
        $galeria = "SELECT * FROM galery WHERE `default`='false' AND `ref`='$servise'";
        $galeriaByDefault = "SELECT * FROM galery WHERE `default`='true' AND `ref`='$servise'";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include './layouts/head.php';
    ?>
    <link rel="stylesheet" href="./assets/css/serviciosIndi.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>CyC Acabados Arquitectónicos | Servicios</title>
</head>
<body>
    <?php
        include './layouts/bodyScript.php';
    ?>
    <?php
        include './layouts/header.php';
    ?>
    <div id="containerPrin">
        <div class="part1">
                <div class="titlePart">

                    <h1 class="titlePart"><?php echo $title ?></h1>
                    
                    <p class="contendPart">
                        Te ayudamos Con La Asesoría y Visualización De Tu Proyecto,
                        Asesoramiento De Materiales, Acabados y Propuesta De Iluminació
                    </p>
                </div>
                <div class="contendPart1" id="adquirir">
                    <div class="containerImgProduct">
                        <div class="imgProduct" style="background-image: url(<?php echo $image?>);"></div>
                    </div>
                    <div class="descriptionProduct">
                        <h1 class="descriptionTitle">Sobre este Servicio</h1>
                        <p class="descriptionContend"><?php echo $description ?></p>
                        <h2 class="precioProductTitle">Precio Base</h2>
                        <p class="precioProductDescription"><?php echo $price ?></p>
                        <div onclick="
                        document.getElementById('container').style.display = 'block';
                        document.getElementById('containerPrin').style.display = 'none';
                        window.location.href = '#container'" class="btnProduct">Adquirir</div>
                    </div>
                </div>
                <div>
                    <div class="titlePart">
                        <h1 class="titlePart">Galeria</h1>
                    </div>
                    <div class="galeriaDinamica">
                        <?php 
                            $resultado = mysqli_query($conexion, $galeriaByDefault );
                            while($row=mysqli_fetch_assoc($resultado)){
                        ?>
                        <div class="bannerGaleriaMain" style="background-image: url(./assets/img/serviciosIndi/<?php echo $row["img"]?>);" id="fondo">
                        <?php }?>
                            <!-- <div class="btnMoveGaleria">
                                <div class="izq btns">
                                    <img src="./assets/img/productos/Vector 4.svg" alt="" class="btnIzq flecha">
                                </div>
                                <div class="der btns">
                                    <img src="./assets/img/productos/Vector 2.svg" alt="" class="btnDer flecha">
                                </div>
                            </div> -->
                        </div>
                        <div class="imgsContainer">
                            <div class="imgSecundarias" id="container_galery">
                                <?php 
                                    $resultado = mysqli_query($conexion, $galeria );
                                    while($row=mysqli_fetch_assoc($resultado)){
                                ?>
                                <div class="imgItemGaleria" id="container_galery_son" style="background-image: url(./assets/img/serviciosIndi/<?php echo $row["img"]?>);"></div>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </div>
    <div id='container' style="display: none;">
        <?php
            include './components/contact.php';
        ?>
    </div>
    <script>
        const stylesAwait = "text-align: center;position: relative;width: 80vh;margin-left: auto;margin-right: auto;color: #05090b;font-family: 'Poppins Semi Bold';font-size: 12;padding: 1rem;background: linear-gradient(to bottom, #dfdfff, #2af5d0);left: 0rem;border-radius: 10px;box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;"; 
        var value = {
            service: <?php echo "'". $title."'"?>,
            description: <?php echo "'". $description."'"?>,
            price: <?php echo "'". $price."'"?>,
        }
        function enviar() {
            var dta = '&servise='+value.service+'&descrip='+value.description+'&price='+value.price;
            var dataen = `${$("#contactoForm").serialize()}${dta}`;
            var allData = dataen;
            console.log(allData)
            
            var max = 0;
            var time;
            $.ajax({
                type: 'post',
                url: './send.php',
                data: allData,
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
        <?php 
            $resultado = mysqli_query($conexion, $galeriaByDefault );
            while($row=mysqli_fetch_assoc($resultado)){
        ?>
        const image = "<?php echo $row["img"]?>";
        <?php }?>
        <?php 
            echo 'const img = {';
            $can = 0;
            $resultado = mysqli_query($conexion, $galeria);
            while($row=mysqli_fetch_assoc($resultado)){
                $can = $can + 1;
        ?>
        
            <?php echo $can.':"'.$row["img"].'",' ?>
        
        <?php }echo '};';?>
        console.log(img);
        const images = [img[1], img[2], img[3]]; 
        const file = 'serviciosIndi';
    </script>
    <script src="./assets/js/galery_move.js"></script>  

    <?php
        include './layouts/footer.php';
    ?>
</body>
</html>