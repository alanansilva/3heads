<?php
require_once 'default.php';
$obj = $data->getBanner($_REQUEST['id']);
		 if (!empty($obj['banner_categoria_id']))
			 $objBannerCategoria = $bannerCategoria->getBannerCategoria($obj['banner_categoria_id']);
if ($_REQUEST['acao'] == 2 && $_REQUEST['operacao'] == 1) {
?>
	<div class="container-fluid">
	      <div class="row">
            <div class="col-md-12">
                <h5 class="h5_tit_bor_bottom">
                    Editar banner
                </h5>
            </div>
        </div>
				<form id="form_banner" name="form_banner" method="post" action="<?php echo $link?>/edit" role="form">
						<input type="hidden" name="acao" value="2"/>
						<input type="hidden" name="operacao" value="2"/>
						<input type="hidden" name="id" value="<?php echo$_REQUEST['id']?>"/>
				<div class="row">
			     <div class="col-md-4">
			  <label for="banner_categoria_id">* Banner_categoria_id</label>
									<input type='text' name='banner_categoria_id'  id='banner_categoria_id' class='form-control'  value='<?php echo $obj['banner_categoria_id']?>' placeholder="Banner_categoria_id">
			      </div>
				</div>
				<div class="row">
			     <div class="col-md-4">
			  <label for="nome">* Nome</label>
									<input type='text' name='nome'  id='nome' class='form-control'  value='<?php echo $obj['nome']?>' placeholder="Nome">
			      </div>
				</div>
				<div class="row">
			     <div class="col-md-4">
			  <label for="link">* Link</label>
									<input type='text' name='link'  id='link' class='form-control'  value='<?php echo $obj['link']?>' placeholder="Link">
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
			  <label for="descricao">* Descricao</label>
									<input type='text' name='descricao'  id='descricao' class='form-control'  value='<?php echo $obj['descricao']?>' placeholder="Descricao">
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
