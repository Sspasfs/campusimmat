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

/* components/itilobject/timeline/timeline_item_header.html.twig */
class __TwigTemplate_49f67bda06766c42365126b9676bc044 extends Template
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
<div class=\"d-flex timeline-header\">
   <div class=\"d-flex creator\">
      ";
        // line 36
        echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header_badges.html.twig", ["users_id" =>         // line 37
($context["users_id"] ?? null), "user_object" =>         // line 38
($context["user_object"] ?? null), "date_creation" =>         // line 39
($context["date_creation"] ?? null), "date_mod" =>         // line 40
($context["date_mod"] ?? null), "users_id_editor" => (($__internal_compile_0 =         // line 41
($context["entry_i"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["users_id_editor"] ?? null) : null), "anchor" => (((($__internal_compile_1 =         // line 42
($context["entry"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["type"] ?? null) : null) . "_") . (($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null)), "anonym_user" =>         // line 43
($context["anonym_user"] ?? null)], false);
        // line 44
        echo "
   </div>

   <div class=\"d-flex ms-auto timeline-item-buttons\">
      ";
        // line 48
        $context["actions"] = [];
        // line 49
        echo "      ";
        if ((((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["can_edit"] ?? null) : null) &&  !($context["status_closed"] ?? null)) &&  !twig_in_filter((($__internal_compile_4 = ($context["entry"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null), ["Document_Item", "Assign"]))) {
            // line 50
            echo "         ";
            ob_start(function () { return ''; });
            // line 51
            echo "            <li>
               <a class=\"dropdown-item edit-timeline-item\" href=\"#\">
                  <i class=\"fa-fw ti ti-edit\"></i>
                  <span>";
            // line 54
            echo twig_escape_filter($this->env, __("Edit"), "html", null, true);
            echo "</span>
               </a>
            </li>
         ";
            $context["edit_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 58
            echo "         ";
            $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["edit_btn" => ($context["edit_btn"] ?? null)]);
            // line 59
            echo "      ";
        }
        // line 60
        echo "
      ";
        // line 61
        if (($context["is_private"] ?? null)) {
            // line 62
            echo "         <span class=\"is-private ms-2\" title=\"";
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"
               data-bs-toggle=\"tooltip\" data-bs-placement=\"bottom\">
            <i class=\"ti ti-lock\" aria-label=\"";
            // line 64
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"></i>
         </span>
      ";
        }
        // line 67
        echo "
      ";
        // line 68
        if ((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["can_promote"] ?? null) : null)) {
            // line 69
            echo "         ";
            if (((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["sourceof_items_id"] ?? null) : null) > 0)) {
                // line 70
                echo "            ";
                ob_start(function () { return ''; });
                // line 71
                echo "               <li>
                  <a class=\"dropdown-item text-warning\" href=\"";
                // line 72
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket", (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["sourceof_items_id"] ?? null) : null)), "html", null, true);
                echo "\">
                     <i class=\"fa-fw ti ti-git-branch\"></i>
                     <span>";
                // line 74
                echo twig_escape_filter($this->env, twig_sprintf(__("%s was already promoted"), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName((($__internal_compile_8 = ($context["entry"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["type"] ?? null) : null))), "html", null, true);
                echo "</span>
                  </a>
               </li>
            ";
                $context["promoted_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 78
                echo "            ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["promoted_btn" => ($context["promoted_btn"] ?? null)]);
                // line 79
                echo "         ";
            } else {
                // line 80
                echo "            ";
                $context["promote_url"] = ("?_promoted_fup_id=" . (($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["id"] ?? null) : null));
                // line 81
                echo "            ";
                if (((($__internal_compile_10 = ($context["entry"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null) === "TicketTask")) {
                    // line 82
                    echo "               ";
                    $context["promote_url"] = ("?_promoted_task_id=" . (($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null));
                    // line 83
                    echo "            ";
                }
                // line 84
                echo "
            ";
                // line 85
                ob_start(function () { return ''; });
                // line 86
                echo "               <li>
                  <a class=\"dropdown-item\" href=\"";
                // line 87
                echo twig_escape_filter($this->env, ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath("Ticket") . ($context["promote_url"] ?? null)), "html", null, true);
                echo "\">
                     <i class=\"fa-fw ti ti-git-branch\"></i>
                     <span>";
                // line 89
                echo twig_escape_filter($this->env, __("Promote to Ticket"), "html", null, true);
                echo "</span>
                  </a>
               </li>
            ";
                $context["promote_btn"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 93
                echo "            ";
                $context["actions"] = twig_array_merge(($context["actions"] ?? null), ["promote_btn" => ($context["promote_btn"] ?? null)]);
                // line 94
                echo "         ";
            }
            // line 95
            echo "      ";
        }
        // line 96
        echo "
      ";
        // line 97
        if (twig_length_filter($this->env, ($context["actions"] ?? null))) {
            // line 98
            echo "         <div class=\"dropdown ms-2\">
            <button class=\"btn btn-sm btn-ghost-secondary timeline-more-actions\" type=\"button\" id=\"more-actions-";
            // line 99
            echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
            echo "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
               <i class=\"ti ti-dots-vertical\"></i>
            </button>
            <ul class=\"dropdown-menu\" aria-labelledby=\"more-actions-";
            // line 102
            echo twig_escape_filter($this->env, ($context["entry_rand"] ?? null), "html", null, true);
            echo "\">
               ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 104
                echo "                  ";
                echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                echo "
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 106
            echo "            </ul>
         </div>
      ";
        }
        // line 109
        echo "   </div>

   <button class=\"btn btn-sm btn-ghost-secondary close-edit-content d-none ms-auto\">
      <i class=\"ti ti-x\"></i>
   </button>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline_item_header.html.twig";
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
        return array (  209 => 109,  204 => 106,  195 => 104,  191 => 103,  187 => 102,  181 => 99,  178 => 98,  176 => 97,  173 => 96,  170 => 95,  167 => 94,  164 => 93,  157 => 89,  152 => 87,  149 => 86,  147 => 85,  144 => 84,  141 => 83,  138 => 82,  135 => 81,  132 => 80,  129 => 79,  126 => 78,  119 => 74,  114 => 72,  111 => 71,  108 => 70,  105 => 69,  103 => 68,  100 => 67,  94 => 64,  88 => 62,  86 => 61,  83 => 60,  80 => 59,  77 => 58,  70 => 54,  65 => 51,  62 => 50,  59 => 49,  57 => 48,  51 => 44,  49 => 43,  48 => 42,  47 => 41,  46 => 40,  45 => 39,  44 => 38,  43 => 37,  42 => 36,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline_item_header.html.twig", "/Users/alexleblay/Documents/Edcuservice/campusimmat-laravel/public/glpi/templates/components/itilobject/timeline/timeline_item_header.html.twig");
    }
}
