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

/* components/itilobject/actors/main.html.twig */
class __TwigTemplate_1140ae6cd390e0db90eb11c31722797a extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/actors/main.html.twig", 34)->unwrap();
        // line 35
        echo "
";
        // line 36
        if ( !array_key_exists("display_actortypes", $context)) {
            // line 37
            echo "   ";
            $context["display_actortypes"] = ["requester", "observer", "assign"];
        }
        // line 39
        if ( !array_key_exists("display_labels", $context)) {
            // line 40
            echo "   ";
            $context["display_labels"] = true;
        }
        // line 42
        echo "
";
        // line 43
        $context["actor_options"] = twig_array_merge(($context["field_options"] ?? null), ["is_horizontal" => false, "add_field_class" => ((        // line 45
($context["is_expanded"] ?? null)) ? ("col-sm-4") : (""))]);
        // line 47
        $context["can_admin"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canAdminActors", [], "method", false, false, false, 47);
        // line 48
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 48)) {
            // line 49
            echo "   ";
            $context["can_admin"] = true;
        }
        // line 51
        echo "
";
        // line 53
        $context["allow_auto_submit"] = (($context["allow_auto_submit"]) ?? (true));
        // line 55
        echo "
";
        // line 57
        echo "
";
        // line 58
        if ((twig_in_filter("requester", ($context["display_actortypes"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_users_id_requester"], "method", false, false, false, 58) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_groups_id_requester"], "method", false, false, false, 58)))) {
            // line 59
            echo "   ";
            ob_start(function () { return ''; });
            // line 60
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>             // line 61
($context["item"] ?? null), "actortypeint" => twig_constant("CommonITILActor::REQUESTER"), "actortype" => "requester", "entities_id" =>             // line 64
($context["entities_id"] ?? null), "itiltemplate" =>             // line 65
($context["itiltemplate"] ?? null), "params" =>             // line 66
($context["params"] ?? null), "canupdate" =>             // line 67
($context["canupdate"] ?? null), "canassigntome" => ((            // line 68
$context["canassigntome"]) ?? (false)), "main_rand" =>             // line 69
($context["main_rand"] ?? null), "allow_auto_submit" =>             // line 70
($context["allow_auto_submit"] ?? null)], false);
            // line 71
            echo "
   ";
            $context["requester_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            echo "   ";
            if (($context["display_labels"] ?? null)) {
                // line 74
                echo "      ";
                echo twig_call_macro($macros["fields"], "macro_field", ["requester",                 // line 76
($context["requester_field"] ?? null), _n("Requester", "Requesters", 1), twig_array_merge(                // line 78
($context["actor_options"] ?? null), ["required" => (twig_get_attribute($this->env, $this->source,                 // line 79
($context["itiltemplate"] ?? null), "isMandatoryField", ["_users_id_requester"], "method", false, false, false, 79) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_groups_id_requester"], "method", false, false, false, 79))])], 74, $context, $this->getSourceContext());
                // line 81
                echo "
   ";
            } else {
                // line 83
                echo "      ";
                echo twig_escape_filter($this->env, ($context["requester_field"] ?? null), "html", null, true);
                echo "
   ";
            }
        }
        // line 86
        echo "
";
        // line 87
        if ((twig_in_filter("observer", ($context["display_actortypes"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_users_id_observer"], "method", false, false, false, 87) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_groups_id_observer"], "method", false, false, false, 87)))) {
            // line 88
            echo "   ";
            ob_start(function () { return ''; });
            // line 89
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>             // line 90
($context["item"] ?? null), "actortypeint" => twig_constant("CommonITILActor::OBSERVER"), "actortype" => "observer", "entities_id" =>             // line 93
($context["entities_id"] ?? null), "itiltemplate" =>             // line 94
($context["itiltemplate"] ?? null), "params" =>             // line 95
($context["params"] ?? null), "canupdate" =>             // line 96
($context["canupdate"] ?? null), "canassigntome" => ((            // line 97
$context["canassigntome"]) ?? (false)), "main_rand" =>             // line 98
($context["main_rand"] ?? null), "allow_auto_submit" =>             // line 99
($context["allow_auto_submit"] ?? null)], false);
            // line 100
            echo "
   ";
            $context["observer_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 102
            echo "   ";
            if (($context["display_labels"] ?? null)) {
                // line 103
                echo "      ";
                echo twig_call_macro($macros["fields"], "macro_field", ["observer",                 // line 105
($context["observer_field"] ?? null), __("Observer"), twig_array_merge(                // line 107
($context["actor_options"] ?? null), ["required" => (twig_get_attribute($this->env, $this->source,                 // line 108
($context["itiltemplate"] ?? null), "isMandatoryField", ["_users_id_observer"], "method", false, false, false, 108) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_groups_id_observer"], "method", false, false, false, 108))])], 103, $context, $this->getSourceContext());
                // line 110
                echo "
   ";
            } else {
                // line 112
                echo "      ";
                echo twig_escape_filter($this->env, ($context["observer_field"] ?? null), "html", null, true);
                echo "
   ";
            }
        }
        // line 115
        echo "
";
        // line 116
        if ((twig_in_filter("assign", ($context["display_actortypes"] ?? null)) && (( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_users_id_assign"], "method", false, false, false, 116) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_groups_id_assign"], "method", false, false, false, 116)) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", ["_supplier_id_assign"], "method", false, false, false, 116)))) {
            // line 117
            echo "   ";
            ob_start(function () { return ''; });
            // line 118
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>             // line 119
($context["item"] ?? null), "actortypeint" => twig_constant("CommonITILActor::ASSIGN"), "actortype" => "assign", "users_right" => "own_ticket", "entities_id" =>             // line 123
($context["entities_id"] ?? null), "itiltemplate" =>             // line 124
($context["itiltemplate"] ?? null), "params" =>             // line 125
($context["params"] ?? null), "canupdate" =>             // line 126
($context["canassign"] ?? null), "canassigntome" => ((            // line 127
$context["canassigntome"]) ?? (false)), "main_rand" =>             // line 128
($context["main_rand"] ?? null), "allow_auto_submit" =>             // line 129
($context["allow_auto_submit"] ?? null)], false);
            // line 130
            echo "
   ";
            $context["assign_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 132
            echo "   ";
            if (($context["display_labels"] ?? null)) {
                // line 133
                echo "      ";
                echo twig_call_macro($macros["fields"], "macro_field", ["assign",                 // line 135
($context["assign_field"] ?? null), __("Assigned to"), twig_array_merge(                // line 137
($context["actor_options"] ?? null), ["required" => ((twig_get_attribute($this->env, $this->source,                 // line 138
($context["itiltemplate"] ?? null), "isMandatoryField", ["_users_id_assign"], "method", false, false, false, 138) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_groups_id_assign"], "method", false, false, false, 138)) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", ["_supplier_id_assign"], "method", false, false, false, 138))])], 133, $context, $this->getSourceContext());
                // line 140
                echo "
   ";
            } else {
                // line 142
                echo "      ";
                echo twig_escape_filter($this->env, ($context["assign_field"] ?? null), "html", null, true);
                echo "
   ";
            }
        }
        // line 145
        echo "
<input type=\"hidden\" name=\"_actors\" id=\"_actors\" />

";
        // line 149
        echo "<div class=\"modal fade\" id=\"editActorNotifySettings\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
         <h5 class=\"modal-title\">
            <i class=\"fas fa-envelope\"></i>
            &nbsp;";
        // line 155
        echo twig_escape_filter($this->env, __("Edit notification settings"), "html", null, true);
        echo "
         </h5>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 157
        echo twig_escape_filter($this->env, __("Close"), "html", null, true);
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
         <div class=\"mb-3\">
            <label class=\"form-label\" for=\"actorname\">";
        // line 161
        echo twig_escape_filter($this->env, __("Actor"), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" id=\"actorname\" name=\"_notifications_actorname\" />
            <input type=\"hidden\" name=\"_notifications_actortype\" value=\"\" />
            <input type=\"hidden\" name=\"_notifications_actorindex\" value=\"\" />
         </div>
         <div class=\"mb-3\">
            <label for=\"alternative_email\" class=\"form-label\">";
        // line 167
        echo twig_escape_filter($this->env, __("Email address"), "html", null, true);
        echo "</label>
            <div class=\"form-check form-switch\">
               <input class=\"form-check-input\" type=\"checkbox\" id=\"use_notification\" name=\"_notifications_use_notification\" />
               <label class=\"form-check-label\" for=\"use_notification\">";
        // line 170
        echo twig_escape_filter($this->env, __("Email followup"), "html", null, true);
        echo "</label>
            </div>
            <input type=\"email\" class=\"form-control\" id=\"alternative_email\" name=\"_notifications_alternative_email\" />
         </div>
      </div>
      <div class=\"modal-footer\">
         <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
            <i class=\"ti ti-x\"></i>
            <span>";
        // line 178
        echo twig_escape_filter($this->env, __("Close"), "html", null, true);
        echo "<span>
         </button>
         <button type=\"button\" class=\"btn btn-primary\" id=\"saveActorNotifySettings\">
            <i class=\"far fa-save\"></i>
            <span>";
        // line 182
        echo twig_escape_filter($this->env, __("Save"), "html", null, true);
        echo "</span>
         </button>
      </div>
    </div>
  </div>
</div>

";
        // line 189
        $context["actortypes"] = ["requester" => twig_constant("CommonITILActor::REQUESTER"), "observer" => twig_constant("CommonITILActor::OBSERVER"), "assign" => twig_constant("CommonITILActor::ASSIGN")];
        // line 194
        echo "
<script type=\"text/javascript\">
   /* global bootstrap */
   var editActorNotifySettings_modal = null;
   \$(function () {
      editActorNotifySettings_modal = new bootstrap.Modal(document.getElementById('editActorNotifySettings'), {});
   });

   var actors = {
      ";
        // line 203
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actortypes"] ?? null));
        foreach ($context['_seq'] as $context["actortype"] => $context["actortypeint"]) {
            // line 204
            echo "         ";
            echo twig_escape_filter($this->env, $context["actortype"], "html", null, true);
            echo ": [
            ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getActorsForType", [$context["actortypeint"], ($context["params"] ?? null)], "method", false, false, false, 205));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 206
                echo "            {
               itemtype: \"";
                // line 207
                echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["actor"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), "html", null, true);
                echo "\",
               items_id: \"";
                // line 208
                echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["actor"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["items_id"] ?? null) : null), "html", null, true);
                echo "\",
               use_notification: ";
                // line 209
                echo (((($__internal_compile_2 = $context["actor"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["use_notification"] ?? null) : null)) ? ("1") : ("0"));
                echo ",
               alternative_email: \"";
                // line 210
                (((twig_get_attribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", true, true, false, 210) &&  !(null === (($__internal_compile_3 = $context["actor"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["alternative_email"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_4 = $context["actor"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["alternative_email"] ?? null) : null), "html", null, true))) : (print ("")));
                echo "\",
               default_email: \"";
                // line 211
                (((twig_get_attribute($this->env, $this->source, $context["actor"], "default_email", [], "array", true, true, false, 211) &&  !(null === (($__internal_compile_5 = $context["actor"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["default_email"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_6 = $context["actor"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["default_email"] ?? null) : null), "html", null, true))) : (print ("")));
                echo "\",
            },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 214
            echo "         ],
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['actortype'], $context['actortypeint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 216
        echo "   };

   // edit email preference when .edit-notify-user button is activated
   function openNotifyModal(event) {
      event.stopPropagation();

      var element = \$(event.target).closest('.actor_entry');
      var itemtype  = element.data('itemtype');
      var items_id  = element.data('items-id');
      var actortype = element.data('actortype');
      var text      = element.find('.actor_text').text().trim();

      actorIndex = actors[actortype].findIndex(element =>
         element.itemtype == itemtype &&
         (items_id === 0 ? element.alternative_email == text : element.items_id == items_id)
      );
      var actor = actors[actortype][actorIndex];

      var modal = \$('#editActorNotifySettings');
      modal.find(\"input[name=_notifications_actortype]\").val(actortype);
      modal.find(\"input[name=_notifications_actorindex]\").val(actorIndex);
      modal.find(\"input[name=_notifications_actorname]\").removeAttr('readonly').val(text).attr('readonly', 'true');
      modal.find(\"input[name=_notifications_use_notification]\").prop('checked', parseInt(actor.use_notification));
      modal.find(\"input[name=_notifications_alternative_email]\").attr('placeholder', actor.default_email);
      modal.find(\"input[name=_notifications_alternative_email]\").val(actor.alternative_email);

      editActorNotifySettings_modal.show();
   }

   // save edited actor when clicking on save button
   \$(document).on('click', '#saveActorNotifySettings', function(event) {
      saveNotificationSettings();
   });

   // prevent submit on enter key in modal (but save notification settings)
   \$(document).on('keyup keypress', '#editActorNotifySettings input', function(event) {
      var keyCode = event.keyCode || event.which;
      if (keyCode === 13) {
         event.preventDefault();
         saveNotificationSettings();
         return false;
      }
   });

   // save settings from modal (get modal data, and serialize them into input hidden)
   function saveNotificationSettings() {
      var modal = \$('#editActorNotifySettings');
      var actortype  = modal.find(\"input[name=_notifications_actortype]\").val();
      var actorIndex = modal.find(\"input[name=_notifications_actorindex]\").val();
      var use_notif  = (modal.find(\"input[name=_notifications_use_notification]\").is(\":checked\") ? 1 : 0);
      var alt_email  = modal.find(\"input[name=_notifications_alternative_email]\").val();

      var actor = actors[actortype][actorIndex];
      actor.use_notification = use_notif;
      actor.alternative_email = alt_email;

      // update notif setting icon for actor
      var fa_class = \"far\";
      if (use_notif) {
         fa_class = \"fas\";
      }

      var actor_entry = \$('.actor_entry[data-itemtype='+actor.itemtype+'][data-items-id='+actor.items_id+'][data-actortype='+actortype+']')
         .filter(function() {
            if(actor.items_id == 0 && actor.itemtype == \"User\") {
               return \$(this).text().trim() === actor.alternative_email;
            }
            return \$(this).text()
         });

      // toggle notify icon
      actor_entry.find('.notify-icon')
         .removeClass('fas far')
         .addClass(fa_class);

      // toggle text for direct email
      if (actor.itemtype == \"User\" && parseInt(actor.items_id) == 0) {
         actor_entry.find('.actor_text').html(alt_email);
      }


      editActorNotifySettings_modal.hide();
      saveActorsToDom();
   }

   // save actors object to dom
   function saveActorsToDom() {
      \$('#_actors').val(JSON.stringify(actors));
   }
   saveActorsToDom();
</script>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/actors/main.html.twig";
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
        return array (  337 => 216,  330 => 214,  321 => 211,  317 => 210,  313 => 209,  309 => 208,  305 => 207,  302 => 206,  298 => 205,  293 => 204,  289 => 203,  278 => 194,  276 => 189,  266 => 182,  259 => 178,  248 => 170,  242 => 167,  233 => 161,  226 => 157,  221 => 155,  213 => 149,  208 => 145,  201 => 142,  197 => 140,  195 => 138,  194 => 137,  193 => 135,  191 => 133,  188 => 132,  184 => 130,  182 => 129,  181 => 128,  180 => 127,  179 => 126,  178 => 125,  177 => 124,  176 => 123,  175 => 119,  173 => 118,  170 => 117,  168 => 116,  165 => 115,  158 => 112,  154 => 110,  152 => 108,  151 => 107,  150 => 105,  148 => 103,  145 => 102,  141 => 100,  139 => 99,  138 => 98,  137 => 97,  136 => 96,  135 => 95,  134 => 94,  133 => 93,  132 => 90,  130 => 89,  127 => 88,  125 => 87,  122 => 86,  115 => 83,  111 => 81,  109 => 79,  108 => 78,  107 => 76,  105 => 74,  102 => 73,  98 => 71,  96 => 70,  95 => 69,  94 => 68,  93 => 67,  92 => 66,  91 => 65,  90 => 64,  89 => 61,  87 => 60,  84 => 59,  82 => 58,  79 => 57,  76 => 55,  74 => 53,  71 => 51,  67 => 49,  65 => 48,  63 => 47,  61 => 45,  60 => 43,  57 => 42,  53 => 40,  51 => 39,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/actors/main.html.twig", "/Users/alexleblay/Documents/Edcuservice/campusimmat-laravel/public/glpi/templates/components/itilobject/actors/main.html.twig");
    }
}
