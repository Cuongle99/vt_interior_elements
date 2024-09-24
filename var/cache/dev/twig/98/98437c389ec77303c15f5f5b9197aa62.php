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

/* @Modules/psxdesign/views/templates/admin/logos/Blocks/Favicon/favicon_content.html.twig */
class __TwigTemplate_38391d2ad10d32bfba97ae6f714856b7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Favicon/favicon_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Favicon/favicon_content.html.twig"));

        // line 25
        echo "
<div class=\"col-12 col-lg-8\">
    <div class=\"card p-3\">

        <div class=\"form-group\">
            <div class=\"form-control-label font-weight-bold\">";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current favicon", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</div>
            <div class=\"d-flex justify-content-center align-items-md-center border rounded p-3\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"289\" height=\"180\" fill=\"none\">
                    <g filter=\"url(#svg-dropShadowFilter)\">
                        <path fill=\"#EAEBEC\" d=\"M8 8a4 4 0 0 1 4-4h265a4 4 0 0 1 4 4v37H8V8Z\"/>
                        <circle cx=\"30\" cy=\"28.5\" r=\"6\" fill=\"#fff\"/>
                        <circle cx=\"50\" cy=\"28.5\" r=\"6\" fill=\"#fff\"/>
                        <circle cx=\"70\" cy=\"28.5\" r=\"6\" fill=\"#fff\"/>
                        <path fill=\"#FAFBFC\" d=\"M92 20a8 8 0 0 1 8-8h157a8 8 0 0 1 8 8v25H92V20Z\"/>
                        <g clip-path=\"url(#svg-titleShopContainer)\">
                            <image xlink:href=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["baseShopUrl"]) || array_key_exists("baseShopUrl", $context) ? $context["baseShopUrl"] : (function () { throw new RuntimeError('Variable "baseShopUrl" does not exist.', 40, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["faviconPath"]) || array_key_exists("faviconPath", $context) ? $context["faviconPath"] : (function () { throw new RuntimeError('Variable "faviconPath" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\" width=\"16\" height=\"16\" x=\"104\" y=\"21\"/>
                            <text fill=\"#363A41\" font-family=\"Open Sans\" font-size=\"12\" x=\"128\" y=\"33.655\">";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["shopName"]) || array_key_exists("shopName", $context) ? $context["shopName"] : (function () { throw new RuntimeError('Variable "shopName" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "</text>
                        </g>
                        <path stroke=\"#6C868E\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"m245 25 3.5 3.5L252 32m0-7-7 7\"/>
                        <path fill=\"#FAFBFC\" d=\"M84 45h8v-8a8 8 0 0 1-8 8Zm189 0h-8v-8a8 8 0 0 0 8 8ZM8 45h273v48H8z\"/>
                        <rect width=\"257\" height=\"32\" x=\"16\" y=\"53\" fill=\"#fff\" rx=\"4\"/>
                        <text clip-path=\"url(#svg-urlContainer)\" xml:space=\"preserve\" fill=\"#363A41\" font-family=\"Open Sans\" font-size=\"12\"><tspan x=\"24\" y=\"73.655\">";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["baseShopUrl"]) || array_key_exists("baseShopUrl", $context) ? $context["baseShopUrl"] : (function () { throw new RuntimeError('Variable "baseShopUrl" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "</tspan></text>
                        <path fill=\"#fff\" d=\"M8 93h273v71a4 4 0 0 1-4 4H12a4 4 0 0 1-4-4V93Z\"/>
                    </g>
                    <defs>
                        <clipPath id=\"svg-titleShopContainer\">
                            <path fill=\"#fff\" d=\"M104 21h130v16h-130z\"/>
                        </clipPath>
                        <clipPath id=\"svg-urlContainer\">
                            <rect width=\"241\" height=\"32\" x=\"24\" y=\"53\" rx=\"4\"></rect>
                        </clipPath>
                        <filter id=\"svg-dropShadowFilter\" width=\"289\" height=\"180\" x=\"0\" y=\"0\" filterUnits=\"userSpaceOnUse\">
                            <feDropShadow stdDeviation=\"4\" dx=\"0\" dy=\"4\" flood-color=\"#000000\" flood-opacity=\"0.1\"/>
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
        <form id=\"upload_favicon\" name=\"form\" action=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_psxdesign_upload_favicon_action");
        echo "\" method=\"POST\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label for=\"PS_FAVICON\" class=\"form-control-label font-weight-bold\">";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import favicon", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</label>
                ";
        // line 66
        $this->loadTemplate("@Modules/psxdesign/views/templates/components/file_uploader.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Favicon/favicon_content.html.twig", 66)->display(twig_array_merge($context, ["id" => "PS_FAVICON", "accept" => ".ico", "required" => true]));
        // line 71
        echo "                <p class=\"form-text mt-2\">
                    ";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Accepted format: .ico.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
                </p>
            </div>
            <div class=\"d-flex justify-content-end\">
                <button type=\"submit\" class=\"btn btn-primary\" aria-label=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save favicon", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/logos/Blocks/Favicon/favicon_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 76,  110 => 72,  107 => 71,  105 => 66,  101 => 65,  96 => 63,  76 => 46,  68 => 41,  63 => 40,  50 => 30,  43 => 25,);
    }

    public function getSourceContext()
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 *#}

<div class=\"col-12 col-lg-8\">
    <div class=\"card p-3\">

        <div class=\"form-group\">
            <div class=\"form-control-label font-weight-bold\">{{ 'Current favicon'|trans({}, 'Modules.Psxdesign.Admin') }}</div>
            <div class=\"d-flex justify-content-center align-items-md-center border rounded p-3\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"289\" height=\"180\" fill=\"none\">
                    <g filter=\"url(#svg-dropShadowFilter)\">
                        <path fill=\"#EAEBEC\" d=\"M8 8a4 4 0 0 1 4-4h265a4 4 0 0 1 4 4v37H8V8Z\"/>
                        <circle cx=\"30\" cy=\"28.5\" r=\"6\" fill=\"#fff\"/>
                        <circle cx=\"50\" cy=\"28.5\" r=\"6\" fill=\"#fff\"/>
                        <circle cx=\"70\" cy=\"28.5\" r=\"6\" fill=\"#fff\"/>
                        <path fill=\"#FAFBFC\" d=\"M92 20a8 8 0 0 1 8-8h157a8 8 0 0 1 8 8v25H92V20Z\"/>
                        <g clip-path=\"url(#svg-titleShopContainer)\">
                            <image xlink:href=\"{{ baseShopUrl }}{{ faviconPath }}\" width=\"16\" height=\"16\" x=\"104\" y=\"21\"/>
                            <text fill=\"#363A41\" font-family=\"Open Sans\" font-size=\"12\" x=\"128\" y=\"33.655\">{{ shopName }}</text>
                        </g>
                        <path stroke=\"#6C868E\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" d=\"m245 25 3.5 3.5L252 32m0-7-7 7\"/>
                        <path fill=\"#FAFBFC\" d=\"M84 45h8v-8a8 8 0 0 1-8 8Zm189 0h-8v-8a8 8 0 0 0 8 8ZM8 45h273v48H8z\"/>
                        <rect width=\"257\" height=\"32\" x=\"16\" y=\"53\" fill=\"#fff\" rx=\"4\"/>
                        <text clip-path=\"url(#svg-urlContainer)\" xml:space=\"preserve\" fill=\"#363A41\" font-family=\"Open Sans\" font-size=\"12\"><tspan x=\"24\" y=\"73.655\">{{ baseShopUrl }}</tspan></text>
                        <path fill=\"#fff\" d=\"M8 93h273v71a4 4 0 0 1-4 4H12a4 4 0 0 1-4-4V93Z\"/>
                    </g>
                    <defs>
                        <clipPath id=\"svg-titleShopContainer\">
                            <path fill=\"#fff\" d=\"M104 21h130v16h-130z\"/>
                        </clipPath>
                        <clipPath id=\"svg-urlContainer\">
                            <rect width=\"241\" height=\"32\" x=\"24\" y=\"53\" rx=\"4\"></rect>
                        </clipPath>
                        <filter id=\"svg-dropShadowFilter\" width=\"289\" height=\"180\" x=\"0\" y=\"0\" filterUnits=\"userSpaceOnUse\">
                            <feDropShadow stdDeviation=\"4\" dx=\"0\" dy=\"4\" flood-color=\"#000000\" flood-opacity=\"0.1\"/>
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
        <form id=\"upload_favicon\" name=\"form\" action=\"{{ path('admin_psxdesign_upload_favicon_action') }}\" method=\"POST\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label for=\"PS_FAVICON\" class=\"form-control-label font-weight-bold\">{{ 'Import favicon'|trans({}, 'Modules.Psxdesign.Admin') }}</label>
                {% include '@Modules/psxdesign/views/templates/components/file_uploader.html.twig' with {
                    'id': 'PS_FAVICON',
                    'accept': '.ico',
                    'required': true,
                } %}
                <p class=\"form-text mt-2\">
                    {{ 'Accepted format: .ico.'|trans({}, 'Modules.Psxdesign.Admin') }}
                </p>
            </div>
            <div class=\"d-flex justify-content-end\">
                <button type=\"submit\" class=\"btn btn-primary\" aria-label=\"{{ 'Save favicon'|trans({}, 'Modules.Psxdesign.Admin') }}\">{{ 'Save'|trans({}, 'Modules.Psxdesign.Admin') }}</button>
            </div>
        </form>
    </div>
</div>
", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Favicon/favicon_content.html.twig", "D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\psxdesign\\views\\templates\\admin\\logos\\Blocks\\Favicon\\favicon_content.html.twig");
    }
}
