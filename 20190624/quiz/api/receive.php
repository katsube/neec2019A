<?php
require_once('util.php');

global $question;

$answer = $_GET['answer'];
$uid    = $_GET['uid'];

// 正解を取得
$fp = fopen('roomid.txt', 'r');
$buff  = fgets($fp);
$value = explode("\t", $buff);
fclose($fp);

// 回答を記録
$fp = fopen('roomanswer.txt', 'a');
flock($fp, LOCK_EX);
fwrite($fp, $uid
			 ."\t".$answer
			 ."\t".(($answer===$question[$value[1]][1])?  1:0)
			 ."\n");
flock($fp, LOCK_UN);
fclose($fp);

putResult([
  'status' => true
]);
