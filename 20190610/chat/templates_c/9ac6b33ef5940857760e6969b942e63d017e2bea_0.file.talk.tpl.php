<?php
/* Smarty version 3.1.33, created on 2019-06-10 15:46:07
  from '/var/www/html/chat/view/talk.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5cfdfcaf50a3f4_02940437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ac6b33ef5940857760e6969b942e63d017e2bea' => 
    array (
      0 => '/var/www/html/chat/view/talk.tpl',
      1 => 1560149163,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5cfdfcaf50a3f4_02940437 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="/chat/go.php/talk/add">
  <input type="text" name="msg">
  <button>書き込み</button>
</form>

<ul>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msg']->value, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
?>
  <li><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
:<?php echo $_smarty_tpl->tpl_vars['i']->value['msg'];?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
