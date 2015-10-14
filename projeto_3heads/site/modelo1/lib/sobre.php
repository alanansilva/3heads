<!-- about -->
<div id="sobre" class="testi">
    <div class="container">
        <div class="about-header">
            <h3>QUEM SOMOS</h3>
        </div>
        <div class="testi-grids">
            <div class="col-md-6 testi-grid">
                <h3><span>Quem somos nós?</span> Nós somos o maior negócio do mundo criativo</h3>
            </div>
            <div class="col-md-6 testi-grid">
                <p>Existem muitas variações disponíveis de passagens de Lorem Ipsum, 
                    mas a maioria sofreu algum tipo de alteração, seja por inserção 
                    de passagens com humor, ou palavras aleatórias que não parecem 
                    nem um pouco convincentes. Se você pretende usar uma passagem 
                    de Lorem Ipsum, precisa ter certeza de que não há algo embaraçoso 
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
                <p>Ao contrário do que se acredita, Lorem Ipsum não é 
                    simplesmente um texto randômico. Com mais de 2000 
                    anos, suas raízes podem ser encontradas.
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
<!-- //testi -->
<!-- awarded -->
<div class="award">
    <div class="container">
        <div class="award-grids">
            <div class="col-md-6 award-left">
                <img src="images/img1.jpg" alt=""/>
            </div>
            <div class="col-md-6 award-right">
                <h3>É um fato conhecido de todos que um leitor se distrairá com o conteúdo de texto legível de uma página.</h3>
                <p>O trecho padrão original de Lorem Ipsum, usado desde o século
                    XVI, está reproduzido abaixo para os interessados. 
                    Seções 1.10.32 e 1.10.33 de "de Finibus Bonorum et 
                    Malorum" de Cicero também foram reproduzidas abaixo
                    em sua forma exata original
                </p>
            </div>
            <div class="clearfix"></div>
        </div>
        <p></p>
    </div>
</div>
<!-- //awarded -->