<?php
require_once('./controller/base.php');
require_once('./model/base.php');

//-------------------------------
// リクエストされたURLを解析
//-------------------------------
$request = parse();
$ctrl   = $request['controller'];
$method = $request['method'];
$param  = $request['param'];
$file   = $request['file'];

//-------------------------------
// Controller読み込み
//-------------------------------
require_once($file);

//-------------------------------
// 存在すれば実行する
//-------------------------------
if(     is_callable([$ctrl, $method])           // 存在チェック
     && (strcmp('BaseController', $ctrl) != 0)  // スーパークラスは直接実行しない
     && !preg_match('/^_/', $method)){          // '_'で始まるメソッドは実行しない

  // 実行する
  $obj = new $ctrl();
  call_user_func([$obj, $method], $param);
}
else{
  // 存在しない
  header("HTTP/1.1 404 Not Found");
}


/**
 * URLをパースする
 *
 */
function parse(){
  $arr  = [];

  if( isset($_SERVER['PATH_INFO']) ){
    $query = $_SERVER['PATH_INFO'];
    $arr   = explode('/', ltrim($query, '/')); //先頭の'/'を削除しsplit
  }

  $ctrl   = (isset($arr[0]))?   ucfirst($arr[0]).'Controller' :  'IndexController';
  $method = (isset($arr[1]))?   $arr[1] : 'index';
  $param  = (count($arr) > 1)?  array_slice($arr, 2) : [];
  $file   = sprintf('./controller/%s.php', $arr[0]);

  return([
    'controller' => $ctrl,
    'method'     => $method,
    'param'      => $param,
    'file'       => $file
  ]);
}
