	<ul class="sidenav openSidebar" id="menu-side">
      	<li>
	        <div class="user-view">
	        	<div class="background grey darken-4">
	        	</div>
	         	<a href="https://compitweb.com/administrador/dra/" class="aside_logo">
					<img src="https://compitweb.com/img/logo/compitweb-logo-min.png" alt="Compit Web">
					<p class="white-text">Compit Web</p>
				</a>
	        	<a href="#"> <span class="name white-text"><?php echo $_SESSION['nombre-adm']; ?></span> </a>
	         	<a href="#"> <span class="email white-text"><?php echo $_SESSION['correo-adm']; ?></span> </a>
	        </div>
    	</li>
    	<li> <a href="./account/"> <i class="material-icons">cloud</i> Cuenta </a> </li>
    	<li> <div class="divider"></div> </li>

		<li><a href="./account/proyecto/iniciar/"><i class="material-icons">cloud</i>Trabajos</a></li>
		
		<li><a href="./account/proyecto/proceso"><i class="material-icons">cloud</i>Pagos</a></li>
		
		<li><a href="./account/consulta/precios/"><i class="material-icons">cloud</i>Noticias</a></li>

    </ul>