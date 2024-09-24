<?php
/* Smarty version 4.3.4, created on 2024-09-21 21:58:03
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leoelements\views\templates\front\LeoGenCodeLeoGenCode_deea721.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ef79abac7fe8_03306054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1345693703e8d767fe12500d465d8dc2e3d35eb4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leoelements\\views\\templates\\front\\LeoGenCodeLeoGenCode_deea721.tpl',
      1 => 1726970283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ef79abac7fe8_03306054 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header__button--wishlist">
    <a class="ap-btn-wishlist" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'mywishlist'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" rel="nofollow">
<i class="fa-light fa-heart"></i>
<span class="ap-total-wishlist ap-total"></span>
    </a>    
</div><?php }
}
