<?php
require_once('./smarty/libs/Smarty.class.php');
require_once('./model/user.php');

$userm = new UserModel();
$users = $userm->get();

$smarty = new Smarty();
$smarty->assign('users', $users);
$smarty->display('template.tpl');

