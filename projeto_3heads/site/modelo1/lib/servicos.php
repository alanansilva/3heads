 <!--services--> 
<div class="services" id="servicos">
    <div class="container">
        <div class="sevices-main">
            <div class="ser-top">
                <h3>Servi�os</h3>
                <p>Lorem Ipsum � simplesmente uma simula��o de texto da ind�stria 
                    tipogr�fica e de impressos, e vem sendo utilizado desde o 
                    s�culo XVI, quando um impressor desconhecido pegou uma bandeja</p>
            </div>
            <?php
            $objColConteudo = $conteudo->getColecaoConteudo(null, 2);
            while ($objColConteudo->proximo()) {
          
                $objConteudo = $objColConteudo->getItem();
                
                ?>
                <div class="col-md-4 ser-grid">
                    <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
                    <h4><?php echo $objConteudo['titulo']?></h4>
                    <span class="ser-gridline"> </span>
                    <p><?php echo $objConteudo['descricao_breve']?></p>

                </div>
                <?php
            }
            ?>
                        <!--<div class="col-md-4 ser-grid">-->
<!--                            <span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>
                            <h4>Lorem Ipsum</h4>
                            <span class="ser-gridline"> </span>
                            <p>simplesmente uma simula��o de texto da ind�stria tipogr�fica.</p>
            
                        </div>
                        <div class="col-md-4 ser-grid">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                            <h4>Lorem Ipsum</h4>
                            <span class="ser-gridline"> </span>
                            <p>simplesmente uma simula��o de texto da ind�stria tipogr�fica.</p>
                        </div>
                        <div class="col-md-4 ser-grid">
                            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                            <h4>Lorem Ipsum</h4>
                            <span class="ser-gridline"> </span>
                            <p>simplesmente uma simula��o de texto da ind�stria tipogr�fica.</p>
                        </div>
                        <div class="col-md-4 ser-grid">
                            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
                            <h4>Lorem Ipsum</h4>
                            <span class="ser-gridline"> </span>
                            <p>simplesmente uma simula��o de texto da ind�stria tipogr�fica.</p>
                        </div>
                        <div class="col-md-4 ser-grid">
                            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            <h4>Lorem Ipsum</h4>
                            <span class="ser-gridline"> </span>
                            <p>simplesmente uma simula��o de texto da ind�stria tipogr�fica.</p>
                        </div>-->
            <div class="clearfix"> </div>			
        </div>
    </div>
</div>
<!--services end here-->