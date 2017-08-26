<?php
/* Smarty version 3.1.31, created on 2017-08-26 14:59:24
  from "D:\wwwroot\huabao\YetiForceCRM\layouts\basic\modules\Vtiger\OperationNotPermitted.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a11c4c2002c3_68267533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcfcfe8fb406104e3e58ed0bf3fe18fc9d017c91' => 
    array (
      0 => 'D:\\wwwroot\\huabao\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\OperationNotPermitted.tpl',
      1 => 1502284693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a11c4c2002c3_68267533 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html><head><title>Yetiforce: <?php echo \App\Language::translate('LBL_ERROR');?>
</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="SHORTCUT ICON" href="<?php echo vimage_path('favicon.ico');?>
"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" href="<?php echo \App\Layout::getPublicUrl('libraries/bootstrap/css/bootstrap.css');?>
" type="text/css" media="screen"><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo \App\Layout::getPublicUrl('libraries/jquery/jquery.js');?>
"><?php echo '</script'; ?>
></head><body><div style="margin-top: 10px;" class="alert alert-danger shadow"><div style="position: relative;" ><div><h2 class="alert-heading"><?php echo \App\Language::translate('LBL_ERROR');?>
</h2><p><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MESSAGE']->value);?>
</p><p class="Buttons"><a class="btn btn-warning" href="javascript:window.history.back();"><?php echo \App\Language::translate('LBL_GO_BACK');?>
</a><a class="btn btn-info" href="index.php"><?php echo \App\Language::translate('LBL_MAIN_PAGE');?>
</a></p></div></div></div></body></html>
<?php }
}
