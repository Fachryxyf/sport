<?php
/* Smarty version 4.2.1, created on 2024-12-04 16:33:09
  from 'module:psmboviewstemplateshookpu' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_675021d5eef548_67874527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '145572e37a3d526dd2d781a18209cc8b0a06ee2c' => 
    array (
      0 => 'module:psmboviewstemplateshookpu',
      1 => 1725437230,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_675021d5eef548_67874527 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-info">
    <?php echo $_smarty_tpl->tpl_vars['catchPhrase']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['linkTarget']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['linkText']->value;?>
</a>
</div>
<?php }
}
