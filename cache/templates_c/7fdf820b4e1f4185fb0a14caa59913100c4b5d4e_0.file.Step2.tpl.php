<?php
/* Smarty version 3.1.31, created on 2017-08-26 06:59:46
  from "D:\wwwroot\huabao\YetiForceCRM\install\tpl\Step2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a11c62c1c381_38104062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fdf820b4e1f4185fb0a14caa59913100c4b5d4e' => 
    array (
      0 => 'D:\\wwwroot\\huabao\\YetiForceCRM\\install\\tpl\\Step2.tpl',
      1 => 1502292893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:licenses/License.html' => 1,
  ),
),false)) {
function content_59a11c62c1c381_38104062 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row main-container"><div class="inner-container"><h2><?php echo \App\Language::translate('LBL_LICENSE','Install');?>
</h2><form class="form-horizontal" name="step2" method="post" action="Install.php"><input type="hidden" name="mode" value="Step3" /><input type="hidden" name="lang" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
" /><div class="row"><div class="span12"><div class="license"><div class="lic-scroll"><?php $_smarty_tpl->_subTemplateRender("file:licenses/License.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div></div></div></div><div class="row"><div class="span12"><div class="button-container"><input name="back" type="button" class="btn btn-sm btn-default" value="<?php echo \App\Language::translate('LBL_DISAGREE','Install');?>
"/><input id="agree" type="submit" class="btn btn-sm btn-primary" value="<?php echo \App\Language::translate('LBL_I_AGREE','Install');?>
"/></div></div></div></form></div></div>
<?php }
}
