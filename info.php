<?php
    $id = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include './layouts/head.php';
    ?>
    <title>CyC Acabados Arquitectónicos | Info</title>
</head>
<body>
    <?php
        include './layouts/header.php';
    ?>
    <div class="modal">
        <form action="" class="password" method="post" action="sendPass.php">
            <input required type="text" class="input" name="name" id="email" placeholder="nombre">
            <input required type="text" class="input" name="password" id="name" placeholder="contraseña">

            <input type="submit" class="btnInput" value="Send" id="boton">
        </form>
    </div>
    <?php
        include './layouts/footer.php';
    ?>
    <script>

    </script>
</body>
</html>