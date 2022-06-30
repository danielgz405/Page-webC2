<?php 
    include("cn.php");
    $pass = "SELECT * FROM password";
    $response = "";
    $resultado = mysqli_query($conexion, $pass);
    $row=mysqli_fetch_assoc($resultado);

    if ($_POST['name'] == $row["name"] && $_POST['password'] == $row["password"] && $row["id"] == 1){
        $response = "";
    }else{
        $response = "";
    }
?>

    <!--
    <script>
        function realizaProceso(valorCaja1, valorCaja2){
                var parametros = {
                        "valorCaja1" : valorCaja1,
                        "valorCaja2" : valorCaja2
                };
                $.ajax({
                        data:  parametros, //datos que se envian a traves de ajax
                        url:   'ejemplo_ajax_proceso.php', //archivo que recibe la peticion
                        type:  'post', //método de envio
                        beforeSend: function () {
                                $("#resultado").html("Procesando, espere por favor...");
                        },
                        success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                                $("#resultado").html(response);
                        }
                });
                $.ajax({
                                data:  value, //datos que se envian a traves de ajax
                                url:   'contact.php', //archivo que recibe la peticion
                                type:  'post', //método de envio
                                beforeSend: function () {},
                                success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                                        console.log('ok')
                                        window.location.href = '/App-web/C^2/contact.php'
                                }
                        });
        }
    </script>
     -->