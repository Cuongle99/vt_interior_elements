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

/* __string_template__609cf61fe33f2403da208ab344277da8 */
class __TwigTemplate_98166da0f4127f4e6a5f26424161bb87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__609cf61fe33f2403da208ab344277da8"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__609cf61fe33f2403da208ab344277da8"));

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

<title>Products • Interior</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminProducts';
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
    var token = '266f4f41e211869334df0b1828897c62';
    var currentIndex = 'index.php?controller=AdminProducts';
    var employee_token = '129b775335bac06867deebf1fd52f045';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw';
    var admin_notification_get_link = '/prestashop/vt_interior_elements/admincp/index.php/common/notifications?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw';
    var admin_notification_push_link = adminNotificationPushLink = '/prestashop/vt_interior_elements/admincp/index.php/common/notifications/ack?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1";
        // line 40
        echo "rwQgQ_OfSw';
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
var baseAdminDir = \"\\/";
        // line 68
        echo "prestashop\\/vt_interior_elements\\/admincp\\/\";
var baseDir = \"\\/prestashop\\/vt_interior_elements\\/\";
var changeFormLanguageUrl = \"\\/prestashop\\/vt_interior_elements\\/admincp\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\";
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
<script type=\"text/javascript\" src=\"/prestashop/vt";
        // line 86
        echo "_interior_elements/js/jquery/plugins/jquery.chosen.js\"></script>
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
            var current_id_tab = 10;
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
      notificationGetUrl: '/prestashop/vt_interio";
        // line 110
        echo "r_elements/admincp/index.php/common/notifications?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw',
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
\t\t\t<a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/vt_interior_elements/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                            Edit with Leo Elements Creator
\t\t\t</a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-product\">
    <div>
\t\t                    <br />
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                        <img src=\"/prestashop/vt_interior_elements/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                        Edit with Leo Elements Creator
                    </a>
\t\t    </div>
</script>
\t
<script type=\"text/template\" id=\"btn-edit-page-builder-cms\">
    <div>
\t\t\t\t\t<br />
                        <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/vt_interior_elements/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
   ";
        // line 143
        echo "                         Edit with Leo Elements Creator
                        </a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-blog\">
    <div class=\"form-group\">
        <label class=\"control-label col-lg-3\"></label>
        <div class=\"col-lg-9\">
\t\t\t\t\t\t\t<a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i>
\t\t\t\t\tEdit content with - LeoElements
\t\t\t\t</a>
\t\t\t\t\t</div>
    </div>
</script>
\t 
<script type=\"text/template\" id=\"btn-edit-page-builder-manufacturer\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i> 
\t\t\t\tEdit content with - LeoElements
\t\t\t</a>
\t\t    </div>
</script>
\t 
<script type=\"text/template\" id=\"btn-edit-page-builder-supplier\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i> 
\t\t\t\tEdit content with - LeoElements
\t\t\t</a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-leoguide\">
    <div>
\t\t\t\t\t<br />
                        <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/vt_interior_elements/modules/leoelements/views/img/logo.png\" alt=\"Leo Element";
        // line 181
        echo "s Logo\">
                            Edit with Leo Elements Creator
                        </a>
\t\t    </div>
</script>

<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\tvar \$wrapperCategory = \$('div#category_description, div#root_category_description').closest('.col-sm'),
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
  class=\"lang-en adminproducts developer-mode\"
  data-base-url=\"/prestashop/vt_interior_elements/admincp/index.php\"  data-token=\"5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\"></a>
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
         href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products-";
        // line 255
        echo "v2/create?token=1113ee74494277e352c1e0f90c97f91e\"
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
        data-rand=\"22\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products-v2/1/edit?-ekiRg1rwQgQ_OfSw\"
        data-post-link=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminQuickAccesses&token=996ed83b7d00a93ebfa98da2deec8380\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Products - List\"
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
      action=\"/prestashop/vt_interior_elements/admincp/index.php?controller=AdminSearch&am";
        // line 294
        echo "p;token=c02a4cb70064df640463775b18b1dcdb\"
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
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" da";
        // line 311
        echo "ta-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
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
       href=\"http://localhost/prestashop/vt_interior_elements/";
        // line 348
        echo "admincp/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=775993c5a411e73e9ff545a2a6a8f262\"
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
      data-rand=\"188\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products-v2/1/edit?-ekiRg1rwQgQ_OfSw\"
      data-post-link=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminQuickAccesses&token=996ed83b7d00a93ebfa98da2deec8380\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Products - List\"
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
             href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanc";
        // line 387
        echo "ed/performance/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\"
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
             href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/maintenance/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\"
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
                          <div class=\"component header-right-component\" id=\"header-notifi";
        // line 431
        echo "cations-container\">
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
              Have you checked your <strong><a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.p";
        // line 483
        echo "hp?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=fc79266be3386e888c56020318ea1137\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
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
          <div class=\"dropdown employee-dropdown\">";
        // line 531
        echo "
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/vt_interior_elements/img/pr/default.jpg\" alt=\"Demo\" /></span>
        <span class=\"employee_profile\">Welcome back Demo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/1/edit?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\">
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
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/vt_interior_elements/admincp/in";
        // line 559
        echo "dex.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=IpHk2cVdTqTwvYgwRfHupFykrsq5TGzpX2w2_n9qxOk&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/toggle-navigation?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                                      ";
        // line 592
        echo "    
                    
          
            <li class=\"category-title\" data-submenu=\"143\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"144\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
                                    ";
        // line 628
        echo "    </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\"";
        // line 665
        echo " id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/invoices/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/credit-slips/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/delivery-slips/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCarts&amp;token=fc79266be3386e888c56020318ea1137\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                ";
        // line 694
        echo "              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/categori";
        // line 723
        echo "es?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/monitoring/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminAttributesGroups&amp;token=55daf298f75195fb7b5ef4254fd8e5b8\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/brands/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                    ";
        // line 753
        echo "                        
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/attachments/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCartRules&amp;token=775993c5a411e73e9ff545a2a6a8f262\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/stocks/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customers/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfS";
        // line 782
        echo "w\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customers/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/addresses/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has";
        // line 814
        echo "_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
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
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCustomerThreads&amp;token=c9496f8cbb0650336e5d5c0dab0edcee\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customer-service/order-messages/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                               ";
        // line 841
        echo "   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminReturn&amp;token=bada079d3506483837e2c6d340167410\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics/legacy/stats?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics/legacy/stats?_token=5ggjkpIILYHflHRAmE0fKRt";
        // line 870
        echo "4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul";
        // line 908
        echo " id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminLeoBootstrapMenuModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=db994854669c5f7ee6f6ca3434c4a995\" class=\"link\"> Leo Megamenu Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                     ";
        // line 935
        echo "       
                              <li class=\"link-leveltwo\" data-submenu=\"179\" id=\"subtab-AdminLeoSlideshowMenuModule\">
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
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controll";
        // line 961
        echo "er=AdminLeoSizechart&amp;token=ba575dc37833b3ecf363e04974e1e761\" class=\"link\"> Leo Size Chart
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/themes/catalog/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/improve/design/themes?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/mail_theme/?_token=5ggjkpIILYHflHRAmE0fK";
        // line 1018
        echo "Rt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/cms-pages/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/modules/positions/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminImages&amp;token=8c124be592a7642c2f566cd5477ccc63\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-l";
        // line 1049
        echo "eveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/link-widget/list?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Link List
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/shipping/preferences/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/payment_methods?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/payment_method";
        // line 1108
        echo "s?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/preferences?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/localization/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
        echo "              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/localization/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/zones/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/taxes/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/translations/settings?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Translations
                             ";
        // line 1166
        echo "   </a>
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
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-133\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=25ceabebe521794dae2a36616a0c1489\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsfacebookModule";
        // line 1197
        echo "\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsfacebookModule&amp;token=c6ab0ba21c1b523ea371eb02258dbbec\" class=\"link\"> Facebook &amp; Instagram
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

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" d";
        // line 1254
        echo "ata-submenu=\"170\" id=\"subtab-AdminLeoElementsProducts\">
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
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsFont&amp;token=200a33898adefe882c0387662f052fdf\" class=\"l";
        // line 1279
        echo "ink\"> Font Configuration
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
        // line 1310
        echo " 
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-AdminLeoblogDashboard\">
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
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogComments&amp;token=44650c7e81350fa74";
        // line 1336
        echo "3899b5f0d5001b8\" class=\"link\"> Comment Management
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
                                                      
                              
                                                            
                  ";
        // line 1368
        echo "            <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminLeofeatureModule\">
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
                                            ";
        // line 1396
        echo "</a>
                                              <ul id=\"collapse-193\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
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
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/settings?_token=5ggjkpIILY";
        // line 1431
        echo "HflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/preferences/preferences?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/preferences/preferences?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> ";
        // line 1460
        echo "General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/order-preferences/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/product-preferences/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/customer-preferences/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                           ";
        // line 1491
        echo "   <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/contacts/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/seo-urls/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminSearchConf&amp;token=b54b054b80b7be00513350b0390c0f17\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/system-information/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_";
        // line 1519
        echo "OfSw\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/system-information/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/performance/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
            ";
        // line 1549
        echo "                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/administration/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/emails/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/import/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                 ";
        // line 1578
        echo "             
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/sql-requests/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/logs/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/webservice-keys/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
      ";
        // line 1605
        echo "                          <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/feature-flags/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/security/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Security
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


<div ";
        // line 1642
        echo "id=\"main-div\">
          
      <div class=\"content-div -notoolbar \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1653
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
  <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"btn btn-primary py-1 mt-3\">
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
        // line 1687
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

    // line 1653
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

    // line 1687
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
        return "__string_template__609cf61fe33f2403da208ab344277da8";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1972 => 1687,  1903 => 1653,  1868 => 221,  1853 => 1687,  1813 => 1653,  1800 => 1642,  1761 => 1605,  1732 => 1578,  1701 => 1549,  1669 => 1519,  1639 => 1491,  1606 => 1460,  1575 => 1431,  1538 => 1396,  1508 => 1368,  1474 => 1336,  1446 => 1310,  1413 => 1279,  1386 => 1254,  1357 => 1227,  1325 => 1197,  1292 => 1166,  1264 => 1140,  1230 => 1108,  1199 => 1079,  1167 => 1049,  1134 => 1018,  1106 => 992,  1073 => 961,  1045 => 935,  1016 => 908,  976 => 870,  945 => 841,  916 => 814,  882 => 782,  851 => 753,  819 => 723,  788 => 694,  757 => 665,  718 => 628,  680 => 592,  645 => 559,  615 => 531,  565 => 483,  511 => 431,  465 => 387,  424 => 348,  385 => 311,  366 => 294,  325 => 255,  286 => 221,  244 => 181,  204 => 143,  169 => 110,  143 => 86,  123 => 68,  93 => 40,  52 => 1,);
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

<title>Products • Interior</title>

  <script type=\"text/javascript\">
    var help_class_name = \\'AdminProducts\\';
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
    var token = \\'266f4f41e211869334df0b1828897c62\\';
    var currentIndex = \\'index.php?controller=AdminProducts\\';
    var employee_token = \\'129b775335bac06867deebf1fd52f045\\';
    var choose_language_translate = \\'Choose language:\\';
    var default_language = \\'1\\';
    var admin_modules_link = \\'/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\\';
    var admin_notification_get_link = \\'/prestashop/vt_interior_elements/admincp/index.php/common/notifications?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\\';
    var admin_notification_push_link = adminNotificationPushLink = \\'/prestashop/vt_interior_elements/admincp/index.php/common/notifications/ack?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1' | raw }}{{ 'rwQgQ_OfSw\\';
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
var baseAdminDir = \"\\\\/' | raw }}{{ 'prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/\";
var baseDir = \"\\\\/prestashop\\\\/vt_interior_elements\\\\/\";
var changeFormLanguageUrl = \"\\\\/prestashop\\\\/vt_interior_elements\\\\/admincp\\\\/index.php\\\\/configure\\\\/advanced\\\\/employees\\\\/change-form-language?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\";
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
<script type=\"text/javascript\" src=\"/prestashop/vt' | raw }}{{ '_interior_elements/js/jquery/plugins/jquery.chosen.js\"></script>
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
            var current_id_tab = 10;
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
      notificationGetUrl: \\'/prestashop/vt_interio' | raw }}{{ 'r_elements/admincp/index.php/common/notifications?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\\',
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
\t\t\t<a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/vt_interior_elements/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                            Edit with Leo Elements Creator
\t\t\t</a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-product\">
    <div>
\t\t                    <br />
                    <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                        <img src=\"/prestashop/vt_interior_elements/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
                        Edit with Leo Elements Creator
                    </a>
\t\t    </div>
</script>
\t
<script type=\"text/template\" id=\"btn-edit-page-builder-cms\">
    <div>
\t\t\t\t\t<br />
                        <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/vt_interior_elements/modules/leoelements/views/img/logo.png\" alt=\"Leo Elements Logo\">
   ' | raw }}{{ '                         Edit with Leo Elements Creator
                        </a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-blog\">
    <div class=\"form-group\">
        <label class=\"control-label col-lg-3\"></label>
        <div class=\"col-lg-9\">
\t\t\t\t\t\t\t<a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i>
\t\t\t\t\tEdit content with - LeoElements
\t\t\t\t</a>
\t\t\t\t\t</div>
    </div>
</script>
\t 
<script type=\"text/template\" id=\"btn-edit-page-builder-manufacturer\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i> 
\t\t\t\tEdit content with - LeoElements
\t\t\t</a>
\t\t    </div>
</script>
\t 
<script type=\"text/template\" id=\"btn-edit-page-builder-supplier\">
    <div>
\t\t\t\t\t<br />
\t\t\t<a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" class=\"btn btn-info leo-btn-edit\"><i class=\"icon-external-link\"></i> 
\t\t\t\tEdit content with - LeoElements
\t\t\t</a>
\t\t    </div>
</script>

<script type=\"text/template\" id=\"btn-edit-page-builder-leoguide\">
    <div>
\t\t\t\t\t<br />
                        <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsCreator&token=d2b59641ef6115f2456d0d510b40f330&post_type=product&key_related=1&id_lang=1\" target=\"_blank\" class=\"button button-primary button-hero edit_with_button_link\">
                            <img src=\"/prestashop/vt_interior_elements/modules/leoelements/views/img/logo.png\" alt=\"Leo Element' | raw }}{{ 's Logo\">
                            Edit with Leo Elements Creator
                        </a>
\t\t    </div>
</script>

<script type=\"text/javascript\">
\t\$(document).ready(function () {
\t\tvar \$wrapperCategory = \$(\\'div#category_description, div#root_category_description\\').closest(\\'.col-sm\\'),
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
  class=\"lang-en adminproducts developer-mode\"
  data-base-url=\"/prestashop/vt_interior_elements/admincp/index.php\"  data-token=\"5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\"></a>
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
         href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products-' | raw }}{{ 'v2/create?token=1113ee74494277e352c1e0f90c97f91e\"
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
        data-rand=\"22\"
        data-icon=\"icon-AdminCatalog\"
        data-method=\"add\"
        data-url=\"index.php/sell/catalog/products-v2/1/edit?-ekiRg1rwQgQ_OfSw\"
        data-post-link=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminQuickAccesses&token=996ed83b7d00a93ebfa98da2deec8380\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Products - List\"
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
      action=\"/prestashop/vt_interior_elements/admincp/index.php?controller=AdminSearch&am' | raw }}{{ 'p;token=c02a4cb70064df640463775b18b1dcdb\"
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
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" da' | raw }}{{ 'ta-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
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
       href=\"http://localhost/prestashop/vt_interior_elements/' | raw }}{{ 'admincp/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=775993c5a411e73e9ff545a2a6a8f262\"
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
      data-rand=\"188\"
      data-icon=\"icon-AdminCatalog\"
      data-method=\"add\"
      data-url=\"index.php/sell/catalog/products-v2/1/edit?-ekiRg1rwQgQ_OfSw\"
      data-post-link=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminQuickAccesses&token=996ed83b7d00a93ebfa98da2deec8380\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Products - List\"
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
             href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanc' | raw }}{{ 'ed/performance/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\"
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
             href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/maintenance/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\"
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
                          <div class=\"component header-right-component\" id=\"header-notifi' | raw }}{{ 'cations-container\">
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
              Have you checked your <strong><a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.p' | raw }}{{ 'hp?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=fc79266be3386e888c56020318ea1137\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
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
          <div class=\"dropdown employee-dropdown\">' | raw }}{{ '
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/prestashop/vt_interior_elements/img/pr/default.jpg\" alt=\"Demo\" /></span>
        <span class=\"employee_profile\">Welcome back Demo</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/1/edit?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\">
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
                          <a class=\"dropdown-item ps_mbo\" href=\"/prestashop/vt_interior_elements/admincp/in' | raw }}{{ 'dex.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=IpHk2cVdTqTwvYgwRfHupFykrsq5TGzpX2w2_n9qxOk&utm_source=back-office&utm_medium=menu&utm_content=download8_1&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\"  rel=\"noopener noreferrer nofollow\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/toggle-navigation?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.7</span>
      </div>

      <ul class=\"main-menu\">
              
                                      ' | raw }}{{ '    
                    
          
            <li class=\"category-title\" data-submenu=\"143\" id=\"tab-HOME\">
                <span class=\"title\">Welcome</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"144\" id=\"subtab-AdminPsEditionBasicHomepageController\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
                                    ' | raw }}{{ '    </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\"' | raw }}{{ ' id=\"subtab-AdminInvoices\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/invoices/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/credit-slips/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/orders/delivery-slips/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCarts&amp;token=fc79266be3386e888c56020318ea1137\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                ' | raw }}{{ '              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/products?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/categori' | raw }}{{ 'es?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/monitoring/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminAttributesGroups&amp;token=55daf298f75195fb7b5ef4254fd8e5b8\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/catalog/brands/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                    ' | raw }}{{ '                        
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/attachments/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCartRules&amp;token=775993c5a411e73e9ff545a2a6a8f262\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/stocks/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customers/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfS' | raw }}{{ 'w\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customers/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/addresses/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has' | raw }}{{ '_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
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
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminCustomerThreads&amp;token=c9496f8cbb0650336e5d5c0dab0edcee\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/sell/customer-service/order-messages/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                               ' | raw }}{{ '   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminReturn&amp;token=bada079d3506483837e2c6d340167410\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics/legacy/stats?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics/legacy/stats?_token=5ggjkpIILYHflHRAmE0fKRt' | raw }}{{ '4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"161\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/metrics?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul' | raw }}{{ ' id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"153\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/modules/catalog/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/modules/manage?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"176\" id=\"subtab-AdminLeoBootstrapMenuModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoBootstrapMenuModule&amp;token=db994854669c5f7ee6f6ca3434c4a995\" class=\"link\"> Leo Megamenu Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                     ' | raw }}{{ '       
                              <li class=\"link-leveltwo\" data-submenu=\"179\" id=\"subtab-AdminLeoSlideshowMenuModule\">
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
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controll' | raw }}{{ 'er=AdminLeoSizechart&amp;token=ba575dc37833b3ecf363e04974e1e761\" class=\"link\"> Leo Size Chart
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/mbo/themes/catalog/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"128\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/improve/design/themes?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/mail_theme/?_token=5ggjkpIILYHflHRAmE0fK' | raw }}{{ 'Rt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/cms-pages/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/design/modules/positions/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminImages&amp;token=8c124be592a7642c2f566cd5477ccc63\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-l' | raw }}{{ 'eveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/link-widget/list?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Link List
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/shipping/preferences/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/payment_methods?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/payment_method' | raw }}{{ 's?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/payment/preferences?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/localization/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                ' | raw }}{{ '              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/localization/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/zones/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/taxes/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/improve/international/translations/settings?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Translations
                             ' | raw }}{{ '   </a>
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
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-133\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"134\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=25ceabebe521794dae2a36616a0c1489\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsfacebookModule' | raw }}{{ '\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminPsfacebookModule&amp;token=c6ab0ba21c1b523ea371eb02258dbbec\" class=\"link\"> Facebook &amp; Instagram
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

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" d' | raw }}{{ 'ata-submenu=\"170\" id=\"subtab-AdminLeoElementsProducts\">
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
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoElementsFont&amp;token=200a33898adefe882c0387662f052fdf\" class=\"l' | raw }}{{ 'ink\"> Font Configuration
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
                                                      
                              
                                                           ' | raw }}{{ ' 
                              <li class=\"link-leveltwo\" data-submenu=\"181\" id=\"subtab-AdminLeoblogDashboard\">
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
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminLeoblogComments&amp;token=44650c7e81350fa74' | raw }}{{ '3899b5f0d5001b8\" class=\"link\"> Comment Management
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
                                                      
                              
                                                            
                  ' | raw }}{{ '            <li class=\"link-leveltwo\" data-submenu=\"187\" id=\"subtab-AdminLeofeatureModule\">
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
                                            ' | raw }}{{ '</a>
                                              <ul id=\"collapse-193\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
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
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/settings?_token=5ggjkpIILY' | raw }}{{ 'HflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/preferences/preferences?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/preferences/preferences?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> ' | raw }}{{ 'General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/order-preferences/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/product-preferences/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/customer-preferences/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                           ' | raw }}{{ '   <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/contacts/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/shop/seo-urls/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/prestashop/vt_interior_elements/admincp/index.php?controller=AdminSearchConf&amp;token=b54b054b80b7be00513350b0390c0f17\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/system-information/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_' | raw }}{{ 'OfSw\" class=\"link\">
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
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/system-information/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/performance/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
            ' | raw }}{{ '                    <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/administration/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/emails/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/import/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/employees/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                 ' | raw }}{{ '             
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/sql-requests/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/logs/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/webservice-keys/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
      ' | raw }}{{ '                          <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/feature-flags/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/prestashop/vt_interior_elements/admincp/index.php/configure/advanced/security/?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"link\"> Security
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


<div ' | raw }}{{ 'id=\"main-div\">
          
      <div class=\"content-div -notoolbar \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


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
  <a href=\"/prestashop/vt_interior_elements/admincp/index.php/modules/pseditionbasic/homepage?_token=5ggjkpIILYHflHRAmE0fKRt4gS-ekiRg1rwQgQ_OfSw\" class=\"btn btn-primary py-1 mt-3\">
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
</html>' | raw }}", "__string_template__609cf61fe33f2403da208ab344277da8", "");
    }
}
