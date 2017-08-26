<?php
/* Smarty version 3.1.31, created on 2017-08-26 07:07:29
  from "D:\wwwroot\huabao\YetiForceCRM\install\tpl\InstallPreProcess.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a11e319669b5_55890196',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d5b5a7968aef36ba5c47bda57805c4f1edb5f73' => 
    array (
      0 => 'D:\\wwwroot\\huabao\\YetiForceCRM\\install\\tpl\\InstallPreProcess.tpl',
      1 => 1502292894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:Header.tpl' => 1,
  ),
),false)) {
function content_59a11e319669b5_55890196 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender('file:Header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container page-container"><div class="row"><div class="col-md-6"><div class="logo"><img src="../<?php echo \App\Layout::getPublicUrl('layouts/resources/Logo/logo_yetiforce.png');?>
" style="height: 70px;" /></div></div><div class="col-md-6"><div class="head pull-right"><h3><?php echo \App\Language::translate('LBL_INSTALLATION_WIZARD','Install');?>
</h3></div></div></div><?php if ($_smarty_tpl->tpl_vars['MODE']->value === 'Step7') {?><div id="progressIndicator" class="row main-container"><div class="inner-container"><div class="inner-container"><div class="row"><div class="span12 welcome-div alignCenter"><h3><?php echo \App\Language::translate('LBL_INSTALLATION_IN_PROGRESS','Install');?>
...</h3><br /><img src="../<?php echo \App\Layout::getPublicUrl('layouts/basic/skins/images/install_loading.gif');?>
" alt="Install loading"/><h6><?php echo \App\Language::translate('LBL_PLEASE_WAIT','Install');?>
.... </h6></div></div></div></div></div><?php }
}
}
