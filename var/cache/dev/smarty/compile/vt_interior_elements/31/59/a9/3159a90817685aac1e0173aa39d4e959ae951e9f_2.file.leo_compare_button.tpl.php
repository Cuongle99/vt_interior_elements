<?php
/* Smarty version 4.3.4, created on 2024-09-20 08:00:32
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leofeature\views\templates\hook\leo_compare_button.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ed63e0221614_05496174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3159a90817685aac1e0173aa39d4e959ae951e9f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leofeature\\views\\templates\\hook\\leo_compare_button.tpl',
      1 => 1690855550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed63e0221614_05496174 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="compare">
	<a class="leo-compare-button btn-primary btn-product btn<?php if ($_smarty_tpl->tpl_vars['added']->value) {?> added<?php }?>" href="javascript:void(0)" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leo_compare_id_product']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php if ($_smarty_tpl->tpl_vars['added']->value) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove from Compare','mod'=>'leofeature'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Compare','mod'=>'leofeature'),$_smarty_tpl ) );
}?>">
		<span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
		<span class="leo-compare-bt-content">
			<i class="icon-btn-product icon-compare material-icons">&#xE915;</i>
			<span class="name-btn-product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to Compare','mod'=>'leofeature'),$_smarty_tpl ) );?>
</span>
		</span>
	</a>
</div><?php }
}
