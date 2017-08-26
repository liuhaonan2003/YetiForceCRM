<?php
/* Smarty version 3.1.31, created on 2017-08-26 08:09:17
  from "D:\wwwroot\huabao\YetiForceCRM\layouts\basic\modules\Home\dashboards\DashBoardPreProcess.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a11e9da1fc48_44994216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be1732c333dbaec331b9f9e547f64c056280631e' => 
    array (
      0 => 'D:\\wwwroot\\huabao\\YetiForceCRM\\layouts\\basic\\modules\\Home\\dashboards\\DashBoardPreProcess.tpl',
      1 => 1502284692,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a11e9da1fc48_44994216 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender(vtemplate_path("Header.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="bodyContents"><div class="mainContainer"><div class="contentsDiv col-md-12 marginLeftZero dashboardContainer"><?php $_smarty_tpl->_subTemplateRender(vtemplate_path("dashboards/DashBoardHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('DASHBOARDHEADER_TITLE'=>\App\Language::translate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value)), 0, true);
?>
<div class="dashboardViewContainer"><?php if (count($_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value) > 1) {?><ul class="nav nav-tabs massEditTabs selectDashboard"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DASHBOARD_TYPES']->value, 'DASHBOARD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DASHBOARD']->value) {
?><li <?php if ($_smarty_tpl->tpl_vars['CURRENT_DASHBOARD']->value == $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id']) {?>class="active"<?php }?> data-id="<?php echo $_smarty_tpl->tpl_vars['DASHBOARD']->value['dashboard_id'];?>
"><a data-toggle="tab"><strong><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['DASHBOARD']->value['name']);?>
</strong></a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><?php }?><div class="col-xs-12 paddingLRZero"><?php if (count($_smarty_tpl->tpl_vars['MODULES_WITH_WIDGET']->value) > 1) {?><ul class="nav nav-tabs massEditTabs selectDashboradView"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODULES_WITH_WIDGET']->value, 'MODULE_WIDGET');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value) {
?><li class="<?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value) {?> active <?php }?>" data-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_WIDGET']->value;?>
"><a><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['MODULE_WIDGET']->value,$_smarty_tpl->tpl_vars['MODULE_WIDGET']->value);?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><?php }?></div><?php $_smarty_tpl->_subTemplateRender(vtemplate_path('dashboards/DashBoardButtons.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
<div class="col-xs-12 paddingLRZero">
<?php }
}
