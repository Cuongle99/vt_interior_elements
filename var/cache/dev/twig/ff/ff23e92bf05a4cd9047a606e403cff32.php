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

/* __string_template__69bea646b1d1aab8bde65280d510554e */
class __TwigTemplate_74b02e416c0881644c918163a345ce30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__69bea646b1d1aab8bde65280d510554e"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__69bea646b1d1aab8bde65280d510554e"));

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

<title>Module manager • Interior</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesManage';
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
    var token = '768b06ba5004d68c0430aee18783c24f';
    var currentIndex = 'index.php?controller=AdminModulesManage';
    var employee_token = '129b775335bac06867deebf1fd52f045';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o';
    var admin_notification_get_link = '/prestashop/vt_interior_elements/admincp/index.php/common/notifications?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/vt_interior_elements/admincp/index.php/common/notifications/ack?_token=IVjBEXCMcouX3aSL4";
        // line 40
        echo "0FNraa2VYn-waAoQ9IE61LtC0o';
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
var ba";
        // line 68
        echo "seAdminDir = \"\\/prestashop\\/vt_interior_elements\\/admincp\\/\";
var baseDir = \"\\/prestashop\\/vt_interior_elements\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var leo_token = \"57f09aad0a6857297ce70289fd0d73e1\";
var leofeature_module_dir = \"\\/prestashop\\/vt_interior_elements\\/modules\\/leofeature\\/\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var psxDesignUpdateNotification = \"\\n<div class=\\\"psxdesign-notification\\\">\\n  1\\n<\\/div>\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
var url = \"http:\\/\\/localhost\\/prestashop\\/vt_interior_elements\\/modules\\/leopopupsale\\/ajax.php\";
var url_ajax_blog = \"http:\\/\\/localhost\\/prestashop\\/vt_interior_elements\\/modules\\/leoblog\\/adminajax.php\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/admincp/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src";
        // line 86
        echo "=\"/prestashop/vt_interior_elements/js/jquery/plugins/jquery.chosen.js\"></script>
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
            var current_id_tab = 40;
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
      notificationGetUrl: '/prest";
        // line 110
        echo "ashop/vt_interior_elements/admincp/index.php/common/notifications?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o',
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

<";
        // line 148
        echo "script type=\"text/template\" id=\"btn-edit-page-builder-blog\">
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
\t\tvar \$wrapperCategory = \$('div#category_description, div#root_category_description').closes";
        // line 189
        echo "t('.col-sm'),
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
  class=\"lang-en adminmodulesmanage developer-mode\"
  data-base-url=\"/prestashop/vt_interior_elements/admincp/index.php\"  data-token=\"IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"></a>
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
         href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/prod";
        // line 255
        echo "ucts-v2/create?token=1113ee74494277e352c1e0f90c97f91e\"
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
        data-rand=\"183\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-waAoQ9IE61LtC0o\"
        data-post-link=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminQuickAccesses&token=996ed83b7d00a93ebfa98da2deec8380\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Modules - List\"
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
      action=\"/prestashop/vt_interior_elements/admincp/index.php?controller=AdminSearch&amp;t";
        // line 294
        echo "oken=c02a4cb70064df640463775b18b1dcdb\"
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
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-";
        // line 311
        echo "icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
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
       href=\"http://localhost/prestashop/vt_interior_elements/adm";
        // line 348
        echo "incp/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=775993c5a411e73e9ff545a2a6a8f262\"
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
      data-rand=\"68\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/manage?-waAoQ9IE61LtC0o\"
      data-post-link=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminQuickAccesses&token=996ed83b7d00a93ebfa98da2deec8380\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Modules - List\"
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

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/performanc";
        // line 387
        echo "e/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
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
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/maintenance/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"
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
                          <div class=\"component header-right-component\" id=\"header-notifications-conta";
        // line 431
        echo "iner\">
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
              Orders<span id=\"_nb_new_orders_\"></span>
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
              Have you checked your <strong><a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller";
        // line 483
        echo "=AdminCarts&action=filterOnlyAbandonedCarts&token=fc79266be3386e888c56020318ea1137\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
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
              Seems like all your customers are happy :)
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
  <div class";
        // line 532
        echo "=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/vt_interior_elements/img/pr/default.jpg\" alt=\"Demo\" /></span>
        <span class=\"employee_profile\">Welcome back Demo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/1/edit?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modul";
        // line 559
        echo "es/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=QbY9MlBoI2_ZNm6iQwlarOWnwyV-uhBtwq6rE5ZEtBA&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLogin&amp;logout=1&amp;token=a5af304711e0928950d0456a4709555e\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/toggle-navigation?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
        ";
        // line 593
        echo "            
          
            <li class=\"category-title\" data-submenu=\"143\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"144\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
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
   ";
        // line 629
        echo "                           
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices";
        // line 665
        echo "\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/invoices/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/credit-slips/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/delivery-slips/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCarts&amp;token=fc79266be3386e888c56020318ea1137\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
     ";
        // line 695
        echo "                                   </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/categories?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Categories
                    ";
        // line 724
        echo "            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/monitoring/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminAttributesGroups&amp;token=55daf298f75195fb7b5ef4254fd8e5b8\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/brands/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" i";
        // line 754
        echo "d=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/attachments/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCartRules&amp;token=775993c5a411e73e9ff545a2a6a8f262\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/stocks/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customers/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i";
        // line 783
        echo ">
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customers/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/addresses/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"htt";
        // line 815
        echo "p://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCustomerThreads&amp;token=c9496f8cbb0650336e5d5c0dab0edcee\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCustomerThreads&amp;token=c9496f8cbb0650336e5d5c0dab0edcee\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customer-service/order-messages/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
    ";
        // line 844
        echo "                          <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminReturn&amp;token=bada079d3506483837e2c6d340167410\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics/legacy/stats?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics/legacy/stats?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Stats
                                </a>
                     ";
        // line 872
        echo "         </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"";
        // line 908
        echo "submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminLeoBootstrapMenuModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=db994854669c5f7ee6f6ca3434c4a995\" class=\"link\"> Leo Megamenu Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
     ";
        // line 936
        echo "                         <li class=\"link-leveltwo\" data-submenu=\"179\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=1dbef640c23813161e770bcf65b16bb3\" class=\"link\"> Leo Slideshow Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"189\" id=\"subtab-AdminLeoQuickLoginModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoQuickLoginModule&amp;token=88da419c0c9ab22345ae00bd93108ced\" class=\"link\"> Leo Quick Login Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"191\" id=\"subtab-AdminLeogalleryManagement\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeogalleryManagement&amp;token=2d7baaa2279953329d4e3b466d74778f\" class=\"link\"> Leo Gallery
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"192\" id=\"subtab-AdminLeoSizechart\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoSi";
        // line 961
        echo "zechart&amp;token=ba575dc37833b3ecf363e04974e1e761\" class=\"link\"> Leo Size Chart
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"196\" id=\"subtab-AdminLeoProductSearchModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoProductSearchModule&amp;token=fd8bd2ed94991a0a497081d5d093efe8\" class=\"link\"> Leo Product Search Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
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
                                                      
                              
                       ";
        // line 992
        echo "                                     
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=8c66f55b887a0f1ee9dec38c34c3daa3\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/themes/catalog/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/improve/design/themes?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/mail_theme/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9";
        // line 1018
        echo "IE61LtC0o\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/cms-pages/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/modules/positions/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminImages&amp;token=8c124be592a7642c2f566cd5477ccc63\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data";
        // line 1049
        echo "-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/link-widget/list?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCarriers&amp;token=55bb3b84aaaccebc07eff06d7940390d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
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

                                         ";
        // line 1079
        echo "                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/shipping/preferences/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/payment_methods?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/payment_methods?_token=IVjB";
        // line 1108
        echo "EXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/preferences?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/localization/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                             ";
        // line 1140
        echo " <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/localization/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/zones/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/taxes/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/translations/settings?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Translations
                                </a>
     ";
        // line 1167
        echo "                         </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"133\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=25ceabebe521794dae2a36616a0c1489\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-133\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=25ceabebe521794dae2a36616a0c1489\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsfacebookModule\">
          ";
        // line 1198
        echo "                      <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsfacebookModule&amp;token=c6ab0ba21c1b523ea371eb02258dbbec\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"165\" id=\"subtab-AdminLeoElements\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsDashboard&amp;token=941b0a3a18a6f8c3dd3ac0f01034985e\" class=\"link\">
                      <i class=\"material-icons mi-brush\">brush</i>
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

                             ";
        // line 1227
        echo "                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminLeoElementsProfiles\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsProfiles&amp;token=7f18154b79a46812ca06694008f9083a\" class=\"link\"> Profiles: Home or LandingPage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminLeoElementsPositions\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsPositions&amp;token=196fc50f020108a091ac38f8c2e3228e\" class=\"link\"> Positions: Header Content Footer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminLeoElementsContents\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsContents&amp;token=81385cc8fd4e816add781d5b895c6a3d\" class=\"link\"> Hook And Content Any Where
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"";
        // line 1254
        echo "170\" id=\"subtab-AdminLeoElementsProducts\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsProducts&amp;token=e4e35a42a7e02a1d64122e94f77a16d8\" class=\"link\"> Products Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminLeoElementsCategory\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCategory&amp;token=fc806be48bce718d161b48075b734450\" class=\"link\"> Categories Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-AdminLeoElementsProductList\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsProductList&amp;token=04f5f38ad9db1bb007f6569a9daa6139\" class=\"link\"> Product Lists Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"173\" id=\"subtab-AdminLeoElementsFont\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsFont&amp;token=200a33898adefe882c0387662f052fdf\" class=\"link\"> Font Co";
        // line 1279
        echo "nfiguration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"174\" id=\"subtab-AdminLeoElementsHook\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsHook&amp;token=ec7e1c1ba5c0ac3fbccf1a213c9b1bc5\" class=\"link\"> Hook Manage
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
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
                                                      
                              
                                                            
           ";
        // line 1311
        echo "                   <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-AdminLeoblogDashboard\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogDashboard&amp;token=ed371f249c5d744868fb70997a7a4e29\" class=\"link\"> Blog Dashboard
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-AdminLeoblogCategories\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogCategories&amp;token=346efe7cd1a21ff5d1b3e079fe5ef29c\" class=\"link\"> Categories Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"183\" id=\"subtab-AdminLeoblogBlogs\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogBlogs&amp;token=2c3d6fb2ddf90e5b21055db6d76f5746\" class=\"link\"> Blogs Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"184\" id=\"subtab-AdminLeoblogComments\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogComments&amp;token=44650c7e81350fa743899b5f0d5001";
        // line 1336
        echo "b8\" class=\"link\"> Comment Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-AdminLeoblogModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogModule&amp;token=a09ded98887e707877d436554f3c17ae\" class=\"link\"> Leo Blog Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
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
                                                      
                              
                                                            
                              <";
        // line 1368
        echo "li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminLeofeatureModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeofeatureModule&amp;token=a3e4a3d6c2b6d35a974cf4d6bd277709\" class=\"link\"> Leo Feature Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminLeofeatureReviews\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeofeatureReviews&amp;token=50668213a601d659594a5b1a05144e28\" class=\"link\"> Product Review Management
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
        ";
        // line 1397
        echo "                                      <ul id=\"collapse-193\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminLeoextratabSetting\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoextratabSetting&amp;token=7782b73e2315520114a2ea2bef295227\" class=\"link\"> Tab Setting
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"195\" id=\"subtab-AdminLeoextratabTab\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoextratabTab&amp;token=c97b3c190e9d5ac225a2ce30a007d3cc\" class=\"link\"> Tab List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"145\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/settings?_token=IVjBEXCMcouX3aSL40FNraa";
        // line 1431
        echo "2VYn-waAoQ9IE61LtC0o\" class=\"link\">
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
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/preferences/preferences?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/preferences/preferences?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> General
     ";
        // line 1461
        echo "                           </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/order-preferences/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/product-preferences/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/customer-preferences/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=";
        // line 1491
        echo "\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/contacts/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/seo-urls/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminSearchConf&amp;token=b54b054b80b7be00513350b0390c0f17\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/system-information/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"";
        // line 1519
        echo "link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/system-information/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/performance/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                         ";
        // line 1549
        echo "       <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/administration/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/emails/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/import/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              ";
        // line 1578
        echo "
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/sql-requests/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/logs/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/webservice-keys/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                   ";
        // line 1605
        echo "             <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/feature-flags/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/security/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Security
                                </a>
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


<div class=\"header";
        // line 1642
        echo "-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Module manager          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Upload a module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Upload a module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/vt_interior_elements/admincp/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.1.7%2526country%253Den/Help?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul clas";
        // line 1694
        echo "s=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/modules/alerts?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alerts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index";
        // line 1712
        echo ".php/improve/modules/updates?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Updates
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ";
        // line 1719
        echo "                                                                                                                      </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Upload a module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Upload a module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/vt_interior_elements/admincp/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.1.7%2526country%253Den/Help?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <!-- begin D:\\xampp\\htdocs\\prestashop\\vt_interior_elements/modules/leoelements/views/templates/hook/page_content.tpl --><!-- end D:\\xampp\\htdocs\\prestashop\\vt_interior_elements/modules/leoelements/views/templates/hook/page_content.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        <script>
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"USD\",\"iso_lan";
        // line 1758
        echo "g\":\"en\",\"iso_code\":\"us\",\"shop_version\":\"8.1.7\",\"shop_url\":\"http:\\/\\/localhost\\/prestashop\\/vt_interior_elements\\/\",\"shop_uuid\":\"0047f74c-f5c3-457f-8c6e-71e5a89d5644\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHA6Ly9sb2NhbGhvc3QvcHJlc3Rhc2hvcC92dF9pbnRlcmlvcl9lbGVtZW50cy8iLCJzaG9wX3V1aWQiOiIwMDQ3Zjc0Yy1mNWMzLTQ1N2YtOGM2ZS03MWU1YTg5ZDU2NDQifQ.CYC8KLFvoT7saau0M6Hqd696kBESN96c-BO4zV0CFRM\",\"mbo_version\":\"4.11.4\",\"mbo_reset_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/reset\\/ps_mbo?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\",\"user_id\":\"1\",\"admin_token\":\"IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\",\"refresh_url\":\"http:\\/\\/localhost\\/prestashop\\/vt_interior_elements\\/admincp\\/index.php?controller=apiSecurityPsMbo&token=e1ef90c7345f2da1c5e81350678d86ab\",\"installed_modules\":[{\"id\":0,\"name\":\"blockgrouptop\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.3.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockgrouptop?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockreassurance?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"blockwishlist\",\"status\":\"disabled__mobile_disabled\",\"version\":\"3.0.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/blockwishlist?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/contactform?_token=IVjBEXCMcouX3aSL40FNraa2V";
        echo "Yn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.4\",\"config_url\":null},{\"id\":0,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"gamification\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/gsitemap?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"klaviyopsautomation\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/klaviyopsautomation?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leoblog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.1.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/leoblog?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leobootstrapmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/leobootstrapmenu?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leoelements\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_eleme";
        echo "nts\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/leoelements?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leoextratab\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/leoextratab?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leofeature\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.2.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/leofeature?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leogallery\",\"status\":\"disabled__mobile_disabled\",\"version\":\"1.0.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/leogallery?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leonextprevious\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/leonextprevious?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leopopupsale\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/leopopupsale?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leoproductsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/leoproductsearch?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leoquicklogin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.";
        echo "php\\/improve\\/modules\\/manage\\/action\\/configure\\/leoquicklogin?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leosizechart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/leosizechart?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leoslideshow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/leoslideshow?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"productcomments\",\"status\":\"disabled__mobile_disabled\",\"version\":\"7.0.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/productcomments?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"psassistant\",\"status\":\"uninstalled\",\"version\":\"1.1.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psassistant?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psgdpr?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"psxdesign\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.7\",\"config_url\":null},{\"id\":0,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.73.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/psxmarketingwithgoogle?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAo";
        echo "Q9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_accounts?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_banner\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_banner?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_bestsellers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_bestsellers?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_brandlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_brandlist?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_cashondelivery\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_categoryproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categoryproducts?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_categorytree?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_checkout\",\"status\":\"enabled__mobile_enabled\",\"version\":\"8.4.0.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.ph";
        echo "p\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkout?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_checkpayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_checkpayment?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_contactinfo?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_crossselling?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customtext\",\"status\":\"disabled__mobile_disabled\",\"version\":\"4.2.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_customtext?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_dataprivacy?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_distributionapiclient\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.1\",\"config_url\":null},{\"id\":0,\"n";
        echo "ame\":\"ps_edition_basic\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.16\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_edition_basic?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_emailalerts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailalerts?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.8.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_emailsubscription?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_eventbus\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.14\",\"config_url\":null},{\"id\":0,\"name\":\"ps_facebook\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.37.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facebook?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.16.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_facetedsearch?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_faviconnotificationbo?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_featuredproducts\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.1.5\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_eleme";
        echo "nts\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_featuredproducts?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_googleanalytics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.0.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_googleanalytics?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_imageslider\",\"status\":\"disabled__mobile_disabled\",\"version\":\"3.1.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_imageslider?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_linklist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.7\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_linklist?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_mainmenu\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.3.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_mainmenu?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.11.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.5\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_metrics?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_newproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_newprodu";
        echo "cts?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_sharebuttons?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_shoppingcart?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_socialfollow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_socialfollow?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_specials\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.2\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_specials?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_supplierlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_supplierlist?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_viewedproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_viewedproduct?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"";
        echo "ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.2.0\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/ps_wirepayment?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestmanufacturers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsdata?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/manage\\/action\\/configure\\/statsforecast?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},";
        echo "{\"id\":0,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"autoupgrade\",\"status\":\"uninstalled\",\"version\":\"6.2.0\",\"config_url\":null}],\"upgradable_modules\":[\"ps_categorytree\",\"ps_imageslider\"],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_manager_updates_tab_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/improve\\/modules\\/updates?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\",\"module_catalog_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/modules\\/mbo\\/modules\\/catalog\\/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\",\"theme_catalog_url\":\"http:\\/\\/localhost\\\\prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/modules\\/mbo\\/themes\\/catalog\\/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\",\"php_version\":\"8.1.25\",\"shop_creation_date\":\"2024-09-13\",\"shop_business_sector_id\":null,\"shop_business_sector\":null,\"prestaShop_controller_class_name\":\"AdminModulesManage\"};

    renderModulesManagerMessage(context, '#module-manager-message-cdc-container')
  }
</script>
<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/cdc_error?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"></div>


                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div";
        // line 1768
        echo " id=\"content-message-box\"></div>


  ";
        // line 1771
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
  <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <!-- begin D:\\xampp\\htdocs\\prestashop\\vt_interior_elements/modules/leoelements/views/templates/hook/page_content.tpl --><!-- end D:\\xampp\\htdocs\\prestashop\\vt_interior_elements/modules/leoelements/views/templates/hook/page_content.tpl -->
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1805
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 221
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1771
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 1805
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__69bea646b1d1aab8bde65280d510554e";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2110 => 1805,  2041 => 1771,  2006 => 221,  1991 => 1805,  1951 => 1771,  1946 => 1768,  1924 => 1758,  1883 => 1719,  1874 => 1712,  1854 => 1694,  1800 => 1642,  1761 => 1605,  1732 => 1578,  1701 => 1549,  1669 => 1519,  1639 => 1491,  1607 => 1461,  1575 => 1431,  1539 => 1397,  1508 => 1368,  1474 => 1336,  1447 => 1311,  1413 => 1279,  1386 => 1254,  1357 => 1227,  1326 => 1198,  1293 => 1167,  1264 => 1140,  1230 => 1108,  1199 => 1079,  1167 => 1049,  1134 => 1018,  1106 => 992,  1073 => 961,  1046 => 936,  1016 => 908,  978 => 872,  948 => 844,  917 => 815,  883 => 783,  852 => 754,  820 => 724,  789 => 695,  757 => 665,  719 => 629,  681 => 593,  645 => 559,  616 => 532,  565 => 483,  511 => 431,  465 => 387,  424 => 348,  385 => 311,  366 => 294,  325 => 255,  286 => 221,  252 => 189,  209 => 148,  169 => 110,  143 => 86,  123 => 68,  93 => 40,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ '<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/prestashop/vt_interior_elements/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/prestashop/vt_interior_elements/img/app_icon.png\" />

<title>Module manager • Interior</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminModulesManage\\';
    var iso_user = \\'en\\';
    var lang_is_rtl = \\'0\\';
    var full_language_code = \\'en-us\\';
    var full_cldr_language_code = \\'en-US\\';
    var country_iso_code = \\'US\\';
    var _PS_VERSION_ = \\'8.1.7\\';
    var roundMode = 2;
    var youEditFieldFor = \\'\\';
        var new_order_msg = \\'A new order has been placed on your store.\\';
    var order_number_msg = \\'Order number: \\';
    var total_msg = \\'Total: \\';
    var from_msg = \\'From: \\';
    var see_order_msg = \\'View this order\\';
    var new_customer_msg = \\'A new customer registered on your store.\\';
    var customer_name_msg = \\'Customer name: \\';
    var new_msg = \\'A new message was posted on your store.\\';
    var see_msg = \\'Read this message\\';
    var token = \\'768b06ba5004d68c0430aee18783c24f\\';
    var currentIndex = \\'index.php?controller=AdminModulesManage\\';
    var employee_token = \\'129b775335bac06867deebf1fd52f045\\';
    var choose_language_translate = \\'Choose language:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\\';
    var admin_notification_get_link = \\'/prestashop/vt_interior_elements/admincp/index.php/common/notifications?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/prestashop/vt_interior_elements/admincp/index.php/common/notifications/ack?_token=IVjBEXCMcouX3aSL4' | raw }}{{ '0FNraa2VYn-waAoQ9IE61LtC0o\\';
    var tab_modules_list = \\'\\';
    var update_success_msg = \\'Update successful\\';
    var search_product_msg = \\'Search for a product\\';
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
var ba' | raw }}{{ 'seAdminDir = \"\\\\/prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/\";
var baseDir = \"\\\\/prestashop\\\\/vt_interior_elements\\\\/\";
var changeFormLanguageUrl = \"\\\\/prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\";
var currency = {\"iso_code\":\"USD\",\"sign\":\"\$\",\"name\":\"US Dollar\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"currencyCode\":\"USD\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"\\\\u00a4#,##0.00\",\"negativePattern\":\"-\\\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var leo_token = \"57f09aad0a6857297ce70289fd0d73e1\";
var leofeature_module_dir = \"\\\\/prestashop\\\\/vt_interior_elements\\\\/modules\\\\/leofeature\\\\/\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\\\u00d7\",\"\\\\u2030\",\"\\\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":true};
var psxDesignUpdateNotification = \"\\\\n<div class=\\\\\"psxdesign-notification\\\\\">\\\\n  1\\\\n<\\\\/div>\\\\n\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
var url = \"http:\\\\/\\\\/localhost\\\\/prestashop\\\\/vt_interior_elements\\\\/modules\\\\/leopopupsale\\\\/ajax.php\";
var url_ajax_blog = \"http:\\\\/\\\\/localhost\\\\/prestashop\\\\/vt_interior_elements\\\\/modules\\\\/leoblog\\\\/adminajax.php\";
</script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/prestashop/vt_interior_elements/admincp/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src' | raw }}{{ '=\"/prestashop/vt_interior_elements/js/jquery/plugins/jquery.chosen.js\"></script>
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
            var admin_gamification_ajax_url = \"http:\\\\/\\\\/localhost\\\\/prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php?controller=AdminGamification&token=9547e142f1944514ec6068bd52810652\";
            var current_id_tab = 40;
        </script><script type=\"module\" src=\"/prestashop/vt_interior_elements/modules/psxdesign/views/js/upgrade-notification.js\"></script>
    <script>
        window.userLocale  = \\'en\\';
        window.userflow_id = \\'ct_55jfryadgneorc45cjqxpbf6o4\\';
    </script>
    <script type=\"module\" src=\"https://unpkg.com/@prestashopcorp/smb-edition-homepage/dist/assets/index.js\"></script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: \\'#DF0067\\',
      textColor: \\'#FFFFFF\\',
      notificationGetUrl: \\'/prest' | raw }}{{ 'ashop/vt_interior_elements/admincp/index.php/common/notifications?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\\',
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

<' | raw }}{{ 'script type=\"text/template\" id=\"btn-edit-page-builder-blog\">
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
\t\tvar \$wrapperCategory = \$(\\'div#category_description, div#root_category_description\\').closes' | raw }}{{ 't(\\'.col-sm\\'),
\t\t\t\$wrapperProduct = \$(\\'#features\\'),
\t\t\t\$wrapperCms = \$(\\'#cms_page_content\\'),
\t\t\t\$wrapperBlog = \$(\\'#smart_blog_post_form\\').find(\"[name^=content_]\").first().parents(\\'.form-group\\').last(),
\t\t\t\$wrapperManufacturer = \$(\\'div#manufacturer_description\\').closest(\\'.col-sm\\'),
\t\t\t\$wrapperSupplier = \$(\\'div#supplier_description\\').closest(\\'.col-sm\\'),
                        \$wrapperCms = \$(\\'#cms_page_content\\'),
                        \$wrapperLeoGuide = \$(\\'.js_guide_content\\').closest(\\'.col-lg-8\\'),

\t\t\t\$btnTemplateCategory = \$(\\'#btn-edit-page-builder-category\\'),
\t\t\t\$btnTemplateProduct = \$(\\'#btn-edit-page-builder-product\\'),
\t\t\t\$btnTemplateCms = \$(\\'#btn-edit-page-builder-cms\\'),
\t\t\t\$btnTemplateBlog = \$(\\'#btn-edit-page-builder-blog\\'),
\t\t\t\$btnTemplateManufacturer = \$(\\'#btn-edit-page-builder-manufacturer\\'),
\t\t\t\$btnTemplateSupplier = \$(\\'#btn-edit-page-builder-supplier\\'),
                        \$btnTemplateLeoGuide = \$(\\'#btn-edit-page-builder-leoguide\\');

\t\t\t\$wrapperCategory.append(\$btnTemplateCategory.html());
\t\t\t\$wrapperProduct.prepend(\$btnTemplateProduct.html());
\t\t\t\$wrapperCms.after(\$btnTemplateCms.html());
\t\t\t\$wrapperBlog.after(\$btnTemplateBlog.html());
\t\t\t\$wrapperManufacturer.append(\$btnTemplateManufacturer.html());
\t\t\t\$wrapperSupplier.append(\$btnTemplateSupplier.html());
                        \$wrapperLeoGuide.append(\$btnTemplateLeoGuide.html());
            if(!\$wrapperProduct.length){
            \t\$wrapperProduct = \$(\\'#product_description_description\\').parent();
            \t\$wrapperProduct.append(\$btnTemplateProduct.html());
            }
\t});
</script>


' | raw }}{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>{{ '

<body
  class=\"lang-en adminmodulesmanage developer-mode\"
  data-base-url=\"/prestashop/vt_interior_elements/admincp/index.php\"  data-token=\"IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"></a>
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
         href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/prod' | raw }}{{ 'ucts-v2/create?token=1113ee74494277e352c1e0f90c97f91e\"
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
        data-rand=\"183\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/manage?-waAoQ9IE61LtC0o\"
        data-post-link=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminQuickAccesses&token=996ed83b7d00a93ebfa98da2deec8380\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Modules - List\"
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
      action=\"/prestashop/vt_interior_elements/admincp/index.php?controller=AdminSearch&amp;t' | raw }}{{ 'oken=c02a4cb70064df640463775b18b1dcdb\"
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
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-' | raw }}{{ 'icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$(\\'#bo_query\\').one(\\'click\\', function() {
    \$(this).closest(\\'form\\').removeClass(\\'collapsed\\');
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
       href=\"http://localhost/prestashop/vt_interior_elements/adm' | raw }}{{ 'incp/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=775993c5a411e73e9ff545a2a6a8f262\"
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
      data-rand=\"68\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/manage?-waAoQ9IE61LtC0o\"
      data-post-link=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminQuickAccesses&token=996ed83b7d00a93ebfa98da2deec8380\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Modules - List\"
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

              <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>Your store is in debug mode.</strong></p><p class=&quot;text-left&quot;>All the PHP errors and messages are displayed. When you no longer need it, &lt;strong&gt;turn off&lt;/strong&gt; this mode.</p>\"
             href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/performanc' | raw }}{{ 'e/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>Debug mode</span>
          </a>
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
          &lt;/p&gt;
          &lt;p class=&quot;text-left&quot;&gt;
              To manage the maintenance settings, go to Shop Parameters &amp;gt; General &amp;gt; Maintenance tab.
          &lt;/p&gt;
                      &lt;p class=&quot;text-left&quot;&gt;
              Admins can access the store front office without storing their IP.
            &lt;/p&gt;
                  \"
             href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/maintenance/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"
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
                          <div class=\"component header-right-component\" id=\"header-notifications-conta' | raw }}{{ 'iner\">
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
              Orders<span id=\"_nb_new_orders_\"></span>
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
              Have you checked your <strong><a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller' | raw }}{{ '=AdminCarts&action=filterOnlyAbandonedCarts&token=fc79266be3386e888c56020318ea1137\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
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
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href=\\'order_url\\'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href=\\'customer_url\\'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href=\\'message_url\\'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class' | raw }}{{ '=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/vt_interior_elements/img/pr/default.jpg\" alt=\"Demo\" /></span>
        <span class=\"employee_profile\">Welcome back Demo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/1/edit?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=training-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modul' | raw }}{{ 'es/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=QbY9MlBoI2_ZNm6iQwlarOWnwyV-uhBtwq6rE5ZEtBA&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\"  target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLogin&amp;logout=1&amp;token=a5af304711e0928950d0456a4709555e\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/toggle-navigation?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                                          
        ' | raw }}{{ '            
          
            <li class=\"category-title\" data-submenu=\"143\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"144\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
                      <i class=\"material-icons mi-home\">home</i>
                      <span>
                      Home
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
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
   ' | raw }}{{ '                           
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices' | raw }}{{ '\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/invoices/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/credit-slips/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/delivery-slips/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCarts&amp;token=fc79266be3386e888c56020318ea1137\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
     ' | raw }}{{ '                                   </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/categories?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Categories
                    ' | raw }}{{ '            </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/monitoring/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminAttributesGroups&amp;token=55daf298f75195fb7b5ef4254fd8e5b8\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/brands/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" i' | raw }}{{ 'd=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/attachments/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCartRules&amp;token=775993c5a411e73e9ff545a2a6a8f262\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/stocks/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customers/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i' | raw }}{{ '>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customers/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/addresses/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"htt' | raw }}{{ 'p://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCustomerThreads&amp;token=c9496f8cbb0650336e5d5c0dab0edcee\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCustomerThreads&amp;token=c9496f8cbb0650336e5d5c0dab0edcee\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customer-service/order-messages/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
    ' | raw }}{{ '                          <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminReturn&amp;token=bada079d3506483837e2c6d340167410\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics/legacy/stats?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics/legacy/stats?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Stats
                                </a>
                     ' | raw }}{{ '         </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"' | raw }}{{ 'submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminLeoBootstrapMenuModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=db994854669c5f7ee6f6ca3434c4a995\" class=\"link\"> Leo Megamenu Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
     ' | raw }}{{ '                         <li class=\"link-leveltwo\" data-submenu=\"179\" id=\"subtab-AdminLeoSlideshowMenuModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoSlideshowMenuModule&amp;token=1dbef640c23813161e770bcf65b16bb3\" class=\"link\"> Leo Slideshow Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"189\" id=\"subtab-AdminLeoQuickLoginModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoQuickLoginModule&amp;token=88da419c0c9ab22345ae00bd93108ced\" class=\"link\"> Leo Quick Login Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"191\" id=\"subtab-AdminLeogalleryManagement\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeogalleryManagement&amp;token=2d7baaa2279953329d4e3b466d74778f\" class=\"link\"> Leo Gallery
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"192\" id=\"subtab-AdminLeoSizechart\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoSi' | raw }}{{ 'zechart&amp;token=ba575dc37833b3ecf363e04974e1e761\" class=\"link\"> Leo Size Chart
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"196\" id=\"subtab-AdminLeoProductSearchModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoProductSearchModule&amp;token=fd8bd2ed94991a0a497081d5d093efe8\" class=\"link\"> Leo Product Search Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
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
                                                      
                              
                       ' | raw }}{{ '                                     
                              <li class=\"link-leveltwo\" data-submenu=\"162\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=8c66f55b887a0f1ee9dec38c34c3daa3\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/themes/catalog/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/improve/design/themes?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/mail_theme/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9' | raw }}{{ 'IE61LtC0o\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/cms-pages/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/modules/positions/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminImages&amp;token=8c124be592a7642c2f566cd5477ccc63\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data' | raw }}{{ '-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/link-widget/list?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCarriers&amp;token=55bb3b84aaaccebc07eff06d7940390d\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
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

                                         ' | raw }}{{ '                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/shipping/preferences/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/payment_methods?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/payment_methods?_token=IVjB' | raw }}{{ 'EXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/preferences?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/localization/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                             ' | raw }}{{ ' <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/localization/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/zones/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/taxes/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/translations/settings?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Translations
                                </a>
     ' | raw }}{{ '                         </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"133\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=25ceabebe521794dae2a36616a0c1489\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-133\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=25ceabebe521794dae2a36616a0c1489\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsfacebookModule\">
          ' | raw }}{{ '                      <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsfacebookModule&amp;token=c6ab0ba21c1b523ea371eb02258dbbec\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"165\" id=\"subtab-AdminLeoElements\">
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsDashboard&amp;token=941b0a3a18a6f8c3dd3ac0f01034985e\" class=\"link\">
                      <i class=\"material-icons mi-brush\">brush</i>
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

                             ' | raw }}{{ '                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"167\" id=\"subtab-AdminLeoElementsProfiles\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsProfiles&amp;token=7f18154b79a46812ca06694008f9083a\" class=\"link\"> Profiles: Home or LandingPage
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"168\" id=\"subtab-AdminLeoElementsPositions\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsPositions&amp;token=196fc50f020108a091ac38f8c2e3228e\" class=\"link\"> Positions: Header Content Footer
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"169\" id=\"subtab-AdminLeoElementsContents\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsContents&amp;token=81385cc8fd4e816add781d5b895c6a3d\" class=\"link\"> Hook And Content Any Where
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"' | raw }}{{ '170\" id=\"subtab-AdminLeoElementsProducts\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsProducts&amp;token=e4e35a42a7e02a1d64122e94f77a16d8\" class=\"link\"> Products Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"171\" id=\"subtab-AdminLeoElementsCategory\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCategory&amp;token=fc806be48bce718d161b48075b734450\" class=\"link\"> Categories Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"172\" id=\"subtab-AdminLeoElementsProductList\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsProductList&amp;token=04f5f38ad9db1bb007f6569a9daa6139\" class=\"link\"> Product Lists Builder
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"173\" id=\"subtab-AdminLeoElementsFont\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsFont&amp;token=200a33898adefe882c0387662f052fdf\" class=\"link\"> Font Co' | raw }}{{ 'nfiguration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"174\" id=\"subtab-AdminLeoElementsHook\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsHook&amp;token=ec7e1c1ba5c0ac3fbccf1a213c9b1bc5\" class=\"link\"> Hook Manage
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
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
                                                      
                              
                                                            
           ' | raw }}{{ '                   <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-AdminLeoblogDashboard\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogDashboard&amp;token=ed371f249c5d744868fb70997a7a4e29\" class=\"link\"> Blog Dashboard
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"182\" id=\"subtab-AdminLeoblogCategories\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogCategories&amp;token=346efe7cd1a21ff5d1b3e079fe5ef29c\" class=\"link\"> Categories Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"183\" id=\"subtab-AdminLeoblogBlogs\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogBlogs&amp;token=2c3d6fb2ddf90e5b21055db6d76f5746\" class=\"link\"> Blogs Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"184\" id=\"subtab-AdminLeoblogComments\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogComments&amp;token=44650c7e81350fa743899b5f0d5001' | raw }}{{ 'b8\" class=\"link\"> Comment Management
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"185\" id=\"subtab-AdminLeoblogModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogModule&amp;token=a09ded98887e707877d436554f3c17ae\" class=\"link\"> Leo Blog Configuration
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
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
                                                      
                              
                                                            
                              <' | raw }}{{ 'li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminLeofeatureModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeofeatureModule&amp;token=a3e4a3d6c2b6d35a974cf4d6bd277709\" class=\"link\"> Leo Feature Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"188\" id=\"subtab-AdminLeofeatureReviews\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeofeatureReviews&amp;token=50668213a601d659594a5b1a05144e28\" class=\"link\"> Product Review Management
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
        ' | raw }}{{ '                                      <ul id=\"collapse-193\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"194\" id=\"subtab-AdminLeoextratabSetting\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoextratabSetting&amp;token=7782b73e2315520114a2ea2bef295227\" class=\"link\"> Tab Setting
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"195\" id=\"subtab-AdminLeoextratabTab\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoextratabTab&amp;token=c97b3c190e9d5ac225a2ce30a007d3cc\" class=\"link\"> Tab List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"145\" id=\"subtab-AdminPsEditionBasicSettingsController\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/settings?_token=IVjBEXCMcouX3aSL40FNraa' | raw }}{{ '2VYn-waAoQ9IE61LtC0o\" class=\"link\">
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
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/preferences/preferences?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/preferences/preferences?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> General
     ' | raw }}{{ '                           </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/order-preferences/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/product-preferences/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/customer-preferences/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=' | raw }}{{ '\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/contacts/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/seo-urls/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminSearchConf&amp;token=b54b054b80b7be00513350b0390c0f17\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/system-information/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"' | raw }}{{ 'link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/system-information/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/performance/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                         ' | raw }}{{ '       <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/administration/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/emails/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/import/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              ' | raw }}{{ '
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/sql-requests/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/logs/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/webservice-keys/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                   ' | raw }}{{ '             <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/feature-flags/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/security/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"link\"> Security
                                </a>
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


<div class=\"header' | raw }}{{ '-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" aria-current=\"page\">Modules</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Module manager          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Upload a module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                                  >
                  <i class=\"material-icons\">cloud_upload</i>                  Upload a module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/prestashop/vt_interior_elements/admincp/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.1.7%2526country%253Den/Help?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul clas' | raw }}{{ 's=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              <li class=\"nav-item\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab active current\" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/modules/alerts?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alerts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index' | raw }}{{ '.php/improve/modules/updates?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab \" data-submenu=\"42\">
                      Updates
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ' | raw }}{{ '                                                                                                                      </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Upload a module\"              data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Upload a module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/prestashop/vt_interior_elements/admincp/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.1.7%2526country%253Den/Help?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  <!-- begin D:\\\\xampp\\\\htdocs\\\\prestashop\\\\vt_interior_elements/modules/leoelements/views/templates/hook/page_content.tpl --><!-- end D:\\\\xampp\\\\htdocs\\\\prestashop\\\\vt_interior_elements/modules/leoelements/views/templates/hook/page_content.tpl -->
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        <script>
  if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
    const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

    const context = {\"currency\":\"USD\",\"iso_lan' | raw }}{{ 'g\":\"en\",\"iso_code\":\"us\",\"shop_version\":\"8.1.7\",\"shop_url\":\"http:\\\\/\\\\/localhost\\\\/prestashop\\\\/vt_interior_elements\\\\/\",\"shop_uuid\":\"0047f74c-f5c3-457f-8c6e-71e5a89d5644\",\"mbo_token\":\"eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzaG9wX3VybCI6Imh0dHA6Ly9sb2NhbGhvc3QvcHJlc3Rhc2hvcC92dF9pbnRlcmlvcl9lbGVtZW50cy8iLCJzaG9wX3V1aWQiOiIwMDQ3Zjc0Yy1mNWMzLTQ1N2YtOGM2ZS03MWU1YTg5ZDU2NDQifQ.CYC8KLFvoT7saau0M6Hqd696kBESN96c-BO4zV0CFRM\",\"mbo_version\":\"4.11.4\",\"mbo_reset_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/reset\\\\/ps_mbo?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\",\"user_id\":\"1\",\"admin_token\":\"IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\",\"refresh_url\":\"http:\\\\/\\\\/localhost\\\\/prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php?controller=apiSecurityPsMbo&token=e1ef90c7345f2da1c5e81350678d86ab\",\"installed_modules\":[{\"id\":0,\"name\":\"blockgrouptop\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.3.4\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/blockgrouptop?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"blockreassurance\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.1.4\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/blockreassurance?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"blockwishlist\",\"status\":\"disabled__mobile_disabled\",\"version\":\"3.0.1\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/blockwishlist?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"contactform\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.2\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/contactform?_token=IVjBEXCMcouX3aSL40FNraa2V' | raw }}{{ 'Yn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"dashactivity\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"dashgoals\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"dashproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.4\",\"config_url\":null},{\"id\":0,\"name\":\"dashtrends\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"gamification\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"graphnvd3\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gridhtml\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"gsitemap\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.4.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/gsitemap?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"klaviyopsautomation\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/klaviyopsautomation?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leoblog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.1.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/leoblog?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leobootstrapmenu\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.2.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/leobootstrapmenu?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leoelements\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.4\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_eleme' | raw }}{{ 'nts\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/leoelements?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leoextratab\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/leoextratab?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leofeature\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.2.2\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/leofeature?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leogallery\",\"status\":\"disabled__mobile_disabled\",\"version\":\"1.0.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/leogallery?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leonextprevious\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/leonextprevious?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leopopupsale\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/leopopupsale?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leoproductsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.7\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/leoproductsearch?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leoquicklogin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.' | raw }}{{ 'php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/leoquicklogin?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leosizechart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.1\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/leosizechart?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"leoslideshow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/leoslideshow?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"pagesnotfound\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"productcomments\",\"status\":\"disabled__mobile_disabled\",\"version\":\"7.0.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/productcomments?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"psassistant\",\"status\":\"uninstalled\",\"version\":\"1.1.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/psassistant?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"psgdpr\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.4.3\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/psgdpr?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"psxdesign\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.6.7\",\"config_url\":null},{\"id\":0,\"name\":\"psxmarketingwithgoogle\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.73.3\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/psxmarketingwithgoogle?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAo' | raw }}{{ 'Q9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_accounts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"7.0.3\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_accounts?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_banner\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.1.2\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_banner?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_bestsellers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_bestsellers?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_brandlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.3\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_brandlist?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_cashondelivery\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_categoryproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.7\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_categoryproducts?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_categorytree\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_categorytree?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_checkout\",\"status\":\"enabled__mobile_enabled\",\"version\":\"8.4.0.1\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.ph' | raw }}{{ 'p\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_checkout?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_checkpayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_checkpayment?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_contactinfo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.3.2\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_contactinfo?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_crossselling\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_crossselling?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_currencyselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customeraccountlinks\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.2.0\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customersignin\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.5\",\"config_url\":null},{\"id\":0,\"name\":\"ps_customtext\",\"status\":\"disabled__mobile_disabled\",\"version\":\"4.2.1\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_customtext?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_dataprivacy\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_dataprivacy?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_distributionapiclient\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.1.1\",\"config_url\":null},{\"id\":0,\"n' | raw }}{{ 'ame\":\"ps_edition_basic\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.16\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_edition_basic?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_emailalerts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_emailalerts?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_emailsubscription\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.8.2\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_emailsubscription?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_eventbus\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.14\",\"config_url\":null},{\"id\":0,\"name\":\"ps_facebook\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.37.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_facebook?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_facetedsearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.16.1\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_facetedsearch?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_faviconnotificationbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_faviconnotificationbo?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_featuredproducts\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.1.5\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_eleme' | raw }}{{ 'nts\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_featuredproducts?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_googleanalytics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"5.0.2\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_googleanalytics?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_imageslider\",\"status\":\"disabled__mobile_disabled\",\"version\":\"3.1.4\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_imageslider?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_languageselector\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_linklist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"6.0.7\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_linklist?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_mainmenu\",\"status\":\"disabled__mobile_disabled\",\"version\":\"2.3.4\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_mainmenu?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_mbo\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.11.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_metrics\",\"status\":\"enabled__mobile_enabled\",\"version\":\"4.0.5\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_metrics?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_newproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.4\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_newprodu' | raw }}{{ 'cts?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_searchbar\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"ps_sharebuttons\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.2\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_sharebuttons?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_shoppingcart\",\"status\":\"enabled__mobile_enabled\",\"version\":\"3.0.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_shoppingcart?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_socialfollow\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.3.2\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_socialfollow?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_specials\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.2\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_specials?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_supplierlist\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.0.6\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_supplierlist?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"ps_themecusto\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":null},{\"id\":0,\"name\":\"ps_viewedproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"1.2.4\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_viewedproduct?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"' | raw }}{{ 'ps_wirepayment\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.2.0\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/ps_wirepayment?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"statsbestcategories\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestcustomers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestmanufacturers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestproducts\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestsuppliers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsbestvouchers\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscarrier\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statscatalog\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},{\"id\":0,\"name\":\"statscheckup\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsdata\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.1\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/statsdata?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"statsforecast\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/manage\\\\/action\\\\/configure\\\\/statsforecast?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"},{\"id\":0,\"name\":\"statsnewsletter\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.3\",\"config_url\":null},{\"id\":0,\"name\":\"statspersonalinfos\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.4\",\"config_url\":null},' | raw }}{{ '{\"id\":0,\"name\":\"statsproduct\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.3\",\"config_url\":null},{\"id\":0,\"name\":\"statsregistrations\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"statssales\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.1.0\",\"config_url\":null},{\"id\":0,\"name\":\"statssearch\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.2\",\"config_url\":null},{\"id\":0,\"name\":\"statsstock\",\"status\":\"enabled__mobile_enabled\",\"version\":\"2.0.1\",\"config_url\":null},{\"id\":0,\"name\":\"autoupgrade\",\"status\":\"uninstalled\",\"version\":\"6.2.0\",\"config_url\":null}],\"upgradable_modules\":[\"ps_categorytree\",\"ps_imageslider\"],\"accounts_user_id\":null,\"accounts_shop_id\":null,\"accounts_token\":\"\",\"accounts_component_loaded\":false,\"module_manager_updates_tab_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/improve\\\\/modules\\\\/updates?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\",\"module_catalog_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/modules\\\\/mbo\\\\/modules\\\\/catalog\\\\/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\",\"theme_catalog_url\":\"http:\\\\/\\\\/localhost\\\\\\\\prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/modules\\\\/mbo\\\\/themes\\\\/catalog\\\\/?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\",\"php_version\":\"8.1.25\",\"shop_creation_date\":\"2024-09-13\",\"shop_business_sector_id\":null,\"shop_business_sector\":null,\"prestaShop_controller_class_name\":\"AdminModulesManage\"};

    renderModulesManagerMessage(context, \\'#module-manager-message-cdc-container\\')
  }
</script>
<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/cdc_error?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\"></div>


                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div' | raw }}{{ ' id=\"content-message-box\"></div>


  ' | raw }}{% block content_header %}{% endblock %}{% block content %}{% endblock %}{% block content_footer %}{% endblock %}{% block sidebar_right %}{% endblock %}{{ '

        

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
  <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=IVjBEXCMcouX3aSL40FNraa2VYn-waAoQ9IE61LtC0o\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <!-- begin D:\\\\xampp\\\\htdocs\\\\prestashop\\\\vt_interior_elements/modules/leoelements/views/templates/hook/page_content.tpl --><!-- end D:\\\\xampp\\\\htdocs\\\\prestashop\\\\vt_interior_elements/modules/leoelements/views/templates/hook/page_content.tpl -->
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
' | raw }}{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>{{ '
</html>' | raw }}", "__string_template__69bea646b1d1aab8bde65280d510554e", "");
    }
}
