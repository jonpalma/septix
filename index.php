<?php $thispage="index" ?>
<?php include('header.php'); ?>
	

<!-- BEGIN BANNER -->
<div id="inicio" class="banner">
	<div class="transform-center-vertical">
		<h1 class="blue">Soluciones Sépticas</h1>
		<h2 class="blue">Contamos con las mejores bombas y accesorios</h2>
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
		<h1 class="blue">Productos NVE</h1>
		<br>
		<div class="row">		
			<div class="col-md-6 col-lg-3">
				<div class="product">			
					<a href="productos.php#bombas-vacio"><div class="blue hoveroverlay"><img src="img/content/index/nve/BOMBAS-DE-VACIO-CHALLENGER-PARA-USO-INDUSTRIAL.jpg" alt="Bombas de Vacío Industrial"></div></a>
					<p class="blue">Bombas de Vacío para uso Industrial</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="product">			
					<a href="productos.php#bombas-comercial"><div class="blue hoveroverlay"><img src="img/content/index/nve/BOMBAS-DE-VACIO-BATTIONI-PAGANI--PARA-USO-COMERCIAL.jpg" alt="Bombas de Vacío Comercial"></div></a>
					<p class="blue">Bombas de Vacío para uso Comercial</p>
				</div>
			</div>			
			<div class="col-md-6 col-lg-3">
				<div class="product">			
					<a href="productos.php#sistemas"><div class="blue hoveroverlay"><img src="img/content/index/nve/SISTEMAS-COMPLETOS-CHALLENGER.jpg" alt="Sistemas Completos"></div></a>
					<p class="blue">Sistemas Completos</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="product">
					<a href="productos.php#accesorios-nve"><div class="blue hoveroverlay"><img src="img/content/index/nve/ACCESORIOS.jpg" alt="Accesorios"></div></a>
					<p class="blue">Accesorios</p>
				</div>
			</div>
		</div>	
		<h1 class="blue">Productos Conde</h1>
		<br>
		<div class="row">
			<div class="col-md-6 col-lg-3">
				<div class="product">			
					<a href="productos.php#bombas-presion"><div class="blue hoveroverlay"><img src="img/content/index/conde/Bombas-de-Presion-Succion.jpg" alt="Bombas de Presión/Succión"></div></a>
					<p class="blue">Bombas de Presión/Succión</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="product">			
					<a href="productos.php#sistemas-motor"><div class="blue hoveroverlay"><img src="img/content/index/conde/Sistemas-Completos-con-motor-a-gasolina-o-diesel.jpg" alt="Sistemas Gasolina/Diesel"></div></a>
					<p class="blue">Sistemas Completos con Motor a Gasolina o Diesel</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="product">
					<a href="productos.php#accesorios-conde"><div class="blue hoveroverlay"><img src="img/content/index/conde/Accesorios.jpg" alt="Accesorios"></div></a>
					<p class="blue">Acessorios</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3">
				<div class="product">			
					<a href="productos.php#aspiradora"><div class="blue hoveroverlay"><img src="img/content/index/conde/aspiradora-portatil.jpg" alt="Aspiradora Portatil"></div></a>
					<p class="blue">Aspiradora Portatil Industrial</p>
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
			<a href="manuales.php" class="btn-manual">Ver Manuales</a>
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
					Dirección:<br>
					Presa Rejon 2507<br>
					Col. Santuario.<br>
					CP. 31206<br>
					Chihuahua, Chih.<br>
					<br>
					Teléfono:<br>
					(614)290.68.36
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