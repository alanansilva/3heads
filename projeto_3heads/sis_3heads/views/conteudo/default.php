<?php
//ini_set('display_errors', 1);

require_once '../../models/Conteudo.php';
$data = new Conteudo();
require_once '../../models/ConteudoCategoria.php';
$conteudoCategoria = new ConteudoCategoria();

$link = 'app.php?app=' . $app;
?>

<script>
    $(document).ready(function () {
        
        
        $("#conteudo_categoria_id").change(function(){
            console.log($(this).val());
            if ($(this).val() == 4){
                $(".configuracao_equipe").show();
                $(".configuracao_equipe_2").hide();
            }else{
                $(".configuracao_equipe").hide();
                $(".configuracao_equipe_2").show();
            }
        });
        
        
        
        $('#form_conteudo').validate({
         
              submitHandler: function(form) {
                var msg;

                if ($('input[name=acao]').val() == 1)
                    msg = 'Deseja realmente inserir um novo registro?'
                else if ($('input[name=acao]').val() == 2)
                    msg = 'Deseja realmente alterar o registro?'

                $.getMsgAjaxSubmitFormUpload(msg, form, "<?php echo $pathApp . $app . "/persistence.php" ?>");
                return false;
            },
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
            highlight: function (element) {
                $(element).closest('.control-group').removeClass('success').addClass('error');
            },
            success: function (element) {
                element.text('OK!').addClass('valid').closest('.control-group').removeClass('error').addClass('success');
            }
        });
    }); // end document.ready
</script>
