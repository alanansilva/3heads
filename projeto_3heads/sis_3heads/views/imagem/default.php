<?php
ini_set('display_errors', 1);

require_once '../../models/Imagem.php';
$data = new Imagem();
require_once '../../models/Menu.php';
$menu = new Menu();

$link = 'app.php?app=' . $app;

?>

	<script>
	$(document).ready(function() {
		    $('#form_imagem').validate({
		        rules: {
		            menu_id: {
		                minlength: 2,
		                required: true
		            },
		            relacionamento_id: {
		                minlength: 2,
		                required: true
		            },
		            nome: {
		                minlength: 2,
		                required: true
		            },
		            destaque: {
		                minlength: 2,
		                required: true
		            },
		            titulo: {
		                minlength: 2,
		                required: true
		            }
		       }, //end rules 
		        messages: {
		            menu_id: 'Preencha o campo Menu_id',
		            relacionamento_id: 'Preencha o campo Relacionamento_id',
		            nome: 'Preencha o campo Nome',
		            destaque: 'Preencha o campo Destaque',
		            titulo: 'Preencha o campo Titulo'
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
