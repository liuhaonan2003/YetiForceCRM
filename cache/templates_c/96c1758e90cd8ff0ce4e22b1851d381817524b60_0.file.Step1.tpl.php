<?php
/* Smarty version 3.1.31, created on 2017-08-26 06:59:24
  from "D:\wwwroot\huabao\YetiForceCRM\install\tpl\Step1.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a11c4c9afac6_41041050',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96c1758e90cd8ff0ce4e22b1851d381817524b60' => 
    array (
      0 => 'D:\\wwwroot\\huabao\\YetiForceCRM\\install\\tpl\\Step1.tpl',
      1 => 1502292893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a11c4c9afac6_41041050 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row main-container"><div class="inner-container"><form class="form-horizontal" name="step1" method="post" action="Install.php"><div class="row"><div class="col-md-9"><h4><?php echo \App\Language::translate('LBL_WELCOME','Install');?>
</h4></div><div class="col-md-3"><select name="lang" class="chzn-select" style="width: 250px;"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'item', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['LANG']->value == $_smarty_tpl->tpl_vars['key']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div></div><hr><div class="pull-right"><a class="helpBtn" href="https://yetiforce.com/en/implementer/installation-updates.html" target="_blank"><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span></a></div><input type="hidden" name="mode" value="Step2" /><div class="col-md-4 welcome-image"><img src="../<?php echo \App\Layout::getPublicUrl('layouts/resources/Logo/logo_yetiforce.png');?>
" alt="Yetiforce Logo"/></div><div class="col-md-8"><div class="welcome-div"><h3><?php echo \App\Language::translate('LBL_WELCOME_TO_VTIGER6_SETUP_WIZARD','Install');?>
</h3><p><?php echo \App\Language::translate('LBL_VTIGER6_SETUP_WIZARD_DESCRIPTION','Install');?>
</p></div></div><div class="row"><div class="button-container"><a href="#" class="btn btn-sm btn-primary bt_install"><?php echo \App\Language::translate('LBL_INSTALL_BUTTON','Install');?>
</a><?php if ($_smarty_tpl->tpl_vars['IS_MIGRATE']->value) {?><a style="" href="#" class="btn btn-sm btn-primary bt_migrate"><?php echo \App\Language::translate('LBL_MIGRATION','Install');?>
</a><?php }?></div></div></form></div></div>
<?php }
}
