<?php
/* Smarty version 4.2.1, created on 2024-12-04 17:15:05
  from 'C:\xampp\htdocs\sport\themes\classic\templates\checkout\_partials\steps\unreachable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_67502ba9513fe2_85475572',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '03371a72b9b1f58bdd8066d089be05887279000f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\sport\\themes\\classic\\templates\\checkout\\_partials\\steps\\unreachable.tpl',
      1 => 1666708672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67502ba9513fe2_85475572 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83847363167502ba9513418_89018004', 'step');
?>

<?php }
/* {block 'step'} */
class Block_83847363167502ba9513418_89018004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step' => 
  array (
    0 => 'Block_83847363167502ba9513418_89018004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="checkout-step -unreachable" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['identifier']->value, ENT_QUOTES, 'UTF-8');?>
">
    <h1 class="step-title js-step-title h3">
      <span class="step-number"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['position']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>

    </h1>
  </section>
<?php
}
}
/* {/block 'step'} */
}
