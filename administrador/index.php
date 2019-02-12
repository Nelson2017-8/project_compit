<?php  
	error_reporting(0);
	function html($typeAsc){
		?>
			<!doctype html>
				<html lang="es">
				<head>

					<meta http-equiv="X-UA-Compatible" content="IE=edge">
					<meta charset="utf-8">
					<title>Compit Web</title>
					<meta content="width=device-width, initial-scale=1.0" name="viewport">
					<meta content="author" name="Nelson Portillo">
					<link href="https://compitweb.com/img/logo/compitweb-logo-min.png" rel="icon">
					<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
					<link rel="stylesheet" href="https://compitweb.com/css/nav.css">
				    <link rel="stylesheet" href="https://compitweb.com/css/form-membresia.css">
				    <style>
				    	.form-registro{ display: none; }
				    	.registrar,.login{ padding: 10px 0 0; font-size: 14px; }
				    	.col-sm-12 {padding-bottom: 1em}
				    </style>
				</head>
				<body>
					<header>
					  <nav id="sticker" class="header-area stick navbar navbar-expand-lg bg-dark">
					    <a class="navbar-brand sticky-logo logo-header" href="https://compitweb.com/">
					      <img src="https://compitweb.com/img/logo/compitweb-logo-min.png" alt="Compit Web Business">
					      <p class="text-white">Compit Web</p>
					    </a>
					    <div class="ml-5 justify-content-center collapse navbar-collapse">
					      <ul class="navbar-nav ul_li ml-2">
					        <li><a class="text-white" href="#">Panel de Control</a></li>
					        <li><a class="text-white" href="#">Trabajos</a></li>
					        <li><a class="text-white" href="#">Pagos</a></li>
					        <li><a class="text-white" href="#">Noticias</a></li>
					      </ul>
					    </div>
					  </nav>
					</header>
				    <section class="sufee-login d-flex align-content-center flex-wrap mt-5">
				        <div class="container">
				            <div class="login-content">
				                <div class="card login-form">
				                    <form class="pb-5 login-adm">
				                    	<p class="h3 text-center pb-5 pt-3 text-primary">Formulario Admin</p>
				                        <div class="form-group">
				                            <label>Correo Electrónico</label>
				                            <div class="input-group">
				                                <div class="input-group-addon np-blue"><i class="fa fa-user"></i></div> 
				                                <input type="email" class="form-control border-left-0" name="email" placeholder="Introduzca un correo" minlength="3" required>
				                            </div>
				                        </div>
				                        <div class="form-group">
				                            <label>Contraseña</label>
				                            <div class="input-group">
				                                <div class="input-group-addon np-blue"><i class="fa fa-lock"></i></div> 
				                                <input type="password" class="form-control border-left-0" name="password" placeholder="Introduza la contraseña" minlength="5" required>
				                            </div>
				                        </div>
				                        <div class="checkbox">
				                            <input name="remember" type="checkbox" class="form-check-inline">
				                            <label class="form-check-label">Recordar me</label>
				                            <label class="pull-right"> <a href="https://compitweb.com/membresia/forgotten_password/">¿Olvide mi Contraseña?</a> </label>
				                        </div>
				                        <div id="info" class="col-sm-12 mt-2 p-0"></div>
				                        <button type="submit" class="btn np-blue np-hover-metro-blue mt-3 text-capitalize" style="padding: 12px 0px"><i class="fa fa-paper-plane mr-3"></i>Iniciar Sesión</button>
				                        <?php if ($typeAsc === '1'): ?>
				                        	<div><p class="registrar"><a href="#">Registrar Empleado</a></p></div>
				                        <?php endif ?>
				                    </form>
				                    <?php if ($typeAsc === '1'): ?>
				                        <form class="validate pb-5 form-registro" id="files-form" enctype="multipart/form-data">
				                    		<p class="h3 text-center pb-5 pt-3 text-primary">Formulario Admin</p>
					                        <div class="row"> 
					                            <div class="col-sm-12">
					                                <div class="form-group col-md-5 form-i-l"> 
					                                    <label>Nombre <span class="text-danger">*</span></label>
					                                    <div class="input-group">
					                                        <div class="input-group-addon np-blue"><i class="fa fa-user"></i></div> 
					                                        <input type="text" class="form-control border-left-0" name="nombre" placeholder="Introducaz su respuesta" minlength="3" required> 
					                                    </div> 
					                                </div> 
					                                <div class="form-group col-md-5 form-i"> 
					                                    <label>Apellido <span class="text-danger">*</span></label>
					                                    <div class="input-group">
					                                        <div class="input-group-addon np-blue"><i class="fa fa-user"></i></div>
					                                        <input type="text" name="apellido" class="form-control border-left-0" placeholder="Introducaz su respuesta" minlength="3" required>
					                                    </div> 
					                                </div>  
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Correo Electrónico <span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-envelope"></i></div>
					                                        <input type="text" class="form-control border-left-0" name="email" placeholder="Introducaz un Correo" minlength="5" required> 
					                                    </div>  
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Fecha de Nacimiento <span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-envelope"></i></div>
					                                        <input type="date" class="form-control border-left-0" name="dateNatalidad" required> 
					                                    </div> 
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Teléfono <span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-envelope"></i></div>
					                                        <input type="tel" class="form-control border-left-0" name="phone" required> 
					                                    </div> 
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>País <span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-envelope"></i></div>
					                                        <input type="text" class="form-control border-left-0" name="counter" required> 
					                                    </div> 
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Estado <span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-envelope"></i></div>
					                                        <input type="text" class="form-control border-left-0" name="estado" required> 
					                                    </div> 
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Número de Cédula o Pasaporte <span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-envelope"></i></div>
					                                        <input type="text" class="form-control border-left-0" name="ci" required> 
					                                    </div> 
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Dirección / Residencia <span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-envelope"></i></div>
					                                        <textarea class="form-control border-left-0" name="residencia" required> </textarea>
					                                    </div> 
					                                </div> 
					                            </div>


					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Departamento <span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-envelope"></i></div>
					                                        <select name="departamento" required>
					                                        	<option value="Administración">Administración</option>
					                                        	<option value="Contabilidad">Contabilidad</option>
					                                        	<option value="Recursos Humanos">Recursos Humanos</option>
					                                        	<option value="Logistica">Logistica</option>
					                                        	<option value="Marketing y Ventas">Marketing y Ventas</option>
					                                        	<option value="Diseño Gráfico">Diseño Gráfico</option>
					                                        	<option value="Programación">Programación</option>
					                                        	<option value="Diseño Web">Diseño Web</option>
					                                        </select> 
					                                    </div> 
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Profesionalidad <span class="text-danger">*</span></label>
					                                    <div class="input-group">
					                                        <div class="input-group-addon np-blue"><i class="fa fa-dollar"></i></div>
					                                        <select name="profesionalidad" class="form-control">
					                                        	<option value="Administrador">Administrador</option>
					                                        	<option value="Abogado">Abogado</option>
					                                        	<option value="Contador">Contador</option>
					                                        	<option value="Resecionista">Resecionista</option>
					                                        	<option value="Secretario /a">Secretario /a</option>
					                                        	<option value="Seguridad Informática">Seguridad Informática</option>
					                                        	<option value="Programador Escritorio">Programador Escritorio</option>
					                                        	<option value="Programador Web">Programador Web</option>
					                                        	<option value="Programador movil">Programador Móvil</option>
					                                        	<option value="Full-stack">Programador Full-stack</option>
					                                        	<option value="Diseñador Gráfico">Diseñador Gráfico</option>
					                                        	<option value="Diseñador Web">Diseñador Web</option>
					                                        	<option value="Supervior">Supervior</option>
					                                        	<option value="Vigilante (Guardía)">Vigilante (Guardía)</option>
					                                        	<option value="Transportista">Transportista</option>
					                                        	<option value="Especialista en Marketing Digital">Especialista en Marketing Digital</option>
					                                        	<option value="Analísta de Proyectos">Analísta de Proyectos</option>
					                                        	<option value="Analísta Web">Analísta Web</option>
					                                        	<option value="Especialista en SEO">Especialista en SEO</option>
					                                        	<option value="Community Manager">Community Manager</option>
					                                        	<option value="Call Center">Call Center</option>
					                                        	<option value="Project Manager">Project Manager</option>
					                                        	<option value="otros">Otros</option>
					                                        </select>  
					                                    </div> 
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                            	<div class="form-group"> 
					                            		<label>Cargo <span class="text-danger">*</span></label>
					                            		<div class="input-group">
					                                    	<div class="input-group-addon np-blue"><i class="fa fa-dollar"></i></div>
						                            		<select class="form-control" name="cargo">
						                            			<option value="Iniciante">Iniciante</option>
						                            			<option value="Bachiller">Bachiller</option>
						                            			<option value="Estudiante Universitario">Estudiante Universitario</option>
						                            			<option value="Programador becario">Programador becario</option>
						                            			<option value="Programador Junior">Programador Junior</option>
						                            			<option value="Programador semi-senior">Programador semi-senior</option>
						                            			<option value="Programador Senior">Programador Senior</option>
						                            			<option value="Analísta">Analísta</option>
						                            			<option value="Developer">Developer</option>
						                            			<option value="Supervisor">Supervisor</option>
						                            			<option value="Administradora">Administradora</option>
						                            			<option value="Secretaría">Secretaría</option>
						                            			<option value="Project Manager">Project Manager</option>
						                            			<option value="Social Media">Social Media</option>
						                            			<option value="Community Manager">Community Manager</option>
						                            			<option value="Contaduría">Contaduría</option>
						                            			<option value="Abogado">Abogado</option>
						                            			<option value="Diseñador Gráfico">Diseñador Gráfico</option>
						                            			<option value="Diseñador Web">Diseñador Web</option>
						                            			<option value="Jefe Developer">Jefe Developer</option>
						                            			<option value="Jefe de Projecto">Jefe de Projecto</option>
						                            			<option value="Jefe Analísta">Jefe Analísta</option>
						                            			<option value="Jefe de Desarrollo de Proyectos">Jefe de Desarrollo de Proyectos</option>
						                            			<option value="Otro">Otro</option>
						                            		</select>
					                            		</div>
					                            	</div>
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Habilidades Diseño Web <span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-dollar"></i></div>
					                                        <select name="frameworksDesing[]" multiple class="form-control">
																<option value="Angular">Angular</option>
																<option value="Aurelia.js">Aurelia.js</option>
																<option value="jQuery">jQuery</option>
																<option value="Vue.js">Vue.js</option>
																<option value="React">React</option>
																<option value="Node.js">Node.js</option>
																<option value="BackBone">BackBone</option>
																<option value="Dojo Toolki">Dojo Toolkit</option>
																<option value="CreateJS">CreateJS</option>
																<option value="Zepto">Zepto</option>
																<option value="Postal.js">Postal.js</option>
																<option value="Ynderscore.js">Ynderscore.js</option>
																<option value="Mustache">Mustache</option>
																<option value="Modernizr.js">Modernizr.js</option>
																<option value="Meteor.js">Meteor.js</option>
																<option value="Moment.js">Moment.js</option>
																<option value="Foundation.js">Foundation.js</option>
																<option value="history.js">history.js</option>
																<option value="Cash">Cash</option>
																<option value="Popper.js">Popper.js</option>
																<option value="Polymer">Polymer</option>
																<option value="Mithril.js">Mithril.js</option>
																<option value="Ember.js">Ember.js</option>
																<option value="Otros">Otros</option>
																<option value="D3.js">D3.js</option>
																<option value="MobX">MobX</option>
																<option value="Omniscient">Omniscient</option>
																<option value="Mercury">Mercury</option>
																<option value="WebRx">WebRx</option>
																<option value="Deku">Deku</option>
																<option value="Riot.j">Riot.js</option>
																<option value="Socket">Socket</option>
																<option value="Polymer"">Polymer</option>
																<option value="Knockout">Knockout</option>
																<option value="Keystone">Keystone</option>
																<option value="Stapes">Stapes</option>
																<option value="Video.js">Video.js</option>
															</select>
					                                    </div> 
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Habilidades de Programación<span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-dollar"></i></div>
					                                        <select name="habilidadesDeveloper[]" multiple class="form-control">
					                                        	<option value="Mysql">Mysql</option>
					                                        	<option value="SQL">SQL</option>
					                                        	<option value="SQLite">SQLite</option>
					                                        	<option value="FireBase">FireBase</option>
					                                        	<option value="MongoDB">MongoDB</option>
					                                        	<option value="MariaDB">MariaDB</option>
					                                        	<option value="Oracle">Oracle</option>
																<option value="PostgreSQL">PostgreSQL</option>
																<option value="Redis">Redis</option>
																<option value="Elasticsearch">Elasticsearch</option>
																<option value="Microsoft Azure">Microsoft Azure</option>
					                                        	<option value="PHP">PHP</option>
					                                        	<option value="JAVA">JAVA</option>
					                                        	<option value="Javascript">Javascript</option>
					                                        	<option value="Jquery">Jquery</option>
					                                        	<option value="Ajax">Ajax</option>
					                                        	<option value="Ruby">Ruby</option>
					                                        	<option value="Perl">Perl</option>
																<option value="TypeScript">TypeScript</option>
					                                        	<option value="Python">Python</option>
					                                        	<option value=".NET">.NET</option>
					                                        	<option value="VS.NET">VS.NET</option>
					                                        	<option value="C#">C#</option>
					                                        	<option value="C">C</option>
					                                        	<option value="C++">C++</option>
					                                        	<option value="Node">Node.js</option>
					                                        	<option value="Worpress">Worpress</option>
					                                        	<option value="Unity">Unity</option>
					                                        	<option value="Kotlin">Kotlin</option>
																<option value="Ionic">Ionic</option>
																<option value="Corona">Corona</option>
																<option value="Delphi">Delphi</option>
																<option value="Xcode">Xcode</option>
						                            			<option value="Objective-C">Objective-C</option>
					                                        	<option value="CSS">CSS</option>
																<option value="CSS 3">CSS 3</option>
																<option value="LESS">LESS</option>
																<option value="SCSS">SCSS</option>
																<option value="SASS">SASS</option>
																<option value="XML">XML</option>
																<option value="HTML">HTML</option>
																<option value="HTML 5">HTML 5</option>
																<option value="XHMTL">XHMTL</option>
																<option value="CodeIgniter">CodeIgniter</option>
																<option value="Symfony">Symfony</option>
																<option value="CakePHP">CakePHP</option>
																<option value="Phalcon">Phalcon</option>
																<option value="Node.js">Node</option>
																<option value="FuelPHP">FuelPHP</option>
																<option value="Slim">Slim</option>
																<option value="Zend">Zend</option>
																<option value="Yii">Yii</option>
																<option value="Zikula">Zikula</option>
																<option value="Kohana">Kohana</option>
																<option value="Flight">Flight</option>
																<option value="Fat">Fat</option>
																<option value="Simple">Simple</option>
																<option value="Django">Django</option>
																<option value="Laravel">Laravel</option>
					                                        </select>
					                                    </div> 
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                            	<div class="form-grupo">
					                            		<label>Habilidades de Diseño Gráfico</label>
					                            		<div class="input-group">
					                            			<div class="input-group-addon np-blue"><i class="fa fa-dollar"></i></div>
					                            			<select multiple name="toolsDesing[]" class="form-control ">
																<option value="Photoshop">Adobe Photoshop</option>
																<option value="Ilustrador">Adobe Ilustrador</option>
																<option value="InDesing">Adobe InDesing</option>
																<option value="After Effects">Adobe After Effects </option>
																<option value="Spark">Adobe Spark</option>
																<option value="Animation">Adobe Animation</option>
																<option value="Audition">Adobe Audition</option>
																<option value="Bridge">Adobe Bridge</option>
																<option value="Incopy">Adobe Incopy</option>
																<option value="Media Encoder">Adobe Media Encoder</option>
																<option value="Muse">Adobe Muse</option>
																<option value="Premiere Pro">Adobe Premiere Pro</option>
																<option value="Inkscape">Inkscape</option>
																<option value="Gimp">Gimp</option>
																<option value="Cinema 4D">Cinema 4D</option>
															</select>
					                            		</div>
					                            	</div>
					                            </div>
					                            <div class="col-sm-12">
					                            	<div class="form-grupo">
					                            		<label for="habilidades">Habilidades de Marketing</label>
					                            		<div class="input-group">
					                            			<div class="input-group-addon np-blue"><i class="fa fa-dollar"></i></div>
					                            			<select multiple name="estategias[]" id="habilidades" class="form-control">
																<option value="InBound Marketing">InBound Marketing</option>
																<option value="Marketing Relacional">Marketing Relacional</option>
																<option value="Marketing de contenidos">Marketing de contenidos</option>
																<option value="Marketing de buscadores">Marketing de buscadores</option>
																<option value="Permission Marketing">Permission Marketing</option>
																<option value="Email Marketing">Email Marketing</option>
																<option value="Marketing Automation">Marketing Automation</option>
																<option value="Marketing de afiliación">Marketing de afiliación</option>
																<option value="Marketing móvil">Marketing móvil</option>
																<option value="Influencer Marketing">Influencer Marketing</option>
																<option value="Marketing interno">Marketing interno</option>
																<option value="Retail digital marketing">Retail digital marketing</option>
																<option value="Blended Marketing">Blended Marketing</option>
																<option value="SEO">SEO</option>
																<option value="Social Media">Social Media</option>
																<option value="Video Marketing">Video Marketing</option>
																<option value="Comercio electrónico">Comercio electrónico</option>
															</select>
					                            		</div>
					                            	</div>
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Sueldo USD<span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-dollar"></i></div>
					                                        <input type="number" class="form-control border-left-0" name="sueldo" required> 
					                                    </div> 
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Modalidad <span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-envelope"></i></div>
					                                        <select name="modalidad" required>
					                                        	<option value="Tiempo Completo">Tiempo Completo</option>
					                                        	<option value="Medio Tiempo">Medio Tiempo</option>
					                                        	<option value="Freelancer">Freelancer</option>
					                                        </select> 
					                                    </div> 
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Tipo de Empleo <span class="text-danger">*</span></label>
					                                    <div class="input-group"> 
					                                        <div class="input-group-addon np-blue"><i class="fa fa-envelope"></i></div>
					                                        <select name="tipoEmpleo" required>
					                                        	<option value="Por Contracto">Por Contracto</option>
					                                        	<option value="Por Proyecto">Por Proyecto</option>
					                                        	<option value="Fijo">Fijo</option>
					                                        </select> 
					                                    </div> 
					                                </div> 
					                            </div>
					                            <div class="col-sm-12">
					                                <div class="form-group"> 
					                                    <label>Currículo <span class="text-danger">*</span></label>
					                                    <div class="custom-file">
					                                    	<input id="change" name="curriculo" type="file" class="custom-file-input" aria-describedby="fileHelp">
					                                    	<label class="custom-file-label">Suba su Currículo</label> 
					                                    </div>
					                                </div> 
					                            </div>
					                        </div>
					                        <button type="submit" class="btn np-blue np-hover-metro-blue mt-3 text-capitalize" style="padding: 12px 0px"><i class="fa fa-paper-plane mr-3"></i>Registrar Usuario</button>
				                        	<div><p class="login"><a href="#">Iniciar Empleado</a></p></div>
				                        </form>
				                    <?php endif ?>
				                </div>
				            </div>
				        </div>
				    </section>
					<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
				    <script src="https://compitweb.com/lib/jquery_validate/jquery.validate.js" type="text/javascript"></script>
				    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
					  <script>
						$(document).ready(function(){
							$("a[href='#']").click(function(e) {
								e.preventDefault();
							});
						});
					  </script>
					<?php if($typeAsc === '1'): ?>
					  	<script src="https://compitweb.com/js/adm/main.js"></script>							  
					<?php endif ?>
					<?php if($typeAsc !== '1'): ?>
						<script src="https://compitweb.com/js/adm/login.js"></script>
					<?php endif?>
				</body>
				</html>

		<?php
	}
?>
<?php 

$passConfi = $_GET['id'];
$emailConfi = $_GET['mail'];

// echo "Contraseña: ".$passConfi."Email: ".$emailConfi;

if (empty($passConfi)){
	include_once "../error404/index.php"; 
}

if (!empty($passConfi)){
  require_once "../process/procesos.php";

  $query = "SELECT idName, typeAsc From roots Where idName = ".$passConfi." and correo = ".$emailConfi." And stacte = 1 ";
  $resul = mysqli_query(conectar(), $query);
  if ($row = mysqli_fetch_array($resul)) {
  	$typeAsc = $row['typeAsc'];
  	html($typeAsc);
  }else{
	include_once "../error404/index.php"; 
  }
 }


/* 
	Niveles de Cuentas de Adm
	Empleado: 3 (Solo empleados, hacerde a sus pagos, trabajos, chat y eso).
	Administrador: 2 (Solo administra los pagos, cuentas, registro de usuario, banneos y eso).
	Creador: 1 TODAS LAS FUNCIONES
	Cuenta ADM 1
	<a href="www.compitweb.com/administrador/?id='nelsonPortillo'&mail='nelsonportillo982@gmail.com'">Panel de Control</a> 
	Contraseña: C476CBEAD36DC

*/
 ?>
