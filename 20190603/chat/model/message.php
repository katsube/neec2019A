<?php
require_once('./model/base.php');

class MessageModel extends BaseModel{
	function get(){
		$sql = 'SELECT * FROM Message';
		$msg = $this->query($sql);
		return($msg);
	}

	function add($user_id, $msg){
		$ret = $this->exec('INSERT INTO Message(user_id, msg, regist_date) VALUES(?,?,?)', [$user_id, $msg, time()]);
		return($ret);
	}

	function remove(){
	}
	
	function update(){
	}
}
