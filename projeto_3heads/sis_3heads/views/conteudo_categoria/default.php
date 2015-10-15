<?php
ini_set('display_errors', 1);

require_once '../../models/ConteudoCategoria.php';
$data = new ConteudoCategoria();

$link = 'app.php?app=' . $app;

?>

	<script>
	$(document).ready(function() {
		    $('#form_conteudo_categoria').validate({
		        rules: {
		            nome: {
		                minlength: 2,
		                required: true
		            }
		       }, //end rules 
		        messages: {
		            nome: 'Preencha o campo Nome'
		        },
		        highlight: function(element) {
		            $(element).closest('.control-group').removeClass('success').addClass('error');
		        },
		        success: function(element) {
		            element.text('OK!').addClass('valid').closest('.control-group').removeClass('error').addClass('success');
		        }
		    });
	}); // end document.ready
	</script>
