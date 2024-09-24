<?php
/* Smarty version 4.3.4, created on 2024-09-20 07:49:48
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\modules\leobootstrapmenu\views\templates\hook\menu_1_nochild.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ed615c90ee62_62906219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ff8243cec9f9d7a5025e451fdb5e2b8ad108eb0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\leobootstrapmenu\\views\\templates\\hook\\menu_1_nochild.tpl',
      1 => 1690855548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed615c90ee62_62906219 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['menu']->value['active'] == 1) {?>
    <li data-menu-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['type'], ENT_QUOTES, 'UTF-8');?>
" class="nav-item <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['menu_class'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['addwidget']->value, ENT_QUOTES, 'UTF-8');?>
 leo-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['colums'], ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['model']->value->renderAttrs($_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
>
        <a class="nav-link has-category" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['model']->value->getLink($_smarty_tpl->tpl_vars['menu']->value), ENT_QUOTES, 'UTF-8');?>
" target="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['target'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['icon_class']) {?>
                <?php if ($_smarty_tpl->tpl_vars['menu']->value['icon_class'] != preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['menu']->value['icon_class'])) {?>
                    <span class="hasicon menu-icon-class"><?php echo $_smarty_tpl->tpl_vars['menu']->value['icon_class'];?>

                <?php } else { ?>
                    <span class="hasicon menu-icon-class"><i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['icon_class'], ENT_QUOTES, 'UTF-8');?>
"></i>
                <?php }?>
            <?php } elseif ($_smarty_tpl->tpl_vars['menu']->value['image']) {?>
                <span class="hasicon menu-icon" style="background:url('<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['model']->value->image_base_url, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['image'], ENT_QUOTES, 'UTF-8');?>
') no-repeat">
            <?php }?>
                
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['show_title']) {?>
                <span class="menu-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['text']) {?>
                <span class="sub-title"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['text'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['description']) {?>
                <span class="menu-desc"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['description'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['menu']->value['image'] || $_smarty_tpl->tpl_vars['menu']->value['icon_class']) {?>
                </span>
            <?php }?>
        </a>
    </li>
<?php }
}
}
