<style>
    .menu_teste {
        display: inline-block;
        vertical-align: middle;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        box-shadow: 0 0 1px rgba(0, 0, 0, 0);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -moz-osx-font-smoothing: grayscale;
        position: relative;
        -webkit-transition-property: color;
        transition-property: color;
        -webkit-transition-duration: 0.5s;
        transition-duration: 0.5s;
    }
    .menu_teste:before {
        content: "";
        position: absolute;
        z-index: -1;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: #40c8f4;
        -webkit-transform: scaleY(0);
        transform: scaleY(0);
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0;
        -webkit-transition-property: transform;
        transition-property: transform;
        -webkit-transition-duration: 0.5s;
        transition-duration: 0.5s;
        -webkit-transition-timing-function: ease-out;
        transition-timing-function: ease-out;
    }
    .menu_teste:hover, .menu_teste:focus, .menu_teste:active {
        color: white;
    }
    .menu_teste:hover:before, .menu_teste:focus:before, .menu_teste:active:before {
        -webkit-transform: scaleY(1);
        transform: scaleY(1);
        -webkit-transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
        transition-timing-function: cubic-bezier(0.52, 1.64, 0.37, 0.66);
    }
</style>
<div class="header" style="width: 100%; position: fixed; z-index: 3;">
    <div class="header-left">
        <a class="link link--kumya" href="#"><span data-letters="3 HEADS">3 HEADS</span></a>
    </div>
    <div class="navigation">
        <span class="menu"><img src="images/menu.png" alt=""/></span>
        <nav class="cl-effect-11" id="cl-effect-11">	
            <ul class="nav1">	
                <!--<li><a class="scroll" href="#home" data-hover="INÍCIO">INÍCIO</a></li>-->
                <li class="menu_teste"><a class="scroll" href="#sobre" data-hover="EMPRESA">EMPRESA</a></li>
                <li class="menu_teste"><a class="scroll" href="#equipe" data-hover="EQUIPE">EQUIPE</a></li>
                <li class="menu_teste"><a class="scroll" href="#servicos" data-hover="SERVIÇOS">SERVIÇOS</a></li>
                <li class="menu_teste"><a class="scroll" href="#produtos" data-hover="PRODUTOS">PRODUTOS</a></li>
                <li class="menu_teste"><a class="scroll" href="#parceiros" data-hover="PARCEIROS">PARCEIROS</a></li>
                <li class="menu_teste"><a class="scroll" href="#clientes" data-hover="CLIENTES">CLIENTES</a></li>
                <li class="menu_teste"><a class="scroll" href="#portfolio" data-hover="PORTFOLIO">PORTFOLIO</a></li>
                <li class="menu_teste"><a class="scroll" href="#contato" data-hover="CONTATO">CONTATO</a></li>
            </ul>
        </nav>
        <!-- script for menu -->
        <script>
            $("span.menu").click(function () {
                $("ul.nav1").slideToggle(300, function () {
                    // Animation complete.
                });
            });
        </script>
        <!-- //script for menu -->

    </div>
    <div class="clearfix"></div>
</div>