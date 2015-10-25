<?php

class Banner {

    private $diretorio = "../../images/";
    public $diretorio_g = "../../images/banners/";

     /**
     * Persiste multiplas imagens
     * @param array $file
     * @param type $menu_id
     * @param type $relacionamento_id
     * @param type $edit
     * @param type $destaque
     */
    private function addImagens(array $file, $menu_id, $relacionamento_id, $edit = false, $destaque) {

        $path = $this->diretorio_g;

        if (!empty($file)) {

            if ($edit)
                Imagem::deleteUploadImagens($menu_id, $relacionamento_id);

            foreach ($file['name'] as $key => $value) {
                $foto = array('name' => $value,
                    'type' => $file['type'][$key],
                    'tmp_name' => $file['tmp_name'][$key],
                    'error' => $file['error'][$key],
                    'size' => $file['size'][$key]
                );
                if (empty($destaque))
                    $destaque = $key;

                if ($edit)
                    Imagem::editUploadImagem($path, $foto, $menu_id, $relacionamento_id, $destaque);
                else
                    Imagem::addUploadImagem($path, $foto, $menu_id, $relacionamento_id, $destaque);
            }
        }
    }

    public function add() {
        extract($_REQUEST);

        try {

            $sql = "INSERT INTO banner (";
            $sql.= " banner_categoria_id,";
            $sql.= " nome,";
            $sql.= " link,";
            $sql.= " ativo,";
            $sql.= " descricao";
            $sql.= ")";
            $sql.= "VALUES (";
            $sql.= "'" . $banner_categoria_id . "',";
            $sql.= "'" . $nome . "',";
            $sql.= "'" . $link . "',";
            $sql.= "'" . $ativo . "',";
            $sql.= "'" . $descricao . "'";
            $sql.= ")";
echo $sql;

            DBSql::getExecute($sql);
            $banner_id = DBSql::getLastId();

            if (!empty($_FILES['tv']['name'])) {
                $this->addImagens($_FILES['tv'], 1, $banner_id);
            }
            return true;
        } catch (Exception $e) {

            DBSql::getMsgErro($sql);
        }

        return false;
    }

    public function edit() {
        extract($_REQUEST);

        try {

            $sql = "UPDATE banner SET";
            $sql.= " banner_categoria_id = '" . $banner_categoria_id . "',";
            $sql.= " nome = '" . $nome . "',";
            $sql.= " link = '" . $link . "',";
            $sql.= " ativo = '" . $ativo . "',";
            $sql.= " descricao = '" . $descricao . "'";
            $sql.="WHERE";
            $sql.="	id = " . $id;

            DBSql::getExecute($sql);
            if (!empty($_FILES['tv']['name'])) {
                $this->addImagens($_FILES['tv'], 1, $id, FALSE);
            }
            return true;
        } catch (Exception $e) {

            DBSql::getMsgErro($sql);
        }

        return false;
    }

    public function delete() {
        extract($_REQUEST);

        try {

            $sql = "DELETE FROM banner ";
            $sql.= "WHERE";
            $sql.= "	id = " . $id;

            DBSql::getExecute($sql);

            return true;
        } catch (Exception $e) {

            DBSql::getMsgErro($sql);
        }

        return false;
    }

    public function getColecaoBanner($id = null, $banner_categoria_id = null, $nome = null, $link = null, $ativo = null, $descricao = null) {

        $sql = "SELECT";
        $sql.= "	 id, ";
        $sql.= "	 banner_categoria_id, ";
        $sql.= "	 nome, ";
        $sql.= "	 link, ";
        $sql.= "	 ativo, ";
        $sql.= "	 descricao ";
        $sql.= "FROM ";
        $sql.= "	banner ";
        $sql.= "WHERE 1=1 ";
        if (!empty($id))
            $sql.= "	 AND id = '" . $id . "'";
        if (!empty($banner_categoria_id))
            $sql.= "	 AND banner_categoria_id = '" . $banner_categoria_id . "'";
        if (!empty($nome))
            $sql.= "	 AND nome = '" . $nome . "'";
        if (!empty($link))
            $sql.= "	 AND link = '" . $link . "'";
        if (!empty($ativo))
            $sql.= "	 AND ativo = '" . $ativo . "'";
        if (!empty($descricao))
            $sql.= "	 AND descricao = '" . $descricao . "'";
        $sql.= "ORDER BY id";

        return DBSql::getCollection($sql);
    }

    public function getBanner($id) {


        $sql = "SELECT";
        $sql.= "	 id, ";
        $sql.= "	 banner_categoria_id, ";
        $sql.= "	 nome, ";
        $sql.= "	 link, ";
        $sql.= "	 ativo, ";
        $sql.= "	 descricao ";
        $sql.= " FROM ";
        $sql.= "	banner";
        $sql.= " WHERE ";
        $sql.= "	id = " . $id;
        return DBSql::getArray($sql);
    }

}

?>