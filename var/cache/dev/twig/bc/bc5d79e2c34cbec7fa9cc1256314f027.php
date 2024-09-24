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

/* @Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig */
class __TwigTemplate_4ed3e275b47a3dc70324fa656a518f20 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig"));

        // line 25
        echo "
<form id=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "_logo_text_form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_psxdesign_logo_text_import_action");
        echo "\" method=\"post\">
    ";
        // line 27
        $context["currentStringFormat"] = ((((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 27, $this->source); })()) == "header")) ? (twig_join_filter((isset($context["headerFormats"]) || array_key_exists("headerFormats", $context) ? $context["headerFormats"] : (function () { throw new RuntimeError('Variable "headerFormats" does not exist.', 27, $this->source); })()), ", ")) : (twig_join_filter((isset($context["otherFormats"]) || array_key_exists("otherFormats", $context) ? $context["otherFormats"] : (function () { throw new RuntimeError('Variable "otherFormats" does not exist.', 27, $this->source); })()), ", ")));
        // line 28
        echo "    ";
        $context["currentPreview"] = ((((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 28, $this->source); })()) == "header")) ? ((isset($context["headerLogoPath"]) || array_key_exists("headerLogoPath", $context) ? $context["headerLogoPath"] : (function () { throw new RuntimeError('Variable "headerLogoPath" does not exist.', 28, $this->source); })())) : (((((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 28, $this->source); })()) == "email")) ? ((isset($context["mailLogoPath"]) || array_key_exists("mailLogoPath", $context) ? $context["mailLogoPath"] : (function () { throw new RuntimeError('Variable "mailLogoPath" does not exist.', 28, $this->source); })())) : ((isset($context["invoiceLogoPath"]) || array_key_exists("invoiceLogoPath", $context) ? $context["invoiceLogoPath"] : (function () { throw new RuntimeError('Variable "invoiceLogoPath" does not exist.', 28, $this->source); })())))));
        // line 29
        echo "    <input type=\"hidden\" name=\"logo_for\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\"/>
    ";
        // line 30
        $this->loadTemplate("@Modules/psxdesign/views/templates/components/text_editor.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig", 30)->display(twig_array_merge($context, ["fontList" =>         // line 31
(isset($context["fonts"]) || array_key_exists("fonts", $context) ? $context["fonts"] : (function () { throw new RuntimeError('Variable "fonts" does not exist.', 31, $this->source); })()), "fontVariants" =>         // line 32
(isset($context["fontVariants"]) || array_key_exists("fontVariants", $context) ? $context["fontVariants"] : (function () { throw new RuntimeError('Variable "fontVariants" does not exist.', 32, $this->source); })()), "fontFamily" => ["id" => (        // line 34
(isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 34, $this->source); })()) . "_font_family"), "name" => "font_family", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 36
($context["logos"] ?? null), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 36, $this->source); })()), [], "array", false, true, false, 36), "font", [], "any", true, true, false, 36) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 36, $this->source); })()), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 36, $this->source); })()), [], "array", false, false, false, 36), "font", [], "any", false, false, false, 36)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 36, $this->source); })()), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 36, $this->source); })()), [], "array", false, false, false, 36), "font", [], "any", false, false, false, 36)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["fonts"]) || array_key_exists("fonts", $context) ? $context["fonts"] : (function () { throw new RuntimeError('Variable "fonts" does not exist.', 36, $this->source); })()), 0, [], "array", false, false, false, 36), "code", [], "any", false, false, false, 36)))], "fontStyle" => ["id" => (        // line 39
(isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 39, $this->source); })()) . "_font_style"), "name" => "font_style", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 41
($context["logos"] ?? null), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 41, $this->source); })()), [], "array", false, true, false, 41), "style", [], "any", true, true, false, 41) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 41, $this->source); })()), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 41, $this->source); })()), [], "array", false, false, false, 41), "style", [], "any", false, false, false, 41)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 41, $this->source); })()), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 41, $this->source); })()), [], "array", false, false, false, 41), "style", [], "any", false, false, false, 41)) : ("normal-400"))], "fontSize" => ["id" => (        // line 44
(isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 44, $this->source); })()) . "_font_size"), "name" => "font_size", "min" => 16, "max" => 100, "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 48
($context["logos"] ?? null), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 48, $this->source); })()), [], "array", false, true, false, 48), "fontSize", [], "any", true, true, false, 48) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 48, $this->source); })()), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 48, $this->source); })()), [], "array", false, false, false, 48), "fontSize", [], "any", false, false, false, 48)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 48, $this->source); })()), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 48, $this->source); })()), [], "array", false, false, false, 48), "fontSize", [], "any", false, false, false, 48)) : (16))], "fontColor" => ["id" => (        // line 51
(isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 51, $this->source); })()) . "_font_color"), "name" => "font_color", "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 53
($context["logos"] ?? null), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 53, $this->source); })()), [], "array", false, true, false, 53), "color", [], "any", true, true, false, 53) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 53, $this->source); })()), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 53, $this->source); })()), [], "array", false, false, false, 53), "color", [], "any", false, false, false, 53)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 53, $this->source); })()), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 53, $this->source); })()), [], "array", false, false, false, 53), "color", [], "any", false, false, false, 53)) : ("#000000"))], "textArea" => ["id" => (        // line 56
(isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 56, $this->source); })()) . "_textarea"), "name" => "logo_text", "ariaLabel" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text of your logo", [], "Modules.Psxdesign.Admin"), "value" => (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["logos"] ?? null), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 59, $this->source); })()), [], "array", false, true, false, 59), "text", [], "any", true, true, false, 59) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 59, $this->source); })()), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 59, $this->source); })()), [], "array", false, false, false, 59), "text", [], "any", false, false, false, 59)))) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 59, $this->source); })()), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 59, $this->source); })()), [], "array", false, false, false, 59), "text", [], "any", false, false, false, 59)) : ((isset($context["shopName"]) || array_key_exists("shopName", $context) ? $context["shopName"] : (function () { throw new RuntimeError('Variable "shopName" does not exist.', 59, $this->source); })()))), "multiline" => false, "required" => true]]));
        // line 64
        echo "    <p class=\"form-text mt-2\">
        ";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Always check the final result on your store as it may differ from the preview, depending on your theme.", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
    </p>
    <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" type=\"submit\" aria-label=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save logo image for %form%", ["%form%" => (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 68, $this->source); })())], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</button>
    </div>
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 68,  79 => 65,  76 => 64,  74 => 59,  73 => 56,  72 => 53,  71 => 51,  70 => 48,  69 => 44,  68 => 41,  67 => 39,  66 => 36,  65 => 34,  64 => 32,  63 => 31,  62 => 30,  57 => 29,  54 => 28,  52 => 27,  46 => 26,  43 => 25,);
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

<form id=\"{{ form_name }}_logo_text_form\" action=\"{{ path('admin_psxdesign_logo_text_import_action') }}\" method=\"post\">
    {% set currentStringFormat = form_name == 'header' ? headerFormats|join(', ') : otherFormats|join(', ') %}
    {% set currentPreview = form_name == 'header' ? headerLogoPath : form_name == 'email' ? mailLogoPath : invoiceLogoPath %}
    <input type=\"hidden\" name=\"logo_for\" value=\"{{ form_name }}\"/>
    {% include '@Modules/psxdesign/views/templates/components/text_editor.html.twig' with {
        fontList: fonts,
        fontVariants: fontVariants,
        fontFamily: {
            id: form_name ~ '_font_family',
            name: 'font_family',
            value: logos[form_name].font is defined and logos[form_name].font is not empty ? logos[form_name].font : fonts[0].code,
        },
        fontStyle: {
            id: form_name ~ '_font_style',
            name: 'font_style',
            value: logos[form_name].style is defined and logos[form_name].style is not empty ? logos[form_name].style : 'normal-400',
        },
        fontSize: {
            id: form_name ~ '_font_size',
            name: 'font_size',
            min: 16,
            max: 100,
            value: logos[form_name].fontSize is defined and logos[form_name].fontSize is not empty ? logos[form_name].fontSize : 16,
        },
        fontColor: {
            id: form_name ~ '_font_color',
            name: 'font_color',
            value: logos[form_name].color is defined and logos[form_name].color is not empty ? logos[form_name].color : '#000000',
        },
        textArea: {
            id: form_name ~ '_textarea',
            name: 'logo_text',
            ariaLabel: 'Text of your logo'|trans({}, 'Modules.Psxdesign.Admin'),
            value: logos[form_name].text is defined and logos[form_name].text is not empty ? logos[form_name].text : shopName,
            multiline: false,
            required: true,
        }
    } %}
    <p class=\"form-text mt-2\">
        {{ 'Always check the final result on your store as it may differ from the preview, depending on your theme.'|trans({}, 'Modules.Psxdesign.Admin') }}
    </p>
    <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" type=\"submit\" aria-label=\"{{ 'Save logo image for %form%'|trans({ '%form%': form_name }, 'Modules.Psxdesign.Admin') }}\">{{ 'Save'|trans({}, 'Modules.Psxdesign.Admin') }}</button>
    </div>
</form>", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig", "D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\psxdesign\\views\\templates\\admin\\logos\\Blocks\\Partials\\logo_form_text.html.twig");
    }
}
