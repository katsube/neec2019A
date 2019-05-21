<?php
function countUser(){
	$fp = fopen('room.txt', 'r');
	$count = 0;
	while( fgets($fp) !== false ){
		$count++;
	}
	fclose($fp);
	return($count);
}

function putResult($value){
	echo json_encode($value);
}

