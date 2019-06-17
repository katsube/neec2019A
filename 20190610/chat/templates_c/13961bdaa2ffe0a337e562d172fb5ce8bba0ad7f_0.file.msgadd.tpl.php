<?php
/* Smarty version 3.1.33, created on 2019-06-03 16:18:50
  from '/var/www/html/chat/msgadd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cf4c9dac52cf2_76010708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13961bdaa2ffe0a337e562d172fb5ce8bba0ad7f' => 
    array (
      0 => '/var/www/html/chat/msgadd.tpl',
      1 => 1559546314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5cf4c9dac52cf2_76010708 (Smarty_Internal_Template $_smarty_tpl) {
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
  <form action="/chat/msgadd.php">
    <input type="hidden" name="mode" value="add">
    <select name="user_id">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
         <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <br>
    メッセージ:<input type="text" name="msg"><br>
    <button>登録</button>
  </form>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>
</html>
<?php }
}
