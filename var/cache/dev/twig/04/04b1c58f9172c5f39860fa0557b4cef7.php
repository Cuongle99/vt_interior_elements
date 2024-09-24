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

/* @Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig */
class __TwigTemplate_d58636d29722a1e7aceba9022face214 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig"));

        // line 25
        echo "
<div class=\"col-12 col-lg-8\">
    <div class=\"card\">
        <header>
            <nav>
                <ul class=\"nav nav-pills\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#logo_header\" role=\"tab\" data-toggle=\"tab\">";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Header", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#logo_email\" role=\"tab\" data-toggle=\"tab\">";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#logo_invoice\" role=\"tab\" data-toggle=\"tab\">";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice", [], "Modules.Psxdesign.Admin"), "html", null, true);
        echo "</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"logo_header\">
                ";
        // line 45
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig", 45)->display(twig_array_merge($context, ["form_name" => "header"]));
        // line 48
        echo "            </div>
            <div class=\"tab-pane\" id=\"logo_email\">
                ";
        // line 50
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig", 50)->display(twig_array_merge($context, ["form_name" => "email"]));
        // line 53
        echo "            </div>
            <div class=\"tab-pane\" id=\"logo_invoice\">
                ";
        // line 55
        $this->loadTemplate("@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig", 55)->display(twig_array_merge($context, ["form_name" => "invoice"]));
        // line 58
        echo "            </div>
        </div>
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 58,  86 => 55,  82 => 53,  80 => 50,  76 => 48,  74 => 45,  64 => 38,  58 => 35,  52 => 32,  43 => 25,);
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
    <div class=\"card\">
        <header>
            <nav>
                <ul class=\"nav nav-pills\" role=\"tablist\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link active\" href=\"#logo_header\" role=\"tab\" data-toggle=\"tab\">{{ 'Header'|trans({}, 'Modules.Psxdesign.Admin') }}</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#logo_email\" role=\"tab\" data-toggle=\"tab\">{{ 'Email'|trans({}, 'Modules.Psxdesign.Admin') }}</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"#logo_invoice\" role=\"tab\" data-toggle=\"tab\">{{ 'Invoice'|trans({}, 'Modules.Psxdesign.Admin') }}</a>
                    </li>
                </ul>
            </nav>
        </header>
        <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"logo_header\">
                {% include '@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig' with {
                    form_name: 'header'
                } %}
            </div>
            <div class=\"tab-pane\" id=\"logo_email\">
                {% include '@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig' with {
                    form_name: 'email'
                } %}
            </div>
            <div class=\"tab-pane\" id=\"logo_invoice\">
                {% include '@Modules/psxdesign/views/templates/admin/logos/Blocks/Partials/logo_form_tabs.html.twig' with {
                    form_name: 'invoice'
                } %}
            </div>
        </div>
    </div>
</div>
", "@Modules/psxdesign/views/templates/admin/logos/Blocks/Logo/logo_content.html.twig", "D:\\xampp\\htdocs\\prestashop\\vt_interior_elements\\modules\\psxdesign\\views\\templates\\admin\\logos\\Blocks\\Logo\\logo_content.html.twig");
    }
}
