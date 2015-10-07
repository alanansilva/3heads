<?php
require_once '../../models/Pessoa.php';
$data = new Pessoa();

require_once '../../models/TipoPessoa.php';
$tipoPessoa = new TipoPessoa();

$link = 'app.php?app=' . $app;
?>

<script>
    $(document).ready(function () {
        $('#form_pessoa').validate({
            rules: {
                cpf_cnpj: {
                    minlength: 2,
                    required: true
                },
                nome: {
                    minlength: 2,
                    required: true
                },
                email: {
                    minlength: 2,
                    required: true
                },
                endereco: {
                    minlength: 2,
                    required: true
                },
                telefone: {
                    minlength: 2,
                    required: true
                },
            },
            submitHandler: function (form) {
                var msg;

                if ($('input[name=acao]').val() == 1)
                    msg = 'Deseja realmente inserir um novo registro?'
                else if ($('input[name=acao]').val() == 2)
                    msg = 'Deseja realmente alterar o registro?'

                $.getMsgAjaxSubmitForm(msg, form, "<?php echo $pathApp . $app . "/persistence.php" ?>");
                return false;
            },
            messages: {
                tipo_pessoa_id: 'Preencha o campo Tipo',
                cpf_cnpj: 'Preencha o campo Cpf/cnpj',
                nome: 'Preencha o campo Nome',
                email: 'Preencha o campo E-mail',
                endereco: 'Preencha o campo Endereco',
                telefone: 'Preencha o campo Telefone'
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
