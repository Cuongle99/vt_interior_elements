<?php
/* Smarty version 4.3.4, created on 2024-09-20 07:49:49
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\themes\vt_interior_elements\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ed615dad8fc2_34322739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e8b50b31fd764b0e715064b76b5a42d1462c171' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\themes\\vt_interior_elements\\templates\\errors\\not-found.tpl',
      1 => 1724722053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed615dad8fc2_34322739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_146544202266ed615dad5ef4_86200459', 'page_content');
?>

</section>
<?php }
/* {block "error_content"} */
class Block_194220181666ed615dad64f9_72207093 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      
      <h1>404</h1>
      <h2>Page not found</h2>
      <p>Sorry but the page you are looking for doesn't exist.</p>

    <?php
}
}
/* {/block "error_content"} */
/* {block 'search'} */
class Block_55580623366ed615dad6bb7_09169962 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_75773036166ed615dad7ae9_87760833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_146544202266ed615dad5ef4_86200459 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_146544202266ed615dad5ef4_86200459',
  ),
  'error_content' => 
  array (
    0 => 'Block_194220181666ed615dad64f9_72207093',
  ),
  'search' => 
  array (
    0 => 'Block_55580623366ed615dad6bb7_09169962',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_75773036166ed615dad7ae9_87760833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194220181666ed615dad64f9_72207093', "error_content", $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55580623366ed615dad6bb7_09169962', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75773036166ed615dad7ae9_87760833', 'hook_not_found', $this->tplIndex);
?>


    <div class="btn--backhome"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go back','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</a></div>

  <?php
}
}
/* {/block 'page_content'} */
}
