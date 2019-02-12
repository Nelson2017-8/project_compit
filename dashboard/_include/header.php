<?php

  $aCuenta = dominio."/dashboard/cuenta/";
  $aPanel = dominio."/dashboard/";
  $aStartProject = dominio."/dashboard/proyecto/iniciar/";
  $aProject = dominio."/dashboard/proyecto/proceso/";
  $aPrecios = dominio."/dashboard/consulta/precios/";
  $aConsultaPresupuesto = dominio."/dashboard/consulta/presupuesto/";

  $aServicio = dominio."/dashboard/services/";
  $aServicioDeveloperWeb = dominio."/dashboard/services/developerweb/";
  $aServicioDesing = dominio."/dashboard/services/desing/";
  $aServicioMantenimiento = dominio."/dashboard/services/mantenimiento/";
  $aServicoMarketing = dominio."/dashboard/services/marketing";
  $aServicioDeveloperMobile = dominio."/dashboard/services/developermobile/";
  $aServicioSeo = dominio."/dashboard/services/seo/";

  $aCarrito = dominio."/dashboard/shopping_cart/";
  $aCarritoDeveloperWeb = dominio."/dashboard/shopping_cart/?developerWeb";
  $aCarritoDesing = dominio."/dashboard/shopping_cart/?desing";
  $aCarritoDeveloperMobile=  dominio."/dashboard/shopping_cart/?developermobile";
  $aCarritoMantenimiento=  dominio."/dashboard/shopping_cart/?mantenimiento";
  $aCarritoMarketing = dominio."/dashboard/shopping_cart/?marketing";
  $aCarritoSeo =dominio."/dashboard/shopping_cart/?seo";



  $aCerrarSession = dominio."/process/cerrar_session.php";
 ?>


    <header>
      <div class="navbar-fixed">
        <nav class="navbar white">
          <div class="nav-wrapper">
          	<a href="<?php echo $aCuenta; ?>" class="brand-logo grey-text text-darken-4">
          		<?php echo $_SESSION['nombre']; ?>
          	</a>
            <ul id="nav-mobile" class="right">
              <li class="hide-on-med-and-down">
              	<a href="<?php echo $aStartProject; ?>">Comenzar Proyecto</a></li>
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
        	<a href="<?php echo $aPanel; ?>" class="logo-container">CompitWeb
        		<i class="left">
        			<img class="img-icons" src="<?php echo dominio; ?>/img/logo/compitweb-logo-min.png" alt="">
        		</i>
        	</a>
        </li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold waves-effect active">
            	<a class="collapsible-header">Paginas
            		<i class="material-icons chevron">chevron_left</i>
            	</a>
              <div class="collapsible-body">
                <ul>
                  <li>
                  	<a href="<?php echo $aPanel; ?>" class="waves-effect active">Panel de Control
                  		<i class="material-icons">web</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="<?php echo $aPrecios; ?>" class="waves-effect">Lista de Precios
                  		<i class="material-icons">list</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="<?php echo $aProject; ?>" class="waves-effect">Proyecto
                  		<i class="material-icons">dashboard</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="#" class="waves-effect">Chat
                  		<i class="material-icons">chat</i>
                  	</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="bold waves-effect">
            	<a class="collapsible-header">Servicios
            		<i class="material-icons chevron">chevron_left</i>
            	</a>
              <div class="collapsible-body">
                <ul>
                  <li>
                    <a href="<?php echo $aServicio; ?>" class="waves-effect">Servicios Disponibles
                      <i class="material-icons">plus_one</i>
                    </a>
                  </li>
                  <li>
                  	<a href="<?php echo $aServicioDeveloperWeb; ?>" class="waves-effect">Desarrollo web
                  		<i class="material-icons">code</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="<?php echo $aServicioDeveloperMobile; ?>" class="waves-effect">Desarrollo Móvil
                  		<i class="material-icons">android</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="<?php echo $aServicoMarketing; ?>" class="waves-effect">Marketing Digital
                  		<i class="material-icons">feedback</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="<?php echo $aServicioDesing; ?>" class="waves-effect">Diseño Gráfico
                  		<i class="material-icons">palette</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="<?php echo $aServicioMantenimiento; ?>" class="waves-effect">Mantenimiento
                  		<i class="material-icons">build</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="<?php echo $aServicioSeo; ?>" class="waves-effect">SEO
                  		<i class="material-icons">search</i>
                  	</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="bold waves-effect">
            	<a class="collapsible-header">Carrito
            		<i class="material-icons chevron">chevron_left</i>
            	</a>
              <div class="collapsible-body">
                <ul>
                   <li>
                    <a href="<?php echo $aCarrito; ?>" class="waves-effect">Mi Carrito de Compras
                      <i class="material-icons">shopping_cart</i>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $aCarritoDeveloperWeb; ?>" class="waves-effect">Desarrollo web
                      <i class="material-icons">code</i>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $aCarritoDeveloperMobile; ?>" class="waves-effect">Desarrollo Móvil
                      <i class="material-icons">android</i>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $aCarritoMarketing; ?>" class="waves-effect">Marketing Digital
                      <i class="material-icons">feedback</i>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $aCarritoDesing; ?>" class="waves-effect">Diseño Gráfico
                      <i class="material-icons">palette</i>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $aCarritoMantenimiento; ?>" class="waves-effect">Mantenimiento
                      <i class="material-icons">build</i>
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo $aCarritoSeo; ?>" class="waves-effect">SEO
                      <i class="material-icons">search</i>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="bold waves-effect">
            	<a class="collapsible-header">Cuenta
            		<i class="material-icons chevron">chevron_left</i>
            	</a>
              <div class="collapsible-body">
                <ul>
                  <li>
                  	<a href="<?php echo $aCerrarSession; ?>" class="waves-effect">Salir
                  		<i class="material-icons">person</i>
                  	</a>
                  </li>
                  <li>
                  	<a href="<?php echo $aCuenta; ?>" class="waves-effect">Configuración
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
