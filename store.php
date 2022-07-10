<?php
    $id = 5;
    include("cn.php");
    $storeItems = "SELECT * FROM preview_store";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include './layouts/head.php';
    ?>
    <link rel="stylesheet" href="./assets/css/store.css">
    <title>CyC Acabados Arquitectónicos | Home</title>
</head>
<body>
    <?php
        include './layouts/bodyScript.php';
    ?>
    <?php
        include './layouts/header.php';
    ?>
    <div class="part2">
        <div class="titlePart">
            <h1 class="titlePart">Store</h1>
            <p class="contendPart">Tienda de materiales para la construcción</p>
        </div>
    </div>
    <div class="contendPart2">
        <div class="container">
            <?php 
                $resultado = mysqli_query($conexion, $storeItems);
                while($row=mysqli_fetch_assoc($resultado)){
            ?>
            <div class="itemStore">
                <div class="itemStoreImg" style="background-image: url(./assets/img/store/<?php echo $row["img"]?>);"></div>
                <h1 class="itemStoreTitle"><?php echo $row["titulo"]?></h1>
                <p class="itemStoreDescription"><?php echo $row["descripcion"]?></p>
                <a class="itemStoreBtn" href="productos.php?id=<?php echo $row["id"]?>">ver<?php echo $row["id"]?></a>
            </div>
            <?php }?>

        </div>
    </div>
    <?php
        include './layouts/footer.php';
    ?>
</body>
</html>