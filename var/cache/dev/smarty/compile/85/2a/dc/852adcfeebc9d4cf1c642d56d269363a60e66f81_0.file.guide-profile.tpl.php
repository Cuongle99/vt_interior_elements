<?php
/* Smarty version 4.3.4, created on 2024-09-20 10:58:49
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leoelements\views\templates\admin\guide-profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ed8da95721e0_34864288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '852adcfeebc9d4cf1c642d56d269363a60e66f81' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leoelements\\views\\templates\\admin\\guide-profile.tpl',
      1 => 1676345970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed8da95721e0_34864288 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel panel-default">
    <div class="panel-heading">
        <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse1">
                <span class="glyphicon glyphicon-collapse-down"> </span><i class="icon icon-tags"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guide','mod'=>'leoelements'),$_smarty_tpl ) );?>
</a>
        </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse ">
        <div class="panel-body">
        	<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'1. Create Profile','mod'=>'leoelements'),$_smarty_tpl ) );?>
 :</h4>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'First you have to create a profile. The profile can be used as a homepage or a landing page. you can make a new url for your profile','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When you build a new profile, we will automatically create a Position (including header, content, footer) for it','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You can create sperator profiles for desktop, table and mobile','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>
	<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'2. Create Positions','mod'=>'leoelements'),$_smarty_tpl ) );?>
 :</h4>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position is a part of a profile. Each profile will have a header, content home page, and footer.','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A Position can be used for one or more profiles.','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>
	<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'3. Build content for each hook','mod'=>'leoelements'),$_smarty_tpl ) );?>
 :</h4>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'A position can have one or more hooks.','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'For example: Header will have hooks such as:','mod'=>'leoelements'),$_smarty_tpl ) );?>
 displayBanner,displayNav1,displayNav2,displayTop,displayNavFullWidth.</p>
	<p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please install module leoelements to build content for each hook.','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>
        </div>

    </div>
</div><?php }
}
