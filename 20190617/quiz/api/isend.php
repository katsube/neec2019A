<?php
require_once('util.php');

$list = [];
$fp = fopen('roomanswer.txt', 'r');
while( ($buff = fgets($fp)) !== false ){
	$line = explode("\t", trim($buff));
	$list[] = $line;
}
fclose($fp);

putResult([
	'status' => (count($list) === 3)
]);
