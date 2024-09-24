<?php
/* Smarty version 4.3.4, created on 2024-09-21 21:24:04
  from 'module:leoelementsviewstemplatesfrontLeoBlockCarouselSlick.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ef71b4242158_27523320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8a72e6509dab52f0f845d9eacdc6a5ba175d2b5' => 
    array (
      0 => 'module:leoelementsviewstemplatesfrontLeoBlockCarouselSlick.tpl',
      1 => 1689041618,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ef71b4242158_27523320 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\vt_interior_elements/modules//leoelements/views/templates/front/LeoBlockCarouselSlick.tpl --><?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
		<h4 class="title_block"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
	    <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
	<?php }?>
	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['description'])) && $_smarty_tpl->tpl_vars['formAtts']->value['description']) {?>
		<p><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['description'];?>
</p>
	<?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['formAtts']->value['slides'])) {?>
		<div class="slick-row">
			<div class="slick-blogs slick-slider slick-loading" id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formAtts']->value['slides'], 'slider', false, NULL, 'mypLoop', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['slider']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slider']->value) {
$_smarty_tpl->tpl_vars['slider']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']++;
?> 
					<div class="slick-slide <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
						<div class="item">
							<div class="block-carousel-container">
								<div class="left-block">
									<div class="block-carousel-image-container image">
										<div class="ap-more-info" data-id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['_id'] )), ENT_QUOTES, 'UTF-8');?>
"></div>
										<?php if ($_smarty_tpl->tpl_vars['slider']->value['item_link']['url']) {?>
                                            <a title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slider']->value['item_title'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slider']->value['item_link']['url'], ENT_QUOTES, 'UTF-8');?>
">
										<?php }?>
										<div class="item-title" style="width:100%"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slider']->value['item_title'], ENT_QUOTES, 'UTF-8');?>
</div>
										<?php if ((isset($_smarty_tpl->tpl_vars['slider']->value['item_image'])) && !empty($_smarty_tpl->tpl_vars['slider']->value['item_image']) && (isset($_smarty_tpl->tpl_vars['slider']->value['item_image']['url'])) && !empty($_smarty_tpl->tpl_vars['slider']->value['item_image']['url'])) {?>
											<img class="img-fluid" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['slider']->value['item_image']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if ((isset($_smarty_tpl->tpl_vars['slider']->value['item_title']))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['item_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"/>
										<?php }?>

										<?php if ((isset($_smarty_tpl->tpl_vars['slider']->value['item_sub_title'])) && !empty($_smarty_tpl->tpl_vars['slider']->value['item_sub_title'])) {?>
											<p class="item-sub-title"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['slider']->value['item_sub_title'],'html','UTF-8' ));?>
</p>
										<?php }?>
										<?php if ((isset($_smarty_tpl->tpl_vars['slider']->value['item_description'])) && !empty($_smarty_tpl->tpl_vars['slider']->value['item_description'])) {?>
											<div class="item-description"><?php echo rtrim($_smarty_tpl->tpl_vars['slider']->value['item_description']);?>
</div>
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['slider']->value['item_link']['url']) {?>										</a>
										<?php }?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>


<?php echo '<script'; ?>
 type="text/javascript" class="autojs" data-form_id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8');?>
">
    var <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8');?>
 = (function(){
	$('#<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').imagesLoaded( function() {
		$('#<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').slick(
			<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_custom_status']) {?>
				<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slick_custom'], ENT_QUOTES, 'UTF-8');?>

			<?php } else { ?>
			{
				centerMode: <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode'])) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode']) {?>true<?php } else { ?>false<?php }?>,
				centerPadding: '<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'])) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'], ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>px',
				dots: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {?>true<?php } else { ?>false<?php }?>,
				infinite: <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['infinite'])) && $_smarty_tpl->tpl_vars['formAtts']->value['infinite']) {?>true<?php } else { ?>false<?php }?>,
				vertical: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_vertical']) {?>true<?php } else { ?>false<?php }?>,
				verticalSwiping : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_vertical']) {?>true<?php } else { ?>false<?php }?>,
				autoplay: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['autoplay']) {?>true<?php } else { ?>false<?php }?>,
				pauseonhover: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['pause_on_hover']) {?>true<?php } else { ?>false<?php }?>,
				autoplaySpeed: <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['autoplay_speed'])) && $_smarty_tpl->tpl_vars['formAtts']->value['autoplay_speed']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['autoplay_speed'], ENT_QUOTES, 'UTF-8');
} else { ?>5000<?php }?>,
                                speed: <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['speed'])) && $_smarty_tpl->tpl_vars['formAtts']->value['speed']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['speed'], ENT_QUOTES, 'UTF-8');
} else { ?>500<?php }?>,
				arrows: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_arrows']) {?>true<?php } else { ?>false<?php }?>,
				rows: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['per_col'], ENT_QUOTES, 'UTF-8');?>
,
				slidesToShow: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_show'], ENT_QUOTES, 'UTF-8');?>
,
				slidesToScroll: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_show'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_show'], ENT_QUOTES, 'UTF-8');
}?>,
				rtl: <?php if ((isset($_smarty_tpl->tpl_vars['IS_RTL']->value)) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?>true<?php } else { ?>false<?php }?>,
                                responsive: [{
                                    breakpoint: 1025,
                                    settings: {
                                        slidesToShow: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_show_tablet'], ENT_QUOTES, 'UTF-8');?>
,
                                        slidesToScroll: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_scroll_tablet'], ENT_QUOTES, 'UTF-8');?>

                                    }
                                }, {
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_show_mobile'], ENT_QUOTES, 'UTF-8');?>
,
                                        slidesToScroll: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_scroll_mobile'], ENT_QUOTES, 'UTF-8');?>

                                    }
                                }]
			}
			<?php }?>
		);
		$('#<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').removeClass('slick-loading').addClass('slick-loaded').parents('.slick-row').addClass('hide-loading');
	});
    });
<?php echo '</script'; ?>
>              
    <?php } else { ?>
        <p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No slide at this time.','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>
    <?php }
}?>
<!-- end D:\xampp\htdocs\prestashop\vt_interior_elements/modules//leoelements/views/templates/front/LeoBlockCarouselSlick.tpl --><?php }
}
