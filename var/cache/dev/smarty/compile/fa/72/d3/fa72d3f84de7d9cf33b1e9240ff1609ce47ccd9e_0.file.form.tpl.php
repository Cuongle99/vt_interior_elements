<?php
/* Smarty version 4.3.4, created on 2024-09-20 10:58:59
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leoelements\views\templates\admin\leo_elements_profiles\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ed8db391a296_78455078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa72d3f84de7d9cf33b1e9240ff1609ce47ccd9e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leoelements\\views\\templates\\admin\\leo_elements_profiles\\helpers\\form\\form.tpl',
      1 => 1676345970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed8db391a296_78455078 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90733083466ed8db38bf2d9_48052476', "field");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_90733083466ed8db38bf2d9_48052476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_90733083466ed8db38bf2d9_48052476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'product_list_data') {?>
        <input type="hidden" data-title="<?php echo $_smarty_tpl->tpl_vars['input']->value['title'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value='<?php echo $_smarty_tpl->tpl_vars['input']->value['product_list'];?>
' id="<?php echo $_smarty_tpl->tpl_vars['input']->value['id'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['input']->value['url'];?>
">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'chose_image') {?>
        <div class="col-lg-8">
            <p> 
                <input id="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" type="text" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']],'html','UTF-8' ));?>
"> 
            </p>
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Put image with url https or','mod'=>'leoelements'),$_smarty_tpl ) );?>
</span>
            <a href="filemanager/dialog.php?type=1&field_id=<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="btn btn-default img-upload"  data-input-name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" type="button">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select image','mod'=>'leoelements'),$_smarty_tpl ) );?>
 <i class="icon-angle-right"></i>
            </a>

        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'mutiple_position_hook') {?>
        <?php if ($_smarty_tpl->tpl_vars['input']->value['is_edit']) {?>
        <div class="col-lg-12">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['content'], 'content');
$_smarty_tpl->tpl_vars['content']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->do_else = false;
?>
            <div class="panel panel-default panel-<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['content']->value['position_key'];?>
">
                <div class="panel-collapse collapse in">
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select content for each hook.','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['hook_list'], 'hookl');
$_smarty_tpl->tpl_vars['hookl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hookl']->value) {
$_smarty_tpl->tpl_vars['hookl']->do_else = false;
?>
                    <h2><?php echo $_smarty_tpl->tpl_vars['hookl']->value;?>
</h2>
                    <div class="row">
                        <div class="col-lg-6 loading-wraper">
                            <select data-hook="<?php echo $_smarty_tpl->tpl_vars['hookl']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['hookl']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['content']->value['position_key'];?>
" data-position="<?php echo $_smarty_tpl->tpl_vars['content']->value['position_key'];?>
" class="select-hook-position" data-title="<?php echo $_smarty_tpl->tpl_vars['content']->value['name'];?>
">
                                <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None','mod'=>'leoelements'),$_smarty_tpl ) );?>
</option>
                                <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['leoelements_contents_hook'][$_smarty_tpl->tpl_vars['hookl']->value]))) {?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['leoelements_contents_hook'][$_smarty_tpl->tpl_vars['hookl']->value], 'hookc');
$_smarty_tpl->tpl_vars['hookc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hookc']->value) {
$_smarty_tpl->tpl_vars['hookc']->do_else = false;
?>
                                    <option data-url="<?php echo $_smarty_tpl->tpl_vars['hookc']->value['url'];?>
"
                                    <?php if ((isset($_smarty_tpl->tpl_vars['content']->value['params'][$_smarty_tpl->tpl_vars['hookl']->value])) && $_smarty_tpl->tpl_vars['content']->value['params'][$_smarty_tpl->tpl_vars['hookl']->value] == $_smarty_tpl->tpl_vars['hookc']->value['content_key']) {?>
                                        selected = "selected"
                                    <?php }?>
                                    value="<?php echo $_smarty_tpl->tpl_vars['hookc']->value['content_key'];?>
"><?php echo $_smarty_tpl->tpl_vars['hookc']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <?php }?>
                                <option value="createnew"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create New','mod'=>'leoelements'),$_smarty_tpl ) );?>
</option>
                            </select>

                        </div>
                        <div class="col-lg-6 hook-button" style="display:none">
                            <a href="" target="_blank" class="button button-primary button-hero edit_with_button_link"><img src="<?php echo $_smarty_tpl->tpl_vars['input']->value['icon_url'];?>
" alt="Leo Elements Logo"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit with Leo Elements','mod'=>'leoelements'),$_smarty_tpl ) );?>
</a>
                        </div>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>   
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <div class="panel panel-postion-content panel-<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-new" style="display:none">
                <h2>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please save the profile before using.','mod'=>'leoelements'),$_smarty_tpl ) );?>

                </h2>
            </div>
        </div>
        <?php } else { ?>
        <div class="col-lg-12">
        <div class="panel">
            <h2>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please save the profile before using','mod'=>'leoelements'),$_smarty_tpl ) );?>

            </h2>
        </div>
        </div>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'position_hook') {?>
        <?php if ($_smarty_tpl->tpl_vars['input']->value['is_edit']) {?>
        <div class="col-lg-12">
            <div class="panel panel-default panel-<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
">
                <div id="collapse<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please select content for each hook.','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['hook_list'], 'hookl');
$_smarty_tpl->tpl_vars['hookl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hookl']->value) {
$_smarty_tpl->tpl_vars['hookl']->do_else = false;
?>
                            <h2><?php echo $_smarty_tpl->tpl_vars['hookl']->value;?>
</h2>

                            <div class="row">
                                <div class="col-lg-6 loading-wraper">
                                    <select data-hook="<?php echo $_smarty_tpl->tpl_vars['hookl']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['hookl']->value;?>
" data-position="" class="select-hook-position">
                                        <option value="0"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'None','mod'=>'leoelements'),$_smarty_tpl ) );?>
</option>
                                        <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['leoelements_contents_hook'][$_smarty_tpl->tpl_vars['hookl']->value]))) {?>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['leoelements_contents_hook'][$_smarty_tpl->tpl_vars['hookl']->value], 'hookc');
$_smarty_tpl->tpl_vars['hookc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hookc']->value) {
$_smarty_tpl->tpl_vars['hookc']->do_else = false;
?>
                                            <option data-url="<?php echo $_smarty_tpl->tpl_vars['hookc']->value['url'];?>
"
                                            <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']]))) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']], 'hookval', false, 'hookname');
$_smarty_tpl->tpl_vars['hookval']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hookname']->value => $_smarty_tpl->tpl_vars['hookval']->value) {
$_smarty_tpl->tpl_vars['hookval']->do_else = false;
?>
                                                    <?php if (($_smarty_tpl->tpl_vars['hookname']->value == $_smarty_tpl->tpl_vars['hookl']->value) && $_smarty_tpl->tpl_vars['hookc']->value['content_key'] == $_smarty_tpl->tpl_vars['hookval']->value) {?>
                                                    selected = "selected"
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                            value="<?php echo $_smarty_tpl->tpl_vars['hookc']->value['content_key'];?>
"><?php echo $_smarty_tpl->tpl_vars['hookc']->value['name'];?>
</option>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <?php }?>
                                        <option value="createnew"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create New','mod'=>'leoelements'),$_smarty_tpl ) );?>
</option>
                                    </select>

                                </div>
                                <div class="col-lg-6 hook-button" style="display:none">
                                    <a href="" target="_blank" class="button button-primary button-hero edit_with_button_link"><img src="<?php echo $_smarty_tpl->tpl_vars['input']->value['icon_url'];?>
" alt="Leo Elements Logo"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit with Leo Elements','mod'=>'leoelements'),$_smarty_tpl ) );?>
</a>
                                </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
            </div>
            <div class="panel panel-<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
-new" style="display:none">
                <h2>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please save the profile before using.','mod'=>'leoelements'),$_smarty_tpl ) );?>

                </h2>
            </div>
        </div>
        <?php } else { ?>
        <div class="col-lg-12">
        <div class="panel">
            <h2>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please save the profile before using','mod'=>'leoelements'),$_smarty_tpl ) );?>

            </h2>
        </div>
        </div>
        <?php }?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'font_h') {?>
        <div>
            <div class="col-lg-3">
                <h2><?php echo $_smarty_tpl->tpl_vars['input']->value['htitle'];?>
</h2>
                <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['input']->value['desc'];?>
</p>
            </div>
            <div class="col-lg-9">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['items'], 'item', false, 'ikey');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ikey']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    
                    <?php if (($_smarty_tpl->tpl_vars['item']->value['type'] == 'select')) {?>
                        <div class="t_span4 col-lg-4">
                        <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['label']))) {?><h4 class="title-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</h4><?php }?>
                        <select name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'html','UTF-8' ));?>
"
                                class="<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['class']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['class'],'html','UTF-8' ));
}?>"
                                id="<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['id']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['id'],'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['name'],'html','UTF-8' ));
}?>"
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['multiple'])) && $_smarty_tpl->tpl_vars['item']->value['multiple']) {?> multiple="multiple"<?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['size']))) {?> size="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['size'],'html','UTF-8' ));?>
"<?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['onchange']))) {?> onchange="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['onchange'],'html','UTF-8' ));?>
"<?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['disabled'])) && $_smarty_tpl->tpl_vars['item']->value['disabled']) {?> disabled="disabled"<?php }?>>
                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['options']['default']))) {?>
                                <option value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['options']['default']['value'],'html','UTF-8' ));?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['options']['default']['label'],'html','UTF-8' ));?>
</option>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['options']['optiongroup']))) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['options']['optiongroup']['query'], 'optiongroup');
$_smarty_tpl->tpl_vars['optiongroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['optiongroup']->value) {
$_smarty_tpl->tpl_vars['optiongroup']->do_else = false;
?>
                                    <optgroup label="<?php echo $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['item']->value['options']['optiongroup']['label']];?>
">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['optiongroup']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['query']], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['id']];?>
"
                                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['multiple']))) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                <?php } else { ?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['id']]) {?>selected="selected"<?php }?>
                                                <?php }?>
                                            ><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['options']['name']];?>
</option>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </optgroup>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php } else { ?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['options']['query'], 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                                    <?php if (is_object($_smarty_tpl->tpl_vars['option']->value)) {?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['item']->value['options']['id']};?>
"
                                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['multiple']))) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['item']->value['options']['id']}) {?>
                                                        selected="selected"
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php } else { ?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']] == $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['item']->value['options']['id']}) {?>
                                                    selected="selected"
                                                <?php }?>
                                            <?php }?>
                                        ><?php echo $_smarty_tpl->tpl_vars['option']->value->{$_smarty_tpl->tpl_vars['item']->value['options']['name']};?>
</option>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['option']->value == "-") {?>
                                        <option value="">-</option>
                                    <?php } else { ?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['id']];?>
"
                                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['multiple']))) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']], 'field_value');
$_smarty_tpl->tpl_vars['field_value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field_value']->value) {
$_smarty_tpl->tpl_vars['field_value']->do_else = false;
?>
                                                    <?php if ($_smarty_tpl->tpl_vars['field_value']->value == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['id']]) {?>
                                                        selected="selected"
                                                    <?php }?>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php } else { ?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']])) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']] == $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['id']]) {?>
                                                    selected="selected"
                                                <?php }?>
                                            <?php }?>
                                        ><?php echo $_smarty_tpl->tpl_vars['option']->value[$_smarty_tpl->tpl_vars['item']->value['options']['name']];?>
</option>

                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <?php }?>
                        </select>
                        </div>
                        
                        
                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'color') {?>
                        <div class="t_span4 col-lg-4">
                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['label']))) {?><h4 class="title-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</h4><?php }?>
                            <div class="input-group col-lg-5">
                                <input type="color"
                                data-hex="true"
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['class']))) {?> class="<?php echo $_smarty_tpl->tpl_vars['item']->value['class'];?>
"
                                <?php } else { ?> class="color mColorPickerInput"<?php }?>
                                name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
"
                                value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']],'html','UTF-8' ));?>
" />
                            </div>
                        </div>
                        
                    <?php } elseif ($_smarty_tpl->tpl_vars['item']->value['type'] == 'text') {?>
                        <div class="t_span4 col-lg-4">
                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['label']))) {?><h4 class="title-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</h4><?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) && (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']]))) {?>
                                <?php $_smarty_tpl->_assignInScope('value_text', $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']][$_smarty_tpl->tpl_vars['item']->value['name']]);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('value_text', '');?>
                            <?php }?>
                            
                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['item']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['item']->value['suffix']))) {?>
                            <div class="input-group<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value['class'];
}?>">
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['maxchar'])) && $_smarty_tpl->tpl_vars['item']->value['maxchar']) {?>
                            <span id="<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['id']))) {
echo $_smarty_tpl->tpl_vars['item']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['item']->value['name'];
}?>_counter" class="input-group-addon"><span class="text-count-down"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['maxchar'] ));?>
</span></span>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['prefix']))) {?>
                            <span class="input-group-addon">
                              <?php echo $_smarty_tpl->tpl_vars['item']->value['prefix'];?>

                            </span>
                            <?php }?>
                            <input type="text"
                                name="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"
                                id="<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['id']))) {
echo $_smarty_tpl->tpl_vars['item']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['item']->value['name'];
}?>"
                                value="<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['string_format'])) && $_smarty_tpl->tpl_vars['item']->value['string_format']) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( sprintf($_smarty_tpl->tpl_vars['item']->value['string_format'],$_smarty_tpl->tpl_vars['value_text']->value),'html','UTF-8' ));
} else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value_text']->value,'html','UTF-8' ));
}?>"
                                class="<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['class']))) {
echo $_smarty_tpl->tpl_vars['item']->value['class'];
}
if ($_smarty_tpl->tpl_vars['item']->value['type'] == 'tags') {?> tagify<?php }?>"
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['size']))) {?> size="<?php echo $_smarty_tpl->tpl_vars['item']->value['size'];?>
"<?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['maxchar'])) && $_smarty_tpl->tpl_vars['item']->value['maxchar']) {?> data-maxchar="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['maxchar'] ));?>
"<?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['maxlength'])) && $_smarty_tpl->tpl_vars['item']->value['maxlength']) {?> maxlength="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['maxlength'] ));?>
"<?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['readonly'])) && $_smarty_tpl->tpl_vars['item']->value['readonly']) {?> readonly="readonly"<?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['disabled'])) && $_smarty_tpl->tpl_vars['item']->value['disabled']) {?> disabled="disabled"<?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['autocomplete'])) && !$_smarty_tpl->tpl_vars['item']->value['autocomplete']) {?> autocomplete="off"<?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['required'])) && $_smarty_tpl->tpl_vars['item']->value['required']) {?> required="required" <?php }?>
                                <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['placeholder'])) && $_smarty_tpl->tpl_vars['item']->value['placeholder']) {?> placeholder="<?php echo $_smarty_tpl->tpl_vars['item']->value['placeholder'];?>
"<?php }?>
                                />
                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['suffix']))) {?>
                            <span class="input-group-addon">
                              <?php echo $_smarty_tpl->tpl_vars['item']->value['suffix'];?>

                            </span>
                            <?php }?>

                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['maxchar'])) || (isset($_smarty_tpl->tpl_vars['item']->value['prefix'])) || (isset($_smarty_tpl->tpl_vars['item']->value['suffix']))) {?>
                            </div>
                            <?php }?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['maxchar'])) && $_smarty_tpl->tpl_vars['item']->value['maxchar']) {?>
                            <?php echo '<script'; ?>
 type="text/javascript">
                            $(document).ready(function(){
                                countDown($("#<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['id']))) {
echo $_smarty_tpl->tpl_vars['item']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['item']->value['name'];
}?>"), $("#<?php if ((isset($_smarty_tpl->tpl_vars['item']->value['id']))) {
echo $_smarty_tpl->tpl_vars['item']->value['id'];
} else {
echo $_smarty_tpl->tpl_vars['item']->value['name'];
}?>_counter"));
                            });
                            <?php echo '</script'; ?>
>
                            <?php }?>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    <?php }?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
