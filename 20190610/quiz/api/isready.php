<?php
require_once('util.php');

$count = countUser();
if( $count === 3 ){
	putResult(["status"=>true]);
}
else{
	putResult(["status"=>false]);
}

