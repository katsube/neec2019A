<?php
// クイズの問題
$question = [
	  ['上は洪水、下は大火事といえば？', '風呂']
	, ['パンはパンでも堅いパンは？', 'フライパン']
];


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

