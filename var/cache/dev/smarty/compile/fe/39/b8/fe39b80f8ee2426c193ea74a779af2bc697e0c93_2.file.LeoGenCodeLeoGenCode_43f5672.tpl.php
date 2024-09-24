<?php
/* Smarty version 4.3.4, created on 2024-09-24 13:10:36
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leoelements\views\templates\front\LeoGenCodeLeoGenCode_43f5672.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66f2f28c83d2e8_90479164',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe39b80f8ee2426c193ea74a779af2bc697e0c93' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leoelements\\views\\templates\\front\\LeoGenCodeLeoGenCode_43f5672.tpl',
      1 => 1727197836,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66f2f28c83d2e8_90479164 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="footer_logo">
<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">            
<img class="logo_white img-fluid" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'logo','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">          </a>
</div><?php }
}
