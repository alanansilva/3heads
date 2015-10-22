<?php

class Conteudo {

    public function add() {
        extract($_REQUEST);

        try {

            $sql = "INSERT INTO conteudo (";
            $sql.= " conteudo_categoria_id,";
            $sql.= " titulo,";
            $sql.= " subtitulo,";
            $sql.= " descricao,";
            $sql.= " descricao_breve,";
            $sql.= " ordem,";
            $sql.= " ativo,";
            $sql.= " valor,";
            $sql.= " nome,";
            $sql.= " cargo,";
            $sql.= " funcao";
            $sql.= ")";
            $sql.= "VALUES (";
            $sql.= "'" . $conteudo_categoria_id . "',";
            $sql.= "'" . $titulo . "',";
            $sql.= "'" . $subtitulo . "',";
            $sql.= "'" . $descricao . "',";
            $sql.= "'" . $descricao_breve . "',";
            $sql.= "'" . $ordem . "',";
            $sql.= "'" . $ativo . "',";
            $sql.= "'" . $valor . "',";
            $sql.= "'" . $nome . "',";
            $sql.= "'" . $cargo . "',";
            $sql.= "'" . $funcao . "'";
            $sql.= ")";


            DBSql::getExecute($sql);

            return true;
        } catch (Exception $e) {

            DBSql::getMsgErro($sql);
        }

        return false;
    }

    public function edit() {
        extract($_REQUEST);

        try {

            $sql = "UPDATE conteudo SET";
            $sql.= " conteudo_categoria_id = '" . $conteudo_categoria_id . "',";
            $sql.= " titulo = '" . $titulo . "',";
            $sql.= " subtitulo = '" . $subtitulo . "',";
            $sql.= " descricao = '" . $descricao . "',";
            $sql.= " descricao_breve = '" . $descricao_breve . "',";
            $sql.= " ordem = '" . $ordem . "',";
            $sql.= " ativo = '" . $ativo . "',";
            $sql.= " valor = '" . $valor . "',";
            $sql.= " nome = '" . $nome . "',";
            $sql.= " cargo = '" . $cargo . "',";
            $sql.= " funcao = '" . $funcao . "'";
            $sql.="WHERE";
            $sql.="	id = " . $id;

            DBSql::getExecute($sql);

            return true;
        } catch (Exception $e) {

            DBSql::getMsgErro($sql);
        }

        return false;
    }

    public function delete() {
        extract($_REQUEST);

        try {

            $sql = "DELETE FROM conteudo ";
            $sql.= "WHERE";
            $sql.= "	id = " . $id;

            DBSql::getExecute($sql);

            return true;
        } catch (Exception $e) {

            DBSql::getMsgErro($sql);
        }

        return false;
    }

    public function getColecaoConteudo($id = null, $conteudo_categoria_id = null, $titulo = null) {

        $sql = "SELECT";
        $sql.= "	 id, ";
        $sql.= "	 conteudo_categoria_id, ";
        $sql.= "	 titulo, ";
        $sql.= "	 subtitulo, ";
        $sql.= "	 descricao, ";
        $sql.= "	 descricao_breve, ";
        $sql.= "	 ordem, ";
        $sql.= "	 ativo, ";
        $sql.= "	 valor, ";
        $sql.= "	 nome,";
        $sql.= "	 cargo, ";
        $sql.= "	 funcao ";
        $sql.= "FROM ";
        $sql.= "	conteudo ";
        $sql.= "WHERE 1=1 ";
        if (!empty($id))
            $sql.= "	 AND id = '" . $id . "'";
        if (!empty($conteudo_categoria_id))
            $sql.= "	 AND conteudo_categoria_id = '" . $conteudo_categoria_id . "'";
        if (!empty($titulo))
            $sql.= "	 AND titulo = '" . $titulo . "'";
        $sql.= "ORDER BY id";

        return DBSql::getCollection($sql);
    }

    public function getConteudo($id = null, $conteudo_categoria_id = null) {


        $sql = "SELECT";
        $sql.= "	 id, ";
        $sql.= "	 conteudo_categoria_id, ";
        $sql.= "	 titulo, ";
        $sql.= "	 subtitulo, ";
        $sql.= "	 descricao, ";
        $sql.= "	 descricao_breve, ";
        $sql.= "	 ordem, ";
        $sql.= "	 ativo, ";
        $sql.= "	 valor, ";
        $sql.= "	 nome, ";
        $sql.= "	 cargo, ";
        $sql.= "	 funcao ";
        $sql.= " FROM ";
        $sql.= "	conteudo";
        $sql.= " WHERE 1=1";
         if (!empty($id))
            $sql.= "	 AND id = '" . $id . "'";
        if (!empty($conteudo_categoria_id))
            $sql.= "	 AND conteudo_categoria_id = '" . $conteudo_categoria_id . "'";
        return DBSql::getArray($sql);
    }

}

?>