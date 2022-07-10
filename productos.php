<?php
    include("cn.php");
    $id = 0;
    $ID = $_GET["id"];
    $products = "SELECT * FROM producto WHERE id LIKE '$ID'";
    $galeria = "SELECT * FROM galery WHERE `default`='false' AND `ref`='$ID'";
    $galeriaByDefault = "SELECT * FROM galery WHERE `default`='true' AND `ref`='$ID'";
    $meters = "";
    $boxes = "";
    if(isset($_POST["submit"]) && !empty($_POST["submit"])) {
		$meters = $_POST["meters"];
        $metersByBoxes = 0;
        $resultado = mysqli_query($conexion, $products );
        while($row=mysqli_fetch_assoc($resultado)){
            $metersByBoxes = $row["metros_cajas"];
        }
        $boxes = 1;
        $boxes = round(($boxes * $meters) / $metersByBoxes);
	}
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
        include './layouts/bodyScript.php';
    ?>
    <?php
        include './layouts/header.php';
    ?>
    <div id="containerPrin">
        <div class="part1">
            <?php 
                $resultado = mysqli_query($conexion, $products );
                while($row=mysqli_fetch_assoc($resultado)){
            ?>
            <script>
                var value = {
                    'name': <?php if(isset($row["titulo"])){ echo "'". $row["titulo"]."'";}else{ echo "'"."'";} ?>, 
                    'boxes': <?php if(isset($boxes)){ echo "'".$boxes."'";}else{ echo "'"."'";}?>, 
                    'meters': <?php if(isset($meters)){echo "'".$meters."'";}else{ echo "'"."'";}?>, 
                    'use': <?php if(isset($row["uso"])){echo "'".$row["uso"]."'";}else{ echo "'"."'";}?>, 
                    'finish': <?php if(isset($row["acabado"])){echo "'".$row["acabado"]."'";}else{ echo "'"."'";}?>, 
                    'format': <?php if(isset($row["formato"])){echo "'".$row["formato"]."'";}else{ echo "'"."'";}?>, 
                    'metersByBoxes': <?php if(isset($row["metros_cajas"])){echo "'".$row["metros_cajas"]."'";}else{ echo "'"."'";}?>, 
                    'color': <?php if(isset($row["color"])){echo "'".$row["color"]."'";}else{ echo "'"."'";}?>, 
                    'brand': <?php if(isset($row["marca"])){echo "'".$row["marca"]."'";}else{ echo "'"."'";}?>, 
                    'ref': <?php if(isset($row["referencia"])){echo "'".$row["referencia"]."'";}else{ echo "'"."'";}?>, 
                };
            </script>
            <div class="titlePart">

                <h1 class="titlePart"><?php echo $row["titulo"]?></h1>
                
                <p class="contendPart">
                    Te ayudamos Con La Asesoría y Visualización De Tu Proyecto,
                    Asesoramiento De Materiales, Acabados y Propuesta De Iluminació
                </p>
            </div>
            <div class="contendPart1" id="adquirir">
                <div class="containerImgProduct">
                    <div class="imgProduct" style="background-image: url(./assets/img/productos/<?php echo $row["img"]?>);"></div>
                </div>
                <div class="descriptionProduct">
                    <h1 class="descriptionTitle">Sobre este Producto</h1>
                    <p class="descriptionContend"><?php echo $row["descripcion"]?></p>
                    <h2 class="precioProductTitle">Precio Base</h2>
                    <p class="precioProductDescription"><?php echo $row["precio"]?></p>
                    <div onclick="
                        if(value.boxes === ''){
                            window.alert('tienes que indicar cuantos metros cuadrados necesitas')
                            window.location.href = '#imputCon'
                        }else{
                            console.log(value);
                            document.getElementById('container').style.display = 'block';
                            document.getElementById('containerPrin').style.display = 'none';
                            window.location.href = '#container'
                        };" class="btnProduct">Adquirir</div>
                </div>
            </div>
            <div class="contend2Part1" id="imputCon">
                <div class="titlePart">
                    <h1 class="titlePart">Detalles</h1>
                </div>
                <ol class="detallesList">
                    <form method="POST" class="formDeta">
                        <input required type="text" class="input" name="meters" ondrop="return false;" onpaste="return false;"
                        onkeypress="return event.charCode>=48 && event.charCode<=57 || event.charCode==46" placeholder="Cuantos m2 necesitas?">
                        <input type="submit" class="buttom" name="submit" value="Enviar">
                    </form>
                    <li class="detallesList mt-2" >Total Cajas: <?php echo $boxes ?></li>
                    <li class="detallesList">Total Metros: <?php echo $meters?></li>
                    <li class="detallesList">Uso: <?php echo $row["uso"]?></li>
                    <li class="detallesList">Acabado: <?php echo $row["acabado"]?></li>
                    <li class="detallesList">Formato: <?php echo $row["formato"]?></li>
                    <li class="detallesList">Metros por Caja: <?php echo $row["metros_cajas"]?></li>
                    <li class="detallesList">Color: <?php echo $row["color"]?></li>
                    <li class="detallesList">Marca: <?php echo $row["marca"]?></li>
                    <li class="detallesList">Referencia: <?php echo $row["referencia"]?></li>
                </ol>
            </div>
            <?php }?>
            <div>
                <div class="titlePart">
                    <h1 class="titlePart">Galeria</h1>
                </div>
                <div class="galeriaDinamica">
                    <?php 
                        $resultado = mysqli_query($conexion, $galeriaByDefault );
                        while($row=mysqli_fetch_assoc($resultado)){
                    ?>
                    <div class="bannerGaleriaMain" id="fondo" style="background-image: url(./assets/img/productos/<?php echo $row["img"]?>);">
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
                    <div class="imgsContainer animationBackgrund">
                        <div class="imgSecundarias" id="container_galery">
                        <?php 
                            $resultado = mysqli_query($conexion, $galeria );
                            while($row=mysqli_fetch_assoc($resultado)){
                        ?>
                            <div class="imgItemGaleria animation" id="container_galery_son" style="background-image: url(./assets/img/productos/<?php echo $row["img"]?>);"></div>
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
    <?php
        include './layouts/footer.php';
    ?>
    <script>
        const stylesAwait = "text-align: center;position: relative;width: 80vh;margin-left: auto;margin-right: auto;color: #05090b;font-family: 'Poppins Semi Bold';font-size: 12;padding: 1rem;background: linear-gradient(to bottom, #dfdfff, #2af5d0);left: 0rem;border-radius: 10px;box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;"; 
        function enviar() {
            var dta = '&product='+value.name+'&boxes='+value.boxes+'&meters='+value.meters+'&use='+value.use+'&finish='+value.finish+'&format='+value.format+'&meterBox='+value.metersByBoxes+'&color='+value.color+'&brand='+value.brand+'&ref='+value.ref;
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
        const image = "<?php echo $row["img"]?>"
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
        const file = 'productos';
    </script>
    <script src="./assets/js/galery_move.js"></script>  
</body>
</html>