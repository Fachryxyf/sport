<?php
/* Smarty version 4.2.1, created on 2024-12-04 16:33:09
  from 'C:\xampp\htdocs\sport\modules\blockreassurance\views\templates\admin\alert_folder_writable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_675021d5d625d4_82599427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66a90d3e64d371116a49835c69b6a9a6e68e47ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sport\\modules\\blockreassurance\\views\\templates\\admin\\alert_folder_writable.tpl',
      1 => 1649431700,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675021d5d625d4_82599427 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="older_module" class="col-xl-10 col-xl-offset-1 col-lg-10 col-lg-offset-1">
    <div class="row alert alert-warning" role="alert">
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'WARNING','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</h4>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your folder %s is not readable or executable','sprintf'=>$_smarty_tpl->tpl_vars['folderPath']->value,'d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</p>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This folder needs these rights so you can upload your own images for the reassurances blocks.','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</p>
    </div>
</div>
<?php }
}
