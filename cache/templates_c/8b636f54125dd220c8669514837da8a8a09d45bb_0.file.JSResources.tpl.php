<?php
/* Smarty version 3.1.31, created on 2017-08-26 06:59:24
  from "D:\wwwroot\huabao\YetiForceCRM\install\tpl\JSResources.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a11c4ca46bb3_68052047',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b636f54125dd220c8669514837da8a8a09d45bb' => 
    array (
      0 => 'D:\\wwwroot\\huabao\\YetiForceCRM\\install\\tpl\\JSResources.tpl',
      1 => 1502292894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a11c4ca46bb3_68052047 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOOTER_SCRIPTS']->value, 'jsModel', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="../<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div>
<?php }
}
