<?php
/* Smarty version 3.1.33, created on 2019-06-10 15:37:18
  from '/var/www/html/chat/view/talkadd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdfa9e36eb62_79355666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '228f259cb4881bcec111044cc93ec25948258406' => 
    array (
      0 => '/var/www/html/chat/view/talkadd.tpl',
      1 => 1560148312,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfdfa9e36eb62_79355666 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['result']->value) {?>
  <h1>成功しました</h1>
<?php } else { ?>
  <h1>残念!</h1>
<?php }?>

<a href="/chat/go.php/talk/get">もどる</a>

<?php }
}
