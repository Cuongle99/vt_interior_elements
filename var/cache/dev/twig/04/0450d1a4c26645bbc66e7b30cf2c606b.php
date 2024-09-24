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

/* @Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig */
class __TwigTemplate_293b5b4521af74f4d2f78a743013b04d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig"));

        // line 25
        echo "
<form id=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "_logo_image_form\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_psxdesign_logo_image_import_action");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
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
        if (((isset($context["currentPreview"]) || array_key_exists("currentPreview", $context) ? $context["currentPreview"] : (function () { throw new RuntimeError('Variable "currentPreview" does not exist.', 30, $this->source); })()) ==  !null)) {
            // line 31
            echo "    <div class=\"form-group\">
        <label class=\"form-control-label font-weight-bold\">";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current logo", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "</label>
        <div class=\"d-flex justify-content-center align-items-md-center border rounded p-3\">
            <img class=\"preview-logo\" src=\"";
            // line 34
            echo twig_escape_filter($this->env, (isset($context["currentPreview"]) || array_key_exists("currentPreview", $context) ? $context["currentPreview"] : (function () { throw new RuntimeError('Variable "currentPreview" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current logo preview", [], "Modules.Psxdesign.Admin"), "html", null, true);
            echo "\" />
        </div>
    </div>
    ";
        }
        // line 38
        echo "    <div class=\"form-group\">
        ";
        // line 39
        $context["file_uploader_name"] = ((((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 39, $this->source); })()) == "header")) ? ("PS_LOGO") : (((((isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 39, $this->source); })()) == "email")) ? ("PS_LOGO_MAIL") : ("PS_LOGO_INVOICE"))));
        // line 40
        echo "        <label class=\"form-control-label font-weight-bold\" for=\"";
        echo twig_escape_filter($this->env, (isset($context["file_uploader_name"]) || array_key_exists("file_uploader_name", $context) ? $context["file_uploader_name"] : (function () { throw new RuntimeError('Variable "file_uploader_name" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Import logo", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</label>
        ";
        // line 41
        $this->loadTemplate("@Modules/psxdesign/views/templates/components/file_uploader.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig", 41)->display(twig_array_merge($context, ["id" =>         // line 42
(isset($context["file_uploader_name"]) || array_key_exists("file_uploader_name", $context) ? $context["file_uploader_name"] : (function () { throw new RuntimeError('Variable "file_uploader_name" does not exist.', 42, $this->source); })()), "accept" =>         // line 43
(isset($context["currentStringFormat"]) || array_key_exists("currentStringFormat", $context) ? $context["currentStringFormat"] : (function () { throw new RuntimeError('Variable "currentStringFormat" does not exist.', 43, $this->source); })()), "required" => true]));
        // line 46
        echo "        <p class=\"form-text mt-2\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Accepted formats: %formats%.", ["%formats%" => (isset($context["currentStringFormat"]) || array_key_exists("currentStringFormat", $context) ? $context["currentStringFormat"] : (function () { throw new RuntimeError('Variable "currentStringFormat" does not exist.', 47, $this->source); })())], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "
        </p>
    </div>
    <div class=\"alert-container\" role=\"alert\"></div>
    <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" type=\"submit\" aria-label=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save logo image for %form%", ["%form%" => (isset($context["form_name"]) || array_key_exists("form_name", $context) ? $context["form_name"] : (function () { throw new RuntimeError('Variable "form_name" does not exist.', 52, $this->source); })())], "Modules.Psxdesign.Admin"), "html", null, true);
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
        return "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 52,  100 => 47,  97 => 46,  95 => 43,  94 => 42,  93 => 41,  86 => 40,  84 => 39,  81 => 38,  72 => 34,  67 => 32,  64 => 31,  62 => 30,  57 => 29,  54 => 28,  52 => 27,  46 => 26,  43 => 25,);
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

<form id=\"{{ form_name }}_logo_image_form\" action=\"{{ path('admin_psxdesign_logo_image_import_action') }}\" method=\"post\" enctype=\"multipart/form-data\">
    {% set currentStringFormat = form_name == 'header' ? headerFormats|join(', ') : otherFormats|join(', ') %}
    {% set currentPreview = form_name == 'header' ? headerLogoPath : form_name == 'email' ? mailLogoPath : invoiceLogoPath %}
    <input type=\"hidden\" name=\"logo_for\" value=\"{{ form_name }}\"/>
    {% if currentPreview == not null %}
    <div class=\"form-group\">
        <label class=\"form-control-label font-weight-bold\">{{ 'Current logo'|trans({}, 'Modules.Psxdesign.Admin') }}</label>
        <div class=\"d-flex justify-content-center align-items-md-center border rounded p-3\">
            <img class=\"preview-logo\" src=\"{{ currentPreview }}\" alt=\"{{ 'Current logo preview'|trans({}, 'Modules.Psxdesign.Admin') }}\" />
        </div>
    </div>
    {% endif %}
    <div class=\"form-group\">
        {% set  file_uploader_name = form_name == 'header' ? 'PS_LOGO' : form_name == 'email' ? 'PS_LOGO_MAIL' : 'PS_LOGO_INVOICE' %}
        <label class=\"form-control-label font-weight-bold\" for=\"{{ file_uploader_name }}\">{{ 'Import logo'|trans({}, 'Modules.Psxdesign.Admin') }}</label>
        {% include '@Modules/psxdesign/views/templates/components/file_uploader.html.twig' with {
            'id': file_uploader_name,
            'accept': currentStringFormat,
            'required': true,
        } %}
        <p class=\"form-text mt-2\">
            {{ 'Accepted formats: %formats%.'|trans({ '%formats%': currentStringFormat }, 'Modules.Psxdesign.Admin') }}
        </p>
    </div>
    <div class=\"alert-container\" role=\"alert\"></div>
    <div class=\"d-flex justify-content-end\">
        <button class=\"btn btn-primary\" type=\"submit\" aria-label=\"{{ 'Save logo image for %form%'|trans({ '%form%': form_name }, 'Modules.Psxdesign.Admin') }}\">{{ 'Save'|trans({}, 'Modules.Psxdesign.Admin') }}</button>
    </div>
</form>", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_image.html.twig", "D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\psxdesign\\views\\templates\\admin\\logos\\Blocks\\Partials\\logo_form_image.html.twig");
    }
}
