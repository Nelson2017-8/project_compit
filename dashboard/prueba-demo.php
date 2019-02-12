<?php
    require_once "../process/dominio.php";
    require_once "../process/procesos.php";
  	require_once "../process/verificarUsuario.php";
  	$verySession->noLogeado();
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <title>Compit Web</title>
    <?php require_once "./_include/head_materialize.php"; ?>

    <link rel="stylesheet" href="prueba-demo.css">
    <!-- Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<style media="all">.additional-checkout-button{border:0 !important;border-radius:5px !important;display:inline-block;margin:0 0 10px;padding:0 24px !important;max-width:100%;min-width:150px !important;line-height:44px !important;text-align:center !important}.additional-checkout-button+.additional-checkout-button{margin-left:10px}.additional-checkout-button:last-child{margin-bottom:0}.additional-checkout-button span{font-size:14px !important}.additional-checkout-button img{display:inline-block !important;height:1.3em !important;margin:0 !important;vertical-align:middle !important;width:auto !important}@media (max-width: 500px){.additional-checkout-button{display:block;margin-left:0 !important;padding:0 10px !important;width:100%}}.additional-checkout-button--apple-pay{background-color:#000 !important;color:#fff !important;display:none;font-family:-apple-system, Helvetica Neue, sans-serif !important;min-width:150px !important;white-space:nowrap !important}.additional-checkout-button--apple-pay:hover,.additional-checkout-button--apple-pay:active,.additional-checkout-button--apple-pay:visited{color:#fff !important;text-decoration:none !important}.additional-checkout-button--apple-pay .additional-checkout-button__logo{background:-webkit-named-image(apple-pay-logo-white) center center no-repeat !important;background-size:auto 100% !important;display:inline-block !important;vertical-align:middle !important;width:3em !important;height:1.3em !important}@media (max-width: 500px){.additional-checkout-button--apple-pay{display:none}}.additional-checkout-button--google-pay{line-height:0 !important;padding:0 !important;border-radius:unset !important;width:80px !important}@media (max-width: 500px){.additional-checkout-button--google-pay{width:100% !important}}.gpay-iframe{height:44px !important;width:100%  !important;cursor:pointer;vertical-align:middle !important}.additional-checkout-button--paypal-express{background-color:#ffc439 !important}.additional-checkout-button--paypal,.additional-checkout-button--venmo{vertical-align:top;line-height:0 !important;padding:0 !important}.additional-checkout-button--amazon{background-color:#fad676 !important;position:relative !important}.additional-checkout-button--amazon .additional-checkout-button__logo{-webkit-transform:translateY(4px) !important;transform:translateY(4px) !important}.additional-checkout-button--amazon .alt-payment-list-amazon-button-image{max-height:none !important;opacity:0 !important;position:absolute !important;top:0 !important;left:0 !important;width:100% !important;height:100% !important}.additional-checkout-button-visually-hidden{border:0 !important;clip:rect(0, 0, 0, 0) !important;clip:rect(0 0 0 0) !important;width:1px !important;height:1px !important;margin:-2px !important;overflow:hidden !important;padding:0 !important;position:absolute !important}
</style>

</head>
<body class="has-fixed-sidenav">
    <header>
      <div class="navbar-fixed">
        <nav class="navbar white">
          <div class="nav-wrapper">
          	<a href="#" class="brand-logo grey-text text-darken-4">
          		<?php echo $_SESSION['nombre']; ?>
          	</a>
            <ul id="nav-mobile" class="right">
              <li class="hide-on-med-and-down">
              	<a href="/products/admin">Comenzar Proyecto</a></li>
              <li>
              	<a href="#" data-target="dropdown1" class="dropdown-trigger waves-effect">
              		<i class="material-icons">notifications</i></a>
              </li>
              <li>
              	<a href="#" data-target="chat-dropdown" class="dropdown-trigger waves-effect">
              		<i class="material-icons">settings</i></a>
              </li>
            </ul>
            <a href="#" data-target="sidenav-left" class="sidenav-trigger left">
            	<i class="material-icons black-text">menu</i>
            </a>
          </div>
        </nav>
      </div>
      <ul id="sidenav-left" class="sidenav sidenav-fixed">
        <li>
        	<a href="/pages/admin-dashboard" class="logo-container">CompitWeb
        		<i class="left">
        			<img class="img-icons" src="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png" alt="">
        		</i>
        	</a>
        </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold waves-effect active">
            	<a class="collapsible-header">Pages
            		<i class="material-icons chevron">chevron_left</i>
            	</a>
              <div class="collapsible-body">
                <ul>
                  <li>
                  	<a href="/pages/admin-dashboard" class="waves-effect active">Dashboard
                  		<i class="material-icons">web</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="/pages/admin-fixed-chart" class="waves-effect">Fixed Chart
                  		<i class="material-icons">list</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="/pages/admin-grid" class="waves-effect">Grid
                  		<i class="material-icons">dashboard</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="/pages/admin-chat" class="waves-effect">Chat
                  		<i class="material-icons">chat</i>
                  	</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="bold waves-effect">
            	<a class="collapsible-header">Charts
            		<i class="material-icons chevron">chevron_left</i>
            	</a>
              <div class="collapsible-body">
                <ul>
                  <li>
                  	<a href="/pages/admin-line-charts" class="waves-effect">Line Charts
                  		<i class="material-icons">show_chart</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="/pages/admin-bar-charts" class="waves-effect">Bar Charts
                  		<i class="material-icons">equalizer</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="/pages/admin-area-charts" class="waves-effect">Area Charts
                  		<i class="material-icons">multiline_chart</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="/pages/admin-doughnut-charts" class="waves-effect">Doughnut Charts
                  		<i class="material-icons">pie_chart</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="/pages/admin-financial-charts" class="waves-effect">Financial Charts
                  		<i class="material-icons">euro_symbol</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="/pages/admin-interactive-charts" class="waves-effect">Interactive Charts
                  		<i class="material-icons">touch_app</i>
                  	</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="bold waves-effect">
            	<a class="collapsible-header">Tables
            		<i class="material-icons chevron">chevron_left</i>
            	</a>
              <div class="collapsible-body">
                <ul>
                  <li>
                  	<a href="/pages/admin-fullscreen-table" class="waves-effect">Fullscreen with Chart
                  		<i class="material-icons">show_chart</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="/pages/admin-table-custom-elements" class="waves-effect">Table with Custom Elements
                  		<i class="material-icons">settings</i>
                  	</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="bold waves-effect">
            	<a class="collapsible-header">Calendar
            		<i class="material-icons chevron">chevron_left</i>
            	</a>
              <div class="collapsible-body">
                <ul>
                  <li>
                  	<a href="/pages/admin-calendar" class="waves-effect">Calendar
                  		<i class="material-icons">cloud</i>
                  	</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="bold waves-effect">
            	<a class="collapsible-header">Headers
            		<i class="material-icons chevron">chevron_left</i>
            	</a>
              <div class="collapsible-body">
                <ul>
                  <li>
                  	<a href="/pages/admin-header-tabbed" class="waves-effect">Tabbed
                  		<i class="material-icons">tab</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="/pages/admin-header-metrics" class="waves-effect">Metrics
                  		<i class="material-icons">web</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="/pages/admin-header-search" class="waves-effect">Search
                  		<i class="material-icons">search</i>
                  	</a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="bold waves-effect">
            	<a class="collapsible-header">Account
            		<i class="material-icons chevron">chevron_left</i>
            	</a>
              <div class="collapsible-body">
                <ul>
                  <li>
                  	<a href="/pages/admin-log-in" class="waves-effect">Log In
                  		<i class="material-icons">person</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="/pages/admin-settings" class="waves-effect">Settings
                  		<i class="material-icons">settings</i>
                  	</a>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </li>
      </ul>

      <div id="dropdown1" class="dropdown-content notifications">
        <div class="notifications-title">notifications</div>
        <div class="card">
          <div class="card-content"><span class="card-title">Joe Smith made a purchase</span>
            <p>Content</p>
          </div>
          <div class="card-action"><a href="#">view</a><a href="#">dismiss</a></div>
        </div>
        <div class="card">
          <div class="card-content"><span class="card-title">Daily Traffic Update</span>
            <p>Content</p>
          </div>
          <div class="card-action"><a href="#">view</a><a href="#">dismiss</a></div>
        </div>
        <div class="card">
          <div class="card-content"><span class="card-title">New User Joined</span>
            <p>Content</p>
          </div>
          <div class="card-action"><a href="#">view</a><a href="#">dismiss</a></div>
        </div>
      </div>
      <div id="chat-dropdown" class="dropdown-content dropdown-tabbed">
        <ul class="tabs tabs-fixed-width">
          <li class="tab col s3"><a href="#settings">Settings</a></li>
          <li class="tab col s3"><a href="#friends" class="active">Friends</a></li>
        </ul>
        <div id="settings" class="col s12">
          <div class="settings-group">
            <div class="setting">Night Mode
              <div class="switch right">
                <label>
                  <input type="checkbox"><span class="lever"></span>
                </label>
              </div>
            </div>
            <div class="setting">Beta Testing
              <label class="right">
                <input type="checkbox"><span></span>
              </label>
            </div>
          </div>
        </div>
        <div id="friends" class="col s12">
          <ul class="collection flush">
            <li class="collection-item avatar">
              <div class="badged-circle online"><img src="<?php echo dominio; ?>/img/people/portrait1.jpg" alt="avatar" class="circle"></div><span class="title">Jane Doe</span>
              <p class="truncate">Lo-fi you probably haven't heard of them</p>
            </li>
            <li class="collection-item avatar">
              <div class="badged-circle"><img src="<?php echo dominio; ?>/img/people/portrait2.jpg" alt="avatar" class="circle"></div><span class="title">John Chang</span>
              <p class="truncate">etsy leggings raclette kickstarter four dollar toast</p>
            </li>
            <li class="collection-item avatar">
              <div class="badged-circle"><img src="<?php echo dominio; ?>/img/people/portrait3.jpg" alt="avatar" class="circle"></div><span class="title">Lisa Simpson</span>
              <p class="truncate">Raw denim fingerstache food truck chia health goth synth</p>
            </li>
          </ul>
        </div>
      </div>
    </header>



	<script src="js/2.1.1-jquery.min.js"></script>
	<script src="js/2.19.2-moment.min.js"></script>
	<script src="js/jquery.vmap.min.js"></script>
	<script src="js/jquery.vmap.world.js"></script>
	<script src="js/jquery.vmap.sampledata.js"></script>
	<script src="js/Chart.js"></script>
	<script src="js/Chart.Financial.js"></script>

	<script src="js/fullcalendar.min.js"></script>
	<script src="js/datatables.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/dashboard-2.min.js"></script>

  </body>
</html>