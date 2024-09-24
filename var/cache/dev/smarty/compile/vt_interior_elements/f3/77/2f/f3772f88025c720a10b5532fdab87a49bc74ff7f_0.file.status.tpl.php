<?php
/* Smarty version 4.3.4, created on 2024-09-20 10:58:53
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leoslideshow\views\templates\hook\status.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ed8dad962b39_28030393',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3772f88025c720a10b5532fdab87a49bc74ff7f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leoslideshow\\views\\templates\\hook\\status.tpl',
      1 => 1690855553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed8dad962b39_28030393 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['gstatus']->value)) || (isset($_smarty_tpl->tpl_vars['status']->value))) {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['status_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_link']->value;?>
" alt="" /></a>
<?php }?>

<?php }
}
