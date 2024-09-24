<?php
/* Smarty version 4.3.4, created on 2024-09-20 10:58:59
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leoelements\views\templates\admin\tab-profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ed8db3951f36_30491014',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e507be8167e0662fd4601cc8601f48e37671748' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leoelements\\views\\templates\\admin\\tab-profile.tpl',
      1 => 1676345970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed8db3951f36_30491014 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="position-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create New','mod'=>'leoelements'),$_smarty_tpl ) );?>
</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
            <div class="row">
                <label class="control-label col-lg-4 required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'leoelements'),$_smarty_tpl ) );?>
</label>
                <div class="col-lg-8">
                    <input type="text" name="position-name" id="position-name" value="" class="" required="required">
                </div>
            </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leoelements'),$_smarty_tpl ) );?>
</button>
        <button type="button" class="btn btn-primary btn-save-position"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create New','mod'=>'leoelements'),$_smarty_tpl ) );?>
</button>
      </div>
    </div>
  </div>
</div>
<div class="col-md-2 left-column-config">
    <div id="leoprofile-tabs">
        <span class="tab list-group-item active" data-tab="fieldset_general">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'General','mod'=>'leoelements'),$_smarty_tpl ) );?>

        </span>
        <span class="tab list-group-item spanheader" data-tab="fieldset_header">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Header','mod'=>'leoelements'),$_smarty_tpl ) );?>

        </span>
        <span class="tab list-group-item" data-tab="fieldset_content">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Home Content','mod'=>'leoelements'),$_smarty_tpl ) );?>

        </span>
        <span class="tab list-group-item" data-tab="fieldset_footer">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer','mod'=>'leoelements'),$_smarty_tpl ) );?>

        </span>
        <span class="tab list-group-item" data-tab="fieldset_background">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Background','mod'=>'leoelements'),$_smarty_tpl ) );?>

        </span>
        <span class="tab list-group-item" data-tab="fieldset_breadcrumb">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Breadcrumb','mod'=>'leoelements'),$_smarty_tpl ) );?>

        </span>
        <span class="tab list-group-item" data-tab="fieldset_productlist">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product List: Category, Manufacture, Search','mod'=>'leoelements'),$_smarty_tpl ) );?>

        </span>
        <span class="tab list-group-item" data-tab="fieldset_category">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category Page','mod'=>'leoelements'),$_smarty_tpl ) );?>

        </span>
        <span class="tab list-group-item" data-tab="fieldset_product">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Detail Page','mod'=>'leoelements'),$_smarty_tpl ) );?>

        </span>
        <span class="tab list-group-item" data-tab="fieldset_font">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Font Config','mod'=>'leoelements'),$_smarty_tpl ) );?>

        </span>
        <span class="tab list-group-item" data-tab="fieldset_custom">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Custom Css and Js','mod'=>'leoelements'),$_smarty_tpl ) );?>

        </span>
        <span class="tab list-group-item" data-tab="fieldset_variable_css">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Set Variable CSS','mod'=>'leoelements'),$_smarty_tpl ) );?>

        </span>
    </div>
</div>
<div class="col-md-10 right-column-config">
<?php echo $_smarty_tpl->tpl_vars['leoformcontent']->value;?>

</div><?php }
}
