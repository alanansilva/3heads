<?php
require_once 'default.php';
if ($_REQUEST['acao'] == 1 && $_REQUEST['operacao'] == 1) {
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h5 class="h5_tit_bor_bottom">
                    Cadastrar pessoa
                </h5>
            </div>
        </div>
        <form id="form_pessoa" name="form_pessoa" method="post" action="<?php echo $link ?>/add" role="form">
            <input type="hidden" name="acao" value="1"/>
            <input type="hidden" name="operacao" value="2"/>
            <div class="row">
                <div class="col-md-6">
                    <label for="tipo_pessoa_id">* Tipo</label>
                    <?php
                    $options = array(
                        'name' => 'tipo_pessoa_id',
                        'id' => 'tipo_pessoa_id',
                        'value' => 'id',
                        'label' => array('nome'),
                        'class' => array('selectpicker', 'form-control'),
                        'option_default' => array('label' => '* Selecione', 'value' => null, 'use' => true),
                        'other_attribute' => array('data-live-search' => 'true'),
                    );
                    echo UtilCombo::getComboCollectionOrArray($tipoPessoa->getColecaoTipoPessoa(), $options);
                    ?>
                </div>
                <div class="col-md-6 skin-minimal">
                    <label for="fisica_juridica">* Fisica/juridica</label>
                    <input type='radio' name='fisica_juridica'  id='fisica_juridica' class='form-control' value="F"> F
                    <input type='radio' name='fisica_juridica'  id='fisica_juridica' class='form-control' value="J"> J
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="cpf_cnpj">* Cpf/cnpj</label>
                    <input type='text' name='cpf_cnpj' id='cpf_cnpj' class='form-control'   placeholder="Cpf/cnpj">
                </div>
                <div class="col-md-4">
                    <label for="nome">* Nome</label>
                    <input type='text' name='nome'  id='nome' class='form-control'   placeholder="Nome">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="email">* Email</label>
                    <input type='text' name='email'  id='email' class='form-control'   placeholder="Email">
                </div>
                <div class="col-md-4">
                    <label for="endereco">* Endere�o</label>
                    <input type='text' name='endereco'  id='endereco' class='form-control'   placeholder="Endereco">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="telefone">* Telefone</label>
                    <input type='text' name='telefone'  id='telefone' class='form-control'   placeholder="Telefone">
                </div>
            </div>
            <input type="submit" class="btn btn-success" name="salvar" id="salvar" value="Salvar"/>
            <input type="button" class="btn btn-primary" name="voltar" value="Voltar" onclick="window.location.href = '<?php echo $link ?>/index'"/>
        </form>
    </div>
    <?php
    if ($_REQUEST['msgErro'] != "") {
        echo '<div class="message">' . $_REQUEST['msgErro'] . '</div>';
    } elseif ($_REQUEST['msgOK'] != "") {
        echo '<div class="message">' . $_REQUEST['msgOK'] . '</div>';
    }
}
if ($_REQUEST['acao'] == 1 && $_REQUEST['operacao'] == 2) {
    if ($data->add()) {
        $msgOK = 'Registro inserido com sucesso!';
    } else {
        $msgErro = 'N�o foi poss�vel inserir o registro!';
    }
    header('location:' . $link . '/add&acao=1&operacao=1&msgOK=' . $msgOK . '&msgErro=' . $msgErro);
}
?>
