<!-- get-in -->
<?php
$objPessoa = $pessoa->getPessoa();
UtilString::pr($objPessoa)
?>
<div id="contato" class="get-in-touch">
    <div class="container">
        <div class="get-info text-center">
            <h3>CONTATO</h3>
            <h4><i>Não hesite em contactar-nos</i></h4>
            <p>Lorem ipsum dolor amet, libero turpis non cras ligula, id commodo, aenean est in volutpat amet sodales, porttitor bibendum facilisi suspendisse</p>
        </div>
    </div>
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819"></iframe>
    </div>
</div>
<!-- //get-in -->
<!-- contact-us -->
<div class="contact-us">
    <div class="container">
        <div class="contact-grids">
            <div class="col-md-4 contact-grid text-center">
                <div class="point-icon"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></div>
                <p><?php echo $objPessoa['endereco']?></p>
            </div>
            <div class="col-md-4 contact-grid text-center">
                <div class="point-icon"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></div>
                <p><a href="mailto:info@example.com"><?php echo $objPessoa['email']?></a></p>
            </div>
            <div class="col-md-4 contact-grid text-center">
                <div class="point-icon"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></div>
                <p><?php echo $objPessoa['telefone']?></p>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="contact-info">
            <form id="enviar_email" name="enviar_email">
                <input type="text" placeholder="Seu nome" required>
                <input type="text" placeholder="Seu e-mail" required>
                <input type="text" placeholder="Assunto" required>
                <textarea placeholder="Sua mensagem" required></textarea>
                <input type="submit" value="Enviar mensagem">
            </form>
        </div>
    </div>
</div>
<!-- //contact-us -->