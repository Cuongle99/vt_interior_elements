<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__1c21647899d29c69a5bde7fdee775dbe */
class __TwigTemplate_4e550339d05c72f5807ce4148d6ccaff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/vt_interior_elements/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/vt_interior_elements/img/app_icon.png\" />

<title>Performance • Interior</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'US';
    var _PS_VERSION_ = '8.1.7';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = '340c1c4dfdf3ac37a11cf8c3c62232dd';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '129b775335bac06867deebf1fd52f045';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k';
    var admin_notification_get_link = '/prestashop/vt_interior_elements/admincp/index.php/common/notifications?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/vt_interior_elements/admincp/index.php/common/notifications/ack?_token=IjC0u0AdUwOGBVTt5261OqPZ";
        // line 40
        echo "we_PKhoqQ2-VrFVSA7k';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/prestashop/vt_interior_elements/admincp/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/prestashop/vt_interior_elements/admincp/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/vt_interior_elements/admincp/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/vt_interior_elements/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/vt_interior_elements/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/vt_interior_elements/modules/leofeature/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/vt_interior_elements/modules/leopopupsale/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/vt_interior_elements/modules/psxdesign/views/css/admin/dashboard-notification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/vt_interior_elements/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/vt_interior_elements/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/vt_interior_elements/modules/leoelements/views/css/back.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/prestashop/vt_interior_elements/modules/leoblog/views/css/admin/blogmenu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdmin";
        // line 68
        echo "Dir = \"\\/prestashop\\/vt_interior_elements\\/admincp\\/\";
var baseDir = \"\\/prestashop\\/vt_interior_elements\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var leo_token = \"57f09aad0a6857297ce70289fd0d73e1\";
var leofeature_module_dir = \"\\/prestashop\\/vt_interior_elements\\/modules\\/leofeature\\/\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
var url = \"http:\\/\\/localhost\\/prestashop\\/vt_interior_elements\\/modules\\/leopopupsale\\/ajax.php\";
var url_ajax_blog = \"http:\\/\\/localhost\\/prestashop\\/vt_interior_elements\\/modules\\/leoblog\\/adminajax.php\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/admincp/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/pre";
        // line 86
        echo "stashop/vt_interior_elements/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/js/admin.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/admincp/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/js/tools.js?v=8.1.7\"></script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/admincp/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/modules/leofeature/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/modules/leopopupsale/views/js/back.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/prestashop\\/vt_interior_elements\\/admincp\\/index.php?controller=AdminGamification&token=9547e142f1944514ec6068bd52810652\";
            var current_id_tab = 94;
        </script><script type=\"module\" src=\"/prestashop/vt_interior_elements/modules/psxdesign/views/js/upgrade-notification.js\"></script>
    <script>
        window.userLocale  = 'en';
        window.userflow_id = 'ct_55jfryadgneorc45cjqxpbf6o4';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/prestashop/";
        // line 110
        echo "vt_interior_elements/admincp/index.php/common/notifications?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>
<script type=\"text/template\" id=\"btn-edit-page-builder-category\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/vt_interior_elements/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                            Edit with Leo Elements Creator
\t\t\t</a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-product\">
    <div>
\t\t                    <br />
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                        <img src=\"/prestashop/vt_interior_elements/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                        Edit with Leo Elements Creator
                    </a>
\t\t    </div>
</script>
\t
<script type=\"text/template\" id=\"btn-edit-page-builder-cms\">
    <div>
\t\t\t\t\t<br />
                        <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/vt_interior_elements/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                            Edit with Leo Elements Creator
                        </a>
\t\t    </div>
</script>

<script";
        // line 148
        echo " type=\"text/template\" id=\"btn-edit-page-builder-blog\">
    <div class=\"form-group\">
        <label class=\"control-label col-lg-3\"></label>
        <div class=\"col-lg-9\">
\t\t\t\t\t\t\t<a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i>
\t\t\t\t\tEdit content with - LeoElements
\t\t\t\t</a>
\t\t\t\t\t</div>
    </div>
</script>
\t 
<script type=\"text/template\" id=\"btn-edit-page-builder-manufacturer\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i> 
\t\t\t\tEdit content with - LeoElements
\t\t\t</a>
\t\t    </div>
</script>
\t 
<script type=\"text/template\" id=\"btn-edit-page-builder-supplier\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i> 
\t\t\t\tEdit content with - LeoElements
\t\t\t</a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-leoguide\">
    <div>
\t\t\t\t\t<br />
                        <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/vt_interior_elements/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                            Edit with Leo Elements Creator
                        </a>
\t\t    </div>
</script>

<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\tvar \$wrapperCategory = \$('div#category_description, div#root_category_description').closest('.co";
        // line 189
        echo "l-sm'),
\t\t\t\$wrapperProduct = \$('#features'),
\t\t\t\$wrapperCms = \$('#cms_page_content'),
\t\t\t\$wrapperBlog = \$('#smart_blog_post_form').find(\"[name^=content_]\").first().parents('.form-group').last(),
\t\t\t\$wrapperManufacturer = \$('div#manufacturer_description').closest('.col-sm'),
\t\t\t\$wrapperSupplier = \$('div#supplier_description').closest('.col-sm'),
                        \$wrapperCms = \$('#cms_page_content'),
                        \$wrapperLeoGuide = \$('.js_guide_content').closest('.col-lg-8'),

\t\t\t\$btnTemplateCategory = \$('#btn-edit-page-builder-category'),
\t\t\t\$btnTemplateProduct = \$('#btn-edit-page-builder-product'),
\t\t\t\$btnTemplateCms = \$('#btn-edit-page-builder-cms'),
\t\t\t\$btnTemplateBlog = \$('#btn-edit-page-builder-blog'),
\t\t\t\$btnTemplateManufacturer = \$('#btn-edit-page-builder-manufacturer'),
\t\t\t\$btnTemplateSupplier = \$('#btn-edit-page-builder-supplier'),
                        \$btnTemplateLeoGuide = \$('#btn-edit-page-builder-leoguide');

\t\t\t\$wrapperCategory.append(\$btnTemplateCategory.html());
\t\t\t\$wrapperProduct.prepend(\$btnTemplateProduct.html());
\t\t\t\$wrapperCms.after(\$btnTemplateCms.html());
\t\t\t\$wrapperBlog.after(\$btnTemplateBlog.html());
\t\t\t\$wrapperManufacturer.append(\$btnTemplateManufacturer.html());
\t\t\t\$wrapperSupplier.append(\$btnTemplateSupplier.html());
                        \$wrapperLeoGuide.append(\$btnTemplateLeoGuide.html());
            if(!\$wrapperProduct.length){
            \t\$wrapperProduct = \$('#product_description_description').parent();
            \t\$wrapperProduct.append(\$btnTemplateProduct.html());
            }
\t});
</script>


";
        // line 221
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminperformance\"
  data-base-url=\"/prestashop/vt_interior_elements/admincp/index.php\"  data-token=\"IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\"></a>
      <span id=\"shop_version\">8.1.7</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=072c94317d74868454e650319537caa1\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?token=1113ee74494277e352c1e0f90c97f91e\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/categories/new?token=1113ee74494277e352c1e0f90c97f91e\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products-v2/create?to";
        // line 255
        echo "ken=1113ee74494277e352c1e0f90c97f91e\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=775993c5a411e73e9ff545a2a6a8f262\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php/sell/orders?token=1113ee74494277e352c1e0f90c97f91e\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"105\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance/?-VrFVSA7k\"
        data-post-link=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminQuickAccesses&token=996ed83b7d00a93ebfa98da2deec8380\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Performance - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminQuickAccesses&token=996ed83b7d00a93ebfa98da2deec8380\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/prestashop/vt_interior_elements/admincp/index.php?controller=AdminSearch&amp;tok";
        // line 294
        echo "en=c02a4cb70064df640463775b18b1dcdb\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-ic";
        // line 311
        echo "on=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=072c94317d74868454e650319537caa1\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?token=1113ee74494277e352c1e0f90c97f91e\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/categories/new?token=1113ee74494277e352c1e0f90c97f91e\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products-v2/create?token=1113ee74494277e352c1e0f90c97f91e\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/vt_interior_elements/admin";
        // line 348
        echo "cp/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=775993c5a411e73e9ff545a2a6a8f262\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php/sell/orders?token=1113ee74494277e352c1e0f90c97f91e\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"23\"
      data-icon=\"icon-AdminAdvancedParameters\"
      data-method=\"add\"
      data-url=\"index.php/configure/advanced/performance/?-VrFVSA7k\"
      data-post-link=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminQuickAccesses&token=996ed83b7d00a93ebfa98da2deec8380\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Performance - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminQuickAccesses&token=996ed83b7d00a93ebfa98da2deec8380\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
                      <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"          &lt;p class=&quot;text-left text-nowrap&quot;&gt;
            &lt;strong&gt;Your store is in maintenance mode.&lt;/strong&gt;
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              Your visitors and customers cannot access your store while in maintenance mode.
";
        // line 392
        echo "          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/maintenance/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\"
          >
            <i class=\"material-icons\"
              style=\"color: var(--green);\"
            >build</i>
            <span>Maintenance mode</span>
          </a>
        </div>
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/prestashop/vt_interior_elements/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></spa";
        // line 436
        echo "n>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=fc79266be3386e888c56020318ea1137\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
           ";
        // line 484
        echo "   Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/vt_interior_elements/img/pr/default.jpg\" alt=\"Demo\" /></span>
        <span class=\"employee_profile\">Welcome back Demo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/1/edit?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class";
        // line 535
        echo "=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dr";
        // line 554
        echo "opdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLogin&amp;logout=1&amp;token=a5af304711e0928950d0456a4709555e\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/toggle-navigation?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"143\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"144\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i";
        // line 596
        echo " class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"1\" id=\"subtab-AdminDashboard\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminDashboard&amp;token=58307c7072f2a7a9f02d7c4d7f77bf81\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Dashboard
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
          ";
        // line 634
        echo "            Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/invoices/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/credit-slips/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Credit Slips
                                </a>
                 ";
        // line 663
        echo "             </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/delivery-slips/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCarts&amp;token=fc79266be3386e888c56020318ea1137\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
  ";
        // line 695
        echo "                                                          </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/categories?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/monitoring/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
               ";
        // line 725
        echo "               <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminAttributesGroups&amp;token=55daf298f75195fb7b5ef4254fd8e5b8\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/brands/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/attachments/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCartRules&amp;token=775993c5a411e73e9ff545a2a6a8f262\" class=\"link\"> Discounts
                  ";
        // line 751
        echo "              </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/stocks/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customers/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestasho";
        // line 783
        echo "p/vt_interior_elements/admincp/index.php/sell/customers/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/addresses/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCustomerThreads&amp;token=c9496f8cbb0650336e5d5c0dab0edcee\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                     ";
        // line 813
        echo "         
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCustomerThreads&amp;token=c9496f8cbb0650336e5d5c0dab0edcee\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customer-service/order-messages/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminReturn&amp;token=bada079d3506483837e2c6d340167410\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/v";
        // line 843
        echo "t_interior_elements/admincp/index.php/modules/metrics/legacy/stats?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics/legacy/stats?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                        ";
        // line 874
        echo "                  
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                        ";
        // line 907
        echo "      <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminLeoBootstrapMenuModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=db994854669c5f7ee6f6ca3434c4a995\" class=\"link\"> Leo Megamenu Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"179\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=1dbef640c23813161e770bcf65b16bb3\" class=\"link\"> Leo Slideshow Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"189\" id=\"subtab-AdminLeoQuickLoginModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoQuickLoginModule&amp;token=88da419c0c9ab22";
        // line 932
        echo "345ae00bd93108ced\" class=\"link\"> Leo Quick Login Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"191\" id=\"subtab-AdminLeogalleryManagement\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeogalleryManagement&amp;token=2d7baaa2279953329d4e3b466d74778f\" class=\"link\"> Leo Gallery
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"192\" id=\"subtab-AdminLeoSizechart\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoSizechart&amp;token=ba575dc37833b3ecf363e04974e1e761\" class=\"link\"> Leo Size Chart
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"196\" id=\"subtab-AdminLeoProductSearchModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoProductSearchModule&amp;token=fd8bd2ed94991a0a497081d5d093efe8\" class=\"link\"> Leo Product Search Configuration
                                </a>
                              </li>

                                                                              </ul>
                                 ";
        // line 961
        echo "       </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=8c66f55b887a0f1ee9dec38c34c3daa3\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=8c66f55b887a0f1ee9dec38c34c3daa3\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/themes/catalog/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PK";
        // line 989
        echo "hoqQ2-VrFVSA7k\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/improve/design/themes?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/mail_theme/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/cms-pages/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-l";
        // line 1020
        echo "eveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/modules/positions/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminImages&amp;token=8c124be592a7642c2f566cd5477ccc63\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/link-widget/list?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCarriers&amp;token=55bb3b84aaaccebc07eff06d7940390d\" class=\"link\">
        ";
        // line 1049
        echo "              <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCarriers&amp;token=55bb3b84aaaccebc07eff06d7940390d\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/shipping/preferences/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParent";
        // line 1080
        echo "Payment\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/payment_methods?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/payment_methods?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/preferences?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                          ";
        // line 1109
        echo "    
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/localization/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/localization/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/zones/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Locations
                                ";
        // line 1137
        echo "</a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/taxes/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/translations/settings?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"133\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=25ceabebe521794dae2a36616a0c1489\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                       ";
        // line 1169
        echo "                                             keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-133\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=25ceabebe521794dae2a36616a0c1489\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsfacebookModule&amp;token=c6ab0ba21c1b523ea371eb02258dbbec\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"165\" id=\"subtab-AdminLeoElements\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsDashboard&amp;token=941b0a3a18a6f8c3dd3ac0f01034985e\" class=\"link\">
                     ";
        // line 1197
        echo " <i class=\"material-icons mi-brush\">brush</i>
                      <span>
                      Leo Elements Creator
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-165\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"166\" id=\"subtab-AdminLeoElementsDashboard\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsDashboard&amp;token=941b0a3a18a6f8c3dd3ac0f01034985e\" class=\"link\"> Leo Dashboard
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminLeoElementsProfiles\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsProfiles&amp;token=7f18154b79a46812ca06694008f9083a\" class=\"link\"> Profiles: Home or LandingPage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminLeoElementsPositions\">
                     ";
        // line 1226
        echo "           <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsPositions&amp;token=196fc50f020108a091ac38f8c2e3228e\" class=\"link\"> Positions: Header Content Footer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminLeoElementsContents\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsContents&amp;token=81385cc8fd4e816add781d5b895c6a3d\" class=\"link\"> Hook And Content Any Where
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"170\" id=\"subtab-AdminLeoElementsProducts\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsProducts&amp;token=e4e35a42a7e02a1d64122e94f77a16d8\" class=\"link\"> Products Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminLeoElementsCategory\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCategory&amp;token=fc806be48bce718d161b48075b734450\" class=\"link\"> Categories Builder
                              ";
        // line 1251
        echo "  </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-AdminLeoElementsProductList\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsProductList&amp;token=04f5f38ad9db1bb007f6569a9daa6139\" class=\"link\"> Product Lists Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"173\" id=\"subtab-AdminLeoElementsFont\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsFont&amp;token=200a33898adefe882c0387662f052fdf\" class=\"link\"> Font Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"174\" id=\"subtab-AdminLeoElementsHook\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsHook&amp;token=ec7e1c1ba5c0ac3fbccf1a213c9b1bc5\" class=\"link\"> Hook Manage
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                     ";
        // line 1280
        echo "         
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"180\" id=\"subtab-AdminLeoblogManagement\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogDashboard&amp;token=ed371f249c5d744868fb70997a7a4e29\" class=\"link\">
                      <i class=\"material-icons mi-create\">create</i>
                      <span>
                      Leo Blog Management
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-180\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-AdminLeoblogDashboard\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogDashboard&amp;token=ed371f249c5d744868fb70997a7a4e29\" class=\"link\"> Blog Dashboard
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-AdminLeoblogCategories\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogCategories&amp;token=346efe7cd1a21ff5d1b3e079fe5ef29c\" class=\"link\"> Ca";
        // line 1307
        echo "tegories Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"183\" id=\"subtab-AdminLeoblogBlogs\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogBlogs&amp;token=2c3d6fb2ddf90e5b21055db6d76f5746\" class=\"link\"> Blogs Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"184\" id=\"subtab-AdminLeoblogComments\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogComments&amp;token=44650c7e81350fa743899b5f0d5001b8\" class=\"link\"> Comment Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-AdminLeoblogModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogModule&amp;token=a09ded98887e707877d436554f3c17ae\" class=\"link\"> Leo Blog Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
            ";
        // line 1338
        echo "      
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"186\" id=\"subtab-AdminLeofeatureManagement\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeofeatureModule&amp;token=a3e4a3d6c2b6d35a974cf4d6bd277709\" class=\"link\">
                      <i class=\"material-icons mi-star\">star</i>
                      <span>
                      Leo Feature Management
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-186\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminLeofeatureModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeofeatureModule&amp;token=a3e4a3d6c2b6d35a974cf4d6bd277709\" class=\"link\"> Leo Feature Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminLeofeatureReviews\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeofeatureReviews&amp;token=50668213a601d659594a5b1a05144e28\" class=\"link\"> Product Rev";
        // line 1364
        echo "iew Management
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"193\" id=\"subtab-AdminLeoextratabManagement\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoextratabSetting&amp;token=7782b73e2315520114a2ea2bef295227\" class=\"link\">
                      <i class=\"material-icons mi-tab\">tab</i>
                      <span>
                      Leo Extra Tab
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-193\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminLeoextratabSetting\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoextratabSetting&amp;token=7782b73e2315520114a2ea2bef295227\" class=\"link\"> Tab Setting
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-s";
        // line 1396
        echo "ubmenu=\"195\" id=\"subtab-AdminLeoextratabTab\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoextratabTab&amp;token=c97b3c190e9d5ac225a2ce30a007d3cc\" class=\"link\"> Tab List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"145\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/settings?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Settings
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/";
        // line 1433
        echo "configure/shop/preferences/preferences?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/preferences/preferences?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/order-preferences/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-le";
        // line 1462
        echo "veltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/product-preferences/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/customer-preferences/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/contacts/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/seo-urls/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Traffic &amp; SEO
                                </a>
                 ";
        // line 1489
        echo "             </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminSearchConf&amp;token=b54b054b80b7be00513350b0390c0f17\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/system-information/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-level";
        // line 1519
        echo "two\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/system-information/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/performance/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/administration/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/emails/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> E-mail
                                </a>
                            ";
        // line 1546
        echo "  </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/import/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/sql-requests/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/vt_interior_elem";
        // line 1576
        echo "ents/admincp/index.php/configure/advanced/logs/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/webservice-keys/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/feature-flags/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/security/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"link\"> Security
                              ";
        // line 1601
        echo "  </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"127\" id=\"subtab-AdminKlaviyoPsConfig\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminKlaviyoPsConfig&amp;token=6f4f297a4b976dc9a3850a1aeb8771b4\" class=\"link\">
                      <i class=\"material-icons mi-trending_up\">trending_up</i>
                      <span>
                      Klaviyo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Advanced Parameters</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/performance/?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" aria-current=\"page\">Performance</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performance          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                       ";
        // line 1655
        echo "   <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/performance/clear-cache?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\"                  title=\"Clear cache\"                                  >
                  <i class=\"material-icons\">delete</i>                  Clear cache
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/vt_interior_elements/admincp/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.1.7%2526country%253Den/Help?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/performance/clear-cache?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\"              title=\"Clear cache\"            >
              Clear cache
              <i class=\"material-icons\">delete</i>          ";
        // line 1691
        echo "  </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/vt_interior_elements/admincp/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D8.1.7%2526country%253Den/Help?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1718
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=IjC0u0AdUwOGBVTt5261OqPZwe_PKhoqQ2-VrFVSA7k\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1752
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 221
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1718
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1752
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__1c21647899d29c69a5bde7fdee775dbe";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1955 => 1752,  1934 => 1718,  1923 => 221,  1914 => 1752,  1874 => 1718,  1845 => 1691,  1807 => 1655,  1751 => 1601,  1724 => 1576,  1692 => 1546,  1663 => 1519,  1631 => 1489,  1602 => 1462,  1571 => 1433,  1532 => 1396,  1498 => 1364,  1470 => 1338,  1437 => 1307,  1408 => 1280,  1377 => 1251,  1350 => 1226,  1319 => 1197,  1289 => 1169,  1255 => 1137,  1225 => 1109,  1194 => 1080,  1161 => 1049,  1130 => 1020,  1097 => 989,  1067 => 961,  1036 => 932,  1009 => 907,  974 => 874,  941 => 843,  909 => 813,  877 => 783,  843 => 751,  815 => 725,  783 => 695,  749 => 663,  718 => 634,  678 => 596,  634 => 554,  613 => 535,  560 => 484,  510 => 436,  464 => 392,  418 => 348,  379 => 311,  360 => 294,  319 => 255,  280 => 221,  246 => 189,  203 => 148,  163 => 110,  137 => 86,  117 => 68,  87 => 40,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1c21647899d29c69a5bde7fdee775dbe", "");
    }
}
