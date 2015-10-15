<?php
ini_set('display_errors', 1);

require_once '../../models/Banner.php';
$data = new Banner();
require_once '../../models/BannerCategoria.php';
$bannerCategoria = new BannerCategoria();

$link = 'app.php?app=' . $app;

?>

	<script>
	$(document).ready(function() {
		    $('#form_banner').validate({
		        rules: {
		            banner_categoria_id: {
		                minlength: 2,
		                required: true
		            },
		            nome: {
		                minlength: 2,
		                required: true
		            },
		            link: {
		                minlength: 2,
		                required: true
		            },
		            ativo: {
		                minlength: 2,
		                required: true
		            },
		            descricao: {
		                minlength: 2,
		                required: true
		            }
		       }, //end rules 
		        messages: {
		            banner_categoria_id: 'Preencha o campo Banner_categoria_id',
		            nome: 'Preencha o campo Nome',
		            link: 'Preencha o campo Link',
		            ativo: 'Preencha o campo Ativo',
		            descricao: 'Preencha o campo Descricao'
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
