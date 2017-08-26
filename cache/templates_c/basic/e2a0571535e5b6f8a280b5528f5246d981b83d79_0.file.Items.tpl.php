<?php
/* Smarty version 3.1.31, created on 2017-08-26 08:09:18
  from "D:\wwwroot\huabao\YetiForceCRM\layouts\basic\modules\Chat\Items.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a11e9e7927e0_16965331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2a0571535e5b6f8a280b5528f5246d981b83d79' => 
    array (
      0 => 'D:\\wwwroot\\huabao\\YetiForceCRM\\layouts\\basic\\modules\\Chat\\Items.tpl',
      1 => 1502284692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a11e9e7927e0_16965331 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CHAT_ENTRIES']->value, 'ROW');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ROW']->value) {
$_smarty_tpl->_subTemplateRender(vtemplate_path("Item.tpl",'Chat'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<?php }
}
