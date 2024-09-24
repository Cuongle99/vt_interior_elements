<?php
/* Smarty version 4.3.4, created on 2024-09-20 07:49:45
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\admincp\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ed615941ce44_67324008',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd514d88ca320f7d5d63affc6d47e355a57fa34e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\admincp\\themes\\default\\template\\content.tpl',
      1 => 1721035697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed615941ce44_67324008 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
