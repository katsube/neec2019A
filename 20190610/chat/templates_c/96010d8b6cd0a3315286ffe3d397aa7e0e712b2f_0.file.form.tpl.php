<?php
/* Smarty version 3.1.33, created on 2019-06-03 15:08:19
  from '/var/www/html/chat/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf4b953e3f2a4_14311805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96010d8b6cd0a3315286ffe3d397aa7e0e712b2f' => 
    array (
      0 => '/var/www/html/chat/form.tpl',
      1 => 1559542082,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cf4b953e3f2a4_14311805 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf8">
  <title>Hello Smarty</title>
</head>
<body>

<?php if ($_smarty_tpl->tpl_vars['mode']->value === 'add') {?>
  <?php if ($_smarty_tpl->tpl_vars['result']->value) {?>
    <h3>登録成功</h3>
  <?php } else { ?>
    <h3>登録失敗</h3>
  <?php }
} else { ?>
  <form action="/chat/useradd.php">
    <input type="hidden" name="mode" value="add">
    ID:<input type="text" name="id"><br>
    Name:<input type="text" name="name"><br>
    <button>登録</button>
  </form>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
