<?php
/* Smarty version 4.3.4, created on 2024-09-20 10:58:53
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leoslideshow\views\templates\hook\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ed8dadb9eb84_35790681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '71b591bad391f2c2d0896e221e1dae3bf94f88c6' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leoslideshow\\views\\templates\\hook\\panel.tpl',
      1 => 1690855553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed8dadb9eb84_35790681 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="leoslideshow-group">

	<div class="panel panel-default">
		<div class="panel-heading"><i class="icon-cogs"></i> <?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
		
		<div class="panel-content" id="slideshowgeneralsetting">
			<ul class="nav nav-tabs leoslideshow-tablist" role="tablist">
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_0') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_0" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General Setting','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_1_1') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_1_1" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image Setting','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_2_2') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_2_2" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CSS Setting','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_3_3') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_3_3" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Navigator and Direction','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_4_4') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_4_4" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Timer Options','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_5_5') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_5_5" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Animation','mod'=>'leoslideshow'),$_smarty_tpl ) );?>
</a>
				</li>
			</ul>
			<div class="tab-content">
				<?php echo $_smarty_tpl->tpl_vars['globalform']->value;?>
			</div>
		</div>	

	</div>
		
</div><?php }
}
