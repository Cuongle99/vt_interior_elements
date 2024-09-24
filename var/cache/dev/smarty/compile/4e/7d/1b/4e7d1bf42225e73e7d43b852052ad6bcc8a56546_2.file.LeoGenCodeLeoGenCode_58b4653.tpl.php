<?php
/* Smarty version 4.3.4, created on 2024-09-21 21:57:54
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leoelements\views\templates\front\LeoGenCodeLeoGenCode_58b4653.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ef79a239b195_12566814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e7d1bf42225e73e7d43b852052ad6bcc8a56546' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leoelements\\views\\templates\\front\\LeoGenCodeLeoGenCode_58b4653.tpl',
      1 => 1726970274,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ef79a239b195_12566814 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header__button--wishlist">
    <a class="ap-btn-wishlist" href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'mywishlist'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
" rel="nofollow">
<i class="fa-light fa-heart"></i>
<span class="ap-total-wishlist ap-total"></span>
    </a>    
</div><?php }
}
