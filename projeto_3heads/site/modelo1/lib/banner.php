<!-- banner-slider -->
<script src="js/jquery.bxslider/jquery.bxslider.min.js"></script>
<link href="js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />
<style>
    /* Início Galeria bxslider index geral */
    .galeria_bxslider_full_ger .bx-wrapper{
        margin: 0 auto 30px !important;
    }
    .galeria_bxslider_full_ger .bx-wrapper img{
        width: 100%;
    }
    .galeria_bxslider_full_ger .bx-viewport{
        box-shadow: none !important;
        border: none !important;
    }
    .galeria_bxslider_full_ger{
        position: relative;
    }
    .galeria_bxslider_full_sup_btns{
        width: 100%;
        position: absolute;
        top: 50%;
    }
    .galeria_bxslider_full_sup_btns #galeria_bxslider_sup_btn_esq{
        position: absolute;
        left: 20px;
    }
    .galeria_bxslider_full_sup_btns #galeria_bxslider_sup_btn_dir{
        position: absolute;
        right: 20px;
    }
    .galeria_bxslider_full_sup_btns i{
        font-size: 40px;
        color: #03BEF0;
    }
    .galeria_bxslider_full_ger .bx-controls{
        position: relative;
        top: -50px;
    }
    .galeria_bxslider_full_ger .bx-wrapper .bx-pager.bx-default-pager a:hover, .galeria_bxslider_full_ger .bx-wrapper .bx-pager.bx-default-pager a.active{
        background: #03BEF0;
    }
    .galeria_bxslider_full_ger .bx-wrapper .bx-viewport{
        left: 0;
    }
    /* Fim Galeria bxslider index geral */
</style>
<script>
    $(document).ready(function () {
        $('.galeria_bxslider_full_sup').bxSlider({
            adaptiveHeight: true,
            nextSelector: '#galeria_bxslider_sup_btn_dir',
            prevSelector: '#galeria_bxslider_sup_btn_esq',
            nextText: '<i class="glyphicon glyphicon-menu-right"></i>',
            prevText: '<i class="glyphicon glyphicon-menu-left"></i>'
        });
    });
</script>
<!--<div id="home" class="banner-slider">-->
<div id="home">
    <div id="top" class="callbacks_container">
        <div class="galeria_bxslider_full_ger">
            <ul class="galeria_bxslider_full_sup">
                <li>
                    <img src="images/banner1.jpg" />
                </li>
                <li>
                    <img src="images/banner1.jpg" />
                </li>
                <li>
                    <img src="images/banner1.jpg" />
                </li>
                <li>
                    <img src="images/banner1.jpg" />
                </li>
                <li>
                    <img src="images/banner1.jpg" />
                </li>
            </ul>
            <div class="galeria_bxslider_full_sup_btns">
                <span id="galeria_bxslider_sup_btn_esq"></span>
                <span id="galeria_bxslider_sup_btn_dir"></span>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<!-- //banner-slider -->