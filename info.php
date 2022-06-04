<?php
    $id = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include './layers/head.php';
    ?>
    <title>CyC Acabados Arquitectónicos | Info</title>
</head>
<body>
    <?php
        include './layers/header.php';
    ?>
    <div class="modal">
        <form action="" class="password" method="post" action="sendPass.php">
            <input required type="text" class="input" name="name" id="email" placeholder="nombre">
            <input required type="text" class="input" name="password" id="name" placeholder="contraseña">

            <input type="submit" class="btnInput" value="Send" id="boton">
        </form>
    </div>
    <?php
        include './layers/footer.php';
    ?>
    <script>

    </script>
</body>
</html>