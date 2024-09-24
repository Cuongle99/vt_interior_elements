<?php
/* Smarty version 4.3.4, created on 2024-09-21 20:59:33
  from 'D:\xampp\htdocs\prestashop\vt_interior_elements\themes\vt_interior_elements\templates\catalog\_partials\miniatures\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ef6bf5be7c56_44950205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '903d8b3b387f96aeb3e06ba965f60131070ab30f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\themes\\vt_interior_elements\\templates\\catalog\\_partials\\miniatures\\product.tpl',
      1 => 1718674224,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-flags.tpl' => 1,
    'file:catalog/_partials/variant-links.tpl' => 1,
  ),
),false)) {
function content_66ef6bf5be7c56_44950205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207500949266ef6bf5bb6927_53379416', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_112073735566ef6bf5bbb2f1_11268672 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php if ((isset($_smarty_tpl->tpl_vars['cfg_product_list_image']->value)) && $_smarty_tpl->tpl_vars['cfg_product_list_image']->value) {?>
						<div class="leo-more-info" data-idproduct="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></div>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
						<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
              <picture>
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
							<img
								class="img-fluid"
								src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" 
								loading="lazy" alt = "<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
								data-full-size-image-url = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
								width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                						height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
							/> 
							<?php if ((isset($_smarty_tpl->tpl_vars['cfg_product_one_img']->value)) && $_smarty_tpl->tpl_vars['cfg_product_one_img']->value) {?>
								<span class="product-additional" data-idproduct="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></span>
							<?php }?>
					</picture>
						</a>
					<?php } else { ?>
						<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
              <picture>
                <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                <?php if (!empty($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
					            <img
					                src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
					                loading="lazy"
					                width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
					                height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
					              />
						    <?php if ((isset($_smarty_tpl->tpl_vars['cfg_product_one_img']->value)) && $_smarty_tpl->tpl_vars['cfg_product_one_img']->value) {?>
						    	<span class="product-additional" data-idproduct="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></span>
						    <?php }?>
		</picture>
					        </a>
					<?php }?>	
				<?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'quick_view'} */
class Block_71878084166ef6bf5bcc157_38453978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="quickview<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
							<a href="#"
							class="quick-view js-quick-view btn-product btn btn-primary"
							data-link-action="quickview"
							data-source=".thumb-gallery-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
"
							title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
							>

								<span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
								<span class="leo-quickview-bt-content">
									<i class="icon-btn-product icon-quick-view material-icons">&#xE417;</i>
									<span class="name-btn-product"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
								</span>
							</a>
						</div>
					<?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_name'} */
class Block_203285450466ef6bf5bd03d2_23037089 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				          <?php if (!(isset($_smarty_tpl->tpl_vars['page']->value['page_name'])) || $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
				            <h3 class="h3 product-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
				          <?php } else { ?>
				            <h2 class="h3 product-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" content="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h2>
				          <?php }?>
					<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_150945818766ef6bf5bd3ec8_73704039 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

					<?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_112215085866ef6bf5bd4986_13459794 extends Smarty_Internal_Block
{
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
						<?php }?>
					<?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_description_short'} */
class Block_18150530166ef6bf5be1cd2_59198315 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<div class="product-description-short"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( preg_replace('!<[^>]*?>!', ' ', (string) $_smarty_tpl->tpl_vars['product']->value['description_short']),150,'...' ));?>
</div>
					<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_variants'} */
class Block_98337492066ef6bf5be5f04_09374297 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

						<?php if ($_smarty_tpl->tpl_vars['product']->value['main_variants']) {?>
							<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/variant-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('variants'=>$_smarty_tpl->tpl_vars['product']->value['main_variants']), 0, false);
?>
						<?php }?>
					<?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature_item'} */
class Block_207500949266ef6bf5bb6927_53379416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_207500949266ef6bf5bb6927_53379416',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_112073735566ef6bf5bbb2f1_11268672',
  ),
  'quick_view' => 
  array (
    0 => 'Block_71878084166ef6bf5bcc157_38453978',
  ),
  'product_name' => 
  array (
    0 => 'Block_203285450466ef6bf5bd03d2_23037089',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_150945818766ef6bf5bd3ec8_73704039',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_112215085866ef6bf5bd4986_13459794',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_18150530166ef6bf5be1cd2_59198315',
  ),
  'product_variants' => 
  array (
    0 => 'Block_98337492066ef6bf5be5f04_09374297',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="js-product product<?php if (!empty($_smarty_tpl->tpl_vars['productClasses']->value)) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['productClasses']->value, ENT_QUOTES, 'UTF-8');
}?>">
	<article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
		<div class="thumbnail-container">
             <div class="product-image thumbnail-top">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112073735566ef6bf5bbb2f1_11268672', 'product_thumbnail', $this->tplIndex);
?>

			
				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-flags.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<div class="functional-buttons clearfix">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71878084166ef6bf5bcc157_38453978', 'quick_view', $this->tplIndex);
?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCompareButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoWishlistButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCartButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				</div>
			</div>
			<div class="product-meta">
				<div class="product-description">	

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203285450466ef6bf5bd03d2_23037089', 'product_name', $this->tplIndex);
?>


					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductListReview','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_150945818766ef6bf5bd3ec8_73704039', 'product_reviews', $this->tplIndex);
?>


					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112215085866ef6bf5bd4986_13459794', 'product_price_and_shipping', $this->tplIndex);
?>

				
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18150530166ef6bf5be1cd2_59198315', 'product_description_short', $this->tplIndex);
?>


				</div>
				<div class="highlighted-informations<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98337492066ef6bf5be5f04_09374297', 'product_variants', $this->tplIndex);
?>

				</div>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCartAttribute','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCartQuantity','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

			</div>
		</div>
	</article>
</div>
<?php
}
}
/* {/block 'product_miniature_item'} */
}
