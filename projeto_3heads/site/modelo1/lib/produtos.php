<!-- banner-slider -->
<div id="produtos" class="produtos">
    <div class="about-header">
        <h3>Produtos</h3>
    </div>
</div>
<div class="clearfix"></div>
<!-- //banner-slider -->

<style>
    /*---portfolio-section-------*/
    .port-section {
        padding: 3.5em 0 4em 0;
        position:relative;
    }
    .port-section  h2{
        position: absolute;
        left: 13.3%;
        top: -3%;
        background: #fff;
        padding: 0.3em 0.3em;
        font-size: 1.34em;
        font-weight: 700;
    }
    .port-grid {
        background: #eee;
        width: 24.2%;
        float: left;
        margin-right: 1.0%;
        padding: 1em 1em;
        position: relative;
    }
    .port-grid.lost{
        margin-right:0%;
    }
    .port-grid:hover   {
        background:#03BEF0;
    }
    .box_type {
        background: #03BEF0;
        padding: 5px 21px;
        /*position: absolute;*/
        bottom: 146px;
        color: #fff;
        left: 14px;
        font-size: 0.85em;
    }
    .box-hover {
        position: absolute;
        bottom: 141px;
        right: 13px;
    }
    ul.port-icons li {
        list-style: none;
        display: inline-block;
    }
    ul.port-icons  li  i.per{
        width: 27px;
        height: 27px;
        display: inline-block;
        background: url("../images/s-icons.png")-243px -83px no-repeat #03BEF0;
    }
    ul.port-icons  li  i.loca{
        width: 27px;
        height: 27px;display:inline-block;
        background:url("../images/s-icons.png")-277px -83px no-repeat #03BEF0;
    }
    .text  a  h3{
        font-size: 1.2em;
        font-weight: 600;
        text-transform: uppercase;
        margin-top: 1em;
        padding: 0em 0 0.8em 0;
        border-bottom: 2px ridge rgba(239, 240, 240, 0.08);
    }
    .text p{
        font-size:0.95em;
        color:#999;
        line-height:1.8em;
        margin:0.5em 0;
    }
    .port-grid :hover  .text ,.port-grid.lost:hover .text,.port-grid.lost:hover .text h3,.port-grid:hover .text h3{
        color:#fff;
    }
    .port-grid:hover .text p {
        color: #fff;
    }
    .port-grid:hover .text h3 {
        border-bottom: 1px solid #fff;
    }
    /*----mid-section----*/
    .bottom-section {
        padding: 4em 0;
        border-top: double #ddd;
        border-bottom: double #ddd;
    }
    .bottom-top {
        background: #eee;
        padding: 3em 1em;
        border: 1px solid #ddd;
        border-left:5px solid #03BEF0;
    }
    .bottom-text  h3 {
        text-transform: uppercase;
        font-size: 1.15em;
        font-weight: 600;
        margin-bottom: 0.7em;
    }
    .bottom-text p {
        color: #999;
        font-size: 0.95em;
    }
    .bottom-text{
        float:left;
    }
    .stories {
        position: relative;
        display: inline;
    }
    .stories span {
        position: absolute;
        width: 185px;
        background: #03BEF0;
        display: block;
        line-height: 1em;
        text-transform: uppercase;
        height: 130px;
        top: -42px;
        padding: 2.5em 1em 1em 6em;
    }
    .stories span:before {
        content: '';
        position: absolute;
        top: 14%;
        left: -11%;
        width: 0;
        height: 0;
        border-right: 132px solid #eee;
        border-top: 94px solid transparent;
        transform: rotate(-269deg);
        -webkit-transform: rotate(-269deg);
        -o-transform: rotate(-269deg);
        -moz-transform: rotate(-269deg);

    }
</style>

<!--/port-section-->
<div id="features" class="port-section">
    <div class="container">
        <div class="port-grids">
            <div class="col-md-3 port-grid wow zoomInLeft animated">
                <a href="portfolio.html"><img src="images/p1.jpg" class="img-responsive" alt="" /></a>
                <div class="box_type">WEB DESIGN</div>
                <!--                <div class="box-hover">
                                    <ul class="port-icons">
                                        <li><i class="per"></i></li>
                                        <li><i class="loca"></i></li>
                                    </ul>
                                </div>-->
                <div class="text">
                    <a href="portfolio.html"><h3>I am an amazing project</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nulla amet. turpis. </p>
                </div>
            </div>
            <div class="col-md-3 port-grid wow zoomInLeft animated" >
                <a href="portfolio.html"><img src="images/p2.jpg" class="img-responsive" alt="" /></a>
                <div class="box_type">R$100,00</div>
                <!--                <div class="box-hover">
                                    <ul class="port-icons">
                                        <li><i class="per"></i></li>
                                        <li><i class="loca"></i></li>
                                    </ul>
                                </div>-->
                <div class="text">
                    <a href="portfolio.html"><h3>I am an amazing project</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nulla amet. turpis. </p>
                </div>
            </div>
            <div class="col-md-3 port-grid wow zoomInRight animated">
                <a href="portfolio.html"><img src="images/p3.jpg" class="img-responsive" alt="" /></a>
                <div class="box_type">R$100,00</div>
                <!--                <div class="box-hover">
                                    <ul class="port-icons">
                                        <li><i class="per"></i></li>
                                        <li><i class="loca"></i></li>
                                    </ul>
                                </div>-->
                <div class="text">
                    <a href="portfolio.html"><h3>I am an amazing project</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nulla amet. turpis. </p>
                </div>
            </div>
            <div class="col-md-3 port-grid lost wow zoomInRight animated">
                <a href="portfolio.html"><img src="images/p4.jpg" class="img-responsive" alt="" /></a>
                <div class="box_type">R$100,00</div>
                <!--                <div class="box-hover">
                                    <ul class="port-icons">
                                        <li><i class="per"></i></li>
                                        <li><i class="loca"></i></li>
                                    </ul>
                                </div>-->
                <div class="text">
                    <a href="portfolio.html"><h3>I am an amazing project</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis nulla amet. turpis. </p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>