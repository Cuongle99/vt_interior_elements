<?php
/* Smarty version 4.3.4, created on 2024-09-24 13:10:36
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leoelements\views\templates\front\LeoGenCodeLeoGenCode_40b41b76.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f2f28c7c5ae0_00568158',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e090cbf6db3c9cd1f0f10b0fed64d7308a8a4b31' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leoelements\\views\\templates\\front\\LeoGenCodeLeoGenCode_40b41b76.tpl',
      1 => 1727197836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f2f28c7c5ae0_00568158 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header_logo">
<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">            
<img class="logo img-fluid" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'logo','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">          </a>
</div><?php }
}
