<!-- sobre -->
<script>
    $(document).ready(function () {
        $('.img_empresa').colorbox();
    });
</script>
<div id="sobre" class="mod_cat">
    <div class="container">
        <div class="title_cat">
            <h3>QUEM SOMOS</h3>
        </div>
        <div class="clearfix"></div>
        <?php
        $objConteudo = $conteudo->getConteudo(null, 3);
        ?>
        <div class="award-grids">
            <div class="col-md-6 award-left">
                <a href="images/img1.jpg" class="img_empresa">
                    <img src="images/img1.jpg" alt="Imagem da empresa" />
                </a>
            </div>
            <div class="col-md-6 award-right">
                <h3><?php echo $objConteudo['titulo'] ?></h3>
                <p><?php echo $objConteudo['descricao'] ?></p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<!-- //sobre -->