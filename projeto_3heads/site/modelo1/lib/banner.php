<!-- banner-slider -->
<div id="home" class="banner-slider">
    <!-- responsiveslides -->
    <script src="js/responsiveslides.min.js"></script>
    <script>
                // You can also use "$(window).load(function() {"
                $(function () {
                    // Slideshow 4
                    $("#slider3").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: false,
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
    <div id="top" class="callbacks_container">
        <ul class="rslides" id="slider3">

            <li>
                <div class="banner">
                    <div class="container">
                        <div class="banner-info">
                            <h3>FIND EVERYTHING YOU WANTED
                                TO KNOW ABOUT BUSINESS</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error 
                                sit voluptatem accusantium doloremque laudantium, 
                                totam rem aperiam, eaque ipsa quae ab illo inventore
                                veritatis et quasi architecto beatae vitae dicta 
                                sunt explicabo. </p>
                            <a class="scroll" href="#about"><img src="images/arrow.png" alt=""/></a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="banner">

                    <div class="container">
                        <div class="banner-info">
                            <h3>SMART BUSINESS SOLUTIONS
                                THAT YOU NEED</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error 
                                sit voluptatem accusantium doloremque laudantium, 
                                totam rem aperiam, eaque ipsa quae ab illo inventore
                                veritatis et quasi architecto beatae vitae dicta 
                                sunt explicabo. </p>
                            <a class="scroll" href="#about"><img src="images/arrow.png" alt=""/></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="clearfix"></div>
<!-- //banner-slider -->