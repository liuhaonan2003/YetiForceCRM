<?php
/* Smarty version 3.1.31, created on 2017-08-26 07:09:11
  from "D:\wwwroot\huabao\YetiForceCRM\install\tpl\Step7.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a11e97992ce4_01321814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1af611f14328e937aae7feb5b4dfe8357d2c3e2b' => 
    array (
      0 => 'D:\\wwwroot\\huabao\\YetiForceCRM\\install\\tpl\\Step7.tpl',
      1 => 1502292892,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a11e97992ce4_01321814 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form class="form-horizontal" name="step7" method="post" action="../index.php?module=Users&action=Login"><input type="hidden" name="mode" value="install" ><input type="hidden" name="username" value="admin" ><input type="hidden" name="password" value="<?php echo $_smarty_tpl->tpl_vars['PASSWORD']->value;?>
" ></form><?php echo '<script'; ?>
 type="text/javascript">
		window.localStorage.removeItem('yetiforce_install');
		jQuery(function () { /* Delay to let page load complete */
			setTimeout(function () {
				jQuery('form[name="step7"]').submit();
			}, 150);
		});
	<?php echo '</script'; ?>
>
<?php }
}
