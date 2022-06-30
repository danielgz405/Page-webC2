<?php
$borderSer = "";
$borderPro = "";
$borderNos = "";
$borderCon = "";

switch ($id) {
    case 0:
        //home
        $banner='"./assets/img/Home/banner.jpg"';
        break;
    case 1:
        //servicios
        $borderSer = "borderBotNav";
        $banner='"./assets/img/servicios/banner.jpg"';
        break;
    case 2:
        //proyectos
        $borderPro = "borderBotNav";
        $banner='"./assets/img/proyectos/banner.jpg"';
        break;
    case 3:
        //about
        $borderNos = "borderBotNav";
        $banner='"./assets/img/sobreNosotros/banner.jpg"';
        break;
    case 4:
        $borderCon = "borderBotNav";
        break;
    case 5:
        //store
        $banner='"./assets/img/store/banner.jpg"';
        break;
    case 6:
        //servicioIndi
        $banner='"./assets/img/serviciosIndi/banner.jpg"';
        break;
    case 7:
        //productos
        $banner='"./assets/img/productos/banner.jpg"';
        break;
}
?>

<div class="header">
    <div class="banner" style='background-image: url(<?php echo $banner;?>);'>
        <div class="bannerTx">
            <h1 class="bannerTxTitle">CyC Acabados Arquitectónicos</h1>
            <h5 class="bannerTxSubtitle">Tienda de materiales para la construcción</h5>
            <a class="btnBanner" href="contact.php?defineBa=<?php echo $id;?>">
                <h3>Contact</h3>
            </a>
        </div>
        <div class="bannerIm"></div>
    </div>
    <a class="btnIcon" href="index.php">
        <div>
            <img class="iconHead" src="./assets/img/Header/c2.png" alt="">
        </div>
    </a>
    <div class="redes">
        <a href="https://www.instagram.com/cycacabadosarquitectonicos/" target="_blank" rel="noopener noreferrer">
            <img class="redIcon" src="./assets/img/Header/nav/instagram.png" alt="">
        </a>
        <a href="https://www.facebook.com/CyC-Acabados-Arquitect%C3%B3nicos-710518899741022/?ref=page_internal" target="_blank" rel="noopener noreferrer">
            <img class="redIcon" src="./assets/img/Header/nav/facebook.png" alt="">
        </a>
        <a href="https://api.whatsapp.com/send?phone=573243681513" target="_blank" rel="noopener noreferrer">
            <img class="redIcon" src="./assets/img/Header/nav/whatsapp.png" alt="">
        </a>
    </div>
    <nav class="nav">
        <div class="nav-1"> 
            <div>
                <a id="location" class="Item" href="index.php#localizacion">
                    <div class="itemC">
                        <img class="imgItem" src="./assets/img/nav/location.png" alt="">
                        <H1 class="nav_text">Localizacion</H1>
                    </div>
                </a>
            </div>
            <div>
                <a class="Item" href="servicios.php">
                    <div class="itemC <?php echo $borderSer?>">
                            <img class="imgItem" src="./assets/img/nav/document.png" alt="">
                            <H1 class="nav_text">Servicios</H1>
                    </div>
                </a>
            </div>
            <div>
                <a class="Item" href="proyectos.php">
                    <div class="itemC <?php echo $borderPro?>">
                            <img class="imgItem" src="./assets/img/nav/image.png" alt="">
                            <H1 class="nav_text">Proyectos</H1>
                    </div>
                </a>
            </div>
            <div>
                <a class="Item" href="about.php">
                    <div class="itemC <?php echo $borderNos?>">
                            <img class="imgItem" src="./assets/img/nav/users.png" alt="">
                            <H1 class="nav_text">Nosotros</H1>
                    </div>
                </a>
            </div>
            <div>
                <a class="Item" href="contact.php?defineBa=<?php echo $id;?>">
                    <div class="itemC <?php echo $borderCon?>">
                            <img class="imgItem" src="./assets/img/nav/Icon.png" alt="">
                            <H1 class="nav_text">Contacto</H1>
                    </div>
                </a>
            </div>
        </div>
    </nav>
</div>