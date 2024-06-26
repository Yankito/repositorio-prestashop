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

/* __string_template__853a0e5c5e8351fd4498b0f9c4a5507a */
class __TwigTemplate_29c4714a3e41c8937db15eeaf7104f8f extends Template
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
<html lang=\"es\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/img/app_icon.png\" />

<title>Tema y logotipo > Tema • yanko shop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminThemes';
    var iso_user = 'es';
    var lang_is_rtl = '0';
    var full_language_code = 'es';
    var full_cldr_language_code = 'es-ES';
    var country_iso_code = 'CL';
    var _PS_VERSION_ = '8.1.6';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your store.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'A new customer registered on your store.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'A new message was posted on your store.';
    var see_msg = 'Leer este mensaje';
    var token = 'ac67798ce1b119057ba83cdaa7a2c198';
    var currentIndex = 'index.php?controller=AdminThemes';
    var employee_token = '315dd0dd3dc32a066a7942482d58750f';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '1';
    var admin_modules_link = '/admin706jfsekuzc3vnpea2x/index.php/improve/modules/manage?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o';
    var admin_notification_get_link = '/admin706jfsekuzc3vnpea2x/index.php/common/notifications?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o';
    var admin_notification_push_link = adminNotificationPushLink = '/admin706jfsekuzc3vnpea2x/index.php/common/notifications/ack?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o';
    var tab_modules_list = '';
    var update_success_msg = 'Actualizac";
        // line 42
        echo "ión correcta';
    var search_product_msg = 'Buscar un producto';
  </script>



<link
      rel=\"preload\"
      href=\"/admin706jfsekuzc3vnpea2x/themes/new-theme/public/2d8017489da689caedc1.preload..woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/admin706jfsekuzc3vnpea2x/themes/new-theme/public/create_product_default_theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin706jfsekuzc3vnpea2x/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/admin706jfsekuzc3vnpea2x/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/admin706jfsekuzc3vnpea2x\\/\";
var baseDir = \"\\/\";
var changeFormLanguageUrl = \"\\/admin706jfsekuzc3vnpea2x\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\";
var currency = {\"iso_code\":\"CLP\",\"sign\":\"\$\",\"name\":\"Peso chileno\",\"format\":null};
var currency_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"CLP\",\"currencySymbol\":\"\$\",\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.00\\u00a0\\u00a4\",\"negativePattern\":\"-#,##0.00\\u00a0\\u00a4\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\",\",\".\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"";
        // line 67
        echo "primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/admin706jfsekuzc3vnpea2x/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/js/admin.js?v=8.1.6\"></script>
<script type=\"text/javascript\" src=\"/admin706jfsekuzc3vnpea2x/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/js/tools.js?v=8.1.6\"></script>
<script type=\"text/javascript\" src=\"/admin706jfsekuzc3vnpea2x/themes/new-theme/public/create_product.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/admin706jfsekuzc3vnpea2x/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/admin706jfsekuzc3vnpea2x/index.php/common/notifications?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o',
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
  class=\"lang-es adminthemes\"
  data-base-url=\"/admin706jfsekuzc3vnpea2x/index.php\"  data-token=\"7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminDashboard&amp;token=91a849c71b75df619551522276c7d102\"></a>
      <span id=\"shop_version\">8.1.6</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=37b5f88a112616e812119b1bde8916b3\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php/improve/modules/manage?token=23c613548435fe99be73944357680861\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php/sell/catalog/categories/new?token=23c613548435fe99be73944357680861\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link new-product-button\"
         href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php/sell/catalog/products-v2/create?token=23c613548435fe99be73944357680861\"
       ";
        // line 137
        echo "          data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=3f70564e3416a3afbea87da2d938d430\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link \"
         href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php/sell/orders?token=23c613548435fe99be73944357680861\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"92\"
        data-icon=\"icon-AdminThemesParent\"
        data-method=\"add\"
        data-url=\"index.php/improve/design/themes/?-o\"
        data-post-link=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminQuickAccesses&token=2936e5f0a9402c833ef89cb1da418600\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Tema y logotipo - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminQuickAccesses&token=2936e5f0a9402c833ef89cb1da418600\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
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
      action=\"/admin706jfsekuzc3vnpea2x/index.php?controller=AdminSearch&amp;token=ba9b8610eca259ec7dded02509e02fd4\"
      role=\"search\">
  <input type=\"hidden\"";
        // line 177
        echo " name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-s";
        // line 192
        echo "hopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
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
            <button class=\"component-search-cancel d-none\">Cancelar</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Acceso rápido</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=37b5f88a112616e812119b1bde8916b3\"
             data-item=\"Evaluación del catálogo\"
    >Evaluación del catálogo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php/improve/modules/manage?token=23c613548435fe99be73944357680861\"
             data-item=\"Módulos instalados\"
    >Módulos instalados</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php/sell/catalog/categories/new?token=23c613548435fe99be73944357680861\"
             data-item=\"Nueva categoría\"
    >Nueva categoría</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php/sell/catalog/products-v2/create?token=23c613548435fe99be73944357680861\"
             data-item=\"Nuevo\"
    >Nuevo</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminCar";
        // line 229
        echo "tRules&amp;addcart_rule&amp;token=3f70564e3416a3afbea87da2d938d430\"
             data-item=\"Nuevo cupón de descuento\"
    >Nuevo cupón de descuento</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php/sell/orders?token=23c613548435fe99be73944357680861\"
             data-item=\"Pedidos\"
    >Pedidos</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"163\"
      data-icon=\"icon-AdminThemesParent\"
      data-method=\"add\"
      data-url=\"index.php/improve/design/themes/?-o\"
      data-post-link=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminQuickAccesses&token=2936e5f0a9402c833ef89cb1da418600\"
      data-prompt-text=\"Por favor, renombre este acceso rápido:\"
      data-link=\"Tema y logotipo - Lista\"
    >
      <i class=\"material-icons\">add_circle</i>
      Añadir página actual al Acceso Rápido
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminQuickAccesses&token=2936e5f0a9402c833ef89cb1da418600\">
    <i class=\"material-icons\">settings</i>
    Administrar accesos rápidos
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://35.184.79.241/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-t";
        // line 274
        echo "oggle=\"dropdown\">
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
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
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
              Clientes<span id=\"_nb_new_customers_\"></span>
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
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=b59f5f7c13aa883d212c1903bd334c2a\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultán";
        // line 324
        echo "dose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
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
  </";
        // line 375
        echo "div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://35.184.79.241/img/pr/default.jpg\" alt=\"Yanko\" /></span>
        <span class=\"employee_profile\">Bienvenido de nuevo, Yanko</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/employees/1/edit?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>

    
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminLogin&amp;logout=1&amp;token=6b3b1b724368aabd2ea9806fb5f461c7\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/employees/toggle-navigation?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminDashboard&amp;token=91a849c71b75df619551522276c7d102\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.1.6</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://35.184.79.241/adm";
        // line 421
        echo "in706jfsekuzc3vnpea2x/index.php?controller=AdminDashboard&amp;token=91a849c71b75df619551522276c7d102\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/orders/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/orders/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
          ";
        // line 459
        echo "                    
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/orders/invoices/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/orders/credit-slips/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/orders/delivery-slips/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminCarts&amp;token=b59f5f7c13aa883d212c1903bd334c2a\" class=\"link\"> Carritos de compra
                        ";
        // line 487
        echo "        </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/catalog/products?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/catalog/products?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/catalog/categories?";
        // line 519
        echo "_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/catalog/monitoring/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Monitoreo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminAttributesGroups&amp;token=aa8acf5a0dfb39a7ac9f6d45e0d292df\" class=\"link\"> Atributos y Características
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/catalog/brands/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                  ";
        // line 550
        echo "            <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/attachments/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminCartRules&amp;token=3f70564e3416a3afbea87da2d938d430\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/stocks/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/customers/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circ";
        // line 579
        echo "le</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/customers/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/addresses/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://35.184.79.241/admin70";
        // line 611
        echo "6jfsekuzc3vnpea2x/index.php?controller=AdminCustomerThreads&amp;token=58bd5e2a7ebc063803b56b2c52889804\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Servicio al Cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminCustomerThreads&amp;token=58bd5e2a7ebc063803b56b2c52889804\" class=\"link\"> Servicio al Cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/sell/customer-service/order-messages/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Mensajes de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\"";
        // line 640
        echo " data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminReturn&amp;token=d985b38b114a05165d7cb55d6d02a3bb\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminStats&amp;token=37b5f88a112616e812119b1bde8916b3\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/modules/manage?_token=7Cr_u_S8hfWdv";
        // line 677
        echo "7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/modules/manage?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Administrador de módulos
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/design/themes/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"m";
        // line 707
        echo "aterial-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"126\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/design/themes/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/design/mail_theme/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/design/cms-pages/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                 ";
        // line 736
        echo " 
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/design/modules/positions/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminImages&amp;token=6d99a870f70f49921d6d97d3964644ce\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"118\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/modules/link-widget/list?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2";
        // line 767
        echo "x/index.php?controller=AdminCarriers&amp;token=58070f7dc09da424cd7c19e4b54cb7a0\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminCarriers&amp;token=58070f7dc09da424cd7c19e4b54cb7a0\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/shipping/preferences/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
          ";
        // line 799
        echo "        <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/payment/payment_methods?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/payment/payment_methods?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/payment/preferences?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
  ";
        // line 828
        echo "                                            
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/international/localization/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/international/localization/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/international/zones/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Ubicaciones Geográficas
                     ";
        // line 856
        echo "           </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/international/taxes/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/international/translations/settings?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/shop/preferences/preferences?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\">
                      <i class=\"material-i";
        // line 893
        echo "cons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/shop/preferences/preferences?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Configuración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/shop/order-preferences/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Configuración de pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/shop/p";
        // line 922
        echo "roduct-preferences/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/shop/customer-preferences/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Configuración de clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/shop/contacts/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/shop/seo-urls/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                      ";
        // line 952
        echo "      
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminSearchConf&amp;token=881e778bc268443104bb27fd3adbbaef\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/system-information/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/system-information/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Información
                           ";
        // line 980
        echo "     </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/performance/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/administration/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/emails/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/admin706jfsekuzc3vnp";
        // line 1011
        echo "ea2x/index.php/configure/advanced/import/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/employees/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/sql-requests/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/logs/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Registros/Logs
                                </a>
                              </li>

                                                                                  
                              
                                                            
                  ";
        // line 1042
        echo "            <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/webservice-keys/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                                                                                    
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/feature-flags/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Características nuevas y experimentales
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"111\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/admin706jfsekuzc3vnpea2x/index.php/configure/advanced/security/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" class=\"link\"> Security
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
        ";
        // line 1080
        echo "              <li class=\"breadcrumb-item\">Tema y logotipo</li>
          
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Tema y logotipo &gt; Tema          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add\"
                  href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/design/themes/import?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\"                  title=\"Añadir nuevo tema\"                                  >
                  <i class=\"material-icons\">add</i>                  Añadir nuevo tema
                </a>
                                                                        <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-export\"
                  href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/design/themes/export?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\"                  title=\"Exportar tema actual\"                                  >
                  <i class=\"material-icons\">cloud_download</i>                  Exportar tema actual
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/admin706jfsekuzc3vnpea2x/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminThemes%253Fversion%253D8.1.6%2526country%253Des/Ayuda?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
     ";
        // line 1117
        echo "                               </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/design/themes/?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\" id=\"subtab-AdminThemes\" class=\"nav-link tab active current\" data-submenu=\"44\">
                      Tema y logotipo
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminPsThemeCustoConfiguration&token=608c85fef075e7a36b9fc61a4bf17bc8\" id=\"subtab-AdminPsThemeCustoConfiguration\" class=\"nav-link tab \" data-submenu=\"127\">
                      Paginas configuracion
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"na";
        // line 1143
        echo "v-item\">
                    <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminPsThemeCustoAdvanced&token=0d1f83e52865cac6dcadf396088ec0c0\" id=\"subtab-AdminPsThemeCustoAdvanced\" class=\"nav-link tab \" data-submenu=\"128\">
                      Personalización avanzada
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add\"
              href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/design/themes/import?_token=";
        // line 1163
        echo "7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\"              title=\"Añadir nuevo tema\"            >
              Añadir nuevo tema
              <i class=\"material-icons\">add</i>            </a>
                                        <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-export\"
              href=\"/admin706jfsekuzc3vnpea2x/index.php/improve/design/themes/export?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\"              title=\"Exportar tema actual\"            >
              Exportar tema actual
              <i class=\"material-icons\">cloud_download</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/admin706jfsekuzc3vnpea2x/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fes%252Fdoc%252FAdminThemes%253Fversion%253D8.1.6%2526country%253Des/Ayuda?_token=7Cr_u_S8hfWdv7Mz5TROZ2TnsmhQub8bcXKe4SRDE-o\"
            >
              Ayuda
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
        // line 1197
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://35.184.79.241/admin706jfsekuzc3vnpea2x/index.php?controller=AdminDashboard&amp;token=91a849c71b75df619551522276c7d102\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1231
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

    // line 1197
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

    // line 1231
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
        return "__string_template__853a0e5c5e8351fd4498b0f9c4a5507a";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1398 => 1231,  1377 => 1197,  1366 => 102,  1357 => 1231,  1317 => 1197,  1281 => 1163,  1259 => 1143,  1231 => 1117,  1192 => 1080,  1152 => 1042,  1119 => 1011,  1086 => 980,  1056 => 952,  1024 => 922,  993 => 893,  954 => 856,  924 => 828,  893 => 799,  859 => 767,  826 => 736,  795 => 707,  763 => 677,  724 => 640,  693 => 611,  659 => 579,  628 => 550,  595 => 519,  561 => 487,  531 => 459,  491 => 421,  443 => 375,  390 => 324,  338 => 274,  291 => 229,  252 => 192,  235 => 177,  193 => 137,  153 => 102,  116 => 67,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__853a0e5c5e8351fd4498b0f9c4a5507a", "");
    }
}
