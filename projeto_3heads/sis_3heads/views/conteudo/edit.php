<?php
require_once 'default.php';
$obj = $data->getConteudo($_REQUEST['id']);
if (!empty($obj['conteudo_categoria_id']))
    $objConteudoCategoria = $conteudoCategoria->getConteudoCategoria($obj['conteudo_categoria_id']);
if ($_REQUEST['acao'] == 2 && $_REQUEST['operacao'] == 1) {
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h5 class="h5_tit_bor_bottom">
                    Editar conteudo
                </h5>
            </div>
        </div>
        <form id="form_conteudo" name="form_conteudo" method="post" action="<?php echo $link ?>/edit" role="form">
            <input type="hidden" name="acao" value="2"/>
            <input type="hidden" name="operacao" value="2"/>
            <input type="hidden" name="id" value="<?php echo $_REQUEST['id'] ?>"/>
            <div class="row">
                <div class="col-md-4">
                    <label for="conteudo_categoria_id">Categoria</label>
                    <!--<input type='text' name='conteudo_categoria_id'  id='conteudo_categoria_id' class='form-control'  value='<?php echo $obj['conteudo_categoria_id'] ?>' placeholder="Conteudo_categoria_id">-->
                    <?php
                    $objColConteudoCategoria = $conteudoCategoria->getColecaoConteudoCategoria();
                    $options = array(
                        'name' => 'conteudo_categoria_id',
                        'id' => 'conteudo_categoria_id',
                        'value' => 'id',
                        'label' => array('nome'),
                        'selected' => array('field' => 'id', 'value' => $obj['conteudo_categoria_id']),
                        'class' => array('selectpicker', 'form-control'),
                        'option_default' => array('label' => '* Selecione', 'value' => null, 'use' => true),
                        'other_attribute' => array('data-live-search' => 'true'),
                    );
                    echo UtilCombo::getComboCollectionOrArray($objColConteudoCategoria, $options);
                    ?>
                </div>
                 <?php
                if ($obj['conteudo_categoria_id'] != 4) {
                    $display = "none";
                }
                ?>
                <div class="col-md-4 configuracao_equipe_2" style="display: <?php echo $display ?>">
                    <label for="titulo">* Titulo</label>
                    <input type='text' name='titulo'  id='titulo' class='form-control'  value='<?php echo $obj['titulo'] ?>' placeholder="Titulo">
                </div>
                <div class="col-md-4 configuracao_equipe_2" style="display: <?php echo $display ?>">
                    <label for="subtitulo">* Subtitulo</label>
                    <input type='text' name='subtitulo'  id='subtitulo' class='form-control'  value='<?php echo $obj['subtitulo'] ?>' placeholder="Subtitulo">
                </div>
            </div>
            <div class="row">
                 <div class="col-md-4 configuracao_equipe">
                    <label for="nome">* Nome</label>
                    <input type='text' name='nome'  id='nome' class='form-control'  value='<?php echo $obj['nome'] ?>'  placeholder="Nome">
                </div>
                <div class="col-md-4 configuracao_equipe">
                    <label for="nome">* Cargo</label>
                    <input type='text' name='cargo'  id='cargo' class='form-control'  value='<?php echo $obj['cargo'] ?>' placeholder="Titulo">
                </div>
                <div class="col-md-4 configuracao_equipe">
                    <label for="nome">* Função</label>
                    <input type='text' name='funcao'  id='funcao' class='form-control' value='<?php echo $obj['funcao'] ?>'  placeholder="Titulo">
                </div>
                <div class="col-md-4">
                    <label for="ordem">* Ordem</label>
                    <!--<input type='text' name='ordem'  id='ordem' class='form-control'   placeholder="Ordem">-->
                         <?php
                    $arrayOrdem = array(
                        array('id' => '1', 'nome' => "1"),
                        array('id' => '2', 'nome' => "2"),
                        array('id' => '3', 'nome' => "3"),
                        array('id' => '4', 'nome' => "4"),
                        array('id' => '5', 'nome' => "5")
                    );
                    $options = array(
                        'name' => 'ordem',
                        'id' => 'ordem',
                        'value' => 'id',
                        'label' => array('nome'),
                        'selected' => array('field' => 'id', 'value' => $obj['ordem']),
                        'class' => array('form-control', 'input-sm', 'valid'),
                        'option_default' => array('label' => ':: Selecione ::', 'value' => null),
                    );
                    echo UtilCombo::getComboCollectionOrArray($arrayOrdem, $options);
                    ?>
                </div>
                <div class="col-md-4">
                    <label for="ativo">* Ativo</label>
                    <input type='radio' name='ativo'  id='ativo'  value='S' <?php if ($obj['ativo'] == 'S') {
                    echo 'checked';
                } ?> />Sim 
                    <input type='radio' name='ativo'  id='ativo'  value='N' <?php if ($obj['ativo'] == 'N') {
                    echo 'checked';
                } ?>/>Não
                </div>
                <div class="col-md-4 configuracao_equipe_2" style="display: <?php echo $display ?>">
                    <label for="valor">* Valor</label>
                    <input type='text' name='valor'  id='valor' class='form-control'  value='<?php echo $obj['valor'] ?>' placeholder="Valor">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 configuracao_equipe_2" style="display: <?php echo $display ?>">
                    <label for="descricao_breve">* Descricao_breve</label>
                    <input type='text' name='descricao_breve'  id='descricao_breve' class='form-control'  value='<?php echo $obj['descricao_breve'] ?>' placeholder="Descricao_breve">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 configuracao_equipe_2" style="display: <?php echo $display ?>">
                    <label for="descricao">Descricao</label>
                    <textarea class="ckeditor" id="descricao" name="descricao"><?php echo $obj['descricao'] ?></textarea>
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
