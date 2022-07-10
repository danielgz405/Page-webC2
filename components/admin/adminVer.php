<?php 

    echo $db."chupa pija";
    include("../../cn.php");
    $products = "SELECT * FROM producto";
    $galeria = "SELECT * FROM galery";
    $galeriaByDefault = "SELECT * FROM galery";
    $previewStore = "SELECT * FROM preview_store";

?>

<div class="seeContainer">
    <?php 
    if($db == 0){
    ?>
        <div>
            <div><h1>Imagen</h1></div>
            <div><h1>Titulo</h1></div>
            <div><h1>Precio</h1></div>
        </div>
        <?php $resultado = mysqli_query($conexion, $previewStore );
            while($row=mysqli_fetch_assoc($resultado)){ ?>
            <div>
                <div><h1><?php echo $row["img"]?></h1></div>
                <div><h1><?php echo $row["titulo"]?></h1></div>
                <div><h1><?php echo $row["descripcion"]?></h1></div>
                <button>ver</button>
            </div>
        <?php } ?>
    <?php
    }else if($db == 1){
    ?>

    <?php
    }else if($db == 2){
    ?>

    <?php } ?>
</div>
