<?php
/* Smarty version 4.3.4, created on 2024-09-20 07:49:25
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\admincp\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ed6145196193_37794169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e4cd04267ec6be8e7622b4290ba24aef4a278f0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\admincp\\themes\\new-theme\\template\\content.tpl',
      1 => 1721035697,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed6145196193_37794169 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
