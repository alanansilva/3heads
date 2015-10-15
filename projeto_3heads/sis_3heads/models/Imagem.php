<?php
class Imagem{
	public function add(){
		extract($_REQUEST);

		try {

			$sql = "INSERT INTO imagem (";
			$sql.= " menu_id,";
			$sql.= " relacionamento_id,";
			$sql.= " nome,";
			$sql.= " destaque,";
			$sql.= " titulo";
			$sql.= ")";
			$sql.= "VALUES (";
			$sql.= "'" . $menu_id . "',";
			$sql.= "'" . $relacionamento_id . "',";
			$sql.= "'" . $nome . "',";
			$sql.= "'" . $destaque . "',";
			$sql.= "'" . $titulo . "'";
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

			$sql = "UPDATE imagem SET";
			$sql.= " menu_id = '" . $menu_id . "',";
			$sql.= " relacionamento_id = '" . $relacionamento_id . "',";
			$sql.= " nome = '" . $nome . "',";
			$sql.= " destaque = '" . $destaque . "',";
			$sql.= " titulo = '" . $titulo . "'";
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

			$sql = "DELETE FROM imagem ";
			$sql.= "WHERE";
			$sql.= "	id = " . $id;

			DBSql::getExecute($sql);

			return true;

		}catch (Exception $e){

			DBSql::getMsgErro($sql);

		}

		return false;

	}

	public function getColecaoImagem($id = null, $menu_id = null, $relacionamento_id = null){

		$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 menu_id, ";
		$sql.= "	 relacionamento_id, ";
		$sql.= "	 nome, ";
		$sql.= "	 destaque, ";
		$sql.= "	 titulo ";
		$sql.= "FROM ";
		$sql.= "	imagem ";
		$sql.= "WHERE 1=1 ";
		 if (!empty($id))
			 $sql.= "	 AND id = '" . $id . "'";
		 if (!empty($menu_id))
			 $sql.= "	 AND menu_id = '" . $menu_id . "'";
		 if (!empty($relacionamento_id))
			 $sql.= "	 AND relacionamento_id = '" . $relacionamento_id . "'";
		$sql.= "ORDER BY id";

		return DBSql::getCollection($sql);

	}

	public function getImagem($id){


			$sql = "SELECT";
		$sql.= "	 id, ";
		$sql.= "	 menu_id, ";
		$sql.= "	 relacionamento_id, ";
		$sql.= "	 nome, ";
		$sql.= "	 destaque, ";
		$sql.= "	 titulo ";
			$sql.= " FROM ";
			$sql.= "	imagem";
			$sql.= " WHERE ";
			$sql.= "	id = " . $id;
		return DBSql::getArray($sql);

	}

}
?>