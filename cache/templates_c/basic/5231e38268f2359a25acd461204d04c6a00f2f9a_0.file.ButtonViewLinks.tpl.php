<?php
/* Smarty version 3.1.31, created on 2017-08-26 08:09:18
  from "D:\wwwroot\huabao\YetiForceCRM\layouts\basic\modules\Vtiger\ButtonViewLinks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a11e9e8a8907_67053401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5231e38268f2359a25acd461204d04c6a00f2f9a' => 
    array (
      0 => 'D:\\wwwroot\\huabao\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\ButtonViewLinks.tpl',
      1 => 1502284693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a11e9e8a8907_67053401 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (count($_smarty_tpl->tpl_vars['LINKS']->value) > 0) {
$_smarty_tpl->_assignInScope('TEXT_HOLDER', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_assignInScope('LINK_PARAMS', vtlib\Functions::getQueryParams($_smarty_tpl->tpl_vars['LINK']->value->getUrl()));
if (\App\Request::_getModule() == $_smarty_tpl->tpl_vars['LINK_PARAMS']->value['module'] && \App\Request::_get('view') == $_smarty_tpl->tpl_vars['LINK_PARAMS']->value['view']) {
$_smarty_tpl->_assignInScope('TEXT_HOLDER', $_smarty_tpl->tpl_vars['LINK']->value->getLabel());
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (isset($_smarty_tpl->tpl_vars['BTN_GROUP']->value) && !$_smarty_tpl->tpl_vars['BTN_GROUP']->value) {?><div class="btn-group buttonTextHolder <?php if (isset($_smarty_tpl->tpl_vars['CLASS']->value)) {
echo $_smarty_tpl->tpl_vars['CLASS']->value;
}?>"><?php }?><button class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp;<span class="textHolder"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEXT_HOLDER']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span>&nbsp;<span class="caret"></span></button><ul class="dropdown-menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LINKS']->value, 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
?><li><a class="quickLinks" href="<?php echo $_smarty_tpl->tpl_vars['LINK']->value->getUrl();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><?php if (isset($_smarty_tpl->tpl_vars['BTN_GROUP']->value) && !$_smarty_tpl->tpl_vars['BTN_GROUP']->value) {?></div><?php }
}
}
}
