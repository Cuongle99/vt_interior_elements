<?php
/* Smarty version 4.3.4, created on 2024-09-21 20:59:33
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leofeature\views\templates\hook\leo_cart_button_quantity.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ef6bf5c85df4_10074589',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6cd8fee2db620a9050986ab8a06661e12e1ea1a8' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leofeature\\views\\templates\\hook\\leo_cart_button_quantity.tpl',
      1 => 1719219716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ef6bf5c85df4_10074589 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="leo-touchspin">
    <div class="input-group">
      <input type="number" class="input-group form-control leo_cart_quantity" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leo_cart_product_quantity']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leo_cart_product_quantity']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-min="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leo_cart_product_quantity']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
">
      <div class="input-group-btn-vertical">
        <button class="btn btn-primary plus" type="button">+</button>
        <button class="btn btn-primary minus" type="button">-</button>
      </div>
    </div>
</div>
<?php }
}
