<?php
/* Smarty version 4.2.1, created on 2024-12-04 13:51:01
  from 'C:\xampp\htdocs\sport\adminsport\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_674ffbd5eae1b2_51963295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '420aa14c876351532f39880e3da04523cc9ae2e0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sport\\adminsport\\themes\\default\\template\\content.tpl',
      1 => 1725437230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674ffbd5eae1b2_51963295 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
