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

/* components/itilobject/actors/field.html.twig */
class __TwigTemplate_6fef228ebd484c82f89fb893fd99f737 extends Template
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
        $context["rand"] = twig_random($this->env);
        // line 35
        echo "
";
        // line 36
        $context["load_actors"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "load_actors", [], "array", true, true, false, 36) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["load_actors"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["load_actors"] ?? null) : null)) : (true));
        // line 37
        $context["actors"] = ((($context["load_actors"] ?? null)) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getActorsForType", [($context["actortypeint"] ?? null), ($context["params"] ?? null)], "method", false, false, false, 37)) : ([]));
        // line 38
        echo "
";
        // line 39
        $context["required"] = false;
        // line 40
        if (((twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 40) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 40)) || ((($context["actortype"] ?? null) == "assign") && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [("_suppliers_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 40)))) {
            // line 41
            echo "   ";
            $context["required"] = true;
        }
        // line 43
        echo "
";
        // line 44
        $context["is_actor_hidden"] = false;
        // line 45
        if (((twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 45) && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 45)) && ((($context["actortype"] ?? null) != "assign") || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_suppliers_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 45)))) {
            // line 46
            echo "   ";
            $context["is_actor_hidden"] = true;
        }
        // line 48
        echo "
";
        // line 49
        $context["onchange"] = "";
        // line 50
        $context["allow_auto_submit"] = (($context["allow_auto_submit"]) ?? (true));
        // line 51
        if (((($context["allow_auto_submit"] ?? null) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 51)) && (($context["actortype"] ?? null) == "requester"))) {
            // line 52
            echo "   ";
            $context["onchange"] = "this.form.submit();";
        }
        // line 54
        echo "
";
        // line 55
        if ( !($context["is_actor_hidden"] ?? null)) {
            // line 56
            echo "   <select class=\"form-select\" multiple=\"true\" id=\"actor_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" data-actor-type=\"";
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\"
        ";
            // line 57
            echo ((($context["required"] ?? null)) ? ("required") : (""));
            echo ">
   ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 59
                echo "      ";
                $context["unique_id"] = ((("user_opt_" . ($context["actortype"] ?? null)) . twig_get_attribute($this->env, $this->source, $context["actor"], "itemtype", [], "any", false, false, false, 59)) . twig_get_attribute($this->env, $this->source, $context["actor"], "items_id", [], "any", false, false, false, 59));
                // line 60
                echo "      <option selected=\"true\" value=\"";
                echo twig_escape_filter($this->env, (((($__internal_compile_2 = $context["actor"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["itemtype"] ?? null) : null) . "_") . (($__internal_compile_3 = $context["actor"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["items_id"] ?? null) : null)), "html", null, true);
                echo "\"
            data-itemtype=\"";
                // line 61
                echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["actor"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["itemtype"] ?? null) : null), "html", null, true);
                echo "\" data-items-id=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["actor"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["items_id"] ?? null) : null), "html", null, true);
                echo "\"
            data-use-notification=\"";
                // line 62
                echo twig_escape_filter($this->env, (($__internal_compile_6 = $context["actor"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["use_notification"] ?? null) : null), "html", null, true);
                echo "\"
            data-default-email=\"";
                // line 63
                (((twig_get_attribute($this->env, $this->source, $context["actor"], "default_email", [], "array", true, true, false, 63) &&  !(null === (($__internal_compile_7 = $context["actor"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["default_email"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_8 = $context["actor"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["default_email"] ?? null) : null), "html", null, true))) : (print ("")));
                echo "\"
            data-alternative-email=\"";
                // line 64
                (((twig_get_attribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", true, true, false, 64) &&  !(null === (($__internal_compile_9 = $context["actor"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["alternative_email"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_10 = $context["actor"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["alternative_email"] ?? null) : null), "html", null, true))) : (print ("")));
                echo "\"
            ";
                // line 65
                if (((((($__internal_compile_11 = $context["actor"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["itemtype"] ?? null) : null) == "User") && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 65)) || (((($__internal_compile_12 = $context["actor"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["itemtype"] ?? null) : null) == "Group") && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 65)))) {
                    // line 66
                    echo "               disabled=\"disabled\" style=\"display: none;\"
            ";
                }
                // line 68
                echo "            data-text=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_13 = $context["actor"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["text"] ?? null) : null)), "html", null, true);
                echo "\" data-title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_14 = $context["actor"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["title"] ?? null) : null)), "html", null, true);
                echo "\" data-glpi-popover-source=\"content";
                echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                echo "\">
         ";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_15 = $context["actor"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["title"] ?? null) : null)), "html", null, true);
                echo "
      </option>
   ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "   </select>

   ";
            // line 74
            if ((( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 74) &&  !(($__internal_compile_16 = ($context["params"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["template_preview"] ?? null) : null)) && ($context["canassigntome"] ?? null))) {
                // line 75
                echo "      ";
                echo twig_include($this->env, $context, "components/itilobject/actors/assign_to_me.html.twig");
                echo "
   ";
            }
            // line 77
            echo "
   <script type=\"text/javascript\">

   // Do not use jquery ready wrapper here as it behave unexpectedly with ajax
   // requests, adding an unnecessary delay
   (function() {
      var actorytype = '";
            // line 83
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "';

      // function to display an option in the list or the selected input
      var genericTemplate_";
            // line 86
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " = function(option = {}, is_selection = false) {
         var element   = \$(option.element);
         var itemtype  = element.data('itemtype') ?? option.itemtype;
         var items_id  = element.data('items-id') ?? option.items_id;
         var text      = escapeMarkupText(element.data('text') ?? option.text ?? '');
         var title     = escapeMarkupText(element.data('title') ?? option.title ?? '');
         var use_notif = element.data('use-notification') ?? option.use_notification ?? 1;
         var alt_email = element.data('alternative-email') ?? option.alternative_email ?? '';

         var icon = \"\";
         var fk   = \"\";
         switch (itemtype) {
            case \"User\":
               if (items_id == 0) {
                  text = alt_email;
                  icon = `<i class=\"ti  fa-fw ti-mail mx-1\" title=\"";
            // line 101
            echo twig_escape_filter($this->env, __("Direct email"), "html", null, true);
            echo "\"></i>`;
               } else {
                  icon = `<i class=\"ti  fa-fw ti-user mx-1\" title=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            echo "\"></i>`;
               }
               if (\"";
            // line 105
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"assign\") {
                  fk = \"users_id_assign\";
               } else if (\"";
            // line 107
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"requester\") {
                  fk = \"users_id_requester\";
               } else if (\"";
            // line 109
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"observer\") {
                  fk = \"users_id_observer\";
               }
               break;
            case \"Group\":
               icon = `<i class=\"ti  fa-fw ti-users mx-1\" title=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), "html", null, true);
            echo "\"></i>`;
               if (\"";
            // line 115
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"assign\") {
                  fk = \"groups_id_assign\";
               } else if (\"";
            // line 117
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"requester\") {
                  fk = \"groups_id_requester\";
               } else if (\"";
            // line 119
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"observer\") {
                  fk = \"groups_id_observer\";
               }
               break;
            case \"Supplier\":
               icon = `<i class=\"ti fa-fw ti-package mx-1\" title=\"";
            // line 124
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Supplier"), "html", null, true);
            echo "\"></i>`;
               fk   = \"suppliers_id_assign\";
               break;
         }

         var actions = \"\";
         ";
            // line 130
            if (($context["canupdate"] ?? null)) {
                // line 131
                echo "         if (['User', 'Supplier', 'Email'].includes(itemtype)
            && is_selection) {
            var fa_class = \"far\";
            if (use_notif) {
               fa_class = \"fas\";
            }
            actions = `<button class=\"btn btn-sm btn-ghost-secondary edit-notify-user\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 139
                echo twig_escape_filter($this->env, __("Email followup"), "html", null, true);
                echo "\"
                              type=\"button\">
               <i class=\"\${fa_class} fa-bell notify-icon\"></i>
            </button>`;
         }
         ";
            }
            // line 145
            echo "
         // manage specific display for tree data (like groups)
         var indent = \"\";
         if (!is_selection && \"level\" in option && option.level > 1) {
            for (let index = 1; index < option.level; index++) {
               indent = \"&nbsp;&nbsp;&nbsp;\"+indent;
            }
            indent = indent+\"&raquo;\";
         }

         // prepare html for option element
         var text = (is_selection && itemtype == \"Group\") ? title : text;
         var option_text    = `<span class=\"actor_text\">\${text}</span>`;
         var option_element = \$(`<span class=\"actor_entry\" data-itemtype=\"\${itemtype}\" data-items-id=\"\${items_id}\" data-actortype=\"\${actorytype}\">\${indent}\${icon}\${option_text}\${actions}</span>`);

          if (is_selection && itemtype == \"User\") {
              const unique_id = \"user_opt_\" + actor_select.attr('data-actor-type') + \"User\" + items_id;
              \$.ajax({
                  url: '";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/comments.php"), "html", null, true);
            echo "',
                  type: 'POST',
                  data: {
                      'itemtype': 'User',
                      'value': items_id,
                  }
              }).then((result) => {
                  if (result) {
                      actor_select.parent().append('<' + `div id=\"content\${unique_id}\" style=\"display: none;\">` + result + '<' + '/div>');
                      option_element.attr('data-glpi-popover-source', `content\${unique_id}`);
                  }
              });
          }

         // manage ticket information (number of assigned ticket for an actor)
         if (is_selection && itemtype != \"Email\") {
            var label = '';
            if (\"";
            // line 180
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"assign\") {
               label = \"";
            // line 181
            echo twig_escape_filter($this->env, __("Number of tickets already assigned"), "html", null, true);
            echo "\";
            } else if (\"";
            // line 182
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"requester\") {
               label = \"";
            // line 183
            echo twig_escape_filter($this->env, __("Number of tickets as requester"), "html", null, true);
            echo "\";
            }
            var existing_element = \$(
               `<span class=\"assign_infos ms-1\" title=\"\${label}\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                     data-id=\"\${items_id}\" data-fk=\"\${fk}\">
                  <i class=\"fas fa-spinner fa-spin\"></i>
               </span>`
            );
            option_element.append(existing_element);

            \$.get(\"";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/actorinformation.php"), "html", null, true);
            echo "\", {
               [fk]: items_id,
               only_number: true,
            }).done(function (number) {
               var badge = \"\";
               if (number.length > 0) {
                  badge = `<span class=\"badge bg-secondary-lt\">
                  \${number}
               </span>`;
               }
               existing_element.html(badge);
            });
         }

         return option_element;
      };

      var select2_width = \"";
            // line 211
            echo ((($context["canassigntome"] ?? null)) ? ("calc(100% - 30px)") : ("100%"));
            echo "\";

      const actor_select = \$(\"#actor_";
            // line 213
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\");
      actor_select.select2({
         tags: true,
         width: select2_width,
         tokenSeparators: [',', ' '],
         containerCssClass: 'actor-field',
         templateSelection: function(option) { return genericTemplate_";
            // line 219
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(option, true); },
         templateResult:    function(option) { return genericTemplate_";
            // line 220
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(option, false); },
         disabled: ";
            // line 221
            echo ((($context["canupdate"] ?? null)) ? ("false") : ("true"));
            echo ",
         createTag: function (params) {
            var term = \$.trim(params.term);

            if (term === '') {
               return null;
            }

            // Don't offset to create a tag if it's not an email
            if (!new RegExp(/^[\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,63}\$/).test(term)) {
               // Return null to disable tag creation
               return null;
            }

            return {
               id: term,
               text: term,
               itemtype: \"User\",
               items_id: 0,
               use_notification: 1,
               alternative_email: term,
            }
         },
         ajax: {
            url: '";
            // line 245
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/actors.php"), "html", null, true);
            echo "',
            datatype: 'json',
            type: 'POST',
            delay:250,
            data: function (params) {
               var is_new_item = ";
            // line 250
            echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 250)) ? ("true") : ("false"));
            echo ";
               return {
                  action: 'getActors',
                  actortype: actorytype,
                  users_right: '";
            // line 254
            (((array_key_exists("users_right", $context) &&  !(null === ($context["users_right"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["users_right"] ?? null), "html", null, true))) : (print ("all")));
            echo "',
                  entity_restrict: (actors.requester.length == 0 && is_new_item) ? -1 : ";
            // line 255
            echo twig_escape_filter($this->env, ($context["entities_id"] ?? null), "html", null, true);
            echo ",
                  searchText: params.term,
                  _idor_token: '";
            // line 257
            echo twig_escape_filter($this->env, Session::getNewIDORToken(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 257), ["users_right" => (($context["users_right"]) ?? ("all"))]), "html", null, true);
            echo "',
                  itiltemplate_class: '";
            // line 258
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "getType", [], "method", false, false, false, 258), "html", null, true);
            echo "',
                  itiltemplates_id: ";
            // line 259
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 259), "id", [], "array", true, true, false, 259) &&  !(null === (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 259)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["id"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 259)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["id"] ?? null) : null), "html", null, true))) : (print (0)));
            echo ",
                  itemtype: '";
            // line 260
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 260), "html", null, true);
            echo "',
                  items_id: ";
            // line 261
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 261)) ? ( -1) : ((($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 261)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["id"] ?? null) : null))), "html", null, true);
            echo ",
                  item: ";
            // line 262
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 262));
            echo ",
                  returned_itemtypes: ";
            // line 263
            echo json_encode((($context["returned_itemtypes"]) ?? (["User", "Group", "Supplier"])));
            echo ",
                  page: params.page || 1
               };
            },
         }
      }).on('select2:open', () => {
          // Close popovers
          \$('.popover').popover('hide');
      });

      \$(function () {
         actor_select.parent().popover({
            selector: '[data-glpi-popover-source]',
            container: actor_select.parent(),
            html: true,
            sanitize: false,
            trigger: 'hover',
            delay: {
               hide: 300
            },
            template: '<' + 'div class=\"popover shadow\" role=\"tooltip\"><' + 'div class=\"popover-arrow\"><' + '/div><' + 'h3 class=\"popover-header\"><' + '/h3><' + 'div class=\"popover-body\"><' + '/div><' + '/div>',
            content: function() {
               // Close other popovers
               \$('.popover').popover('hide');
               return \$('#' + \$(this).attr('data-glpi-popover-source')).html();
            }
         }).on('hide.bs.popover', function () {
            // prevent closing popover when user card is hover
            if (\$('.user-info-card:hover').length > 0) {
               return false;
            }
         });
      });

        // when the mouse leave the user card in the popover, close it
        \$(document).on('mouseleave', '.user-info-card', function() {
            setTimeout(() => {
                \$('.popover').popover('hide');
            }, 300);
        });

      // manage actors change
      var updateActors";
            // line 305
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " = function() {
         var data = \$(\"#actor_";
            // line 306
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").select2('data');

         var new_actors = [];
         data.forEach(function(selection) {
            var element = \$(selection.element);

            var itemtype  = selection.itemtype ?? element.data('itemtype');
            var items_id  = selection.items_id ?? element.data('items-id');
            var use_notif = selection.use_notification  ?? element.data('use-notification')  ?? false;
            var def_email = selection.default_email ?? element.data('default-email') ?? '';
            var alt_email = selection.alternative_email ?? element.data('alternative-email') ?? '';

            if (itemtype == \"Email\") {
               itemtype  = \"User\";
               use_notif = true;
               alt_email = selection.id;
            }

            new_actors.push({
               itemtype: itemtype,
               items_id: items_id,
               use_notification: use_notif,
               default_email: def_email,
               alternative_email: alt_email,
            });
         });

         actors[actorytype] = new_actors;

         saveActorsToDom();
      };
      \$(\"#actor_";
            // line 337
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").on('select2:select', function () {
         updateActors";
            // line 338
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "();
         ";
            // line 339
            echo twig_escape_filter($this->env, ($context["onchange"] ?? null), "html", null, true);
            echo "
      });
      \$(\"#actor_";
            // line 341
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").on('select2:unselect', function () {
         updateActors";
            // line 342
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "();
         ";
            // line 343
            echo twig_escape_filter($this->env, ($context["onchange"] ?? null), "html", null, true);
            echo "
      });

      // intercept event for edit notification button
      document.addEventListener('click', event => {
         if (event.target.closest(\"#actor_";
            // line 348
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " + .select2 .edit-notify-user\")) {
            return openNotifyModal(event);
         }
         // if a click on assign info is detected prevent opening of select2
         if (event.target.closest(\"#actor_";
            // line 352
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " + .select2 .assign_infos\")) {
            event.stopPropagation();
         }
      }, {capture: true})
      document.addEventListener('keydown', event => {
         if (event.target.closest(\"#actor_";
            // line 357
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " + .select2 .edit-notify-user\")
            && event.key == \"Enter\") {
            return openNotifyModal(event);
         }
      }, {capture: true})

      ";
            // line 363
            if (twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 363)) {
                // line 364
                echo "         \$(\".actor_entry[data-itemtype=\\\"User\\\"][data-actortype=\\\"";
                echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
                echo "\\\"]\").parent().css(\"display\", \"none\");
      ";
            }
            // line 366
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 366)) {
                // line 367
                echo "         \$(\".actor_entry[data-itemtype=\\\"Group\\\"][data-actortype=\\\"";
                echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
                echo "\\\"]\").parent().css(\"display\", \"none\");
      ";
            }
            // line 369
            echo "   })();
   </script>
";
        }
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "components/itilobject/actors/field.html.twig";
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
        return array (  614 => 369,  608 => 367,  605 => 366,  599 => 364,  597 => 363,  588 => 357,  580 => 352,  573 => 348,  565 => 343,  561 => 342,  557 => 341,  552 => 339,  548 => 338,  544 => 337,  510 => 306,  506 => 305,  461 => 263,  457 => 262,  453 => 261,  449 => 260,  445 => 259,  441 => 258,  437 => 257,  432 => 255,  428 => 254,  421 => 250,  413 => 245,  386 => 221,  382 => 220,  378 => 219,  369 => 213,  364 => 211,  344 => 194,  330 => 183,  326 => 182,  322 => 181,  318 => 180,  298 => 163,  278 => 145,  269 => 139,  259 => 131,  257 => 130,  248 => 124,  240 => 119,  235 => 117,  230 => 115,  226 => 114,  218 => 109,  213 => 107,  208 => 105,  203 => 103,  198 => 101,  180 => 86,  174 => 83,  166 => 77,  160 => 75,  158 => 74,  154 => 72,  145 => 69,  136 => 68,  132 => 66,  130 => 65,  126 => 64,  122 => 63,  118 => 62,  112 => 61,  107 => 60,  104 => 59,  100 => 58,  96 => 57,  89 => 56,  87 => 55,  84 => 54,  80 => 52,  78 => 51,  76 => 50,  74 => 49,  71 => 48,  67 => 46,  65 => 45,  63 => 44,  60 => 43,  56 => 41,  54 => 40,  52 => 39,  49 => 38,  47 => 37,  45 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/actors/field.html.twig", "/Users/alexleblay/Documents/Edcuservice/campusimmat-laravel/public/glpi/templates/components/itilobject/actors/field.html.twig");
    }
}
