<!-- contato -->
<?php
$objPessoa = $pessoa->getPessoa();
UtilString::pr($_SESSION);
?>
<div id="contato" class="mod_cat">
    <div class="container">
        <div class="get-info text-center">
            <h3>CONTATO</h3>
            <h4><i>Não hesite em contactar-nos</i></h4>
            <p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse</p>
        </div>
    </div>
    <div class="map">
        <iframe src="<?php echo $objPessoa['mapa_localizacao']?> " width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>

<div class="contact-us">
    <div class="container">
        <div class="contact-grids">
            <div class="col-md-4 contact-grid text-center">
                <div class="point-icon"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></div>
                <p><?php echo $objPessoa['endereco'] ?></p>
            </div>
            <div class="col-md-4 contact-grid text-center">
                <div class="point-icon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
                <p><a href="mailto:info@example.com"><?php echo $objPessoa['email'] ?></a></p>
            </div>
            <div class="col-md-4 contact-grid text-center">
                <div class="point-icon"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></div>
                <p><?php echo $objPessoa['telefone'] ?></p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="contact-info">
            <form id="enviar_email" name="enviar_email" action="lib/enviar_email.php" method="post">
                <input type="text" placeholder="Seu nome" required>
                <input type="text" placeholder="Seu e-mail" required>
                <input type="text" placeholder="Assunto" required>
                <textarea placeholder="Sua mensagem" required></textarea>
                <input type="submit" value="Enviar mensagem">
            </form>
        </div>
    </div>
</div>
<!-- //contato -->
