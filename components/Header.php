<?php 
    include_once('RootPath.php');
?>




<header id="DesktopHeader">
    <!-- 2 Divs Dentro do container / 30% container logo - 70% container nav -->
    <div id="LogoContainer">
        <div id="ImgContainer">
            <img src="<?php echo $root; ?>/resources/Header/UniFlickLogo.png">
        </div>
    </div>
    <div id="NavContainer">
        <a href="<?php echo $root; ?>/"> Home </a>
        <a href="<?php echo $root; ?>/campeonatos/"> Campeonatos </a>
        <a href="<?php echo $root; ?>/sobre/"> Sobre Nós </a>
        <a href="<?php echo $root; ?>/universidades/"> Universidades </a>
        <a href="<?php echo $root; ?>/trabalhe/"> Trabalhe Conosco </a>
    </div>
</header>
<header id="MobileHeader">
    <div class="ImgContainerMobile">
        <img src="<?php echo $root; ?>/resources/Header/UniFlickLogo.png">
    </div>
    <div id="HamburguerMenuContainer">
        <i class="bi bi-list"></i>
    </div>
</header>