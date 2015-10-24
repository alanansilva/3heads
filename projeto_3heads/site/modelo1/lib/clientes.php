<!-- clientes -->
<div id="clientes" class="mod_cat">
    <div class="container">
        <div class="title_cat">
            <h3>CLIENTES</h3>
        </div>
        <div class="nbs-flexisel-container">
            <div class="nbs-flexisel-inner">
                <ul id="flexiselDemo1" class="nbs-flexisel-ul" style="left: -228px; display: block;">			
                    <li class="nbs-flexisel-item" style="width: 300px;">
                        <div class="sliderfig-grid">
                            <img src="images/clientes/5.png" alt=" " class="img-responsive">
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 300px;">
                        <div class="sliderfig-grid">
                            <img src="images/clientes/2.png" alt=" " class="img-responsive">
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 300px;">
                        <div class="sliderfig-grid">
                            <img src="images/clientes/3.png" alt=" " class="img-responsive">
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 300px;">
                        <div class="sliderfig-grid">
                            <img src="images/clientes/4.png" alt=" " class="img-responsive">
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 300px;">
                        <div class="sliderfig-grid">
                            <img src="images/clientes/6.png" alt=" " class="img-responsive">
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 300px;">
                        <div class="sliderfig-grid">
                            <img src="images/clientes/7.png" alt=" " class="img-responsive">
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 300px;">
                        <div class="sliderfig-grid">
                            <img src="images/clientes/5.png" alt=" " class="img-responsive">
                        </div>
                    </li>
                    <li class="nbs-flexisel-item" style="width: 300px;">
                        <div class="sliderfig-grid">
                            <img src="images/clientes/1.png" alt=" " class="img-responsive">
                        </div>
                    </li>
                </ul>
<!--                <div class="nbs-flexisel-nav-left" style="top: 27.5px;"></div>
                <div class="nbs-flexisel-nav-right" style="top: 27.5px;"></div>-->
            </div>
        </div>
        <script type="text/javascript">
            $(window).load(function () {
                $("#flexiselDemo1").flexisel({
                    visibleItems: 5,
                    animationSpeed: 700,
                    autoPlay: true,
                    autoPlaySpeed: 2000,
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: {
                        portrait: {
                            changePoint: 480,
                            visibleItems: 2
                        },
                        landscape: {
                            changePoint: 640,
                            visibleItems: 3
                        },
                        tablet: {
                            changePoint: 768,
                            visibleItems: 3
                        }
                    }
                });

            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>
<div class="clearfix"></div>
<!-- //clientes -->