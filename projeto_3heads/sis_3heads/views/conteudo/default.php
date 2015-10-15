<?php
ini_set('display_errors', 1);

require_once '../../models/Conteudo.php';
$data = new Conteudo();
require_once '../../models/ConteudoCategoria.php';
$conteudoCategoria = new ConteudoCategoria();

$link = 'app.php?app=' . $app;

?>

	<script>
	$(document).ready(function() {
		    $('#form_conteudo').validate({
		        rules: {
		            conteudo_categoria_id: {
		                minlength: 2,
		                required: true
		            },
		            titulo: {
		                minlength: 2,
		                required: true
		            },
		            subtitulo: {
		                minlength: 2,
		                required: true
		            },
		            descricao: {
		                minlength: 2,
		                required: true
		            },
		            descricao_breve: {
		                minlength: 2,
		                required: true
		            },
		            ordem: {
		                minlength: 2,
		                required: true
		            },
		            ativo: {
		                minlength: 2,
		                required: true
		            },
		            valor: {
		                minlength: 2,
		                required: true
		            }
		       }, //end rules 
		        messages: {
		            conteudo_categoria_id: 'Preencha o campo Conteudo_categoria_id',
		            titulo: 'Preencha o campo Titulo',
		            subtitulo: 'Preencha o campo Subtitulo',
		            descricao: 'Preencha o campo Descricao',
		            descricao_breve: 'Preencha o campo Descricao_breve',
		            ordem: 'Preencha o campo Ordem',
		            ativo: 'Preencha o campo Ativo',
		            valor: 'Preencha o campo Valor'
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
