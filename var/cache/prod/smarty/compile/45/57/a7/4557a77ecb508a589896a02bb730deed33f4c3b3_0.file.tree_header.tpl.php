<?php
/* Smarty version 4.2.1, created on 2024-12-04 16:25:31
  from 'C:\xampp\htdocs\sport\adminsport\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6750200baa4158_05709168',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4557a77ecb508a589896a02bb730deed33f4c3b3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sport\\adminsport\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1725437230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6750200baa4158_05709168 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
