<?php
require_once('util.php');

$uname = isset($_GET['uname'])?  $_GET['uname']:null;
if( $uname === null ){
	putResult(["uid"=>null]);
	exit(0);
}

// ユーザーIDの作成
$uid = uniqid();

// 入室者数のチェック
$count = countUser();
if( $count >= 3 ){
	putResult(["uid"=>null]);
	exit(0);
}

// 書き込み
$fp = fopen('room.txt', 'a');
flock($fp, LOCK_EX);
fwrite($fp, $uid."\t".$uname."\n");
flock($fp, LOCK_UN);
fclose($fp);

// レスポンス
$value = [
  'uid'=> $uid
];
putResult($value);

