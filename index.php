<?php $projeto = 'Better Lorem Ipsum'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title><?php echo $projeto ?></title>

	<!-- Meta tags	-->
	<meta name="viewport" content="width=device-width, user-scalable=no"/>
	<meta name="developer" content="Caju">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<link rel="stylesheet" href="css/style.css">
	<link type="image/x-icon" rel="shortcut icon" href="img/favicon.ico"/>

	<!-- Tipography	-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Sans+Pro:300,600,700" rel="stylesheet">
</head>

<body>

<header class="header">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-xs-9 col-sm-3 header-logo">
					<span class="logo">Logo</span>
				</div>

				<div class="col-xs-3 menu-icon-mobile hidden-sm hidden-md hidden-lg">
				<span class="icon-bars white">
				</div>

				<nav class="header-nav hidden-xs col-sm-9">
					<ul class="list-unstyled">
						<li class="header-nav-li"><a href="#" class="header-nav-a">Conheça</a></li>
						<li class="header-nav-li"><a href="#" class="header-nav-a">Vantagens</a></li>
						<li class="header-nav-li"><a href="#" class="header-nav-a">Cases</a></li>
						<li class="header-nav-li"><a href="#" class="header-nav-a">Fale Conosco</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<span class="phone blue hidden-xs hidden-sm">+55 (888) 760 1940</span>
</header>

<main class="container-fluid main-content">
	<div class="row">
		<div class="col-xs-12">
			<h2 class="title white">Better Lorem Ipsum</h2>

			<p class="text">O Gemmius é uma ferramenta projetada para organizaçães
				que desejam crescer otimizando recursos.</p>

			<p class="text blue">
				<small><i>Os campos com (*) são de obrigatoriedade</i></small>
			</p>
		</div>

		<form action="" class="form">
			<div class="col-xs-12">
				<span class="icon bg-black-input white col-xs-2 col-md-1"><i class="icon-bars white"></i></span>
				<input class="input col-xs-10 col-md-11" type="text" placeholder="NOME *" required autofocus>
			</div>

			<div class="col-xs-12 col-lg-6">
				<span class="icon bg-black-input white col-xs-2 col-md-1 col-lg-3"><i class="icon-envelope white"></i></span>
				<input class="input col-xs-10 col-md-11 col-lg-9" type="email" placeholder="E-MAIL*" required>
			</div>

			<div class="col-xs-12 col-lg-6">
				<span class="icon bg-black-input white col-xs-2 col-md-1 col-lg-3"><i class="icon-mobile-phone white"></i></span>
				<input class="input col-xs-10 col-md-11 col-lg-9" type="tel" placeholder="TELEFONE">
			</div>

			<div class="col-xs-12">
				<span class="icon bg-black-input white col-xs-2 col-md-1"><i class="icon-pencil white"></i></span>
				<input class="input col-xs-10 col-md-11" type="text" placeholder="MENSAGEM">
			</div>

			<div class="col-xs-12">
				<button class="btn">Enviar</button>
			</div>

		</form>
		
		<figure class="main-image-content">
			<img src="img/macbook.png" class="hidden-xs hidden-sm hidden-md" alt="">
		</figure>
	</div>
</main>

<section class="section-fluid features">
	<div class="container">
		<div class="row">
			<header class="col-xs-12">
				<h2 class="title title-section">Nossos diferenciais competitivos</h2>
				<p class="text text text-modified">Speed up the line with quick, easy modifiers</p>
				<p class="text">Light soy, extra noodles—item modifiers make it simple andefficient to get your customers’ orders just right.</p>
			</header>
		</div>

		<div class="row">
			<section class="col-xs-12 features-container">
				<div class="col-xs-12 col-sm-6 features-left">
					<div class="full-width bg-blue white feat-top-left">
						<div class="full-width number"><span class="number-1">1</span></div>
						<h2 class="title title-variant">Pensando para ser amigável</h2>

						<p class="text white">
							Speed up the line with quick, easy modifiers Light soy, extra noodles—item modifiers make it simple and efficient to get your customers’ orders just right.
						</p>
					</div>

					<div class="full-width bg-black-input feat-bottom-left white">
						<div class="full-width number"><span class="number-2">2</span></div>
						<h2 class="title title-variant">Elimina tarefas
							repetitivas</h2>

						<p class="text white">
							Speed up the line with quick, easy modifiers Light soy, extra noodles.
						</p>
					</div>
				</div>

				<div class="col-xs-12 col-sm-6 features-right">
					<div class="full-width bg-purple white feat-right">
						<div class="full-width number"><span class="number-3">3</span></div>
						<h2 class="title title-variant">Pensando para ser amigável</h2>

						<p class="text white">
							Speed up the line with quick, easy modifiers Light soy, extra noodles—item modifiers make it simple and efficient to get your customers’ orders just right.
						</p>

						<p class="text white">
							Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde
							o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos
							e os embaralhou para fazer um livro.
						</p>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>

<footer class="footer bg-black">
	<div class="container">
		<div class="row">
			<p class="text gray-light hidden-sm hidden-md hidden-lg">&copy; <?php echo date('Y')?> - Caju Tecnologia</p>
		</div>
	</div>
</footer>

<script src="libs/jquery/dist/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>