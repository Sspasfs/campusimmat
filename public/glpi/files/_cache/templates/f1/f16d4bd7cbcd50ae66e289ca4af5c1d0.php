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

/* components/itilobject/timeline/pending_reasons.html.twig */
class __TwigTemplate_bb52ab9dc560c16f1ddd02a5eea506c2 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/pending_reasons.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::canDisplayPendingReasonForItem", [($context["subitem"] ?? null)])) {
            // line 37
            echo "   ";
            $context["pending_item"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["subitem"] ?? null), true]);
            // line 38
            echo "   ";
            $context["pending_item_parent"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::getForItem", [($context["item"] ?? null), true]);
            // line 39
            echo "   ";
            $context["pendingreasons_id"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pending_item"] ?? null), "fields", [], "any", false, true, false, 39), "pendingreasons_id", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["pending_item"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["pendingreasons_id"] ?? null) : null)))) ? ((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["pending_item"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["pendingreasons_id"] ?? null) : null)) : ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["pending_item_parent"] ?? null), "fields", [], "any", false, true, false, 39), "pendingreasons_id", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["pending_item_parent"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["pendingreasons_id"] ?? null) : null)))) ? ((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["pending_item_parent"] ?? null), "fields", [], "any", false, true, false, 39)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["pendingreasons_id"] ?? null) : null)) : (0))));
            // line 40
            echo "
   <div class=\"row\">
      <div class=\"col-12 col-sm-4\" title=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("PendingReason"), "html", null, true);
            echo "\"
           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
         ";
            // line 44
            $context["pendingreasons_lbl"] = ('' === $tmp = "            <i class=\"fas fa-tags fa-fw\"></i>
         ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 47
            echo "         ";
            ob_start(function () { return ''; });
            // line 48
            echo "            <script>
               var myCollapsible = \$('#pending-reasons-setup-";
            // line 49
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "')[0];
               myCollapsible.addEventListener('show.bs.collapse', function () {
                  \$('#pending-reasons-control-";
            // line 51
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').addClass('flex-fill');
               });
               myCollapsible.addEventListener('hide.bs.collapse', function () {
                  \$('#pending-reasons-control-";
            // line 54
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').removeClass('flex-fill');
               });
            </script>
         ";
            $context["pending_reasons_id_script"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 58
            echo "         ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["PendingReason", "pendingreasons_id",             // line 61
($context["pendingreasons_id"] ?? null),             // line 62
($context["pendingreasons_lbl"] ?? null), ["label_class" => "col-1", "input_class" => "col-10 ms-1", "rand" =>             // line 66
($context["rand"] ?? null), "mb" => "", "hide_if_no_elements" => true, "addicon" => false, "comments" => false, "width" => "95%", "field_class" => "flex-nowrap", "add_field_html" =>             // line 73
($context["pending_reasons_id_script"] ?? null)]], 58, $context, $this->getSourceContext());
            // line 75
            echo "
         <script>
            \$('#dropdown_pendingreasons_id";
            // line 77
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').change(function() {
               var pending_val = \$(this).val();
               if (pending_val > 0) {
                  \$('#pending-reasons-more_options_";
            // line 80
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').addClass('show');
                  \$.ajax({
                     url: '";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/pendingreason.php"), "html", null, true);
            echo "',
                     type: 'POST',
                     data: {
                        pendingreasons_id: pending_val
                     }
                  }).done(function(data) {
                     \$('#dropdown_followup_frequency";
            // line 88
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "')
                        .val(data.followup_frequency)
                        .trigger('change');
                     \$('#dropdown_followups_before_resolution";
            // line 91
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "')
                        .val(data.followups_before_resolution)
                        .trigger('change');
                  });
               } else {
                  \$('#pending-reasons-more_options_";
            // line 96
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').removeClass('show');
               }
            });
         </script>
      </div>

      <div class=\"collapse col-12 col-sm-8 ";
            // line 102
            echo ((($context["pendingreasons_id"] ?? null)) ? ("show") : (""));
            echo "\" id=\"pending-reasons-more_options_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\">
         <div class=\"row\">
            <div class=\"col-12 col-sm-6\" title=\"";
            // line 104
            echo twig_escape_filter($this->env, __("Automatic follow-up"), "html", null, true);
            echo "\"
                  data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
               ";
            // line 106
            $context["pendingreasons_frequency_field"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::displayFollowupFrequencyfield", [((            // line 107
($context["pending_item"] ?? null)) ? ((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["pending_item"] ?? null), "fields", [], "any", false, false, false, 107)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["followup_frequency"] ?? null) : null)) : ((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["pending_item_parent"] ?? null), "fields", [], "any", false, false, false, 107)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["followup_frequency"] ?? null) : null))), "", ["rand" =>             // line 110
($context["rand"] ?? null)], false]);
            // line 114
            echo "               ";
            $context["pendingreasons_frequency_lbl"] = ('' === $tmp = "                  <i class=\"fas fa-redo fa-fw\"></i>
               ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 117
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_field", ["followup_frequency",             // line 119
($context["pendingreasons_frequency_field"] ?? null),             // line 120
($context["pendingreasons_frequency_lbl"] ?? null), ["field_class" => "", "label_class" => "col-1", "input_class" => "col-10 ms-1", "rand" =>             // line 125
($context["rand"] ?? null), "mb" => ""]], 117, $context, $this->getSourceContext());
            // line 128
            echo "
            </div>
            <div class=\"col-12 col-sm-6\" title=\"";
            // line 130
            echo twig_escape_filter($this->env, __("Automatic resolution"), "html", null, true);
            echo "\"
                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
               ";
            // line 132
            $context["pendingreasons_resolution_field"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason::displayFollowupsNumberBeforeResolutionField", [((            // line 133
($context["pending_item"] ?? null)) ? ((($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["pending_item"] ?? null), "fields", [], "any", false, false, false, 133)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["followups_before_resolution"] ?? null) : null)) : ((($__internal_compile_7 = twig_get_attribute($this->env, $this->source, ($context["pending_item_parent"] ?? null), "fields", [], "any", false, false, false, 133)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["followups_before_resolution"] ?? null) : null))), "", ["rand" =>             // line 136
($context["rand"] ?? null)], false]);
            // line 140
            echo "               ";
            $context["pendingreasons_resolution_lbl"] = ('' === $tmp = "                  <i class=\"fas fa-check fa-fw\"></i>
               ") ? '' : new Markup($tmp, $this->env->getCharset());
            // line 143
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_field", ["followups_before_resolution",             // line 145
($context["pendingreasons_resolution_field"] ?? null),             // line 146
($context["pendingreasons_resolution_lbl"] ?? null), ["field_class" => "", "label_class" => "col-1", "input_class" => "col-10 ms-1", "rand" =>             // line 151
($context["rand"] ?? null), "mb" => ""]], 143, $context, $this->getSourceContext());
            // line 154
            echo "
            </div>
         </div>
      </div>
   </div>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/pending_reasons.html.twig";
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
        return array (  195 => 154,  193 => 151,  192 => 146,  191 => 145,  189 => 143,  185 => 140,  183 => 136,  182 => 133,  181 => 132,  176 => 130,  172 => 128,  170 => 125,  169 => 120,  168 => 119,  166 => 117,  162 => 114,  160 => 110,  159 => 107,  158 => 106,  153 => 104,  146 => 102,  137 => 96,  129 => 91,  123 => 88,  114 => 82,  109 => 80,  103 => 77,  99 => 75,  97 => 73,  96 => 66,  95 => 62,  94 => 61,  92 => 58,  85 => 54,  79 => 51,  74 => 49,  71 => 48,  68 => 47,  65 => 44,  60 => 42,  56 => 40,  53 => 39,  50 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/pending_reasons.html.twig", "/Users/alexleblay/Documents/Edcuservice/campusimmat-laravel/public/glpi/templates/components/itilobject/timeline/pending_reasons.html.twig");
    }
}
