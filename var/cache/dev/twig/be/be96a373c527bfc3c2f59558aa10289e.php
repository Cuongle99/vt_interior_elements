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

/* @Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig */
class __TwigTemplate_6f74b6e0b463c26a672c383117e876be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig"));

        // line 25
        echo "
    ";
        // line 26
        if ((!twig_in_filter("svg", twig_last($this->env, twig_split_filter($this->env, (isset($context["headerLogoPath"]) || array_key_exists("headerLogoPath", $context) ? $context["headerLogoPath"] : (function () { throw new RuntimeError('Variable "headerLogoPath" does not exist.', 26, $this->source); })()), "."))) && (((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 26, $this->source); })()) == "email") || ((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 26, $this->source); })()) == "invoice")))) {
            // line 27
            echo "    <form id=\"";
            echo twig_escape_filter($this->env, ((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 27, $this->source); })()) . "_use_header_logo"), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 27, $this->source); })()) . "_use_header_logo"), "html", null, true);
            echo "\" method=\"post\" action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_psxdesign_logo_apply_header_logo_action");
            echo "\" >
        <input type=\"hidden\" name=\"logo_for\" value=\"";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 28, $this->source); })()), "html", null, true);
            echo "\"/>
        <div class=\"form-group\">
            <div class=\"md-checkbox\">
                ";
            // line 31
            $context["use_same_as_header_name"] = ((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 31, $this->source); })()) . "_use_same_as_header");
            // line 32
            echo "                <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["use_same_as_header_name"]) || array_key_exists("use_same_as_header_name", $context) ? $context["use_same_as_header_name"] : (function () { throw new RuntimeError('Variable "use_same_as_header_name" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "\">
                    <input type=\"checkbox\" name=\"use_same_as_header\" id=\"";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["use_same_as_header_name"]) || array_key_exists("use_same_as_header_name", $context) ? $context["use_same_as_header_name"] : (function () { throw new RuntimeError('Variable "use_same_as_header_name" does not exist.', 33, $this->source); })()), "html", null, true);
            echo "\"
                           ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logos"] ?? null), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 34, $this->source); })()), [], "array", false, true, false, 34), "useHeaderLogo", [], "array", true, true, false, 34)) {
                // line 35
                echo "                               ";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 35, $this->source); })()), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 35, $this->source); })()), [], "array", false, false, false, 35), "useHeaderLogo", [], "array", false, false, false, 35)) ? ("checked") : (""));
                echo "
                           ";
            }
            // line 37
            echo "                    >
                    <i class=\"md-checkbox-control\"></i>
                    ";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(" Use header logo", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "
                </label>
            </div>
        </div>
        <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary hidden\" type=\"submit\" aria-label=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save the use of header logo for %form%", ["%form%" => (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 44, $this->source); })())], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</button>
        </div>
    </form>
";
        }
        // line 48
        echo "
<div id=\"";
        // line 49
        echo twig_escape_filter($this->env, ((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 49, $this->source); })()) . "_logo_forms"), "html", null, true);
        echo "\">
    <div class=\"form-control-label font-weight-bold mb-1\">";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Logo type", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</div>
    <div class=\"radio-button-link-container nav\" role=\"tablist\">
        ";
        // line 52
        $context["logo_image_tab"] = ((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 52, $this->source); })()) . "_logo_image");
        // line 53
        echo "        ";
        $context["logo_text_tab"] = ((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 53, $this->source); })()) . "_logo_text");
        // line 54
        echo "        ";
        $context["currentLogoIsImage"] = ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logos"] ?? null), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 54, $this->source); })()), [], "array", false, true, false, 54), "logoType", [], "any", true, true, false, 54) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["logos"] ?? null), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 54, $this->source); })()), [], "array", false, true, false, 54), "logoType", [], "any", true, true, false, 54) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["logos"]) || array_key_exists("logos", $context) ? $context["logos"] : (function () { throw new RuntimeError('Variable "logos" does not exist.', 54, $this->source); })()), (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 54, $this->source); })()), [], "array", false, false, false, 54), "logoType", [], "any", false, false, false, 54) == "image")));
        // line 55
        echo "        <a class=\"nav-link radio-button-link ";
        echo (((isset($context["currentLogoIsImage"]) || array_key_exists("currentLogoIsImage", $context) ? $context["currentLogoIsImage"] : (function () { throw new RuntimeError('Variable "currentLogoIsImage" does not exist.', 55, $this->source); })())) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ("#" . (isset($context["logo_image_tab"]) || array_key_exists("logo_image_tab", $context) ? $context["logo_image_tab"] : (function () { throw new RuntimeError('Variable "logo_image_tab" does not exist.', 55, $this->source); })())), "html", null, true);
        echo "\" data-toggle=\"tab\">
            <div class=\"radio-button-link__radio\"></div>
            <span class=\"material-icons radio-button-link__icon\">
                            image
                        </span>
            <div class=\"radio-button-link__text\">
                <span class=\"radio-button-link__label\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Image", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</span>
                <span class=\"radio-button-link__help\">";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import logo image", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</span>
            </div>
        </a>
        <a class=\"nav-link radio-button-link ";
        // line 65
        echo (( !(isset($context["currentLogoIsImage"]) || array_key_exists("currentLogoIsImage", $context) ? $context["currentLogoIsImage"] : (function () { throw new RuntimeError('Variable "currentLogoIsImage" does not exist.', 65, $this->source); })())) ? ("active") : (""));
        echo "\" href=\"";
        echo twig_escape_filter($this->env, ("#" . (isset($context["logo_text_tab"]) || array_key_exists("logo_text_tab", $context) ? $context["logo_text_tab"] : (function () { throw new RuntimeError('Variable "logo_text_tab" does not exist.', 65, $this->source); })())), "html", null, true);
        echo "\" data-toggle=\"tab\">
            <div class=\"radio-button-link__radio\"></div>
            <span class=\"material-icons radio-button-link__icon\">
                            notes
                        </span>
            <div class=\"radio-button-link__text\">
                <span class=\"radio-button-link__label\">";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Text", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</span>
                <span class=\"radio-button-link__help\">";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Create text logo", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</span>
            </div>
        </a>
    </div>
    <div class=\"tab-content p-0 pt-3\">
        <div class=\"tab-pane ";
        // line 77
        echo (((isset($context["currentLogoIsImage"]) || array_key_exists("currentLogoIsImage", $context) ? $context["currentLogoIsImage"] : (function () { throw new RuntimeError('Variable "currentLogoIsImage" does not exist.', 77, $this->source); })())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["logo_image_tab"]) || array_key_exists("logo_image_tab", $context) ? $context["logo_image_tab"] : (function () { throw new RuntimeError('Variable "logo_image_tab" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 78
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig", 78)->display(twig_array_merge($context, ["form_name" =>         // line 79
(isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 79, $this->source); })())]));
        // line 81
        echo "        </div>
        <div class=\"tab-pane ";
        // line 82
        echo (( !(isset($context["currentLogoIsImage"]) || array_key_exists("currentLogoIsImage", $context) ? $context["currentLogoIsImage"] : (function () { throw new RuntimeError('Variable "currentLogoIsImage" does not exist.', 82, $this->source); })())) ? ("active") : (""));
        echo "\" id=\"";
        echo twig_escape_filter($this->env, (isset($context["logo_text_tab"]) || array_key_exists("logo_text_tab", $context) ? $context["logo_text_tab"] : (function () { throw new RuntimeError('Variable "logo_text_tab" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "\">
            ";
        // line 83
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig", 83)->display(twig_array_merge($context, ["form_name" =>         // line 84
(isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 84, $this->source); })())]));
        // line 86
        echo "        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 86,  187 => 84,  186 => 83,  180 => 82,  177 => 81,  175 => 79,  174 => 78,  168 => 77,  160 => 72,  156 => 71,  145 => 65,  139 => 62,  135 => 61,  123 => 55,  120 => 54,  117 => 53,  115 => 52,  110 => 50,  106 => 49,  103 => 48,  94 => 44,  86 => 39,  82 => 37,  76 => 35,  74 => 34,  70 => 33,  65 => 32,  63 => 31,  57 => 28,  48 => 27,  46 => 26,  43 => 25,);
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

    {% if 'svg' not in headerLogoPath|split('.')|last and (form_name == 'email' or form_name == 'invoice') %}
    <form id=\"{{ form_name ~ '_use_header_logo' }}\" name=\"{{ form_name ~ '_use_header_logo' }}\" method=\"post\" action=\"{{ path('admin_psxdesign_logo_apply_header_logo_action') }}\" >
        <input type=\"hidden\" name=\"logo_for\" value=\"{{ form_name }}\"/>
        <div class=\"form-group\">
            <div class=\"md-checkbox\">
                {% set use_same_as_header_name = form_name ~ '_use_same_as_header' %}
                <label for=\"{{ use_same_as_header_name }}\">
                    <input type=\"checkbox\" name=\"use_same_as_header\" id=\"{{ use_same_as_header_name }}\"
                           {% if logos[form_name]['useHeaderLogo'] is defined %}
                               {{ logos[form_name]['useHeaderLogo'] ? 'checked' : '' }}
                           {% endif %}
                    >
                    <i class=\"md-checkbox-control\"></i>
                    {{' Use header logo'|trans({}, 'Modules.Psxdesign.Admin') }}
                </label>
            </div>
        </div>
        <div class=\"d-flex justify-content-end\">
            <button class=\"btn btn-primary hidden\" type=\"submit\" aria-label=\"{{ 'Save the use of header logo for %form%'|trans({ '%form%': form_name }, 'Modules.Psxdesign.Admin') }}\">{{ 'Save'|trans({}, 'Modules.Psxdesign.Admin') }}</button>
        </div>
    </form>
{% endif %}

<div id=\"{{ form_name ~ '_logo_forms' }}\">
    <div class=\"form-control-label font-weight-bold mb-1\">{{ 'Logo type'|trans({}, 'Modules.Psxdesign.Admin') }}</div>
    <div class=\"radio-button-link-container nav\" role=\"tablist\">
        {% set logo_image_tab = form_name ~ '_logo_image' %}
        {% set logo_text_tab = form_name ~ '_logo_text' %}
        {% set currentLogoIsImage = logos[form_name].logoType is not defined or (logos[form_name].logoType is defined and logos[form_name].logoType == 'image') %}
        <a class=\"nav-link radio-button-link {{ currentLogoIsImage ? 'active' : '' }}\" href=\"{{ '#' ~ logo_image_tab }}\" data-toggle=\"tab\">
            <div class=\"radio-button-link__radio\"></div>
            <span class=\"material-icons radio-button-link__icon\">
                            image
                        </span>
            <div class=\"radio-button-link__text\">
                <span class=\"radio-button-link__label\">{{ 'Image'|trans({}, 'Modules.Psxdesign.Admin') }}</span>
                <span class=\"radio-button-link__help\">{{ 'Import logo image'|trans({}, 'Modules.Psxdesign.Admin') }}</span>
            </div>
        </a>
        <a class=\"nav-link radio-button-link {{ not currentLogoIsImage ? 'active' : '' }}\" href=\"{{ '#' ~logo_text_tab }}\" data-toggle=\"tab\">
            <div class=\"radio-button-link__radio\"></div>
            <span class=\"material-icons radio-button-link__icon\">
                            notes
                        </span>
            <div class=\"radio-button-link__text\">
                <span class=\"radio-button-link__label\">{{ 'Text'|trans({}, 'Modules.Psxdesign.Admin') }}</span>
                <span class=\"radio-button-link__help\">{{ 'Create text logo'|trans({}, 'Modules.Psxdesign.Admin') }}</span>
            </div>
        </a>
    </div>
    <div class=\"tab-content p-0 pt-3\">
        <div class=\"tab-pane {{ currentLogoIsImage ? 'active' : '' }}\" id=\"{{ logo_image_tab }}\">
            {% include '@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig' with {
                form_name: form_name
            } %}
        </div>
        <div class=\"tab-pane {{ not currentLogoIsImage ? 'active' : '' }}\" id=\"{{ logo_text_tab }}\">
            {% include '@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_text.html.twig' with {
                form_name: form_name
            } %}
        </div>
    </div>
</div>
", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig", "D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\psxdesign\\views\\templates\\admin\\logos\\Blocks\\Partials\\logo_form_tabs.html.twig");
    }
}
