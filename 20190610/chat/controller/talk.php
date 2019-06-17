<?php
require_once('model/message.php');

class TalkController extends BaseController{
	private $mMessege;

	function __construct(){
		parent::__construct();
		
		$this->mMessege = new MessageModel();
	}

	function get(){
		$msg = $this->mMessege->get();

		$this->assign('msg', $msg);
		$this->display('talk.tpl');
	}
	
	function add(){
		$ret = $this->mMessege->add();
		
		$this->assign('result', $ret);
		$this->display('talkadd.tpl');
	}
}
