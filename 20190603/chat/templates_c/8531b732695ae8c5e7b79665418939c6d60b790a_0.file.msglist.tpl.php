<?php
/* Smarty version 3.1.33, created on 2019-06-03 16:23:49
  from '/var/www/html/chat/msglist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf4cb05ecba08_33942684',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8531b732695ae8c5e7b79665418939c6d60b790a' => 
    array (
      0 => '/var/www/html/chat/msglist.tpl',
      1 => 1559546618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cf4cb05ecba08_33942684 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf8">
  <title>Hello Smarty</title>
</head>
<body>

<ol>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
  <li><?php echo $_smarty_tpl->tpl_vars['i']->value['user_id'];?>
|<?php echo $_smarty_tpl->tpl_vars['i']->value['msg'];?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ol>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
