<?php $thispage="index" ?>
<?php include('header.php'); ?>
	

<!-- BEGIN BANNER -->
<div id="inicio" class="banner">
	<div class="transform-center-vertical">
		<h1 class="blue">Soluciones Sépticas</h1>
		<h2 class="blue">Contamos con los mejores productos y servicio</h2>
		<a href="#contacto" class="btn-yellow smoothScroll">Contáctanos</a>
	</div>
</div>
<!-- END BANNER -->

<!-- BEGIN NOSOTROS -->
<div id="nosotros" class="nosotros">
	<div class="container padding">
		<h1 class="yellow">Nosotros</h1>
		<p class="center-text">La empresa Septix se deriva de Maquinas M empresa que se ha posicionado en los últimos años como empresa líder en el ramo de desazolve. Septix se ha especializado en suministrar todo el equipo y refacciones para el sector especifico de la industria de limpieza séptica.</p>
		<p class="center-text">Principalmente las Bombas de Paletas, para la cual contamos con 2 proveedores lideres en su ramo, las Bombas Challenger de NVE y las Bombas Conde de Westmoore LTD.</p>
	</div>
</div>
<!-- END NOSOTROS -->

<!-- BEGIN PRODUCTOS -->
<div id="productos" class="productos">
	<div class="container padding">
		<h1 class="blue">Productos</h1>
		<br>
		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="product">
					<a href="productos.php"><div class="blue hoveroverlay"><img src="img/content/products/1.png" alt="Bombas de Presión/Succión"></div></a>
					<p class="blue">Bombas de Presión/Succión</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="product">			
					<a href="productos.php"><div class="blue hoveroverlay"><img src="img/content/products/2.png" alt="Motores"></div></a>
					<p class="blue">Sistemas completos con motor a gasolina o diesel</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="product">			
					<a href="productos.php"><div class="blue hoveroverlay"><img src="img/content/products/3.png" alt="Accesorios"></div></a>
					<p class="blue">Accesorios</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="product">			
					<a href="productos.php"><div class="blue hoveroverlay"><img src="img/content/products/4.png" alt="Aspiradoras"></div></a>
					<p class="blue">Aspiradora portatil industrial</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END PRODUCTOS -->

<!-- BEGIN MANUALES -->
<div id="manuales" class="manuales">
	<div class="parallax-container">
		<div class="parallax">
			<img src="img/backgrounds/3.jpg" alt="parallax">
		</div>
		<div class="container padding">
			<h1 class="white">Literatura</h1>
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="manual">
						<a href="pdf/304-Owners-Manual-062015-reduced.pdf"><div class="white hoveroverlay"><img src="img/content/manuals/index_manual.png" alt="Owner's Manual 304"></div></a>
						<p class="white center-text">OWNER'S MANUAL</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="manual">
						<a href="pdf/607-Pro_Manual_small.compressed.pdf"><div class="white hoveroverlay"><img src="img/content/manuals/index_manual2.png" alt="Owner's Manual 607"></div></a>
						<p class="white center-text">OWNER'S MANUAL</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="manual">
						<a href="pdf/866-Owners-Manual-Rev3.compressed.pdf"><div class="white hoveroverlay"><img src="img/content/manuals/index_manual3.png" alt="Owner's Manual 866"></div></a>
						<p class="white center-text">OWNER'S MANUAL</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END MANUALES -->

<!-- BEGIN CONTACTO  -->
<div id="contacto">
	<div class="container padding">
		<h1 class="green">CONTÁCTANOS</h1>
		<br class="vert-margin-small">
		<div class="row">
			<div class="col-sm-6">
				<p class="contact">
					Dirección:
					<br>
					Teléfono:
					<br>
					Correo:
				</p>
			</div>
			<div class="col-sm-6 sm-border-left">
				<form method="post" action="mailer.php" id="contact-form">
					<label for="name">Nombre</label>
					<input type="text" id="name" name="name">
					<label for="phone">Teléfono</label>
					<input type="text" id="phone" name="phone">
					<label for="email">Correo</label>
					<input type="text" id="email" name="email">
					<label for="info">¿Cómo podemos ayudarte?</label>
					<textarea id="info" cols="30" rows="4" name="info"></textarea>
					<button class="submit" id="form-submit">Enviar</button>
				</form>
				<div id="form-output"></div>
			</div>
		</div>
	</div>
</div>
<!-- END CONTACTO -->


<?php include('footer.php'); ?>