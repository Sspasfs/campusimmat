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

/* components/itilobject/timeline/pending_reasons_messages.html.twig */
class __TwigTemplate_ee82f44797e73bd4fdabd93c666b29e6 extends Template
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
        $context["pending_reason_item_parent"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["item"] ?? null)]);
        // line 35
        echo "
";
        // line 36
        if (($context["display_for_parent"] ?? null)) {
            // line 37
            echo "   ";
            $context["pending_reason"] = ((($context["pending_reason_item_parent"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [(($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "fields", [], "any", false, false, false, 37)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["pendingreasons_id"] ?? null) : null)])) : (false));
        } else {
            // line 39
            echo "   ";
            $context["pending_item"] = (($context["pending_item"]) ?? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call(((($__internal_compile_1 = ($context["entry"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["type"] ?? null) : null) . "::getById"), [(($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["id"] ?? null) : null)])));
            // line 40
            echo "   ";
            $context["pending_reason_item"] = ((($context["pending_item"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["pending_item"] ?? null)])) : (false));
            // line 41
            echo "   ";
            $context["pending_reason"] = ((($context["pending_reason_item"] ?? null)) ? ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::getById", [(($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item"] ?? null), "fields", [], "any", false, false, false, 41)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["pendingreasons_id"] ?? null) : null)])) : (false));
        }
        // line 43
        echo "
";
        // line 44
        if (($context["pending_reason"] ?? null)) {
            // line 45
            echo "   <span class=\"badge bg-blue-lt ";
            echo ((($context["display_for_parent"] ?? null)) ? ("mt-1 w-100 text-truncate") : (""));
            echo "\">
      <i class=\"fas fa-pause me-1\"></i>
      ";
            // line 47
            echo twig_sprintf(__("Pending: %s"), twig_get_attribute($this->env, $this->source, ($context["pending_reason"] ?? null), "getLink", [], "method", false, false, false, 47));
            echo "

      ";
            // line 49
            if ((($context["display_for_parent"] ?? null) || $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::isLastPendingForItem", [            // line 50
($context["item"] ?? null),             // line 51
($context["pending_item"] ?? null)]))) {
                // line 53
                echo "         ";
                $context["next_bump"] = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getNextFollowupDate", [], "method", false, false, false, 53);
                // line 54
                echo "         ";
                if (($context["next_bump"] ?? null)) {
                    // line 55
                    echo "
            <i class=\"fas fa-clock ms-2\" title=\"";
                    // line 56
                    echo twig_escape_filter($this->env, twig_sprintf(__("Next automatic follow-up scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDate", [($context["next_bump"] ?? null)])), "html", null, true);
                    echo "\"
               data-bs-toggle=\"tooltip\"></i>
         ";
                }
                // line 59
                echo "
         ";
                // line 60
                $context["resolve"] = twig_get_attribute($this->env, $this->source, ($context["pending_reason_item_parent"] ?? null), "getAutoResolvedate", [], "method", false, false, false, 60);
                // line 61
                echo "         ";
                if (($context["resolve"] ?? null)) {
                    // line 62
                    echo "            <i class=\"fas fa-stop ms-2\" title=\"";
                    echo twig_escape_filter($this->env, twig_sprintf(__("Automatic resolution scheduled on %s"), $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::convDate", [($context["resolve"] ?? null)])), "html", null, true);
                    echo "\"
               data-bs-toggle=\"tooltip\"></i>
         ";
                }
                // line 65
                echo "      ";
            }
            // line 66
            echo "   </span>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/pending_reasons_messages.html.twig";
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
        return array (  114 => 66,  111 => 65,  104 => 62,  101 => 61,  99 => 60,  96 => 59,  90 => 56,  87 => 55,  84 => 54,  81 => 53,  79 => 51,  78 => 50,  77 => 49,  72 => 47,  66 => 45,  64 => 44,  61 => 43,  57 => 41,  54 => 40,  51 => 39,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/pending_reasons_messages.html.twig", "/Users/alexleblay/Documents/Edcuservice/campusimmat-laravel/public/glpi/templates/components/itilobject/timeline/pending_reasons_messages.html.twig");
    }
}
