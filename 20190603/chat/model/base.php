<?php
class BaseModel{
	private $dsn  = 'mysql:dbname=chat;host=127.0.0.1';   //接続先
	private $user = 'root';         //MySQLのユーザーID
	private $pw   = 'H@chiouji1';   //MySQLのパスワード
	private $dbh;

	function __construct(){
		$this->_connect();
	}

	//SELECT
	function query($sql, $bind=[]){
		$sth = $this->dbh->prepare($sql);  //SQL準備
		$sth->execute($bind);				 //実行
		
		return( $sth->fetchAll(PDO::FETCH_ASSOC) );
	}
	
	// INSERT/UPDATE/DELETE
	function exec($sql, $bind=[]){
		$sth = $this->dbh->prepare($sql);  //SQL準備
		$ret = $sth->execute($bind);		 //実行
		
		return($ret);
	}

	private function _connect(){
		$this->dbh = new PDO($this->dsn, $this->user, $this->pw);   //接続
	}
}
