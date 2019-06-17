<?php
require_once('./smarty/libs/Smarty.class.php');
require_once('./model/user.php');
require_once('./model/message.php');

$mode = isset($_GET['mode'])?  $_GET['mode']:null;

$msgm = new MessageModel();
$msgs = $msgm->get();

$smarty = new Smarty();
$smarty->assign('msgs',  $msgs);
$smarty->display('msglist.tpl');

