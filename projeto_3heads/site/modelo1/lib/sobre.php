<!-- about -->
<div id="sobre" class="testi">
    <div class="container">
        <div class="about-header">
            <h3>QUEM SOMOS</h3>
        </div>
        <div class="testi-grids">
            <div class="col-md-6 testi-grid">
                <h3><span>Quem somos n�s?</span> N�s somos o maior neg�cio do mundo criativo</h3>
            </div>
            <div class="col-md-6 testi-grid">
                <p>Existem muitas varia��es dispon�veis de passagens de Lorem Ipsum, 
                    mas a maioria sofreu algum tipo de altera��o, seja por inser��o 
                    de passagens com humor, ou palavras aleat�rias que n�o parecem 
                    nem um pouco convincentes. Se voc� pretende usar uma passagem 
                    de Lorem Ipsum, precisa ter certeza de que n�o h� algo embara�oso 
                    escrito escondido no meio do texto. </p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //about -->
<!-- testi -->
<div class="about">
    <div class="container">
        <div class="about-grids">
            <div class="col-md-5 about-left">
                <p>Ao contr�rio do que se acredita, Lorem Ipsum n�o � 
                    simplesmente um texto rand�mico. Com mais de 2000 
                    anos, suas ra�zes podem ser encontradas.
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
                <p>S�NIOR DIRETOR DE ARTE</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //testi -->
<!-- awarded -->
<div class="award">
    <div class="container">
        <div class="award-grids">
            <div class="col-md-6 award-left">
                <img src="images/img1.jpg" alt=""/>
            </div>
            <div class="col-md-6 award-right">
                <h3>� um fato conhecido de todos que um leitor se distrair� com o conte�do de texto leg�vel de uma p�gina.</h3>
                <p>O trecho padr�o original de Lorem Ipsum, usado desde o s�culo
                    XVI, est� reproduzido abaixo para os interessados. 
                    Se��es 1.10.32 e 1.10.33 de "de Finibus Bonorum et 
                    Malorum" de Cicero tamb�m foram reproduzidas abaixo
                    em sua forma exata original
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
        <p></p>
    </div>
</div>
<!-- //awarded -->