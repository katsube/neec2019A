<?php
require_once('./smarty/libs/Smarty.class.php');

class BaseController{
  private $smarty;

  /**
   * コンストラクタ
   */
  function __construct(){
    $this->smarty = $this->_initSmarty();
  }

  /**
   * Smartyのラッパー
   */
  function assign($key, $value){
    $this->smarty->assign($key, $value);
  }

  function display($file){
    $this->smarty->display($file);
  }


  /**
   * Smarty インスタンス作成
   */
  private function _initSmarty(){
    $smarty = new Smarty();

    // 各種設定
    $smarty->template_dir = './view/';

    return($smarty);
  }
}
