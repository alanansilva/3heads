<!-- sobre -->
<div id="sobre" class="mod_cat">
    <div class="container">
        <div class="title_cat">
            <h3>QUEM SOMOS</h3>
        </div>
        <?php
        $objConteudo = $conteudo->getConteudo(null, 3);
        ?>
        <div class="testi-grids">
            <div class="col-md-6 testi-grid">
                <h3><span>Quem somos nós?</span> <?php echo $objConteudo['titulo'] ?></h3>
            </div>
            <div class="col-md-6 testi-grid">
                <p><?php echo utf8_decode($objConteudo['descricao']) ?> </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="clearfix"></div>

<?php
unset($objConteudo);
$objConteudo = $conteudo->getConteudo(null, 4);
?>
<div class="about">
    <div class="container">
        <div class="about-grids">
            <div class="col-md-5 about-left">
                <p>
                    <?php echo utf8_decode($objConteudo['descricao_breve']) ?>
                </p>
                <div class="buttonone"><a class="hvr-bounce-to-bottom morebtn text-right" href="#">Mais</a></div>
            </div>
            <div class="col-md-2 about-middle text-center">
                <!-- responsiveslides -->
                <script src="js/responsiveslides.min.js"></script>
                <script>
                    // You can also use "$(window).load(function() {"
                    $(function () {
                        // Slideshow 4
                        $("#slider4").responsiveSlides({
                            auto: true,
                            pager: false,
                            nav: true,
                            speed: 500,
                            namespace: "callbacks",
                            before: function () {
                                $('.events').append("<li>before event fired.</li>");
                            },
                            after: function () {
                                $('.events').append("<li>after event fired.</li>");
                            }
                        });
                    });
                </script>
                <!-- responsiveslides -->
                <div class="callbacks_container">
                    <ul class="rslides" id="slider4">
                        <li>
                            <div class="about-img">
                                <img src="images/team-1.png" alt=""/>
                            </div>
                        </li>
                        <li>
                            <div class="about-img">
                                <img src="images/team-2.png" alt=""/>
                            </div>
                        </li>
                        <li>
                            <div class="about-img">
                                <img src="images/team-3.png" alt=""/>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-5 about-right">
                <h3>JAMES THOMPSON</h3>
                <h4>Web design</h4>
                <p>SÊNIOR DIRETOR DE ARTE</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<?php
unset($objConteudo);
$objConteudo = $conteudo->getConteudo(null, 3);
?>
<div class="award">
    <div class="container">
        <div class="award-grids">
            <div class="col-md-6 award-left">
                <img src="images/img1.jpg" alt=""/>
            </div>
            <div class="col-md-6 award-right">
                <h3><?php echo $objConteudo['titulo'] ?></h3>
                <p><?php echo $objConteudo['descricao'] ?>
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
        <p></p>
    </div>
</div>
<!-- //sobre -->