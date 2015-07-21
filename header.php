<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo ($thispage=="index")? "SeptiX":$thispage." - SeptiX"?></title>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body <?php if($thispage=="index") echo 'data-spy="scroll" data-target=".navbar-nav"' ?>>		
		<!-- BEGIN NAVBAR -->
		<nav class="navbar navbar-septix">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsible-nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand smoothScroll" href="#inicio"><img src="img/logo.png" alt="SeptiX - Soluciones Sépticas"></a>
				</div>
				<div id="collapsible-nav" class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo ($thispage=="index")? "":"index.php" ?>#inicio" class="smoothScroll">Inicio</a></li>
						<li><a href="<?php echo ($thispage=="index")? "":"index.php" ?>#nosotros" class="smoothScroll">Nosotros</a></li>
						<li><a href="<?php echo ($thispage=="index")? "":"index.php" ?>#servicios" class="smoothScroll">Servicios</a></li>						
						<li <?php if($thispage=="Productos") echo "class='active'" ?>><a href="<?php echo ($thispage=="index")? "":"index.php" ?>#productos" class="smoothScroll">Productos</a></li>
						<li <?php if($thispage=="Manuales") echo "class='active'" ?>><a href="<?php echo ($thispage=="index")? "":"index.php" ?>#manuales" class="smoothScroll">Manuales</a></li>
						<li><a href="<?php echo ($thispage=="index")? "":"index.php" ?>#contacto" class="smoothScroll">Contáctanos</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->