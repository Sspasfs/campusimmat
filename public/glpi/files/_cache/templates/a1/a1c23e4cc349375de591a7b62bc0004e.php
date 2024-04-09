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

/* components/itilobject/timeline/form_followup.html.twig */
class __TwigTemplate_ffab6587ba4c117a4d5770742f9925c5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_followup.html.twig", 35)->unwrap();
        // line 37
        $context["params"] = twig_array_merge(["item" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])));
        // line 39
        $context["candedit"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 39);
        // line 40
        $context["can_read_kb"] = (Session::haveRight("knowbase", twig_constant("READ")) || Session::haveRight("knowbase", twig_constant("KnowbaseItem::READFAQ")));
        // line 41
        $context["can_update_kb"] = Session::haveRight("knowbase", twig_constant("UPDATE"));
        // line 42
        $context["nokb"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 42) || ((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nokb"] ?? null) : null) == true));
        // line 43
        $context["rand"] = twig_random($this->env);
        // line 34
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_followup.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 45
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "   ";
        if ((($context["form_mode"] ?? null) == "view")) {
            // line 47
            echo "      <div class=\"read-only-content\">
         <div class=\"rich_text_container\">
            ";
            // line 49
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 52
            echo "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 56
            if ((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["requesttypes_id"] ?? null) : null)) {
                // line 57
                echo "               <span class=\"badge bg-blue-lt\" title=\"";
                echo twig_escape_filter($this->env, __("Source of followup"), "html", null, true);
                echo "\">
                  <i class=\"fas fa-inbox me-1\"></i>
                  ";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("RequestType", (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["requesttypes_id"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 62
            echo "
            ";
            // line 63
            if ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["sourceitems_id"] ?? null) : null)) {
                // line 64
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 66
                ob_start(function () { return ''; });
                // line 67
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 68
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["sourceitems_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["merged_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 71
                echo "                  ";
                echo twig_sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 74
            echo "
            ";
            // line 75
            if ((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["sourceof_items_id"] ?? null) : null)) {
                // line 76
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 78
                ob_start(function () { return ''; });
                // line 79
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 80
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["sourceof_items_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["promoted_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 83
                echo "                  ";
                echo twig_sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 86
            echo "
            ";
            // line 87
            echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            echo "
         </div>
      </div>
   ";
        } else {
            // line 91
            echo "      <div class=\"itilfollowup\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 93), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 94), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 95
            echo twig_escape_filter($this->env, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 95)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
            echo "\" />
            ";
            // line 96
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            ";
            // line 98
            $context["add_reopen"] = ((((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 98) &&  !(null === (($__internal_compile_9 = ($context["_get"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["_openfollowup"] ?? null) : null)))) ? ((($__internal_compile_10 = ($context["_get"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["_openfollowup"] ?? null) : null)) : (false)) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "needReopen", [], "method", false, false, false, 98));
            // line 99
            echo "            ";
            if (($context["add_reopen"] ?? null)) {
                // line 100
                echo "               <input type=\"hidden\" name=\"add_reopen\" value=\"1\" />
            ";
            }
            // line 102
            echo "
            <div class=\"row mx-n3 mx-xxl-auto\">
               ";
            // line 104
            $context["col_md"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) ? ("col-xl-7 col-xxl-8") : ("col-xxl-12"));
            // line 105
            echo "               <div class=\"col-12 ";
            echo twig_escape_filter($this->env, ($context["col_md"] ?? null), "html", null, true);
            echo "\">
                  ";
            // line 106
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,             // line 108
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 108)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "entities_id" => (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,             // line 116
($context["item"] ?? null), "fields", [], "any", false, false, false, 116)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["entities_id"] ?? null) : null), "rand" =>             // line 117
($context["rand"] ?? null), "required" =>             // line 118
($context["add_reopen"] ?? null)]], 106, $context, $this->getSourceContext());
            // line 120
            echo "
               </div>
               ";
            // line 122
            if (($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central")) {
                // line 123
                echo "                  <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-0 pe-xxl-auto\">
                     <div class=\"row\">

                        ";
                // line 126
                ob_start(function () { return ''; });
                // line 127
                echo "                           <i class=\"fas fa-reply fa-fw me-1\"
                              title=\"";
                // line 128
                echo twig_escape_filter($this->env, _n("Followup template", "Followup templates", Session::getPluralNumber()), "html", null, true);
                echo "\"></i>
                        ";
                $context["fup_template_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 130
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILFollowupTemplate", "itilfollowuptemplates_id", (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,                 // line 133
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 133)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["itilfollowuptemplates_id"] ?? null) : null),                 // line 134
($context["fup_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itilfollowuptemplate_update" .                 // line 138
($context["rand"] ?? null)) . "(this.value)"), "entity" => (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,                 // line 139
($context["item"] ?? null), "fields", [], "any", false, false, false, 139)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["entities_id"] ?? null) : null), "rand" =>                 // line 140
($context["rand"] ?? null)]], 130, $context, $this->getSourceContext());
                // line 142
                echo "

                        ";
                // line 144
                ob_start(function () { return ''; });
                // line 145
                echo "                           <i class=\"fas fa-inbox fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Source of followup"), "html", null, true);
                echo "\"></i>
                        ";
                $context["fup_source_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 147
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,                 // line 150
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 150)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["requesttypes_id"] ?? null) : null),                 // line 151
($context["fup_source_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "condition" => ["is_active" => 1, "is_itilfollowup" => 1], "rand" =>                 // line 159
($context["rand"] ?? null)]], 147, $context, $this->getSourceContext());
                // line 161
                echo "

                        ";
                // line 163
                ob_start(function () { return ''; });
                // line 164
                echo "                           <i class=\"ti ti-lock fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Private"), "html", null, true);
                echo "\"></i>
                        ";
                $context["fup_private_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 166
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["is_private", (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,                 // line 168
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 168)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["is_private"] ?? null) : null),                 // line 169
($context["fup_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 173
($context["rand"] ?? null)]], 166, $context, $this->getSourceContext());
                // line 175
                echo "

                        ";
                // line 177
                if ((($context["can_read_kb"] ?? null) && (($context["kb_id_toload"] ?? null) > 0))) {
                    // line 178
                    echo "                           ";
                    ob_start(function () { return ''; });
                    // line 179
                    echo "                              <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                 title=\"";
                    // line 180
                    echo twig_escape_filter($this->env, twig_replace_filter(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                    echo "\"></i>
                           ";
                    $context["link_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 182
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_sliderField", ["kb_linked_id", 1,                     // line 185
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 189
($context["rand"] ?? null), "yes_value" =>                     // line 190
($context["kb_id_toload"] ?? null)]], 182, $context, $this->getSourceContext());
                    // line 192
                    echo "
                        ";
                }
                // line 194
                echo "
                        ";
                // line 195
                if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                    // line 196
                    echo "                           ";
                    ob_start(function () { return ''; });
                    // line 197
                    echo "                              <i class=\"far fa-save fa-fw me-1\" title=\"";
                    echo twig_escape_filter($this->env, __("Save and add to the knowledge base"), "html", null, true);
                    echo "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                           ";
                    $context["fup_to_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 200
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_sliderField", ["_fup_to_kb", 0,                     // line 203
($context["fup_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 207
($context["rand"] ?? null)]], 200, $context, $this->getSourceContext());
                    // line 209
                    echo "
                        ";
                }
                // line 211
                echo "                     </div>
                  </div>
               ";
            }
            // line 214
            echo "            </div>

            ";
            // line 216
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "
            ";
            // line 218
            echo "            <div class=\"d-flex card-footer mx-n3 mb-n3 flex-wrap\" style=\"row-gap: 10px; min-height: 79px\">
               ";
            // line 219
            ob_start(function () { return ''; });
            // line 220
            echo "                  ";
            $context["show_pending_reasons_actions"] = (((($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 220)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["status"] ?? null) : null) == twig_constant("CommonITILObject::WAITING")) &&  !($context["add_reopen"] ?? null));
            // line 221
            echo "                  ";
            if (((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "central") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isAllowedStatus", [(($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 221)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["status"] ?? null) : null), twig_constant("CommonITILObject::WAITING")], "method", false, false, false, 221)) && $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("PendingReason_Item::canDisplayPendingReasonForItem", [($context["subitem"] ?? null)]))) {
                // line 222
                echo "                     <span
                        class=\"input-group-text bg-yellow-lt py-0 pe-0 ";
                // line 223
                echo ((($context["show_pending_reasons_actions"] ?? null)) ? ("flex-fill") : (""));
                echo "\"
                        id=\"pending-reasons-control-";
                // line 224
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\"
                     >
                        <span class=\"d-inline-flex align-items-center\" title=\"";
                // line 226
                echo twig_escape_filter($this->env, __("Set the status to pending"), "html", null, true);
                echo "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                           <i class=\"fas fa-pause me-2\"></i>
                           <label class=\"form-check form-switch mt-2\">
                              <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                              <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                    id=\"enable-pending-reasons-";
                // line 232
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\"
                                    role=\"button\"
                                    ";
                // line 234
                echo (((((($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 234)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["status"] ?? null) : null) == twig_constant("CommonITILObject::WAITING")) &&  !($context["add_reopen"] ?? null))) ? ("checked") : (""));
                echo "
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
                // line 235
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\" />
                           </label>
                        </span>

                        <div
                           class=\"collapse ps-2 py-1 flex-fill ";
                // line 240
                echo ((($context["show_pending_reasons_actions"] ?? null)) ? ("show") : (""));
                echo "\"
                           aria-expanded=\"";
                // line 241
                echo ((($context["show_pending_reasons_actions"] ?? null)) ? ("true") : ("false"));
                echo "\"
                           id=\"pending-reasons-setup-";
                // line 242
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\"
                        >
                           ";
                // line 244
                echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                echo "
                        </div>
                     </span>
                  ";
            }
            // line 248
            echo "               ";
            $context["pending_reasons"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 249
            echo "
               ";
            // line 250
            if (((($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 250)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null) <= 0)) {
                // line 251
                echo "                  ";
                // line 252
                echo "                  <div class=\"input-group flex-nowrap\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                // line 255
                echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                echo "</span>
                     </button>
                     ";
                // line 257
                echo ($context["pending_reasons"] ?? null);
                echo "
                  </div>
               ";
            } else {
                // line 260
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 260)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 263
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 266
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [(($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 266)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["id"] ?? null) : null), twig_constant("PURGE")], "method", false, false, false, 266)) {
                    // line 267
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 268
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 270
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 273
                echo "                  ";
                echo ($context["pending_reasons"] ?? null);
                echo "
               ";
            }
            // line 275
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 277
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itilfollowuptemplate_update";
            // line 282
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 284
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/itilfollowup.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  itilfollowuptemplates_id: value,
                  items_id: '";
            // line 288
            echo twig_escape_filter($this->env, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 288)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 289
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 289), "html", null, true);
            echo "'
               }
            }).done(function (data) {
               var requesttypes_id = isNaN(parseInt(data.requesttypes_id))
                  ? 0
                  : parseInt(data.requesttypes_id);

               // set textarea content
               setRichTextEditorContent(\"content_";
            // line 297
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\", data.content);
               // set category
               //need to create new DOM option, because SELECT is remotely-sourced (AJAX)
               //see : https://select2.org/programmatic-control/add-select-clear-items#preselecting-options-in-an-remotely-sourced-ajax-select2
               var newOption = new Option(data.requesttypes_name, requesttypes_id, true, true);
               \$(\"#dropdown_requesttypes_id";
            // line 302
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").append(newOption).trigger('change');

               // set is_private
               \$(\"#is_private_";
            // line 305
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")
                  .prop(\"checked\", data.is_private == \"0\"
                     ? false
                     : true);
            });
         }
      </script>
   ";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_followup.html.twig";
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
        return array (  517 => 305,  511 => 302,  503 => 297,  492 => 289,  488 => 288,  481 => 284,  476 => 282,  468 => 277,  464 => 275,  458 => 273,  452 => 270,  447 => 268,  444 => 267,  442 => 266,  436 => 263,  429 => 260,  423 => 257,  418 => 255,  413 => 252,  411 => 251,  409 => 250,  406 => 249,  403 => 248,  396 => 244,  391 => 242,  387 => 241,  383 => 240,  375 => 235,  371 => 234,  366 => 232,  357 => 226,  352 => 224,  348 => 223,  345 => 222,  342 => 221,  339 => 220,  337 => 219,  334 => 218,  330 => 216,  326 => 214,  321 => 211,  317 => 209,  315 => 207,  314 => 203,  312 => 200,  305 => 197,  302 => 196,  300 => 195,  297 => 194,  293 => 192,  291 => 190,  290 => 189,  289 => 185,  287 => 182,  282 => 180,  279 => 179,  276 => 178,  274 => 177,  270 => 175,  268 => 173,  267 => 169,  266 => 168,  264 => 166,  258 => 164,  256 => 163,  252 => 161,  250 => 159,  249 => 151,  248 => 150,  246 => 147,  240 => 145,  238 => 144,  234 => 142,  232 => 140,  231 => 139,  230 => 138,  229 => 134,  228 => 133,  226 => 130,  221 => 128,  218 => 127,  216 => 126,  211 => 123,  209 => 122,  205 => 120,  203 => 118,  202 => 117,  201 => 116,  200 => 108,  199 => 106,  194 => 105,  192 => 104,  188 => 102,  184 => 100,  181 => 99,  179 => 98,  174 => 96,  170 => 95,  166 => 94,  162 => 93,  158 => 91,  151 => 87,  148 => 86,  141 => 83,  135 => 80,  132 => 79,  130 => 78,  126 => 76,  124 => 75,  121 => 74,  114 => 71,  108 => 68,  105 => 67,  103 => 66,  99 => 64,  97 => 63,  94 => 62,  88 => 59,  82 => 57,  80 => 56,  74 => 52,  72 => 49,  68 => 47,  65 => 46,  61 => 45,  56 => 34,  54 => 43,  52 => 42,  50 => 41,  48 => 40,  46 => 39,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_followup.html.twig", "/Users/alexleblay/Documents/Edcuservice/campusimmat-laravel/public/glpi/templates/components/itilobject/timeline/form_followup.html.twig");
    }
}
