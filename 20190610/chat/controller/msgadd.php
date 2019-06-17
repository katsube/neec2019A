<?php
require_once('./smarty/libs/Smarty.class.php');
require_once('./model/user.php');
require_once('./model/message.php');

$mode = isset($_GET['mode'])?  $_GET['mode']:null;

if($mode === 'add'){
	$msgm = new MessageModel();
	$result = $msgm->add($_GET['user_id'], $_GET['msg']);
}
else{
	$userm = new UserModel();
	$users = $userm->get();
}

$smarty = new Smarty();
$smarty->assign('mode',   $mode);
$smarty->assign('result', $result);
$smarty->assign('users',  $users);
$smarty->display('msgadd.tpl');

