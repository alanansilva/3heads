<?php

class Pessoa {

    public function add() {
        extract($_REQUEST);

        try {

            $sql = "INSERT INTO pessoa (";
            $sql.= " pessoa_id,";
            $sql.= " tipo_pessoa_id,";
            $sql.= " cpf_cnpj,";
            $sql.= " nome,";
            $sql.= " email,";
            $sql.= " endereco,";
            $sql.= " data_insercao,";
            $sql.= " fisica_juridica,";
            $sql.= " telefone,";
            $sql.= " mapa_localizacao";
            $sql.= ")";
            $sql.= "VALUES (";
            $sql.= "'" . PESSOA_ID . "',";
            $sql.= "'" . $tipo_pessoa_id . "',";
            $sql.= "'" . $cpf_cnpj . "',";
            $sql.= "'" . $nome . "',";
            $sql.= "'" . $email . "',";
            $sql.= "'" . $endereco . "',";
            $sql.= "'" . date('Y-m-d') . "',";
            $sql.= "'" . $fisica_juridica . "',";
            $sql.= "'" . $telefone . "',";
            $sql.= "'" . $mapa_localizacao . "'";
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

            $sql = "UPDATE pessoa SET";
            $sql.= " pessoa_id = '" . $pessoa_id . "',";
            $sql.= " tipo_pessoa_id = '" . $tipo_pessoa_id . "',";
            $sql.= " cpf_cnpj = '" . $cpf_cnpj . "',";
            $sql.= " nome = '" . $nome . "',";
            $sql.= " email = '" . $email . "',";
            $sql.= " endereco = '" . $endereco . "',";
            $sql.= " data_insercao = '" . $data_insercao . "',";
            $sql.= " fisica_juridica = '" . $fisica_juridica . "',";
            $sql.= " telefone = '" . $telefone . "',";
            $sql.= " ativo = '" . $ativo . "',";
            $sql.= " excluido = '" . $excluido . "',";
            $sql.= " mapa_localizacao = '" . $mapa_localizacao . "'";
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

            $sql = "DELETE FROM pessoa ";
            $sql.= "WHERE";
            $sql.= "	id = " . $id;

            DBSql::getExecute($sql);

            return true;
        } catch (Exception $e) {

            DBSql::getMsgErro($sql);
        }

        return false;
    }

    public function getColecaoPessoa($pessoa_id = null, $tipo_pessoa_id = null, $nome = null, $excluido = null, $ativo = null) {

        $sql = "SELECT";
        $sql.= "	 id, ";
        $sql.= "	 pessoa_id, ";
        $sql.= "	 tipo_pessoa_id, ";
        $sql.= "	 cpf_cnpj, ";
        $sql.= "	 nome, ";
        $sql.= "	 email, ";
        $sql.= "	 endereco, ";
        $sql.= "	 data_insercao, ";
        $sql.= "	 fisica_juridica, ";
        $sql.= "	 telefone, ";
        $sql.= "	 ativo, ";
        $sql.= "	 excluido, ";
        $sql.= "	 mapa_localizacao ";
        $sql.= "FROM ";
        $sql.= "	pessoa ";
        $sql.= "WHERE 1=1 ";

        if (!empty($pessoa_id))
            $sql.= "	 AND pessoa_id = '" . $pessoa_id . "'";

        if (!empty($tipo_pessoa_id))
            $sql.= "	 AND tipo_pessoa_id = '" . $tipo_pessoa_id . "'";
        
        if (!empty($nome))
            $sql.= "	 AND nome LIKE '%" . $nome . "%'";

        if (!empty($excluido))
            $sql.= "	 AND excluido = '" . $excluido . "'";
        
        if (!empty($ativo))
            $sql.= "	 AND ativo = '" . $ativo . "'";

        $sql.= "ORDER BY nome";
        
        return DBSql::getCollection($sql);
    }

    public function getPessoa($id = null, $pessoa_id = null) {


        $sql = "SELECT";
        $sql.= "	 id, ";
        $sql.= "	 pessoa_id, ";
        $sql.= "	 tipo_pessoa_id, ";
        $sql.= "	 cpf_cnpj, ";
        $sql.= "	 nome, ";
        $sql.= "	 email, ";
        $sql.= "	 endereco, ";
        $sql.= "	 data_insercao, ";
        $sql.= "	 fisica_juridica, ";
        $sql.= "	 telefone, ";
        $sql.= "	 ativo, ";
        $sql.= "	 excluido, ";
        $sql.= "	 mapa_localizacao ";
        $sql.= " FROM ";
        $sql.= "	pessoa";
        $sql.= " WHERE 1=1";
        if (!empty($id))
            $sql.= "	 AND id = '" . $id . "'";
        
        if (!empty($pessoa_id))
            $sql.= "	 AND pessoa_id = '" . $pessoa_id . "'";
        return DBSql::getArray($sql);
    }

}

?>