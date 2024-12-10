<?php
/* Smarty version 4.2.1, created on 2024-12-04 13:00:44
  from 'C:\xampp\htdocs\sport\adminsport\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_674ff00ccec970_34858054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4979c3b2d22f958dbca3ca4e1eac4fa7395ca1dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sport\\adminsport\\themes\\new-theme\\template\\content.tpl',
      1 => 1725437230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674ff00ccec970_34858054 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
