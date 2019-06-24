<?php
require_once('util.php');

global $question;

// 対戦IDと出題番号を取得
if( is_file('roomid.txt') ){
	$fp   = fopen('roomid.txt', 'r');
	$buff = fgets($fp);
	list($battleid, $quiz_num) = explode("\t", $buff);
	fclose($fp);
}
else{
	$battleid = md5( time() );
	$quiz_num = rand(0, count($question)-1);
	
	$fp = fopen('roomid.txt', 'w');
	fwrite($fp, $battleid."\t".$quiz_num);
	fclose($fp);
}

// 参加者の一覧
$room = [];
$fp = fopen('room.txt', 'r');
while( ($buff = fgets($fp)) !== false ){
	$line   = explode("\t", trim($buff));
	$room[] = $line;
}
fclose($fp);

// 出力
putResult([
  'id'   => $battleid,
  'room' => $room,
  'quiz' => $question[$quiz_num]
]);

