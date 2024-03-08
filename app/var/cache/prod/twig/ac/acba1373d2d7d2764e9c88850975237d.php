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

/* __string_template__7dd741b4440554753fcdc7ae8fa29054 */
class __TwigTemplate_50639593b69c9b979660142d92c5e22d extends Template
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

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Orders > Order OHSATSERP from John DOE • prestaChaves</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminOrders';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'ES';
    var _PS_VERSION_ = '8.1.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Read this message';
    var token = 'c5caaae254c1a3cbdd24016f268ab465';
    var currentIndex = 'index.php?controller=AdminOrders';
    var employee_token = '8fc0c87e35cb661c634a291336a00744';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/admin843bh7jbzf0fkgb5qui/index.php/improve/modules/manage?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc';
    var admin_notification_get_link = '/admin843bh7jbzf0fkgb5qui/index.php/common/notifications?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc';
    var admin_notification_push_link = adminNotificationPushLink = '/admin843bh7jbzf0fkgb5qui/index.php/common/notifications/ack?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc';
    var tab_modules_list = '';
    var update_success_msg = 'Updat";
        // line 42
        echo "e successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/admin843bh7jbzf0fkgb5qui/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin843bh7jbzf0fkgb5qui/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin843bh7jbzf0fkgb5qui/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin843bh7jbzf0fkgb5qui/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin843bh7jbzf0fkgb5qui\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin843bh7jbzf0fkgb5qui\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"Euro\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"EUR\",\"currencySymbol\":\"\\u20ac\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGr";
        // line 67
        echo "oupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin843bh7jbzf0fkgb5qui/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/admin843bh7jbzf0fkgb5qui/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.4\"></script>
<script type=\"text/javascript\" src=\"/admin843bh7jbzf0fkgb5qui/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin843bh7jbzf0fkgb5qui/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin843bh7jbzf0fkgb5qui/index.php/common/notifications?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 102
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminorders\"
  data-base-url=\"/admin843bh7jbzf0fkgb5qui/index.php\"  data-token=\"OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminDashboard&amp;token=f833cc5be998c13a04e4b971da2f0e60\"></a>
      <span id=\"shop_version\">8.1.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=09c67cc8e9ea43afa257a448c680b349\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php/improve/modules/manage?token=a55071c204d5513a53152c77707fd589\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php/sell/catalog/categories/new?token=a55071c204d5513a53152c77707fd589\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php/sell/catalog/products-v2/create?token=a55071c204d5513a53152c77707fd589\"
                 data-item=\"New product\"
      >Ne";
        // line 138
        echo "w product</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=62c595c658c31e72ab4146ebf61011e0\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php/sell/orders?token=a55071c204d5513a53152c77707fd589\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"68\"
        data-icon=\"icon-AdminParentOrders\"
        data-method=\"add\"
        data-url=\"index.php/sell/orders/2/view\"
        data-post-link=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminQuickAccesses&token=e561c6954db64d17b9a76ada8f341422\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Orders - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminQuickAccesses&token=e561c6954db64d17b9a76ada8f341422\">
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
      action=\"/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminSearch&amp;token=ae280a3298951844f4a71ff486a33c0a\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type";
        // line 179
        echo "=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
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
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-ico";
        // line 193
        echo "n=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
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
       href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=09c67cc8e9ea43afa257a448c680b349\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php/improve/modules/manage?token=a55071c204d5513a53152c77707fd589\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php/sell/catalog/categories/new?token=a55071c204d5513a53152c77707fd589\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php/sell/catalog/products-v2/create?token=a55071c204d5513a53152c77707fd589\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=62c595c658c31e72ab4146ebf61011e0\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"https://localhost/admin843bh7jbzf0fkgb5qui/inde";
        // line 233
        echo "x.php/sell/orders?token=a55071c204d5513a53152c77707fd589\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"29\"
      data-icon=\"icon-AdminParentOrders\"
      data-method=\"add\"
      data-url=\"index.php/sell/orders/2/view\"
      data-post-link=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminQuickAccesses&token=e561c6954db64d17b9a76ada8f341422\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Orders - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminQuickAccesses&token=e561c6954db64d17b9a76ada8f341422\">
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
    <a class=\"link\" id=\"header_shopname\" href=\"https://localhost/\" target= \"_blank\">
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
                      ";
        // line 281
        echo "    <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
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
              Have you checked your <strong><a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=f06b755bf8a4a62a0e59db3e5c25940f\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days";
        // line 331
        echo "?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
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
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"https://localhost/img/pr/default.jpg\" alt=\"David\" /></span>
        <span class=\"employee_profile\">Welcome back David</span>
      </div>

      <a class=\"dropdown-item employee-link pr";
        // line 383
        echo "ofile-link\" href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/employees/1/edit?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminLogin&amp;logout=1&amp;token=50c89c403e39f2ff8b8fe08c74b31ec6\">
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
  <span class=\"menu-collapse\" data-toggle-url=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/employees/toggle-navigation?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminDashboard&amp;token=f833cc5be998c13a04e4b971da2f0e60\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminDashboard&amp;token=f833cc5be998c13a04e4b971da2f0e60\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"2\" id=";
        // line 431
        echo "\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/orders/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/orders/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/orders/invoices/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeG";
        // line 462
        echo "c\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/orders/credit-slips/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/orders/delivery-slips/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminCarts&amp;token=f06b755bf8a4a62a0e59db3e5c25940f\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"";
        // line 496
        echo "link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/catalog/products?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/catalog/products?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/catalog/categories?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                          ";
        // line 526
        echo "    <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/catalog/monitoring/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminAttributesGroups&amp;token=2b9712e6ab2a76f193b880176dd3eb5c\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/catalog/brands/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/attachments/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Files
                                </a>
                              </li>

                             ";
        // line 555
        echo "                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminCartRules&amp;token=62c595c658c31e72ab4146ebf61011e0\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/stocks/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/customers/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                  ";
        // line 586
        echo "                          </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/customers/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/addresses/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminCustomerThreads&amp;token=e3c3ffb240afaff3083f485ba014fd7a\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs";
        // line 616
        echo "-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminCustomerThreads&amp;token=e3c3ffb240afaff3083f485ba014fd7a\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/sell/customer-service/order-messages/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminReturn&amp;token=0260675326a064f77f212b62889d7a77\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                   ";
        // line 645
        echo "           </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminStats&amp;token=09c67cc8e9ea43afa257a448c680b349\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/modules/manage?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                          ";
        // line 684
        echo "                                  </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/modules/manage?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/design/themes/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                 ";
        // line 715
        echo "             <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/design/themes/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/design/mail_theme/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/design/cms-pages/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/design/modules/positions/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Positions
                                </a>
                              </li>

                                           ";
        // line 744
        echo "                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminImages&amp;token=a0eef7be286914e6e2a1b5b89fa92ba8\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/modules/link-widget/list?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Link List
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminCarriers&amp;token=0b9d27c867425bea7955e0641449702f\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
          ";
        // line 775
        echo "                                  </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminCarriers&amp;token=0b9d27c867425bea7955e0641449702f\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/shipping/preferences/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/payment/payment_methods?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                          ";
        // line 806
        echo "                                          keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/payment/payment_methods?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/payment/preferences?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/international/localization/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Int";
        // line 836
        echo "ernational
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/international/localization/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/international/zones/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/international/taxes/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Taxes
                                </a>
       ";
        // line 865
        echo "                       </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/improve/international/translations/settings?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/shop/preferences/preferences?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                    ";
        // line 902
        echo "                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/shop/preferences/preferences?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/shop/order-preferences/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/shop/product-preferences/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/shop/customer-preferences/?_t";
        // line 930
        echo "oken=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/shop/contacts/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/shop/seo-urls/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminSearchConf&amp;token=dac13e9c8ded5e532e51d4d95e590227\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                    ";
        // line 962
        echo "                  
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/system-information/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\">
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
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/system-information/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/performance/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Performance
                                </a>
                              </li>

                           ";
        // line 991
        echo "                                                       
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/administration/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/emails/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/import/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/employees/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4x";
        // line 1019
        echo "xKxJfc9kRrSeGc\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/sql-requests/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/logs/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/webservice-keys/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
        ";
        // line 1049
        echo "                                                    
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/feature-flags/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin843bh7jbzf0fkgb5qui/index.php/configure/advanced/security/?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\" class=\"link\"> Security
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
                      <li class=\"breadcrumb-item\">Orders</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
  
        
<div class=\"title-content\">
  <h1 class=\"d-inline\">
    <strong class=\"text-muted\" data-role=\"order-id\">#2</strong>
    <strong data-role=\"order-reference\">OHSATSERP</strong>
  </h1>

  <p class=\"lead d-inline\">
    from

          John
      DOE
      </p>

  <span class=\"badge rounded badge-dark ml-2 mr-2 font-size-100\">
    €657.95
  </span>

  <p class=\"lead d-inline\">
    03/06/2024
    <span class=\"text-muted\">
      at

      10:19:42
    </span>
  </p>
</div>

  

      
  ";
        // line 1120
        echo "      <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                        
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin843bh7jbzf0fkgb5qui/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminOrders%253Fversion%253D8.1.4%2526country%253Den/Help?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
        
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin843bh7jbzf0fkgb5qui/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminOrders%253Fversion%253D8.1.4%2526country%253Den/Help?_token=OhYFRljKTrt7TxQZ6SOoppBlJxb4xxKxJfc9kRrSeGc\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1176
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
  <a href=\"https://localhost/admin843bh7jbzf0fkgb5qui/index.php?controller=AdminDashboard&amp;token=f833cc5be998c13a04e4b971da2f0e60\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1210
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 102
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1176
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

    // line 1210
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
        return "__string_template__7dd741b4440554753fcdc7ae8fa29054";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1371 => 1210,  1350 => 1176,  1339 => 102,  1330 => 1210,  1290 => 1176,  1232 => 1120,  1159 => 1049,  1127 => 1019,  1097 => 991,  1066 => 962,  1032 => 930,  1002 => 902,  963 => 865,  932 => 836,  900 => 806,  867 => 775,  834 => 744,  803 => 715,  770 => 684,  729 => 645,  698 => 616,  666 => 586,  633 => 555,  602 => 526,  570 => 496,  534 => 462,  501 => 431,  451 => 383,  397 => 331,  345 => 281,  295 => 233,  253 => 193,  237 => 179,  194 => 138,  153 => 102,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__7dd741b4440554753fcdc7ae8fa29054", "");
    }
}
