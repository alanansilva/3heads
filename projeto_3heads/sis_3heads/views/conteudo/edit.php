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
				<form id="form_conteudo" name="form_conteudo" method="post" action="<?php echo $link?>/edit" role="form">
						<input type="hidden" name="acao" value="2"/>
						<input type="hidden" name="operacao" value="2"/>
						<input type="hidden" name="id" value="<?php echo$_REQUEST['id']?>"/>
				<div class="row">
			     <div class="col-md-4">
			  <label for="conteudo_categoria_id">* Conteudo_categoria_id</label>
									<input type='text' name='conteudo_categoria_id'  id='conteudo_categoria_id' class='form-control'  value='<?php echo $obj['conteudo_categoria_id']?>' placeholder="Conteudo_categoria_id">
			      </div>
				</div>
				<div class="row">
			     <div class="col-md-4">
			  <label for="titulo">* Titulo</label>
									<input type='text' name='titulo'  id='titulo' class='form-control'  value='<?php echo $obj['titulo']?>' placeholder="Titulo">
			      </div>
				</div>
				<div class="row">
			     <div class="col-md-4">
			  <label for="subtitulo">* Subtitulo</label>
									<input type='text' name='subtitulo'  id='subtitulo' class='form-control'  value='<?php echo $obj['subtitulo']?>' placeholder="Subtitulo">
			      </div>
				</div>
				<div class="row">
			     <div class="col-md-4">
			  <label for="descricao">* Descricao</label>
									<input type='text' name='descricao'  id='descricao' class='form-control'  value='<?php echo $obj['descricao']?>' placeholder="Descricao">
			      </div>
				</div>
				<div class="row">
			     <div class="col-md-4">
			  <label for="descricao_breve">* Descricao_breve</label>
									<input type='text' name='descricao_breve'  id='descricao_breve' class='form-control'  value='<?php echo $obj['descricao_breve']?>' placeholder="Descricao_breve">
			      </div>
				</div>
				<div class="row">
			     <div class="col-md-4">
			  <label for="ordem">* Ordem</label>
									<input type='text' name='ordem'  id='ordem' class='form-control'  value='<?php echo $obj['ordem']?>' placeholder="Ordem">
			      </div>
				</div>
				<div class="row">
			     <div class="col-md-4">
			  <label for="ativo">* Ativo</label>
									<input type='text' name='ativo'  id='ativo' class='form-control'  value='<?php echo $obj['ativo']?>' placeholder="Ativo">
			      </div>
				</div>
				<div class="row">
			     <div class="col-md-4">
			  <label for="valor">* Valor</label>
									<input type='text' name='valor'  id='valor' class='form-control'  value='<?php echo $obj['valor']?>' placeholder="Valor">
			      </div>
				</div>
						<input type="submit" class="btn btn-success" name="salvar" id="salvar" value="Salvar"/>
						<input type="button" class="btn btn-primary" name="voltar" value="Voltar" onclick="window.location.href='<?php echo $link?>/index'"/>
					</form>
		</div>
<?php
    if ( $_REQUEST['msgErro'] != "" ){
        echo '<div class="message">' . $_REQUEST['msgErro'] .'</div>';
    }elseif( $_REQUEST['msgOK'] != "" ){
        echo '<div class="message">' . $_REQUEST['msgOK'] .'</div>';
    }
}
if ($_REQUEST['acao'] == 2 && $_REQUEST['operacao'] == 2) {
	if ($data->edit()) {
		$msgOK = 'Registro atualizado com sucesso!';
	}else {
		$msgErro = 'Não foi possível alterar o registro!';
	}
	header('location:' . $link . '/edit&acao=2&operacao=1&id=' . $_REQUEST["id"] . '&msgOK=' . $msgOK . '&msgErro=' . $msgErro );
}
?>
