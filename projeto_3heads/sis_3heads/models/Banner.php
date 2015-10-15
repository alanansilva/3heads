<?php
class Banner{
	public function add(){
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


			DBSql::getExecute($sql);

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function edit(){
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

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function delete(){
		extract($_REQUEST);

		try {

			$sql = "DELETE FROM banner ";
			$sql.= "WHERE";
			$sql.= "	id = " . $id;

			DBSql::getExecute($sql);

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function getColecaoBanner($id = null, $banner_categoria_id = null, $nome = null, $link = null, $ativo = null, $descricao = null){

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

	public function getBanner($id){


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