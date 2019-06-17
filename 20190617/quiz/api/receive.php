<?php
require_once('util.php');

$answer = $_GET['answer'];
$uid    = $_GET['uid'];

$fp = fopen('roomanswer.txt', 'a');
flock($fp, LOCK_EX);
fwrite($fp, $uid."\t".$answer."\n");
flock($fp, LOCK_UN);
fclose($fp);

putResult([
  'status' => true
]);
