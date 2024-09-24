<?php
/* Smarty version 4.3.4, created on 2024-09-21 21:00:13
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\themes\vt_interior_elements\modules\leoelements\views\templates\front\products\plist3792278755.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ef6c1dd93195_81282424',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b150c90768d6d059553aa0081f3d1c6571ab250' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\themes\\vt_interior_elements\\modules\\leoelements\\views\\templates\\front\\products\\plist3792278755.tpl',
      1 => 1726966437,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ef6c1dd93195_81282424 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
  <div class="thumbnail-container">
    <div class="product-image">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_90268889566ef6c1dd729c1_23578770', 'product_thumbnail');
?>
</div>
    <div class="product-meta">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205012723866ef6c1dd86213_83105054', 'product_name');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_110121459066ef6c1dd88518_30119945', 'product_price_and_shipping');
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductListReview','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
  </div>
</article>
<?php }
/* {block 'product_thumbnail'} */
class Block_90268889566ef6c1dd729c1_23578770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_90268889566ef6c1dd729c1_23578770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_multi_product_img'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_multi_product_img']) {?>
		<div class="leo-more-info" data-idproduct="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
		<?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['lmobile_swipe'] == 1 && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
		    <div class="product-list-images-mobile">
		    	<div>
		<?php }?>
			    	<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
					  <img
						class="img-fluid"
						src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
						alt = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
						data-full-size-image-url = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
					  >
					  <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img'] && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img_option'] == 1) {?>
							<span class="second-image-style product-additional" data-idproduct="<?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['lmobile_swipe'] && $_smarty_tpl->tpl_vars['isMobile']->value) {?>0<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');
}?>"></span>
						<?php } elseif ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img'] && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img_option'] == 2) {?>
							<span class="second-image-style product-attribute-additional" data-idproduct="<?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['lmobile_swipe'] && $_smarty_tpl->tpl_vars['isMobile']->value) {?>0<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');
}?>" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" data-id-image="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['id_image'], ENT_QUOTES, 'UTF-8');?>
"></span>
						<?php } elseif ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img'] && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img_option'] == 3) {?>
							<span class="second-image-style product-all-additional" data-idproduct="<?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['lmobile_swipe'] && $_smarty_tpl->tpl_vars['isMobile']->value) {?>0<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');
}?>" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" data-id-image="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['id_image'], ENT_QUOTES, 'UTF-8');?>
"></span>
					  <?php }?>
					</a>
		<?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['lmobile_swipe'] == 1 && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
				</div>
		    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
			    	<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'] != $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url']) {?>
			            <div>
					    	<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			                    <img
			                      class="thumb js-thumb img-fluid <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
			                      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
			                      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
			                      title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
								  loading="lazy"
			                    >
			                </a>
						</div>	
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
	<?php } else { ?>
	  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail leo-noimage">
	 <img class="img-fluid" src= "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" >
	  </a>
	<?php }
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_205012723866ef6c1dd86213_83105054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_205012723866ef6c1dd86213_83105054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h3 class="h3 product-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],70,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_110121459066ef6c1dd88518_30119945 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_110121459066ef6c1dd88518_30119945',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <div class="product-price-and-shipping">
      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


        <span class="regular-price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
          <span class="discount-percentage discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
          <span class="discount-amount discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
      <?php }?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


      <span class="price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
          <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

        <?php } else { ?>
          <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

        <?php }?>
      </span>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

    </div>
  <?php }
}
}
/* {/block 'product_price_and_shipping'} */
}
