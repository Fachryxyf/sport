<?php
/* Smarty version 4.2.1, created on 2024-12-04 13:01:08
  from 'module:psnewproductsviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_674ff0246a2148_21952808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8df44403a47041b050fac755e17268c2a7c3e7' => 
    array (
      0 => 'module:psnewproductsviewstemplat',
      1 => 1666708672,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/productlist.tpl' => 1,
  ),
),false)) {
function content_674ff0246a2148_21952808 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '359127534674ff02469d1d6_97489813';
?>

<section class="featured-products clearfix mt-3">
  <h2 class="h2 products-section-title text-uppercase">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'New products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </h2>
  <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['products']->value,'productClass'=>"col-xs-12 col-sm-6 col-lg-4 col-xl-3"), 0, false);
?>
  <a class="all-product-link float-xs-left float-md-right h4" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['allNewProductsLink']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'All new products','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
<i class="material-icons">&#xE315;</i>
  </a>
</section>

<?php }
}
