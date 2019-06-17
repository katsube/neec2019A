<?php
require_once('./model/base.php');

class MessageModel extends BaseModel{
	function get(){
		$sql = 'SELECT A.id, A.name, B.id, B.msg, B.regist_date '.
				'FROM   User A, Message B '.
				'WHERE  A.id=B.user_id';
		$msg = $this->query($sql);
		return($msg);
	}

	function add(){
		$msg = isset($_GET['msg'])?   $_GET['msg']:"";
		$user_id = 1;  //暫定
	
		$ret = $this->exec('INSERT INTO Message(user_id, msg, regist_date) VALUES(?,?,?)', [$user_id, $msg, time()]);
		return($ret);
	}

	function remove(){
	}
	
	function update(){
	}
}
