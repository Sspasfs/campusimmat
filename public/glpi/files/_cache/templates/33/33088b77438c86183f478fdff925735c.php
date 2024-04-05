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

/* components/itilobject/timeline/timeline_item_header_badges.html.twig */
class __TwigTemplate_00fabaaa109a40bb81b6ce658882cd11 extends Template
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
        // line 33
        echo "
";
        // line 34
        $context["timeline_display_date"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpitimeline_date_format");
        // line 35
        $context["date_creation_formatted"] = ($context["date_creation"] ?? null);
        // line 36
        $context["date_mod_formatted"] = ($context["date_mod"] ?? null);
        // line 37
        $context["date_creation_relative"] = ($context["date_creation"] ?? null);
        // line 38
        $context["date_mod_relative"] = ($context["date_mod"] ?? null);
        // line 39
        echo "
";
        // line 40
        if ( !(is_string($__internal_compile_0 = ($context["anchor"] ?? null)) && is_string($__internal_compile_1 = "Log_") && str_starts_with($__internal_compile_0, $__internal_compile_1))) {
            // line 41
            echo "    ";
            // line 42
            echo "    ";
            // line 43
            echo "    ";
            $context["date_creation_formatted"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_creation"] ?? null));
            // line 44
            echo "    ";
            $context["date_mod_formatted"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime(($context["date_mod"] ?? null));
            // line 45
            echo "    ";
            $context["date_creation_relative"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_creation"] ?? null));
            // line 46
            echo "    ";
            $context["date_mod_relative"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getRelativeDatetime(($context["date_mod"] ?? null));
        }
        // line 48
        echo "
<span class=\"badge user-select-auto text-wrap d-none d-md-block\">
   ";
        // line 50
        ob_start(function () { return ''; });
        // line 51
        echo "      <span
         ";
        // line 52
        if ((($context["timeline_display_date"] ?? null) == twig_constant("Config::TIMELINE_RELATIVE_DATE"))) {
            // line 53
            echo "            title=\"";
            echo twig_escape_filter($this->env, ($context["date_creation_formatted"] ?? null), "html", null, true);
            echo "\"
            data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
         ";
        }
        // line 56
        echo "      >
         <i class=\"far fa-clock me-1\"></i>
         <a href=\"#";
        // line 58
        echo twig_escape_filter($this->env, ($context["anchor"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 59
        if ((($context["timeline_display_date"] ?? null) == twig_constant("Config::TIMELINE_RELATIVE_DATE"))) {
            // line 60
            echo "               ";
            echo twig_escape_filter($this->env, ($context["date_creation_relative"] ?? null), "html", null, true);
            echo "
            ";
        } else {
            // line 62
            echo "               ";
            echo twig_escape_filter($this->env, ($context["date_creation_formatted"] ?? null), "html", null, true);
            echo "
            ";
        }
        // line 64
        echo "         </a>
      </span>
   ";
        $context["date_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 67
        echo "
   ";
        // line 68
        if ((($context["users_id"] ?? null) > 0)) {
            // line 69
            echo "      ";
            ob_start(function () { return ''; });
            // line 70
            echo "         ";
            echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>             // line 71
($context["users_id"] ?? null), "user_object" =>             // line 72
($context["user_object"] ?? null), "enable_anonymization" =>             // line 73
($context["anonym_user"] ?? null)], false);
            // line 74
            echo "
      ";
            $context["creator_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 76
            echo "
      ";
            // line 77
            echo twig_sprintf(__("Created: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["creator_span"] ?? null));
            echo "
   ";
        } else {
            // line 79
            echo "      ";
            echo twig_sprintf(__("Created: %1\$s"), ($context["date_span"] ?? null));
            echo "
   ";
        }
        // line 81
        echo "</span>

";
        // line 83
        if (((($context["users_id_editor"] ?? null) > 0) && (($context["date_creation"] ?? null) != ($context["date_mod"] ?? null)))) {
            // line 84
            echo "   <span class=\"badge user-select-auto text-wrap ms-1 d-none d-md-block\">
      ";
            // line 85
            ob_start(function () { return ''; });
            // line 86
            echo "         <span
            ";
            // line 87
            if ((($context["timeline_display_date"] ?? null) == twig_constant("Config::TIMELINE_RELATIVE_DATE"))) {
                // line 88
                echo "               title=\"";
                echo twig_escape_filter($this->env, ($context["date_mod_formatted"] ?? null), "html", null, true);
                echo "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\"
            ";
            }
            // line 91
            echo "         >
            <i class=\"far fa-clock me-1\"></i>
            ";
            // line 93
            if ((($context["timeline_display_date"] ?? null) == twig_constant("Config::TIMELINE_RELATIVE_DATE"))) {
                // line 94
                echo "               ";
                echo twig_escape_filter($this->env, ($context["date_mod_relative"] ?? null), "html", null, true);
                echo "
            ";
            } else {
                // line 96
                echo "               ";
                echo twig_escape_filter($this->env, ($context["date_mod_formatted"] ?? null), "html", null, true);
                echo "
            ";
            }
            // line 98
            echo "         </span>
      ";
            $context["date_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 100
            echo "
      ";
            // line 101
            $context["is_current_editor"] = (($context["users_id_editor"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 102
            echo "      ";
            $context["anonym_editor"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_editor"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
            // line 103
            echo "      ";
            ob_start(function () { return ''; });
            // line 104
            echo "         ";
            echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" =>             // line 105
($context["users_id_editor"] ?? null), "user_object" => (((            // line 106
($context["users_id"] ?? null) == ($context["users_id_editor"] ?? null))) ? (($context["user_object"] ?? null)) : (null)), "enable_anonymization" =>             // line 107
($context["anonym_editor"] ?? null)], false);
            // line 108
            echo "
      ";
            $context["editor_span"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 110
            echo "
      ";
            // line 111
            echo twig_sprintf(__("Last update: %1\$s by %2\$s"), ($context["date_span"] ?? null), ($context["editor_span"] ?? null));
            echo "
   </span>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header_badges.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  218 => 111,  215 => 110,  211 => 108,  209 => 107,  208 => 106,  207 => 105,  205 => 104,  202 => 103,  199 => 102,  197 => 101,  194 => 100,  190 => 98,  184 => 96,  178 => 94,  176 => 93,  172 => 91,  165 => 88,  163 => 87,  160 => 86,  158 => 85,  155 => 84,  153 => 83,  149 => 81,  143 => 79,  138 => 77,  135 => 76,  131 => 74,  129 => 73,  128 => 72,  127 => 71,  125 => 70,  122 => 69,  120 => 68,  117 => 67,  112 => 64,  106 => 62,  100 => 60,  98 => 59,  94 => 58,  90 => 56,  83 => 53,  81 => 52,  78 => 51,  76 => 50,  72 => 48,  68 => 46,  65 => 45,  62 => 44,  59 => 43,  57 => 42,  55 => 41,  53 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header_badges.html.twig", "/Users/alexleblay/Documents/Edcuservice/campusimmat-laravel/public/glpi/templates/components/itilobject/timeline/timeline_item_header_badges.html.twig");
    }
}
