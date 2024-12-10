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

/* __string_template__da24cc8af815e93c50bb47b4a4cc3aa1 */
class __TwigTemplate_f2bb226471b02f371682c399e432e4e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/sport/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/sport/img/app_icon.png\" />

<title>Logos • Sport86</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPsxDesignLogos';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'ID';
    var _PS_VERSION_ = '8.0.1';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = 'b5a64e6f0be28e5c12e2a01ed3101a81';
    var token_admin_orders = tokenAdminOrders = '7591e57db14f23765308fa6a87f0a6e7';
    var token_admin_customers = '06152021e326d869bf451c505ece7e51';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '26bb685c6b8d21aa6a21f27a587e67d1';
    var currentIndex = 'index.php?controller=AdminPsxDesignLogos';
    var employee_token = 'c983a0932c2ab654e3d9303e0781b158';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/sport/adminsport/index.php/improve/modules/manage?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk';
    var admin_notification_get_link = '/sport/adminsport/index.php/common/notifications?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk';
    var admin_notifica";
        // line 43
        echo "tion_push_link = adminNotificationPushLink = '/sport/adminsport/index.php/common/notifications/ack?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/sport/adminsport/themes/new-theme/public/auto703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/sport/adminsport/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sport/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sport/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sport/adminsport/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sport/modules/psxdesign/views/css/admin/index.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sport/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/sport/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/sport\\/adminsport\\/\";
var baseDir = \"\\/sport\\/\";
var changeFormLanguageUrl = \"\\/sport\\/adminsport\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\";
var currency = {\"iso_code\":\"IDR\",\"sign\":\"Rp\",\"name\":\"Indonesian Rupiah\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"IDR\",\"currencySymbol\":\"Rp\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var ";
        // line 71
        echo "getUuidAjaxUrl = \"\\/sport\\/adminsport\\/index.php\\/modules\\/improve\\/design\\/user\\/userId?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\";
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var psxDesignSvgAlertMessage = \"You are about to import a logo in svg format. This format being incompatible with the email and invoice logos, these will retain the current logo.\";
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/sport/adminsport/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/sport/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/sport/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/sport/js/admin.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/sport/adminsport/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/sport/js/tools.js?v=8.0.1\"></script>
<script type=\"text/javascript\" src=\"/sport/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/sport/adminsport/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/sport\\/adminsport\\/index.php?controller=AdminGamification&token=fff577eae955f147683a0dca641b8c21\";
            var current_id_tab = 136;
        </script><script type=\"module\" src=\"/sport/modules/psxdesign/views/js/index-logos.js\"></script>


";
        // line 94
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminpsxdesignlogos\"
  data-base-url=\"/sport/adminsport/index.php\"  data-token=\"5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/sport/adminsport/index.php?controller=AdminDashboard&amp;token=08ada152a8568aa891649e30c46b9b7d\"></a>
      <span id=\"shop_version\">8.0.1</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/sport/adminsport/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=51f278773b8b00d18eab60ba8e8261ef\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/sport/adminsport/index.php/improve/modules/manage?token=14057425c3e05c72789889c0ba26a002\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/sport/adminsport/index.php/sell/catalog/categories/new?token=14057425c3e05c72789889c0ba26a002\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/sport/adminsport/index.php/sell/catalog/products/new?token=14057425c3e05c72789889c0ba26a002\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         ";
        // line 132
        echo "href=\"http://localhost/sport/adminsport/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=598614c87675ff34e927f31f98a257a3\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/sport/adminsport/index.php/sell/orders?token=14057425c3e05c72789889c0ba26a002\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"146\"
        data-icon=\"icon-AdminPsxDesignParentTab\"
        data-method=\"add\"
        data-url=\"index.php/modules/improve/design/logos\"
        data-post-link=\"http://localhost/sport/adminsport/index.php?controller=AdminQuickAccesses&token=e99ba0b3861022b50d77cf0c5da7456e\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Logos - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/sport/adminsport/index.php?controller=AdminQuickAccesses&token=e99ba0b3861022b50d77cf0c5da7456e\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/sport/adminsport/index.php?controller=AdminSearch&amp;token=f607d6c1dc080847b8b13c7488a0a16f\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search ";
        // line 171
        echo "(e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button cl";
        // line 187
        echo "ass=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/sport/adminsport/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=51f278773b8b00d18eab60ba8e8261ef\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/sport/adminsport/index.php/improve/modules/manage?token=14057425c3e05c72789889c0ba26a002\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/sport/adminsport/index.php/sell/catalog/categories/new?token=14057425c3e05c72789889c0ba26a002\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/sport/adminsport/index.php/sell/catalog/products/new?token=14057425c3e05c72789889c0ba26a002\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/sport/adminsport/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=598614c87675ff34e927f31f98a257a3\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/sport/adminsport/index.php/sell/orders?token=14057425c3e05c72789889c0ba26a002\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"qui";
        // line 229
        echo "ck-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"192\"
      data-icon=\"icon-AdminPsxDesignParentTab\"
      data-method=\"add\"
      data-url=\"index.php/modules/improve/design/logos\"
      data-post-link=\"http://localhost/sport/adminsport/index.php?controller=AdminQuickAccesses&token=e99ba0b3861022b50d77cf0c5da7456e\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Logos - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/sport/adminsport/index.php?controller=AdminQuickAccesses&token=e99ba0b3861022b50d77cf0c5da7456e\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/sport/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-";
        // line 278
        echo "type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your &lt;strong&gt;&lt;a href=\"http://localhost/sport/adminsport/index.php?controller=AdminCarts&amp;action=filterOnlyAbandonedCarts&amp;token=0e0d7d0c8901a26e2878a0d1e8dda2fa\"&gt;abandoned carts&lt;/a&gt;&lt;/strong&gt;?&lt;br&gt;Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div ";
        // line 327
        echo "class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/sport/img/pr/default.jpg\" alt=\"Rizki\" /></span>
        <span class=\"employee_profile\">Welcome back Rizki</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/sport/adminsport/index.php/configure/advanced/employees/1/edit?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFw";
        // line 375
        echo "lTBHSk\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=training-en&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=expert-en&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"/sport/adminsport/index.php/modules/mbo/modules/catalog/?utm_mbo_source=menu-user-back-office&_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk&utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=addons-en&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=help-center-en&utm_mbo_source=menu-user-back-office\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">he";
        // line 396
        echo "lp</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/sport/adminsport/index.php?controller=AdminLogin&amp;logout=1&amp;token=c1791f9119024c1d2b3e124260965855\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/sport/adminsport/index.php/configure/advanced/employees/toggle-navigation?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/sport/adminsport/index.php?controller=AdminDashboard&amp;token=08ada152a8568aa891649e30c46b9b7d\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.1</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminDashboard&amp;token=08ada152a8568aa891649e30c46b9b7d\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=";
        // line 447
        echo "\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/sport/adminsport/index.php/sell/orders/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/sport/adminsport/index.php/sell/orders/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/sport/adminsport/index.php/sell/orders/invoices/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\"";
        // line 477
        echo " data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/sport/adminsport/index.php/sell/orders/credit-slips/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/sport/adminsport/index.php/sell/orders/delivery-slips/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminCarts&amp;token=0e0d7d0c8901a26e2878a0d1e8dda2fa\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/sport/adminsport/index.php/sell/catalog/products?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
              ";
        // line 509
        echo "        </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/sport/adminsport/index.php/sell/catalog/products?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/sport/adminsport/index.php/sell/catalog/categories?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/sport/adminsport/index.php/sell/catalog/monitoring/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                           ";
        // line 539
        echo "                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminAttributesGroups&amp;token=fbdd32d53e64ea229e88ce71b631c265\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/sport/adminsport/index.php/sell/catalog/brands/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/sport/adminsport/index.php/sell/attachments/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminCartRules&amp;token=598614c87675ff34e927f31f98a257a3\" cla";
        // line 567
        echo "ss=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/sport/adminsport/index.php/sell/stocks/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/sport/adminsport/index.php/sell/customers/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/sport/adminsport";
        // line 600
        echo "/index.php/sell/customers/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/sport/adminsport/index.php/sell/addresses/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminCustomerThreads&amp;token=26bb685c6b8d21aa6a21f27a587e67d1\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
     ";
        // line 632
        echo "                         <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminCustomerThreads&amp;token=26bb685c6b8d21aa6a21f27a587e67d1\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/sport/adminsport/index.php/sell/customer-service/order-messages/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminReturn&amp;token=5f30d0ad631465f5710fbd8dba2cfaca\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/sport/adminsport/index.php/modules/metrics/legacy/stats?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\">
                      <i class=\"mat";
        // line 661
        echo "erial-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/sport/adminsport/index.php/modules/metrics/legacy/stats?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"159\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/sport/adminsport/index.php/modules/metrics?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

      ";
        // line 698
        echo "                        
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/sport/adminsport/index.php/modules/mbo/modules/catalog/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/sport/adminsport/index.php/modules/mbo/modules/catalog/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/sport/adminsport/index.php/improve/modules/manage?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Module Manag";
        // line 725
        echo "er
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=cd448ebc95182ab4e8cf7f912d0e7800\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"160\" id=\"subtab-AdminThemesParent\">
                                <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminPsThemeCustoConfiguration&amp;token=cd448ebc95182ab4e8cf7f912d0e7800\" class=\"link\"> Theme modules
                                </a>
                              </li>

                                                                                  
                              
                                                        ";
        // line 756
        echo "    
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/sport/adminsport/index.php/modules/mbo/themes/catalog/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"134\" id=\"subtab-AdminPsxDesignParentTab\">
                                <a href=\"/sport/adminsport/index.php/modules/improve/design/themes?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Customization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/sport/adminsport/index.php/improve/design/mail_theme/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/sport/adminsport/index.php/improve/design/cms-pages/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Pages
                                </a>
                              </li>

                                     ";
        // line 786
        echo "                                             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/sport/adminsport/index.php/improve/design/modules/positions/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminImages&amp;token=f79589ec6bec5bcd7ac3ac9fd62330fb\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/sport/adminsport/index.php/modules/link-widget/list?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/sport/adminsport/index.ph";
        // line 817
        echo "p?controller=AdminCarriers&amp;token=dc33dfb36c5df854a14842a0b545983f\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminCarriers&amp;token=dc33dfb36c5df854a14842a0b545983f\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/sport/adminsport/index.php/improve/shipping/preferences/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminMbeConfiguration\">
                                <a";
        // line 847
        echo " href=\"http://localhost/sport/adminsport/index.php?controller=AdminMbeConfiguration&amp;token=16184fb235fcc76913e7c5815395a7c1\" class=\"link\"> MBE - Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminMbeShipping&amp;token=496bbcc3c68157d2e5272ad8dcfe98e0\" class=\"link\"> MBE - Shipments
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/sport/adminsport/index.php/improve/payment/payment_methods?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                            ";
        // line 877
        echo "  
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/sport/adminsport/index.php/improve/payment/payment_methods?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/sport/adminsport/index.php/improve/payment/preferences?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/sport/adminsport/index.php/improve/international/localization/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                             ";
        // line 908
        echo " <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/sport/adminsport/index.php/improve/international/localization/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/sport/adminsport/index.php/improve/international/zones/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/sport/adminsport/index.php/improve/international/taxes/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/sport/adminsport/index.php/improve/international/trans";
        // line 937
        echo "lations/settings?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"139\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=ad510e6b3f8842120ea35f9830b6cf66\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-139\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=ad510e6b3f8842120ea35f9830b6cf66\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                            ";
        // line 969
        echo "  <li class=\"link-leveltwo\" data-submenu=\"149\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminPsfacebookModule&amp;token=fb9d22efbdd854a038ef13e89d0bfeac\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/sport/adminsport/index.php/configure/shop/preferences/preferences?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
              ";
        // line 1005
        echo "                  <a href=\"/sport/adminsport/index.php/configure/shop/preferences/preferences?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/sport/adminsport/index.php/configure/shop/order-preferences/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/sport/adminsport/index.php/configure/shop/product-preferences/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/sport/adminsport/index.php/configure/shop/customer-preferences/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                            ";
        // line 1034
        echo "  
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/sport/adminsport/index.php/configure/shop/contacts/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/sport/adminsport/index.php/configure/shop/seo-urls/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminSearchConf&amp;token=04534bc55d0631307a87226125c0a2d1\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/sport/adminsport/index.php/configure/advanced/system-information/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTB";
        // line 1064
        echo "HSk\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/sport/adminsport/index.php/configure/advanced/system-information/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/sport/adminsport/index.php/configure/advanced/performance/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/sport/adminsport/";
        // line 1094
        echo "index.php/configure/advanced/administration/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/sport/adminsport/index.php/configure/advanced/emails/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/sport/adminsport/index.php/configure/advanced/import/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/sport/adminsport/index.php/configure/advanced/employees/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-sub";
        // line 1125
        echo "menu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/sport/adminsport/index.php/configure/advanced/sql-requests/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/sport/adminsport/index.php/configure/advanced/logs/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/sport/adminsport/index.php/configure/advanced/webservice-keys/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/sport/adminsport/index.php/configure/advanced/feature-flags/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              ";
        // line 1152
        echo "</li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/sport/adminsport/index.php/configure/advanced/security/?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<div class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Customization</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/sport/adminsport/index.php/modules/improve/design/logos?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" aria-current=\"page\">Logos</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Logos          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help\" href=\"https://help.prestashop-project.org/en/doc/AdminPsxDesignLogos?version=8.0.1&amp;country=en\" title=\"Help\">
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                               ";
        // line 1213
        echo "                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     <li class=\"nav-item\">
                    <a href=\"/sport/adminsport/index.php/modules/improve/design/themes?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" id=\"subtab-AdminPsxDesignThemeGeneral\" class=\"nav-link tab \" data-submenu=\"135\">
                      Themes
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/sport/adminsport/index.php/modules/improve/design/logos?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" id=\"subtab-AdminPsxDesignLogos\" class=\"nav-link tab active current\" data-submenu=\"136\">
                      Logos
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/sport/adminsport/index.php/modules/improve/design/colors?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" id=\"subtab-";
        // line 1230
        echo "AdminPsxDesignColors\" class=\"nav-link tab \" data-submenu=\"137\">
                      Colors
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/sport/adminsport/index.php/modules/improve/design/fonts?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" id=\"subtab-AdminPsxDesignFonts\" class=\"nav-link tab \" data-submenu=\"138\">
                      Fonts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-flo";
        // line 1249
        echo "ating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help\" href=\"https://help.prestashop-project.org/en/doc/AdminPsxDesignLogos?version=8.0.1&amp;country=en\" title=\"Help\">
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1276
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/sport/adminsport/index.php?controller=AdminDashboard&amp;token=08ada152a8568aa891649e30c46b9b7d\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Connect to Addons marketplace</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Link your shop to your Addons account to automatically receive important updates for the modules you purchased. Don&#039;t have an account yet?
                      <a href=\"https://authv2.prestashop.com/register?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Sign up now</a>
                  </p>
                  <p>
                      If you created your account using Google, please follow the forgotten password procedure of Addons Marketplace to create your password :
                      <a href=\"https://authv2.prestashop.com/password/request\" target=\"_blank\">Re";
        // line 1319
        echo "set your password</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/sport/adminsport/index.php/modules/mbo/addons/login?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Email address</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Password</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Remember me
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Let&#039;s go!</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://authv2.prestashop.com/password/request\" target=\"_blank\">Forgot your password?</a>
                </p>
              </div>
          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
";
        // line 1359
        echo "      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirm logout</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    You are about to log out your Addons account. You might miss important updates of Addons you&#039;ve bought.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Cancel\">
          <a class=\"btn btn-primary uppercase\" href=\"/sport/adminsport/index.php/modules/mbo/addons/logout?_token=5tD5Uh9TQxV6as8bMXe5wuWi2o_xR0f1UTCFwlTBHSk\" id=\"module-modal-addons-logout-ack\">Yes, log out</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1388
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 94
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1276
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1388
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__da24cc8af815e93c50bb47b4a4cc3aa1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1565 => 1388,  1544 => 1276,  1533 => 94,  1524 => 1388,  1493 => 1359,  1451 => 1319,  1402 => 1276,  1373 => 1249,  1352 => 1230,  1333 => 1213,  1270 => 1152,  1241 => 1125,  1208 => 1094,  1176 => 1064,  1144 => 1034,  1113 => 1005,  1075 => 969,  1041 => 937,  1010 => 908,  977 => 877,  945 => 847,  913 => 817,  880 => 786,  848 => 756,  815 => 725,  786 => 698,  747 => 661,  716 => 632,  682 => 600,  647 => 567,  617 => 539,  585 => 509,  551 => 477,  519 => 447,  466 => 396,  443 => 375,  393 => 327,  342 => 278,  291 => 229,  247 => 187,  229 => 171,  188 => 132,  145 => 94,  120 => 71,  90 => 43,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__da24cc8af815e93c50bb47b4a4cc3aa1", "");
    }
}
