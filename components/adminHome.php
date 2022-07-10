<script>
    let item = null;
</script>
<main class="containerAdmin">
    <div class="containerDb">
        <div onclick="type(0)" class="item start"><h4>Store Items</h4></div>
        <div onclick="type(1)" class="item center"><h4>Galery Servise</h4></div>
        <div onclick="type(2)" class="item end"><h4>Users</h4></div>
    </div>
    <div class="containerStatus">
        <div onclick="realizaProceso(0, item)" class="itemS"><h4>Ver</h4></div>
        <div onclick="realizaProceso(1, item)" class="itemS"><h4>Update</h4></div>
        <div onclick="realizaProceso(2, item)" class="itemS"><h4>Delete</h4></div>
        <div onclick="realizaProceso(3, item)" class="itemS"><h4>Create</h4></div>
    </div>
    <div id="resultado">
        
    </div>
</main>
<script>
    function type(params) {
        item = params;
    }
    function realizaProceso(id, items){
        if(items != null){
            var parametros = {
                "type" : id,
                "db" : items
            };
            $.ajax({
                    data:  parametros, //datos que se envian a traves de ajax
                    url:   './components/admin/index.php', //archivo que recibe la peticion
                    type:  'post', //método de envio
                    dataType: 'html',
                    beforeSend: function () {
                            $("#resultado").html("Procesando, espere por favor...");
                    },
                    success:  function (response) { //una vez que el archivo recibe el request lo procesa y lo devuelve
                            $("#resultado").html(response);
                    }
            });
        }else{
            $("#resultado").html("null")
        }
    }
</script>
