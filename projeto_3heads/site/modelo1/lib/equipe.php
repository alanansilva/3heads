<!-- equipe -->
<div id="equipe" class="mod_cat" style="background: #EEE;">
    <div class="container">
        <div class="title_cat">
            <h3>NOSSA EQUIPE</h3>
        </div>
        <div class="clearfix"></div>
        <?php
        $objColConteudo = $conteudo->getColecaoConteudo(null, 4);
        while ($objColConteudo->proximo()) {
            $objConteudo = $objColConteudo->getItem();
            ?>
            <div class="col-md-3 text-center" style="margin-bottom: 30px">
                <div class="about-right">
                    <img src="images/team-1.png" alt="Nossa equipe" />
                    <h3><?php echo $objConteudo['nome'] ?></h3>
                    <h4><?php echo $objConteudo['cargo'] ?></h4>
                    <p><?php echo $objConteudo['funcao'] ?></p>
                </div>
            </div>
            <?php
        }
        ?>

        <!--div class="col-md-3 text-center" style="margin-bottom: 30px">
            <div class="about-right">
                <img src="images/team-1.png" alt="Nossa equipe" />
                <h3>JAMES THOMPSON</h3>
                <h4>Web design</h4>
                <p>SÊNIOR DIRETOR DE ARTE</p>
            </div>
        </div>
        <div class="col-md-3 text-center" style="margin-bottom: 30px">
            <div class="about-right">
                <img src="images/team-2.png" alt="Nossa equipe" />
                <h3>JAMES THOMPSON</h3>
                <h4>Web design</h4>
                <p>SÊNIOR DIRETOR DE ARTE</p>
            </div>
        </div>
        <div class="col-md-3 text-center" style="margin-bottom: 30px">
            <div class="about-right">
                <img src="images/team-3.png" alt="Nossa equipe" />
                <h3>JAMES THOMPSON</h3>
                <h4>Web design</h4>
                <p>SÊNIOR DIRETOR DE ARTE</p>
            </div>
        </div>
        <div class="col-md-3 text-center" style="margin-bottom: 30px">
            <div class="about-right">
                <img src="images/team-1.png" alt="Nossa equipe" />
                <h3>JAMES THOMPSON</h3>
                <h4>Web design</h4>
                <p>SÊNIOR DIRETOR DE ARTE</p>
            </div>
        </div>
        <div class="col-md-3 text-center" style="margin-bottom: 30px">
            <div class="about-right">
                <img src="images/team-2.png" alt="Nossa equipe" />
                <h3>JAMES THOMPSON</h3>
                <h4>Web design</h4>
                <p>SÊNIOR DIRETOR DE ARTE</p>
            </div>
        </div>
        <div class="col-md-3 text-center" style="margin-bottom: 30px">
            <div class="about-right">
                <img src="images/team-3.png" alt="Nossa equipe" />
                <h3>JAMES THOMPSON</h3>
                <h4>Web design</h4>
                <p>SÊNIOR DIRETOR DE ARTE</p>
            </div>
        </div>
        <div class="col-md-3 text-center" style="margin-bottom: 30px">
            <div class="about-right">
                <img src="images/team-2.png" alt="Nossa equipe" />
                <h3>JAMES THOMPSON</h3>
                <h4>Web design</h4>
                <p>SÊNIOR DIRETOR DE ARTE</p>
            </div>
        </div>
        <div class="col-md-3 text-center" style="margin-bottom: 30px">
            <div class="about-right">
                <img src="images/team-3.png" alt="Nossa equipe" />
                <h3>JAMES THOMPSON</h3>
                <h4>Web design</h4>
                <p>SÊNIOR DIRETOR DE ARTE</p>
            </div>
        </div-->
    </div>
</div>
<div class="clearfix"></div>
<!-- //equipe -->