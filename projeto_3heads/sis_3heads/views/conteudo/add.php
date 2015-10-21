<?php
require_once 'default.php';
if ($_REQUEST['acao'] == 1 && $_REQUEST['operacao'] == 1) {
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h5 class="h5_tit_bor_bottom">
                    Cadastrar conteudo
                </h5>
            </div>
        </div>
        <form id="form_conteudo" name="form_conteudo" method="post" action="<?php echo $link ?>/add" role="form">
            <input type="hidden" name="acao" value="1"/>
            <input type="hidden" name="operacao" value="2"/>
            <div class="row">
                <div class="col-md-4">
                    <label for="conteudo_categoria_id">Categoria</label>
                    <!--<input type='text' name='conteudo_categoria_id'  id='conteudo_categoria_id' class='form-control'   placeholder="Conteudo_categoria_id">-->
                    <?php
                    $objColConteudoCategoria = $conteudoCategoria->getColecaoConteudoCategoria();
                    $options = array(
                        'name' => 'conteudo_categoria_id',
                        'id' => 'conteudo_categoria_id',
                        'value' => 'id',
                        'label' => array('nome'),
                        'class' => array('selectpicker', 'form-control'),
                        'option_default' => array('label' => '* Selecione', 'value' => null, 'use' => true),
                        'other_attribute' => array('data-live-search' => 'true'),
                    );
                    echo UtilCombo::getComboCollectionOrArray($objColConteudoCategoria, $options);
                    ?>
                </div>
                <div class="col-md-4">
                    <label for="titulo">* Titulo</label>
                    <input type='text' name='titulo'  id='titulo' class='form-control'   placeholder="Titulo">
                </div>
                <div class="col-md-4">
                    <label for="subtitulo">* Subtitulo</label>
                    <input type='text' name='subtitulo'  id='subtitulo' class='form-control'   placeholder="Subtitulo">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="ordem">* Ordem</label>
                    <!--<input type='text' name='ordem'  id='ordem' class='form-control'   placeholder="Ordem">-->
                    <select>
                        <option value="0">1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                        <option value="5">6</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="ativo">* Ativo</label>
                    <input type="radio" id="ativo" class="radio-inline" name="ativo" value='S' checked /> Sim
                    <input type="radio" id="ativo" class="radio-inline" name="ativo" value='N' /> Não
                </div>
                <div class="col-md-4">
                    <label for="valor">* Valor</label>
                    <input type='text' name='valor'  id='valor' class='form-control' placeholder="Valor">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="descricao_breve">* Descricao_breve</label>
                    <input type='text' name='descricao_breve'  id='descricao_breve' class='form-control'   placeholder="Descricao_breve">
                </div>
            </div>
<!--            <div class="row">
                <div class="col-md-12">
                    <label for="descricao">Descricao</label>
                    <textarea class="ckeditor" id="descricao" name="descricao"></textarea>
                </div>
            </div>-->
            
            <?php 
            
//            $objConteudoCategoria = $conteudoCategoria->getConteudoCategoria(3);
            ?>
            <div class="row teste" disabled="" >
                <div class="col-md-12 teste" >
                    <label for="descricao">Descricao</label>
                    <textarea class="ckeditor" id="descricao" name="descricao"></textarea>
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
        $msgErro = 'Não foi possível inserir o registro!';
    }
    header('location:' . $link . '/add&acao=1&operacao=1&msgOK=' . $msgOK . '&msgErro=' . $msgErro);
}
?>
