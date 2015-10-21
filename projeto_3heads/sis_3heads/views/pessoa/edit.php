<?php
require_once 'default.php';
$obj = $data->getPessoa($_REQUEST['id']);

if ($_REQUEST['acao'] == 2 && $_REQUEST['operacao'] == 1) {
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h5 class="h5_tit_bor_bottom">
                    Editar pessoa
                </h5>
            </div>
        </div>
        <form id="form_pessoa" name="form_pessoa" method="post" action="<?php echo $link ?>/edit" role="form">
            <input type="hidden" name="acao" value="2"/>
            <input type="hidden" name="operacao" value="2"/>
            <input type="hidden" name="id" value="<?php echo$_REQUEST['id'] ?>"/>
            <div class="row">
                <div class="col-md-6">
                    <label for="tipo_pessoa_id">* Tipo</label>
                    <?php
                    $options = array(
                        'name' => 'tipo_pessoa_id',
                        'id' => 'tipo_pessoa_id',
                        'value' => 'id',
                        'label' => array('nome'),
                        'selected' => array('field' => 'id', 'value' => $obj['tipo_pessoa_id']),
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
                    <input type='text' name='cpf_cnpj' id='cpf_cnpj' class='form-control'   placeholder="Cpf/cnpj" value="<?php echo $obj['cpf_cnpj']?>">
                </div>
                <div class="col-md-4">
                    <label for="nome">* Nome</label>
                    <input type='text' name='nome'  id='nome' class='form-control'   placeholder="Nome" value="<?php echo $obj['nome']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="email">* Email</label>
                    <input type='text' name='email'  id='email' class='form-control'   placeholder="Email" value="<?php echo $obj['email']?>">
                </div>
                <div class="col-md-4">
                    <label for="endereco">* Endereço</label>
                    <input type='text' name='endereco'  id='endereco' class='form-control'   placeholder="Endereco" value="<?php echo $obj['endereco']?>">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="telefone">* Telefone</label>
                    <input type='text' name='telefone'  id='telefone' class='form-control'   placeholder="Telefone" value="<?php echo $obj['telefone']?>">
                </div>
                    <div class="col-md-4">
                    <div class="form-group" data-toggle="tooltip" data-placement="top" title="Tamanho: 620px X 385px">
                        <label for="icone">Fotos</label>
                        <input type="file" name='foto[]' multiple id='foto' />
                    </div>
                </div>
                <div class="col-md-4">
                    <!-- UPLOAD PROGRESS-->
                    <div class="progress">
                        <div class="bar"></div >
                        <div class="percent">0%</div>
                    </div>
                    <div id="status"></div>
                    <!-- UPLOAD PROGRESS-->
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
if ($_REQUEST['acao'] == 2 && $_REQUEST['operacao'] == 2) {
    if ($data->edit()) {
        $msgOK = 'Registro atualizado com sucesso!';
    } else {
        $msgErro = 'Não foi possível alterar o registro!';
    }
    header('location:' . $link . '/edit&acao=2&operacao=1&id=' . $_REQUEST["id"] . '&msgOK=' . $msgOK . '&msgErro=' . $msgErro);
}
?>
