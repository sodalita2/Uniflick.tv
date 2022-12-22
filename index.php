<DOCTYPE html>
<html>
<?php 
    include_once('loader.php');
?>


<body>
    <!-- Main Container -->
    <div id="MainContainer">
        <!-- Top Banner -->
        <div id="TopBanner">
            <!-- Caixa de Conteudo flex-row dentro do Banner -->
            <!-- caixa dividida em 2 partes com flex-center em cada uma -->
            <div id="BannerConteudo">
                <!-- Left Conteudo -->
                <div id="LeftConteudo">
                    <div id="LeftConteudoInner">
                        <div id="TopBannerTitle">
                            UniFlick
                        </div>
                        <div id="TopBannerDescricao">
                            A casa do Rocket League Universitário na América do Sul
                        </div>
                    </div>
                </div>
                <!-- Right Conteudo -->
                <div id="RightConteudo">
                    <div id="TwitchEmbed"></div>
                </div>
            </div>
        </div>

        <!-- Proximos Eventos -->
        <div id="ProximosEventosContainer">

        </div>



    <!-- FIM MAIN CONTAINER -->    
    </div>
</body>

<script src="https://embed.twitch.tv/embed/v1.js"></script>
<script src="./js/Index/TwitchEmbed.js"></script>
</html>
</DOCTYPE>
