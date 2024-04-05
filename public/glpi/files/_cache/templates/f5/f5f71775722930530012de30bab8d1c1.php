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

/* components/itilobject/timeline/timeline.html.twig */
class __TwigTemplate_7c233d3204c72f4fe2fac3fe1a2718c9 extends Template
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
        $context["is_timeline_reversed"] = ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order") == twig_constant("CommonITILObject::TIMELINE_ORDER_REVERSE"));
        // line 35
        echo "
<div class=\"itil-timeline d-flex flex-column align-items-start mb-auto\">
    ";
        // line 37
        if ( !($context["is_timeline_reversed"] ?? null)) {
            // line 38
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            echo "
    ";
        } else {
            // line 40
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            echo "
        ";
            // line 41
            echo twig_include($this->env, $context, "components/itilobject/answer.html.twig");
            echo "
    ";
        }
        // line 43
        echo "
   ";
        // line 44
        $context["status_closed"] = twig_in_filter((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 44)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["status"] ?? null) : null), twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getClosedStatusArray", [], "method", false, false, false, 44));
        // line 45
        echo "
   ";
        // line 47
        echo "   ";
        $context["user_cache"] = [];
        // line 48
        echo "
   ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["timeline"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 50
            echo "      ";
            $context["entry_i"] = (($__internal_compile_1 = $context["entry"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item"] ?? null) : null);
            // line 51
            echo "      ";
            $context["entry_object"] = (((twig_get_attribute($this->env, $this->source, $context["entry"], "object", [], "array", true, true, false, 51) &&  !(null === (($__internal_compile_2 = $context["entry"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["object"] ?? null) : null)))) ? ((($__internal_compile_3 = $context["entry"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["object"] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem((($__internal_compile_4 = $context["entry"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["type"] ?? null) : null), (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null))));
            // line 52
            echo "      ";
            $context["users_id"] = (($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["users_id"] ?? null) : null);
            // line 53
            echo "      ";
            $context["is_private"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "is_private", [], "array", true, true, false, 53) &&  !(null === (($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["is_private"] ?? null) : null)))) ? ((($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["is_private"] ?? null) : null)) : (false));
            // line 54
            echo "      ";
            $context["date_creation"] = (((twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "date_creation", [], "array", true, true, false, 54) &&  !(null === (($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["date_creation"] ?? null) : null)))) ? ((($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["date_creation"] ?? null) : null)) : ((($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["date"] ?? null) : null)));
            // line 55
            echo "      ";
            $context["date_mod"] = (($__internal_compile_12 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["date_mod"] ?? null) : null);
            // line 56
            echo "      ";
            $context["entry_rand"] = twig_random($this->env);
            // line 57
            echo "      ";
            $context["is_current_user"] = (($context["users_id"] ?? null) == $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"));
            // line 58
            echo "      ";
            $context["anonym_user"] = ((($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface() == "helpdesk") &&  !($context["is_current_user"] ?? null)) && ($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")) != twig_constant("Entity::ANONYMIZE_DISABLED")));
            // line 59
            echo "
      ";
            // line 60
            $context["can_edit_i"] = (($__internal_compile_13 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["can_edit"] ?? null) : null);
            // line 61
            echo "
      ";
            // line 62
            $context["timeline_position"] = (($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["timeline_position"] ?? null) : null);
            // line 63
            echo "      ";
            $context["item_position"] = "t-left";
            // line 64
            echo "      ";
            if ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_LEFT"))) {
                // line 65
                echo "         ";
                $context["item_position"] = "t-left";
                // line 66
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_MIDLEFT"))) {
                // line 67
                echo "         ";
                $context["item_position"] = "t-left t-middle";
                // line 68
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_MIDRIGHT"))) {
                // line 69
                echo "         ";
                $context["item_position"] = "t-right t-middle";
                // line 70
                echo "      ";
            } elseif ((($context["timeline_position"] ?? null) == twig_constant("CommonITILObject::TIMELINE_RIGHT"))) {
                // line 71
                echo "         ";
                $context["item_position"] = "t-right";
                // line 72
                echo "      ";
            }
            // line 73
            echo "
      ";
            // line 74
            $context["itiltype"] = ((twig_get_attribute($this->env, $this->source, $context["entry"], "itiltype", [], "array", true, true, false, 74)) ? (("ITIL" . (($__internal_compile_15 = $context["entry"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["itiltype"] ?? null) : null))) : ((($__internal_compile_16 = $context["entry"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["type"] ?? null) : null)));
            // line 75
            echo "
      ";
            // line 76
            $context["state_class"] = "";
            // line 77
            echo "      ";
            if (((($__internal_compile_17 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["state"] ?? null) : null) === constant("Planning::INFO"))) {
                // line 78
                echo "         ";
                $context["state_class"] = "info";
                // line 79
                echo "      ";
            }
            // line 80
            echo "      ";
            if (((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 81
                echo "         ";
                $context["state_class"] = "todo";
                // line 82
                echo "      ";
            }
            // line 83
            echo "      ";
            if (((($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 84
                echo "         ";
                $context["state_class"] = "done";
                // line 85
                echo "      ";
            }
            // line 86
            echo "
      ";
            // line 87
            $context["solution_class"] = "";
            // line 88
            echo "      ";
            if ((((($context["itiltype"] ?? null) == "ITILSolution") || (($context["itiltype"] ?? null) == "ITILValidation")) && twig_get_attribute($this->env, $this->source, ($context["entry_i"] ?? null), "status", [], "array", true, true, false, 88))) {
                // line 89
                echo "         ";
                $context["status"] = (((($context["itiltype"] ?? null) == "ITILSolution")) ? ((($__internal_compile_20 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["status"] ?? null) : null)) : (twig_replace_filter((($__internal_compile_21 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["status"] ?? null) : null), ["status_" => ""])));
                // line 90
                echo "         ";
                if ((($context["status"] ?? null) == twig_constant("CommonITILValidation::WAITING"))) {
                    // line 91
                    echo "            ";
                    $context["solution_class"] = "waiting";
                    // line 92
                    echo "         ";
                }
                // line 93
                echo "         ";
                if ((($context["status"] ?? null) == twig_constant("CommonITILValidation::ACCEPTED"))) {
                    // line 94
                    echo "            ";
                    $context["solution_class"] = "accepted";
                    // line 95
                    echo "         ";
                }
                // line 96
                echo "         ";
                if ((($context["status"] ?? null) == twig_constant("CommonITILValidation::REFUSED"))) {
                    // line 97
                    echo "            ";
                    $context["solution_class"] = "refused";
                    // line 98
                    echo "         ";
                }
                // line 99
                echo "      ";
            }
            // line 100
            echo "
      ";
            // line 102
            echo "      ";
            // line 103
            echo "      ";
            $context["entry_user"] = (((array_key_exists("users_id", $context) &&  !(null === ($context["users_id"] ?? null)))) ? ((((twig_get_attribute($this->env, $this->source, ($context["user_cache"] ?? null), ("_" . ($context["users_id"] ?? null)), [], "array", true, true, false, 103) &&  !(null === (($__internal_compile_22 = ($context["user_cache"] ?? null)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[("_" . ($context["users_id"] ?? null))] ?? null) : null)))) ? ((($__internal_compile_23 = ($context["user_cache"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23[("_" . ($context["users_id"] ?? null))] ?? null) : null)) : ($this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("User", ($context["users_id"] ?? null))))) : (null));
            // line 104
            echo "      ";
            // line 105
            echo "      ";
            $context["user_cache"] = twig_array_merge(($context["user_cache"] ?? null), [("_" . ($context["users_id"] ?? null)) => ($context["entry_user"] ?? null)]);
            // line 106
            echo "
      ";
            // line 107
            $context["anchor"] = (((($__internal_compile_24 = $context["entry"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["type"] ?? null) : null) . "_") . (($__internal_compile_25 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["id"] ?? null) : null));
            // line 108
            echo "      <div id=\"";
            echo twig_escape_filter($this->env, ($context["anchor"] ?? null), "html", null, true);
            echo "\" class=\"timeline-item mb-3 ";
            echo twig_escape_filter($this->env, ($context["itiltype"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["state_class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($__internal_compile_26 = $context["entry"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["class"] ?? null) : null), "html", null, true);
            echo " ";
            echo ((twig_in_filter("right", ($context["item_position"] ?? null))) ? ("ms-auto") : (""));
            echo "\"
            data-itemtype=\"";
            // line 109
            echo twig_escape_filter($this->env, (($__internal_compile_27 = $context["entry"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["type"] ?? null) : null), "html", null, true);
            echo "\" data-items-id=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_28 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["id"] ?? null) : null), "html", null, true);
            echo "\"
            ";
            // line 110
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "item_action", [], "array", true, true, false, 110)) {
                echo "data-item-action=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_29 = $context["entry"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["item_action"] ?? null) : null), "html", null, true);
                echo "\"";
            }
            echo ">

         ";
            // line 112
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            echo "

         <div class=\"row\">
            <div class=\"col-auto todo-list-state ";
            // line 115
            echo ((twig_in_filter("left", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : (""));
            echo "\">
               ";
            // line 116
            if (((($__internal_compile_30 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["state"] ?? null) : null) === constant("Planning::TODO"))) {
                // line 117
                echo "                  ";
                if (($context["can_edit_i"] ?? null)) {
                    // line 118
                    echo "                     <span class=\"state state_1\" onclick=\"change_task_state(";
                    echo twig_escape_filter($this->env, (($__internal_compile_31 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["id"] ?? null) : null), "html", null, true);
                    echo ", this)\" title=\"";
                    echo twig_escape_filter($this->env, __("To do"), "html", null, true);
                    echo "\"></span>
                  ";
                } else {
                    // line 120
                    echo "                     <span class=\"state state_1\" title=\"";
                    echo twig_escape_filter($this->env, __("To do"), "html", null, true);
                    echo "\" style=\"cursor: not-allowed;\"></span>
                  ";
                }
                // line 122
                echo "               ";
            } elseif (((($__internal_compile_32 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["state"] ?? null) : null) === constant("Planning::DONE"))) {
                // line 123
                echo "                  ";
                if (($context["can_edit_i"] ?? null)) {
                    // line 124
                    echo "                     <span class=\"state state_2\" onclick=\"change_task_state(";
                    echo twig_escape_filter($this->env, (($__internal_compile_33 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["id"] ?? null) : null), "html", null, true);
                    echo ", this)\" title=\"";
                    echo twig_escape_filter($this->env, __("Done"), "html", null, true);
                    echo "\"></span>
                  ";
                } else {
                    // line 126
                    echo "                     <span class=\"state state_2\" title=\"";
                    echo twig_escape_filter($this->env, __("Done"), "html", null, true);
                    echo "\" style=\"cursor: not-allowed;\"></span>
                  ";
                }
                // line 128
                echo "               ";
            }
            // line 129
            echo "            </div>

            <div class=\"col-auto d-flex flex-column user-part ";
            // line 131
            echo ((twig_in_filter("right", ($context["item_position"] ?? null))) ? ("ms-auto ms-0 order-sm-last") : ("order-first"));
            echo "\">
               ";
            // line 132
            $context["avatar_rand"] = twig_random($this->env);
            // line 133
            echo "               ";
            // line 134
            echo "               ";
            if ( !(null === ($context["entry_user"] ?? null))) {
                // line 135
                echo "                  ";
                $context["user_fields"] = twig_array_merge(twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "fields", [], "any", false, false, false, 135), ["user_name" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(twig_get_attribute($this->env, $this->source,                 // line 136
($context["entry_user"] ?? null), "getFriendlyName", [], "method", false, false, false, 136)), "email" => twig_get_attribute($this->env, $this->source,                 // line 137
($context["entry_user"] ?? null), "getDefaultEmail", [], "method", false, false, false, 137)]);
                // line 139
                echo "                  <span id=\"timeline-avatar";
                echo twig_escape_filter($this->env, ($context["avatar_rand"] ?? null), "html", null, true);
                echo "\">
                     ";
                // line 140
                echo twig_include($this->env, $context, "components/user/picture.html.twig", ["users_id" =>                 // line 141
($context["users_id"] ?? null), "user_object" =>                 // line 142
($context["entry_user"] ?? null), "enable_anonymization" =>                 // line 143
($context["anonym_user"] ?? null)], false);
                // line 144
                echo "
                  </span>
                  ";
                // line 146
                if (( !($context["anonym_user"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["entry_user"] ?? null), "canView", [], "method", false, false, false, 146))) {
                    // line 147
                    echo "                     ";
                    $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::showToolTip", [twig_include($this->env, $context, "components/user/info_card.html.twig", ["user" =>                     // line 149
($context["user_fields"] ?? null), "user_object" =>                     // line 150
($context["entry_user"] ?? null), "enable_anonymization" => false], false), ["applyto" => ("timeline-avatar" .                     // line 153
($context["avatar_rand"] ?? null))]]);
                    // line 155
                    echo "                  ";
                }
                // line 156
                echo "               ";
            } else {
                // line 157
                echo "                  <span id=\"timeline-avatar";
                echo twig_escape_filter($this->env, ($context["avatar_rand"] ?? null), "html", null, true);
                echo "\"><span class=\"avatar avatar-md rounded\"></span></span>
               ";
            }
            // line 159
            echo "            </div>
            <div class=\"col-12 col-sm d-flex flex-column content-part\">
               <div class=\"mt-2 timeline-content ";
            // line 161
            echo twig_escape_filter($this->env, ($context["solution_class"] ?? null), "html", null, true);
            echo " flex-grow-1 ";
            echo twig_escape_filter($this->env, ($context["item_position"] ?? null), "html", null, true);
            echo " card\">
                  <div class=\"card-body px-1 px-xxl-3\">
                     ";
            // line 163
            echo twig_include($this->env, $context, "components/itilobject/timeline/timeline_item_header.html.twig", ["user_object" =>             // line 164
($context["entry_user"] ?? null)]);
            // line 165
            echo "

                     ";
            // line 167
            if (twig_in_filter(($context["itiltype"] ?? null), twig_array_column(($context["timeline_itemtypes"] ?? null), "type"))) {
                // line 168
                echo "                        ";
                $context["matching_types"] = twig_array_filter($this->env, ($context["timeline_itemtypes"] ?? null), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return (twig_get_attribute($this->env, $this->source, ($context["v"] ?? null), "type", [], "any", false, false, false, 168) == ($context["itiltype"] ?? null)); });
                // line 169
                echo "                        ";
                if ((twig_length_filter($this->env, ($context["matching_types"] ?? null)) > 0)) {
                    // line 170
                    echo "                           ";
                    $context["timeline_itemtype"] = twig_first($this->env, ($context["matching_types"] ?? null));
                    // line 171
                    echo "                           ";
                    if (twig_get_attribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", true, true, false, 171)) {
                        // line 172
                        echo "                              ";
                        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, ($context["timeline_itemtype"] ?? null), "template", [], "any", false, false, false, 172), ["form_mode" => "view"]);
                        echo "
                           ";
                    }
                    // line 174
                    echo "                        ";
                }
                // line 175
                echo "                     ";
            } else {
                // line 176
                echo "                        <div class=\"read-only-content\">
                           ";
                // line 177
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml((($__internal_compile_34 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["content"] ?? null) : null));
                echo "
                        </div>
                     ";
            }
            // line 180
            echo "                     <div class=\"edit-content collapse\">
                        <div class=\"ajax-content\"></div>
                     </div>
                  </div>
               </div>

               ";
            // line 186
            if (twig_get_attribute($this->env, $this->source, $context["entry"], "documents", [], "array", true, true, false, 186)) {
                // line 187
                echo "                  ";
                echo twig_include($this->env, $context, "components/itilobject/timeline/sub_documents.html.twig", ["item" =>                 // line 188
($context["item"] ?? null), "entry" =>                 // line 189
$context["entry"]]);
                // line 190
                echo "
               ";
            }
            // line 192
            echo "            </div>
         </div>

         ";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::POST_SHOW_ITEM"), ["item" => ($context["entry_object"] ?? null), "options" => ["parent" => ($context["item"] ?? null), "rand" => ($context["entry_rand"] ?? null)]]), "html", null, true);
            echo "
      </div>
   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "
    ";
        // line 199
        if (($context["is_timeline_reversed"] ?? null)) {
            // line 200
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/main_description.html.twig");
            echo "
    ";
        }
        // line 202
        echo "
    <div class=\"timeline-item tasks-title d-none\">
        <h3>";
        // line 204
        echo twig_escape_filter($this->env, _n("Task", "Tasks", Session::getPluralNumber()), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 207
        echo twig_include($this->env, $context, "components/itilobject/timeline/todo-list-summary.html.twig");
        echo "

    <div class=\"timeline-item validations-title d-none mt-4\">
        <h3>";
        // line 210
        echo twig_escape_filter($this->env, _n("Validation", "Validations", Session::getPluralNumber()), "html", null, true);
        echo "</h3>
    </div>

    ";
        // line 213
        if ( !($context["is_timeline_reversed"] ?? null)) {
            // line 214
            echo "        ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/approbation_form.html.twig");
            echo "
        ";
            // line 215
            echo twig_include($this->env, $context, "components/itilobject/answer.html.twig");
            echo "
    ";
        }
        // line 217
        echo "
</div>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".edit-timeline-item\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      var content_block = timeline_item.find(\".timeline-content\");
      var itemtype      = timeline_item.data('itemtype');
      var items_id      = timeline_item.data('items-id');
      var item_action   = timeline_item.data('item-action');

      content_block.find(\".read-only-content\").hide();
      content_block.find(\".edit-content\").show()
         .find(\".ajax-content\")
         .html('<i class=\"fas fa-3x fa-spinner fa-spin ms-auto\"></i>')
         .load(\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
        echo "\", {
            'action'     : 'viewsubitem',
            'type'       : itemtype,
            'parenttype' : '";
        // line 236
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 236), "html", null, true);
        echo "',
            '";
        // line 237
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 237), "html", null, true);
        echo "': ";
        echo twig_escape_filter($this->env, (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 237)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["id"] ?? null) : null), "html", null, true);
        echo ",
            'id'         : items_id,
            'item_action': item_action
         });

      timeline_item.find('.timeline-item-buttons').addClass('d-none');
      timeline_item.find('.close-edit-content').removeClass('d-none');

      \$(\"#itil-footer\").find(\".main-actions\").hide();
      \$(\"#right-actions\").hide();
   });

   \$(document).on(\"click\", \".close-edit-content\", function() {
      var timeline_item = \$(this).closest(\".timeline-item\");
      timeline_item.find('.timeline-item-buttons').removeClass('d-none');
      timeline_item.find('.close-edit-content').addClass('d-none');

      timeline_item.find('.ajax-content').html('');
      timeline_item.find('.read-only-content').show();

      \$(\"#itil-footer .main-actions\").show();
      \$(\"#right-actions\").show();
   });
});
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/timeline/timeline.html.twig";
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
        return array (  559 => 237,  555 => 236,  549 => 233,  531 => 217,  526 => 215,  521 => 214,  519 => 213,  513 => 210,  507 => 207,  501 => 204,  497 => 202,  491 => 200,  489 => 199,  486 => 198,  469 => 195,  464 => 192,  460 => 190,  458 => 189,  457 => 188,  455 => 187,  453 => 186,  445 => 180,  439 => 177,  436 => 176,  433 => 175,  430 => 174,  424 => 172,  421 => 171,  418 => 170,  415 => 169,  412 => 168,  410 => 167,  406 => 165,  404 => 164,  403 => 163,  396 => 161,  392 => 159,  386 => 157,  383 => 156,  380 => 155,  378 => 153,  377 => 150,  376 => 149,  374 => 147,  372 => 146,  368 => 144,  366 => 143,  365 => 142,  364 => 141,  363 => 140,  358 => 139,  356 => 137,  355 => 136,  353 => 135,  350 => 134,  348 => 133,  346 => 132,  342 => 131,  338 => 129,  335 => 128,  329 => 126,  321 => 124,  318 => 123,  315 => 122,  309 => 120,  301 => 118,  298 => 117,  296 => 116,  292 => 115,  286 => 112,  277 => 110,  271 => 109,  258 => 108,  256 => 107,  253 => 106,  250 => 105,  248 => 104,  245 => 103,  243 => 102,  240 => 100,  237 => 99,  234 => 98,  231 => 97,  228 => 96,  225 => 95,  222 => 94,  219 => 93,  216 => 92,  213 => 91,  210 => 90,  207 => 89,  204 => 88,  202 => 87,  199 => 86,  196 => 85,  193 => 84,  190 => 83,  187 => 82,  184 => 81,  181 => 80,  178 => 79,  175 => 78,  172 => 77,  170 => 76,  167 => 75,  165 => 74,  162 => 73,  159 => 72,  156 => 71,  153 => 70,  150 => 69,  147 => 68,  144 => 67,  141 => 66,  138 => 65,  135 => 64,  132 => 63,  130 => 62,  127 => 61,  125 => 60,  122 => 59,  119 => 58,  116 => 57,  113 => 56,  110 => 55,  107 => 54,  104 => 53,  101 => 52,  98 => 51,  95 => 50,  78 => 49,  75 => 48,  72 => 47,  69 => 45,  67 => 44,  64 => 43,  59 => 41,  54 => 40,  48 => 38,  46 => 37,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/timeline.html.twig", "/Users/alexleblay/Documents/Edcuservice/campusimmat-laravel/public/glpi/templates/components/itilobject/timeline/timeline.html.twig");
    }
}
