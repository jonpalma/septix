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
		<p class="center-text">Vestibulum id hendrerit augue. Phasellus vel mauris nec sapien laoreet condimentum sit amet vitae lorem. Phasellus vulputate semper nunc. Sed feugiat, nulla ut consectetur tincidunt, magna magna convallis tortor, quis dictum sem felis sit amet ligula. Duis ac lorem in purus aliquam sollicitudin.</p>
		<p class="center-text">Sed tempus lectus quis nunc gravida, eu porttitor ligula posuere. Mauris dictum arcu augue, sit amet finibus lectus volutpat non.</p>
	</div>
</div>
<!-- END NOSOTROS -->

<!-- BEGIN SERVICIOS -->
<div id="servicios">
	<div class="parallax-container">
		<div class="parallax">
			<img src="img/backgrounds/2.jpg" alt="parallax">
		</div>
		<div class="container padding">
			<h1 class="white">Nuestros Servicios</h1>
			<br class="vert-margin-small">
			<div class="servicios">
				<div class="servicio-item">
					<img src="img/content/servicios/1.png" alt="Vestibulum">
					<p>Vestibulum id hendrerit augue</p>
				</div>
				<div class="servicio-line"></div>				
				<div class="servicio-item">
					<img src="img/content/servicios/2.png" alt="id hendrerit">
					<p>Vestibulum id hendrerit augue</p>
				</div>
				<div class="servicio-line"></div>
				<div class="servicio-item">
					<img src="img/content/servicios/3.png" alt="augue">
					<p>Vestibulum id hendrerit augue</p>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END SERVICIOS -->

<!-- BEGIN PRODUCTOS -->
<div id="productos">
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
<div id="manuales">
	<div class="parallax-container">
		<div class="parallax">
			<img src="img/backgrounds/3.jpg" alt="parallax">
		</div>
		<div class="container padding">
			<h1 class="white">Manuales</h1>
			<p class="white center-text">Vestibulum id hendrerit augue. Phasellus vel mauris nec sapien laoreet condimentum sit amet vitae lorem. Phasellus vulputate semper nun</p>
			<br>
			<div class="row">
				<div class="col-md-4">
					<div class="manual">
						<a href="manuales.php"><div class="white hoveroverlay"><img src="img/content/manuals/1.png" alt="Manual 1"></div></a>
						<p class="white center-text">Manual 1</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="manual">
						<a href="manuales.php"><div class="white hoveroverlay"><img src="img/content/manuals/2.png" alt="Manual 2"></div></a>
						<p class="white center-text">Manual 2</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="manual">
						<a href="manuales.php"><div class="white hoveroverlay"><img src="img/content/manuals/3.png" alt="Manual 3"></div></a>
						<p class="white center-text">Manual 3</p>
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