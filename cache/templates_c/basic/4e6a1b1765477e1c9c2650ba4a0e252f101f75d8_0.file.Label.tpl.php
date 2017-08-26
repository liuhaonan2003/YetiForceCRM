<?php
/* Smarty version 3.1.31, created on 2017-08-26 08:09:18
  from "D:\wwwroot\huabao\YetiForceCRM\layouts\basic\modules\Vtiger\menu\Label.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59a11e9e2fed55_16550969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e6a1b1765477e1c9c2650ba4a0e252f101f75d8' => 
    array (
      0 => 'D:\\wwwroot\\huabao\\YetiForceCRM\\layouts\\basic\\modules\\Vtiger\\menu\\Label.tpl',
      1 => 1502284693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a11e9e2fed55_16550969 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('ICON', Vtiger_Menu_Model::getMenuIcon($_smarty_tpl->tpl_vars['MENU']->value,Vtiger_Menu_Model::vtranslateMenu($_smarty_tpl->tpl_vars['MENU']->value['name'],$_smarty_tpl->tpl_vars['MENU_MODULE']->value)));
?><li class="hovernav menuLabel <?php if (!$_smarty_tpl->tpl_vars['HASCHILDS']->value) {?>hasParentMenu<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
" role="menuitem" tabindex="<?php echo $_smarty_tpl->tpl_vars['TABINDEX']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?>aria-haspopup="<?php echo $_smarty_tpl->tpl_vars['HASCHILDS']->value;?>
"<?php }?>><a class="<?php if ((isset($_smarty_tpl->tpl_vars['MENU']->value['active']) && $_smarty_tpl->tpl_vars['MENU']->value['active']) || $_smarty_tpl->tpl_vars['PARENT_MODULE']->value == $_smarty_tpl->tpl_vars['MENU']->value['id']) {?>active <?php }
if ($_smarty_tpl->tpl_vars['ICON']->value) {?>hasIcon<?php }?>" <?php if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?>role="button"<?php }?> href="#"><?php if ($_smarty_tpl->tpl_vars['ICON']->value) {?><div  <?php if ($_smarty_tpl->tpl_vars['DEVICE']->value == 'Desktop') {?>class='iconContainer'<?php }?>><div <?php if ($_smarty_tpl->tpl_vars['DEVICE']->value == 'Desktop') {?>class="iconImage" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
</div></div><?php }?><div <?php if ($_smarty_tpl->tpl_vars['DEVICE']->value == 'Desktop') {?>class='labelConstainer'<?php }?>><div <?php if ($_smarty_tpl->tpl_vars['DEVICE']->value == 'Desktop') {?>class="labelValue" <?php }?>><span class="menuName"><?php echo Vtiger_Menu_Model::vtranslateMenu($_smarty_tpl->tpl_vars['MENU']->value['name'],$_smarty_tpl->tpl_vars['MENU_MODULE']->value);?>
</span></div></div></a><?php if ($_smarty_tpl->tpl_vars['DEVICE']->value == 'Desktop') {
$_smarty_tpl->_subTemplateRender(vtemplate_path('menu/SubMenu.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('DEVICE'=>$_smarty_tpl->tpl_vars['DEVICE']->value), 0, true);
}?></li><?php if ($_smarty_tpl->tpl_vars['DEVICE']->value == 'Mobile') {
$_smarty_tpl->_subTemplateRender(vtemplate_path('menu/SubMenu.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('DEVICE'=>$_smarty_tpl->tpl_vars['DEVICE']->value), 0, true);
}
}
}
