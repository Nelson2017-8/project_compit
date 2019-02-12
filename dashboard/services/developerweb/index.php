
<?php
    require_once "../../../process/dominio.php";
  	require_once "../../../process/verificarUsuario.php";
  	$verySession->noLogeado();
?>
<html>
<head>
<?php require_once "../../_include/head_materialize.php";?>
</head>
<body class="has-fixed-sidenav white">
	<?php include_once '../../_include/header.php'; ?>
		<nav>
			<div class="nav-wrapper blue">
				<div class="col s12 px-6">
					<a href="<?php echo $aCuenta; ?>" class="breadcrumb">Cuenta</a>
					<a href="<?php echo $aPanel; ?>" class="breadcrumb">Panel de Control</a>
					<a href="<?php echo $aServicio; ?>" class="breadcrumb">Servicio</a>
					<a href="<?php echo $aServicioDeveloperWeb; ?>" class="breadcrumb">Desarrollo Web</a>
				</div>
			</div>
		</nav>

	<div class="row">
		<div class="col s12 padding-0">
			<ul class="tabs">
				<li class="grey lighten-5 tab col s3"><a class="active" href="#tab1">Servicio</a></li>
				<li class="grey lighten-5 tab col s3"><a href="#tab2">Garantía</a></li>
				<li class="grey lighten-5 tab col s3"><a href="#tab3">Procedimiento</a></li>
				<li class="grey lighten-5 tab col s3"><a href="#tab4">Entrega</a></li>
			</ul>
			<div class="col s12" id="tab1">
				<div class="container">
					<p class="flow-text">Servicio de Desarrollo.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia accusantium ullam voluptate veritatis, eveniet totam maxime non deserunt ut omnis vero a reprehenderit dicta esse qui quasi tenetur sequi expedita labore magnam consequuntur voluptatibus, ad sapiente ipsa. Facere quo nemo illum id! Distinctio voluptas, debitis dolorum ducimus quibusdam similique magnam.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia illum earum eligendi ex ad inventore cumque quae quaerat id porro atque iusto quas reprehenderit tenetur similique ullam neque, fuga consequatur eveniet. Voluptatum aut nobis iste placeat quas recusandae, non modi nesciunt harum. Esse sapiente voluptatum provident mollitia. Eum esse ipsa architecto dicta ut labore repudiandae voluptas. Quibusdam nostrum, quia dicta dolor repudiandae ea distinctio praesentium id consectetur doloremque provident, amet aspernatur! Ratione ea aspernatur asperiores sunt soluta eum fugit illo iusto excepturi, ducimus, dolores voluptatum, in inventore vero, numquam doloremque molestiae beatae rem officia. Necessitatibus modi dignissimos, similique. Velit, modi? Magnam veniam perspiciatis rem, quia provident eius dolorum! Labore amet repellendus quidem eius sapiente consectetur beatae, reprehenderit enim ratione neque architecto tenetur dignissimos, ipsa minima consequuntur fugit, perspiciatis quos harum! Placeat ex, tempora alias vero, ea dolorum nobis? Quod quasi facere, eaque nostrum repudiandae voluptatibus omnis tempore explicabo, nihil ea.</p>
				</div>
			</div>
			<div class="col s12" id="tab2">
				<div class="container">
					<p class="flow-text">Garantía.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus, esse. Commodi ea vel, ad aliquid mollitia unde voluptates et! Architecto cupiditate id molestias minus tempore optio cumque! Debitis officia ratione earum, quia, ipsum mollitia ullam dicta inventore, libero reprehenderit molestias sit iure, recusandae a amet rerum obcaecati architecto soluta laborum.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit provident quibusdam ex ipsum dicta, error perferendis delectus neque quos a. Nisi accusamus, mollitia hic aspernatur, iure perferendis, voluptates fuga iste, possimus blanditiis maxime. Enim distinctio sit quia voluptatum similique iste officiis autem mollitia eaque, excepturi a dolorem sequi at asperiores ullam, hic consectetur itaque facere. Aut optio, provident expedita officiis nemo aspernatur, odit molestias repellat, iusto quis ullam iste. Debitis porro non accusantium iusto optio repellendus consectetur reprehenderit molestias, sint ipsam vel quidem nostrum qui vitae voluptatum minima inventore! Maxime, reprehenderit architecto sed molestias possimus voluptatibus autem distinctio consequatur eligendi facilis, in animi corporis vitae eos deleniti non modi ipsum qui expedita minima, pariatur maiores fugit. Facilis aliquam voluptate, mollitia doloremque quia, animi asperiores aliquid, esse est hic consequuntur optio! Commodi odit debitis hic molestiae amet, a quae officia deserunt distinctio quos dolorem ipsa veniam rerum accusamus suscipit dicta, id.</p>
				</div>
			</div>
			<div class="col s12" id="tab3">
				<div class="container">
					<p class="flow-text">Procedimiento.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus unde nam consectetur tenetur cumque ex quae voluptas quia modi molestiae optio atque hic accusantium perferendis magnam qui ratione culpa, vero ipsam expedita autem dolor labore! Temporibus architecto aliquam, dolores accusamus voluptatem ut error officiis facilis explicabo nobis, eligendi amet dolor!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas est deleniti, voluptates non doloremque enim modi odit reprehenderit iste iusto delectus inventore voluptate temporibus, nulla accusantium vel dolorem cupiditate saepe. Quae eius deleniti quos iure? Excepturi labore minus unde obcaecati, hic aliquid nisi pariatur, consectetur repellendus rem facilis? Numquam nobis voluptatem atque, commodi voluptates in vel distinctio perferendis dolorem iste quos id consectetur. Unde sit itaque officiis ipsa, aliquam maxime fuga autem nobis accusantium iste reprehenderit ad, impedit pariatur ab, inventore necessitatibus at! Odio nemo inventore eum officia laboriosam, pariatur ut at, corporis quasi molestiae et! Repellat, magnam dicta optio veniam assumenda sit veritatis mollitia delectus sapiente rerum minima quia excepturi atque reprehenderit. Laborum quibusdam, dolore. Laborum soluta, reprehenderit inventore voluptate quaerat blanditiis animi iusto. Ut temporibus qui repellendus! Aliquam ducimus ut eligendi excepturi praesentium aperiam neque, illum, tenetur ea molestiae, accusantium ipsum, a dolor. Omnis pariatur animi illum, dignissimos!</p>
				</div>
			</div>
			<div class="col s12" id="tab4">
				<div class="container">
					<p class="flow-text">Entrega.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi rerum ut cum aliquam distinctio quas est ratione illo eum, tempore dolorem eaque fugiat incidunt iusto minima, rem eveniet. Consectetur officia ex et distinctio, perspiciatis quo quos quod iure. Aliquam hic numquam beatae molestiae, mollitia deleniti delectus illum error, neque earum!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab cum aliquam consectetur commodi ratione nesciunt, facere molestiae quas fuga vero? Consequatur velit, ratione, minima assumenda quo quas veniam obcaecati dignissimos sequi aliquid dolorem optio doloremque ea nobis perferendis iste expedita consectetur officia in facilis, dolores quaerat odit ex blanditiis! Quas fugit ut quasi architecto quam vel, accusamus autem ad necessitatibus consectetur quibusdam doloremque atque molestiae repellat, iusto et nisi amet, officiis veniam veritatis? Suscipit pariatur, at esse nulla cumque corrupti optio dolore consequatur tempora facere reiciendis tenetur labore odio hic, totam. Illo repellat aperiam, ipsa earum quibusdam? Fugiat obcaecati perferendis aspernatur. Dolorum eveniet aliquid quas aspernatur ut beatae suscipit impedit repellendus obcaecati cumque, iste, alias, sit delectus veritatis fugiat, quasi nam nobis blanditiis? A magni, quas voluptatem cumque est fugiat unde expedita reiciendis veniam! Id, eveniet pariatur quasi quo nesciunt, error cum, praesentium modi voluptate eaque provident voluptas maiores itaque!</p>
				</div>
			</div>
			<div class="container section">
				<a href="<?php echo $aCarritoDeveloperWeb; ?>" class="btn btn-small waves-effect waves-teal blue"> <i class="material-icons">add_shopping_cart</i> Añadir al carrito </a>
			</div>
		</div>
	</div>
	<?php include_once '../../_include/section_body_fin.php'; ?>
</body>
</html>