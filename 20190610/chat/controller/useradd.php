<?php
require_once('./smarty/libs/Smarty.class.php');
require_once('./model/user.php');

$mode = isset($_GET['mode'])?  $_GET['mode']:null;
if($mode === 'add'){
	$userm  = new UserModel();
	$result = $userm->add($_GET['id'], $_GET['name']);
}

$smarty = new Smarty();
$smarty->assign('mode',   $mode);
$smarty->assign('result', $result);
$smarty->display('form.tpl');

