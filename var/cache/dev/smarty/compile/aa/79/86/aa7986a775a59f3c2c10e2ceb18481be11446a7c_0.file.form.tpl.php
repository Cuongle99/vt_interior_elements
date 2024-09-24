<?php
/* Smarty version 4.3.4, created on 2024-09-21 20:53:01
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leoelements\views\templates\admin\_configure\leo_elements_product_list\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ef6a6daadd18_60079381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa7986a775a59f3c2c10e2ceb18481be11446a7c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leoelements\\views\\templates\\admin\\_configure\\leo_elements_product_list\\helpers\\form\\form.tpl',
      1 => 1676345970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ef6a6daadd18_60079381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86085172666ef6a6da7b3f9_47441582', "field");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "field"} */
class Block_86085172666ef6a6da7b3f9_47441582 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'field' => 
  array (
    0 => 'Block_86085172666ef6a6da7b3f9_47441582',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'leoelement_file') {?>
        <div class="col-lg-12">
            <div class="alert alert-info">
                <label class="control-label">
                    <?php echo $_smarty_tpl->tpl_vars['input']->value['title'];?>

                </label> <br/>
                <a href="javascript:void(0)" class="see-file" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click to open or close file','mod'=>'leoelements'),$_smarty_tpl ) );?>
" data-element="hook_display_product_additional_info">
                    <?php echo $_smarty_tpl->tpl_vars['input']->value['file_link'];?>

                </a>
            </div>
        </div>
        <div class="col-lg-12 filecontent" style="display: none;">
            <textarea rows="40"><?php echo $_smarty_tpl->tpl_vars['input']->value['file_content'];?>
</textarea>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'leoelement_Sample') {?>
        <div class="row">
            <label class="control-label col-lg-4"></label>
            <a class="btn btn-primary col-lg-8" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Click Here to Import From Demo Product List','mod'=>'leoelements'),$_smarty_tpl ) );?>
</a>
            <br/>
        </div>    
      
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                  <div class="card card-body">
                    <?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? 12+1 - (1) : 1-(12)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>
                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                            <div class="item-demo">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['input']->value['demoplistlink'];?>
&sampleplist=type<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
" class="btn-select-plist btn btn-default" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product image thumbs bottom','mod'=>'leoelements'),$_smarty_tpl ) );?>
">
                                <span class="block-image product-list-sample pltype<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
">
                                    
                                </span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create Product List with Type','mod'=>'leoelements'),$_smarty_tpl ) );?>
 <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a>
                            </div>
                        </div>
                    <?php }
}
?>
                  </div>
                </div>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'leoelement_Grid') {?>
        <div class="<?php if (version_compare(_PS_VERSION_,'1.7.7.9','>')) {?>col-lg-8<?php } else { ?>col-lg-9<?php }?> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['type'],'html','UTF-8' ));?>
">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="panel product-container">
                        <div class="desc-box">product-container</div>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['blockList'], 'vblock', false, 'kBlock');
$_smarty_tpl->tpl_vars['vblock']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['kBlock']->value => $_smarty_tpl->tpl_vars['vblock']->value) {
$_smarty_tpl->tpl_vars['vblock']->do_else = false;
?>
                                <div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['vblock']->value['class'],'html','UTF-8' ));?>
">
                                    <div class="panel-heading"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['vblock']->value['title'],'html','UTF-8' ));?>
</div>
                                    <div class="content <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['kBlock']->value,'html','UTF-8' ));?>
-block-content">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['input']->value['params'][$_smarty_tpl->tpl_vars['kBlock']->value]))) {?>
                                    <?php $_smarty_tpl->_assignInScope('blockElement', $_smarty_tpl->tpl_vars['input']->value['params'][$_smarty_tpl->tpl_vars['kBlock']->value]);?>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blockElement']->value, 'gridElement');
$_smarty_tpl->tpl_vars['gridElement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gridElement']->value) {
$_smarty_tpl->tpl_vars['gridElement']->do_else = false;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['gridElement']->value['name'] == 'functional_buttons') {?>
                                            <?php $_smarty_tpl->_assignInScope('iconVal', 'icon-puzzle-piece');?>
                                            <?php $_smarty_tpl->_assignInScope('NameVal', $_smarty_tpl->tpl_vars['gridElement']->value['name']);?>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['gridElement']->value['name'] == 'code') {?>
                                            <?php $_smarty_tpl->_assignInScope('iconVal', 'icon-code');?>
                                            <?php $_smarty_tpl->_assignInScope('NameVal', 'code');?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('iconVal', $_smarty_tpl->tpl_vars['input']->value['elements'][$_smarty_tpl->tpl_vars['gridElement']->value['name']]['icon']);?>
                                            <?php $_smarty_tpl->_assignInScope('NameVal', $_smarty_tpl->tpl_vars['input']->value['elements'][$_smarty_tpl->tpl_vars['gridElement']->value['name']]['name']);?>
                                        <?php }?>
                                        <div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridElement']->value['name'],'html','UTF-8' ));?>
 plist-element" data-element='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridElement']->value['name'],'html','UTF-8' ));?>
'><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iconVal']->value,'html','UTF-8' ));?>
"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['NameVal']->value,'html','UTF-8' ));?>

                                            <?php if ($_smarty_tpl->tpl_vars['gridElement']->value['name'] == 'code') {?>
                                            <div class="desc-box"><i class="icon-code"></i> tpl code</div>
                                            <?php }?>
                                            <div class="pull-right">
                                                <a class="plist-eremove"><i class="icon-trash"></i></a>
                                                <a class="plist-eedit" data-element='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridElement']->value['name'],'html','UTF-8' ));?>
'><i class="icon-edit"></i></a>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['gridElement']->value['name'] == 'functional_buttons') {?>
                                                <div class="content">
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['gridElement']->value['element']))) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gridElement']->value['element'], 'gridSubElement');
$_smarty_tpl->tpl_vars['gridSubElement']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gridSubElement']->value) {
$_smarty_tpl->tpl_vars['gridSubElement']->do_else = false;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['gridSubElement']->value['name'] == 'code') {?>
                                                            <?php $_smarty_tpl->_assignInScope('iconVal', 'icon-code');?>
                                                            <?php $_smarty_tpl->_assignInScope('NameVal', 'code');?>
                                                        <?php } else { ?>
                                                            <?php $_smarty_tpl->_assignInScope('iconVal', $_smarty_tpl->tpl_vars['input']->value['elements'][$_smarty_tpl->tpl_vars['gridSubElement']->value['name']]['icon']);?>
                                                            <?php $_smarty_tpl->_assignInScope('NameVal', $_smarty_tpl->tpl_vars['input']->value['elements'][$_smarty_tpl->tpl_vars['gridSubElement']->value['name']]['name']);?>
                                                        <?php }?>
                                                        <div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridSubElement']->value['name'],'html','UTF-8' ));?>
 plist-element" data-element='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridSubElement']->value['name'],'html','UTF-8' ));?>
'><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['iconVal']->value,'html','UTF-8' ));?>
"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['NameVal']->value,'html','UTF-8' ));?>

                                                            <?php if ($_smarty_tpl->tpl_vars['gridSubElement']->value['name'] == 'code') {?>
                                                            <div class="desc-box"><i class="icon-code"></i> tpl code</div>
                                                            <?php }?>
                                                            <div class="pull-right">
                                                                <a class="plist-eremove"><i class="icon-trash"></i></a>
                                                                <a class="plist-eedit" data-element='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['gridSubElement']->value['name'],'html','UTF-8' ));?>
'><i class="icon-edit"></i></a>
                                                            </div>
                                                            <?php if ($_smarty_tpl->tpl_vars['gridSubElement']->value['name'] == 'code') {?>
                                                                <div class="content-code">
                                                                    <textarea name="filecontent" id="filecontent" rows="5" value="" class=""><?php echo $_smarty_tpl->tpl_vars['gridSubElement']->value['code'];?>
</textarea>
                                                                </div>
                                                            <?php }?>
                                                        </div>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                    <?php }?>
                                                </div>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['gridElement']->value['name'] == 'code') {?>
																								
                                                <div class="content-code">
                                                    <textarea name="filecontent" rows="5" class=""><?php echo $_smarty_tpl->tpl_vars['gridElement']->value['code'];?>
</textarea>
                                                </div>
                                            <?php }?>
                                        </div>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php }?>
                                    </div>
                                </div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 element-list content">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['elements'], 'eItem', false, 'eKey');
$_smarty_tpl->tpl_vars['eItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['eKey']->value => $_smarty_tpl->tpl_vars['eItem']->value) {
$_smarty_tpl->tpl_vars['eItem']->do_else = false;
?>
                    <div class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['eKey']->value,'html','UTF-8' ));?>
 plist-element" data-element='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['eKey']->value,'html','UTF-8' ));?>
'><i class="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['eItem']->value['icon'],'html','UTF-8' ));?>
"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['eItem']->value['name'],'html','UTF-8' ));?>

                        <div class="pull-right">
                            <a class="plist-eremove"><i class="icon-trash"></i></a>
                            <a class="plist-eedit" data-element='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['eKey']->value,'html','UTF-8' ));?>
'><i class="icon-edit"></i></a>
                        </div>
                    </div>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <div class="code plist-element" data-element='code'>
                        <div class="desc-box"><i class="icon-code"></i> tpl code</div>
                        <div class="pull-right">
                            <a class="plist-code"><i class="icon-code"></i></a>
                            <a class="plist-eremove"><i class="icon-trash"></i></a>
                        </div>
                        <div class="content-code">
                            <textarea name="filecontent" rows="5" class=""></textarea>
                        </div>
                    </div>
                    
                    <div class="functional_buttons plist-element" data-element='functional_buttons'>
                        <div class="desc-box"><i class="icon-puzzle-piece"></i> functional-buttons</div>
                        <div class="pull-right">
                            <a class="plist-eremove"><i class="icon-trash"></i></a>
                        </div>
                        <div class="content"></div>
                    </div>
                </div>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'position_hook') {?>
        <?php if ($_smarty_tpl->tpl_vars['input']->value['is_edit']) {?>
<div class="modal fade" id="position-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
</div><!-- comment -->


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
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please save the Product Lists Builder before using','mod'=>'leoelements'),$_smarty_tpl ) );?>

            </h2>
        </div>
        </div>
        <?php }?>
        
    <?php }?>
    
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

<?php
}
}
/* {/block "field"} */
}
