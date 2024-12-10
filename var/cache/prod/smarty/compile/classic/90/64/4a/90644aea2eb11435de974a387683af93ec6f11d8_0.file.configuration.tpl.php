<?php
/* Smarty version 4.2.1, created on 2024-12-04 21:16:14
  from 'C:\xampp\htdocs\sport\modules\ps_checkout\views\templates\admin\configuration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6750642e42c068_17256795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '90644aea2eb11435de974a387683af93ec6f11d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sport\\modules\\ps_checkout\\views\\templates\\admin\\configuration.tpl',
      1 => 1725437230,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6750642e42c068_17256795 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['hasRequiredDependencies']->value)) && !$_smarty_tpl->tpl_vars['hasRequiredDependencies']->value) {?>
  <?php echo '<script'; ?>
 src="https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc-dependencies-resolver.umd.js"><?php echo '</script'; ?>
>
  <div id="mbo-cdc-container"></div>

  <?php echo '<script'; ?>
 defer>
    const renderMboCdcDependencyResolver = window?.mboCdcDependencyResolver?.render
    const context = {
      ...<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['requiredDependencies']->value ));?>
,
      onDependenciesResolved: () => {
        setTimeout(() => {
          window.location.reload()
        }, 2000);
      },
      onDependencyResolved: (dependencyData) => console.log('Dependency installed', dependencyData),
      onDependencyFailed: (dependencyData) => console.log('Failed to install dependency', dependencyData),
      onDependenciesFailed: () => console.log('There are some errors'),
    }
    renderMboCdcDependencyResolver(context, '#mbo-cdc-container')
  <?php echo '</script'; ?>
>
<?php }?>

<div id="app"<?php if ((isset($_smarty_tpl->tpl_vars['hasRequiredDependencies']->value)) && !$_smarty_tpl->tpl_vars['hasRequiredDependencies']->value) {?> style="display:none;"<?php }?>></div>

<style>
  /** Hide native multistore module activation panel, because of visual regressions on non-bootstrap content */
  #content.nobootstrap div.bootstrap.panel {
    display: none;
  }
  #content.nobootstrap .page-head h4.page-subtitle {
    display: none;
  }
</style>

<?php echo '<script'; ?>
>
  // Enhance page title with subtitle and module version
  const pageTitle = document.querySelector('#content.nobootstrap .page-head h2.page-title');
  const pageSubtitle = document.querySelector('#content.nobootstrap .page-head h4.page-subtitle');

  if (pageTitle) {
    pageTitle.textContent = pageTitle.textContent
      + (pageSubtitle ? ' ' + pageSubtitle.textContent : '')
      + (window?.store?.context?.moduleVersion ? ' v' + window.store.context.moduleVersion : '')
  }
<?php echo '</script'; ?>
>
<?php }
}
