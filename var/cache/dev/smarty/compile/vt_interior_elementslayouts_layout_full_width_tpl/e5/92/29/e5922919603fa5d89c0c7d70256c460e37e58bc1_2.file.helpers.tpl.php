<?php
/* Smarty version 4.3.4, created on 2024-09-20 07:49:48
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\themes\vt_interior_elements\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ed615c846da0_91875691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5922919603fa5d89c0c7d70256c460e37e58bc1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\themes\\vt_interior_elements\\templates\\_partials\\helpers.tpl',
      1 => 1718674224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed615c846da0_91875691 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\var\\cache\\dev\\smarty\\compile\\vt_interior_elementslayouts_layout_full_width_tpl\\e5\\92\\29\\e5922919603fa5d89c0c7d70256c460e37e58bc1_2.file.helpers.tpl.php',
    'uid' => 'e5922919603fa5d89c0c7d70256c460e37e58bc1',
    'call_name' => 'smarty_template_function_renderLogo_207168994466ed615c8428e8_61595906',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_207168994466ed615c8428e8_61595906 */
if (!function_exists('smarty_template_function_renderLogo_207168994466ed615c8428e8_61595906')) {
function smarty_template_function_renderLogo_207168994466ed615c8428e8_61595906(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      loading="lazy"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_207168994466ed615c8428e8_61595906 */
}
