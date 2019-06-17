<?php
/* Smarty version 3.1.33, created on 2019-06-03 14:29:21
  from '/var/www/html/chat/template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf4b031885250_28794147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b97ba64c2ce04ff9853d4c4e7306df6236997ca' => 
    array (
      0 => '/var/www/html/chat/template.tpl',
      1 => 1559539609,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cf4b031885250_28794147 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf8">
  <title>Hello Smarty</title>
</head>
<body>

<ol>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
  <li><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
 : <?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
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
