<?php
/* Smarty version 3.1.31, created on 2017-08-26 08:09:18
  from "D:\wwwroot\huabao\YetiForceCRM\layouts\basic\modules\Vtiger\Menu.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a11e9e25d915_48922147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7de9ff7887abf44bcfc18f618df7a076c5b1293d' => 
    array (
      0 => 'D:\\wwwroot\\huabao\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\Menu.tpl',
      1 => 1502284693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a11e9e25d915_48922147 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['DEVICE']->value == 'Mobile') {?><div class="mobileLeftPanelContainer"><ul class='paddingLRZero' role='menubar'><?php } else { ?><nav><ul class="nav modulesList" role="menubar"><?php }
$_smarty_tpl->_assignInScope('PRIVILEGESMODEL', Users_Privileges_Model::getCurrentUserPrivilegesModel());
$_smarty_tpl->_assignInScope('TABINDEX', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MENUS']->value, 'MENU', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['MENU']->value) {
$_smarty_tpl->_assignInScope('TABINDEX', $_smarty_tpl->tpl_vars['TABINDEX']->value+1);
$_smarty_tpl->_assignInScope('MENU_MODULE', 'Menu');
if (isset($_smarty_tpl->tpl_vars['MENU']->value['moduleName'])) {
$_smarty_tpl->_assignInScope('MENU_MODULE', $_smarty_tpl->tpl_vars['MENU']->value['moduleName']);
}
if (isset($_smarty_tpl->tpl_vars['MENU']->value['childs']) && count($_smarty_tpl->tpl_vars['MENU']->value['childs']) != 0) {
$_smarty_tpl->_assignInScope('HASCHILDS', 'true');
} else {
$_smarty_tpl->_assignInScope('HASCHILDS', 'false');
}
$_smarty_tpl->_subTemplateRender(vtemplate_path((('menu/').($_smarty_tpl->tpl_vars['MENU']->value['type'])).('.tpl'),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('DEVICE'=>$_smarty_tpl->tpl_vars['DEVICE']->value), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['DEVICE']->value == 'Mobile') {?></ul></div><?php } else { ?></ul></nav><?php }
}
}
