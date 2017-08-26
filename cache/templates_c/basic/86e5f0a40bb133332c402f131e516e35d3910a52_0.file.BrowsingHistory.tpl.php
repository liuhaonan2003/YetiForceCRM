<?php
/* Smarty version 3.1.31, created on 2017-08-26 08:09:18
  from "D:\wwwroot\huabao\YetiForceCRM\layouts\basic\modules\Vtiger\BrowsingHistory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a11e9e062299_56196339',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86e5f0a40bb133332c402f131e516e35d3910a52' => 
    array (
      0 => 'D:\\wwwroot\\huabao\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\BrowsingHistory.tpl',
      1 => 1502284693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a11e9e062299_56196339 (Smarty_Internal_Template $_smarty_tpl) {
?>

<ul class="dropdown-menu pull-right historyList" role="menu"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BROWSING_HISTORY']->value, 'HISTORY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HISTORY']->value) {
if (isset($_smarty_tpl->tpl_vars['HISTORY']->value['viewToday'])) {?><li class="item selectorHistory"><?php echo \App\Language::translate('LBL_TODAY');?>
</li><?php } elseif (isset($_smarty_tpl->tpl_vars['HISTORY']->value['viewYesterday'])) {?><li class="item selectorHistory"><?php echo \App\Language::translate('LBL_YESTERDAY');?>
</li><?php } elseif (isset($_smarty_tpl->tpl_vars['HISTORY']->value['viewOlder'])) {?><li class="item selectorHistory"><?php echo \App\Language::translate('LBL_YESTERDAY');?>
</li><?php }?><li class="item"><a href="<?php echo $_smarty_tpl->tpl_vars['HISTORY']->value['url'];?>
"><?php if ($_smarty_tpl->tpl_vars['HISTORY']->value['hour']) {?><span class="historyHour"><?php echo $_smarty_tpl->tpl_vars['HISTORY']->value['date'];?>
</span><?php } else {
echo $_smarty_tpl->tpl_vars['HISTORY']->value['date'];
}
echo " | ";
echo $_smarty_tpl->tpl_vars['HISTORY']->value['title'];?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<li class="divider"></li><li><a class="clearHistory" href="#" onclick="app.clearBrowsingHistory();"><?php echo \App\Language::translate('LBL_CLEAR_HISTORY');?>
</a></li></ul>
<?php }
}
