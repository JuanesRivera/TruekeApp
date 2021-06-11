<?php
require_once '../libs/database.php';

class model{
	protected $table;

	public function select($data){
		$db = new database();
        return $db->select($this->table, $data);
	}

	public function insert($data){
		$db = new database();
        return $db->insert($this->table, $data);
	}

	public function update($data){
		$db = new database();
        return $db->update($this->table, $data);
	}

	public function delete($data){
		$db = new database();
        return $db->delete($this->table, $data);
	}
}