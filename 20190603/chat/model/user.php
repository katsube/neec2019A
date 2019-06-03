<?php
require_once('./model/base.php');

class UserModel extends BaseModel{
	function get($id=null){
		if( $id === null ){
			$sql = 'SELECT * FROM User';
		}
		else{
			$sql = 'SELECT * FROM User WHERE id=?';
		}
	
		$users = $this->query($sql, [$id]);
		return($users);
	}

	function add($id, $name){
		$ret = $this->exec('INSERT INTO User(id, name) VALUES(?,?)', [$id, $name]);
		return($ret);
	}

	function remove(){
	}
	
	function update(){
	}
}
