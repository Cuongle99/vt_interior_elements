<?php
/* Smarty version 4.3.4, created on 2024-09-20 08:00:32
  from 'module:leoelementsviewstemplatesfrontLeoInstagram.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ed63e0803c85_44557726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6ef9c9a06b5809bc6c1701c5951aef70ac066d3' => 
    array (
      0 => 'module:leoelementsviewstemplatesfrontLeoInstagram.tpl',
      1 => 1676345970,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ed63e0803c85_44557726 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\vt_interior_elements/modules//leoelements/views/templates/front/LeoInstagram.tpl --><?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
    
    <?php if (!(isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'])) || $_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'full') {?>
        <div class="block <?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 instagram-block">
            <?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['show_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['show_title'] && (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
            <h4 class="title_block"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['show_sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['show_sub_title'] && (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
                <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
            <?php }?>

            <div class="block_content elementor-slick-slider">
                <div id="instafeed" <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'])) && $_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == "list") {?>class='normal-list'<?php }?>></div>
                <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['show_view_all'])) && $_smarty_tpl->tpl_vars['formAtts']->value['show_view_all'] && (isset($_smarty_tpl->tpl_vars['formAtts']->value['profile_link'])) && $_smarty_tpl->tpl_vars['formAtts']->value['profile_link']) {?>
                <div class="instagram-viewall">
                    <a class="btn-viewall" href="https://instagram.com/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['profile_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" target="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all in instagram','mod'=>'leoelements'),$_smarty_tpl ) );?>
">
                        <i class="fa fa-instagram"></i>&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all in instagram','mod'=>'leoelements'),$_smarty_tpl ) );?>

                    </a>
                </div>
                <?php }?>
            </div>

            <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
        </div>
    <?php } elseif ((isset($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'])) && ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion' || $_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion_small_screen')) {?>
        
        <div class="block <?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 instagram-block block-toggler<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['accordion_type'] == 'accordion_small_screen') {?> accordion_small_screen<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['apLiveEdit']->value ? $_smarty_tpl->tpl_vars['apLiveEdit']->value : '';?>
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['show_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['show_title'] && (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
                <div class="title clearfix" data-target="#widget-instagram-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-toggle="collapse">
                    <h4 class="title_block"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
                    <span class="float-xs-right">
                      <span class="navbar-toggler collapse-icons">
                        <i class="material-icons add">&#xE313;</i>
                        <i class="material-icons remove">&#xE316;</i>
                      </span>
                    </span>
                </div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['show_sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['show_sub_title'] && (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
                <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
            <?php }?>
            <div class="collapse block_content elementor-slick-slider" id="widget-instagram-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                <div id="instafeed" <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'])) && $_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == "list") {?>class='normal-list'<?php }?>></div>
                <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['show_view_all'])) && $_smarty_tpl->tpl_vars['formAtts']->value['show_view_all'] && (isset($_smarty_tpl->tpl_vars['formAtts']->value['profile_link'])) && $_smarty_tpl->tpl_vars['formAtts']->value['profile_link']) {?>
                <div class="instagram-viewall">
                    <a class="btn-viewall" href="https://instagram.com/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['profile_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" target="_blank" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all in instagram','mod'=>'leoelements'),$_smarty_tpl ) );?>
">
                        <i class="fa fa-instagram"></i>&nbsp;&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all in instagram','mod'=>'leoelements'),$_smarty_tpl ) );?>

                    </a>
                </div>
                <?php }?>
            </div>
            <?php echo $_smarty_tpl->tpl_vars['apLiveEditEnd']->value ? $_smarty_tpl->tpl_vars['apLiveEditEnd']->value : '';?>
        </div>

    <?php }?>
    
<?php echo '<script'; ?>
 type="text/javascript" class="autojs" data-form_id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8');?>
">
    var instafeed_start = 0;
    var <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8');?>
 = (function(){
        if(instafeed_start != 1){
            instafeed_start = 1;
            leo_create_instafeed();
        }
    });
    
    var leo_create_instafeed = function() {
	var feed = new Instafeed({
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['access_token'])) && $_smarty_tpl->tpl_vars['formAtts']->value['access_token']) {?>
            accessToken: "<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['access_token'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
",
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['limit'])) && $_smarty_tpl->tpl_vars['formAtts']->value['limit']) {?>
            limit: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['limit'] )), ENT_QUOTES, 'UTF-8');?>
,
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'])) && $_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == "list") {?>
        
                template: '<div class="col-sp-12 col-xs-6 col-sm-6 col-md-6 col-lg-4 col-xl-4"><a class="leo-instagram-size" target="_blank" href="{{link}}"><img title="{{caption}}" src="{{image}}"/></a></div>',
        
        <?php } else { ?>
        
                template: '<a class="leo-instagram-size" target="_blank" href="{{link}}"><img title="{{caption}}" src="{{image}}"/></a>',
        
        <?php }?>

	transform: function(item) {
		var d = new Date(item.timestamp);
		item.date = [d.getDate(), d.getMonth(), d.getYear()].join('/');
		return item;
	},

	<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'])) && $_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] !== "list") {?>
		after: function() {
		<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value)) && (isset($_smarty_tpl->tpl_vars['formAtts']->value['lazyload'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>
						var html = $("#instafeed").html();
			html = html.replace(/ src="/g,' class="lazyOwl" data-src="');
			$("#instafeed").html(html);
		<?php }?>
                        
		<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['carousel_type'] == "boostrap") {?>

		<?php } else { ?>

			$('#instafeed').imagesLoaded( function() {
                            
                                $('#instafeed').slick(
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
                                
                                
                        
                        
                        
			});
			function OwlLoaded(el){
				el.removeClass('owl-loading').addClass('owl-loaded').parents('.owl-row').addClass('hide-loading');
				if ($(el).parents('.tab-pane').length && !$(el).parents('.tab-pane').hasClass('active'))
					el.width('100%');
			};
		<?php }?>
		}
	<?php }?>
	});
	feed.run();
    }

    var array_chunk = function(arr, chunkSize) {
            var groups = [], i;
            for (i = 0; i < arr.length; i += chunkSize) {
                    groups.push(arr.slice(i, i + chunkSize));
            }
            return groups;
    }

    var leo_create_show = function() {
            $('#instafeed').fadeIn();
    }
<?php echo '</script'; ?>
>
<?php }?><!-- end D:\xampp\htdocs\prestashop\vt_interior_elements/modules//leoelements/views/templates/front/LeoInstagram.tpl --><?php }
}
