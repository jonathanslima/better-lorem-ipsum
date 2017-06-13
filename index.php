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
					<span class="icon-bars white"></span>
				</div>

				<nav class="header-nav col-sm-9">
					<button class="close hidden-sm hidden-md hidden-lg">
						<i class="icon-close white"></i>
					</button>

					<ul class="list-unstyled menu">
						<li class="header-nav-li"><a href="#" class="header-nav-a">Conheça</a></li>
						<li class="header-nav-li"><a href="#" class="header-nav-a">Vantagens</a></li>
						<li class="header-nav-li"><a href="#" class="header-nav-a">Cases</a></li>
						<li class="header-nav-li"><a href="#" class="header-nav-a">Fale Conosco</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<span class="phone blue"><i class="icon-mobile-phone"></i> +55 (888) 760 1940</span>
</header>

<main class="full-width main-content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
					<h2 class="title white mb-remove">Better Lorem Ipsum</h2>

					<p class="text">O Gemmius é uma ferramenta projetada para organizaçães
						que desejam crescer otimizando recursos.</p>

					<p class="text blue section-padding pb-remove">
						<small><i>Os campos com (*) são de obrigatoriedade</i></small>
					</p>
				</div>
			</div>

			<form id="form" action="" method="post" class="form">
				<div class="col-xs-12">
					<span class="icon bg-black-input white col-xs-2 col-sm-1 col-lg-1"><i class="icon-user white"></i></span>
					<input id="nome" class="input col-xs-10 col-sm-11 col-lg-11" type="text" placeholder="NOME *" required>
				</div>

				<div class="col-xs-12 col-lg-6">
					<span class="icon bg-black-input white col-xs-2 col-sm-1 col-lg-3"><i class="icon-envelope white"></i></span>
					<input id="email" class="input col-xs-10 col-sm-11 col-lg-9" type="email" placeholder="E-MAIL*" required>
				</div>

				<div class="col-xs-12 col-lg-6">
					<span class="icon bg-black-input white col-xs-2 col-sm-1 col-lg-2"><i class="icon-mobile-phone white"></i></span>
					<input id="tel" class="input col-xs-10 col-sm-11 col-lg-10" title="Esse campo só aceita números" type="tel" placeholder="TELEFONE">
				</div>

				<div class="col-xs-12">
					<span class="icon bg-black-input white col-xs-2 col-sm-1 col-lg-1"><i class="icon-pencil white"></i></span>
					<input class="input col-xs-10 col-sm-11 col-lg-11" type="text" placeholder="MENSAGEM">
				</div>

				<div class="col-xs-12">
					<button type="submit" class="btn">Enviar</button>
				</div>

			</form>

			<figure class="main-image-content">
				<img src="img/macbook.png" class="hidden-xs hidden-sm hidden-md" alt="imagem de um macbook">
			</figure>
		</div>
	</div>
</main>

<div class="container-fluid items hidden-xs">
	<div class="row">
		<ul class="list-unstyled items-list">
			<li class="col-sm-6 col-lg-3 items-li">
				<div class="icon">
					<div class="icon-1"></div>
				</div>

				<h3 class="blue title-small">Gestão Médica</h3>

				<span class="text gray">Desenvolvido para ser uma ferramenta de apoio aos processos e decisões...</span>
			</li>

			<li class="col-sm-6 col-lg-3 items-li">
				<div class="icon icon-2"></div>

				<h3 class="blue title-small">Monitoramento</h3>

				<span class="text gray">A inteligência de gestão de processos que aprendemos nos vários anos...</span>
			</li>

			<li class="col-sm-6 col-lg-3 items-li">
				<div class="icon icon-3"></div>

				<h3 class="blue title-small">Integração</h3>

				<span class="text gray">Os processos administrativos e médicos são únicos e precisam de uma visão...</span>
			</li>

			<li class="col-sm-6 col-lg-3 items-li">
				<div class="icon icon-4"></div>

				<h3 class="blue title-small">Usabilidade</h3>

				<span class="text gray">Precisa ser fácil de usar. Não queremos profissionais de sistemas...</span>
			</li>

		</ul>
	</div>
</div>

<!-- FEATURES BOXES -->
<section class="section-fluid features">
	<div class="container">
		<div class="row">
			<header class="col-xs-12 features-header col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
				<h2 class="title title-section">Nossos diferenciais competitivos</h2>
				<p class="text text text-modified">Speed up the line with quick, easy modifiers</p>
				<p class="text gray">Light soy, extra noodles—item modifiers make it simple andefficient to get your customers’ orders just right.</p>
			</header>
		</div>

		<div class="row">
			<section class="col-xs-12 features-container">
			<!--	BLOCK LEFT	-->
				<div class="col-xs-12 col-sm-6 features-left">
					<!--	BLUE BLOCK -->
					<section class="full-width bg-blue white feat-top-left">
						<header>
							<div class="full-width number"><span class="number-1">1</span></div>
							<h2 class="title title-variant">Pensando para ser amigável</h2>
						</header>

						<article>
							<p class="text white">
								Speed up the line with quick, easy modifiers Light soy, extra noodles—item modifiers make it simple and efficient to get your customers’ orders just right.
							</p>
						</article>
					</section>

					<!--	BLACK BLOCK -->
					<section class="full-width bg-black-box feat-bottom-left white">
						<header>
							<div class="full-width number"><span class="number-2">2</span></div>
							<h2 class="title title-variant">Elimina tarefas
								repetitivas</h2>
						</header>

						<article>
							<p class="text white">
								Speed up the line with quick, easy modifiers Light soy, extra noodles.
							</p>
						</article>
					</section>
				</div>

				<!--	BLOCK RIGHT	-->
				<!--	PURPLE BLOCK -->
				<div class="col-xs-12 col-sm-6 features-right">
					<div class="full-width bg-purple white feat-right">
						<header>
							<div class="full-width number"><span class="number-3">3</span></div>
							<h2 class="title title-variant">Focado em processos</h2>
						</header>

						<article>
							<p class="text white">
								Speed up the line with quick, easy modifiers Light soy, extra noodles—item modifiers make it simple and efficient to get your customers’ orders just right.
							</p>

							<p class="text white">
								Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde
								o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos
								e os embaralhou para fazer um livro.
							</p>
						</article>

						<div id="img-detail">

						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>

<footer class="footer">
	<div class="container">
		<div class="row">
		<!-- Hidden desktop -->
			<p class="text gray hidden-sm hidden-md hidden-lg">&copy; <?php echo date('Y')?> - Caju Tecnologia</p>

			<!-- Hidden mobile -->
			<div class="gray hidden-xs">
				<div class="col-sm-4 col-md-5 text ">
					&copy; <?php echo date('Y')?> - Caju Tecnologia
				</div>

				<div class="col-sm-8 col-md-7 contact">
					<ul class="list-unstyled">
						<li>
							<a href=""><i class="icon-facebook"></i></a>
							<a href=""><i class="icon-google-plus"></i></a>
							Redes Sociais
						</li>
						<li>
							<i class="icon-envelope"></i>
							E-mail: teste@caju.com.br
						</li>
						<li>
							<i class="icon-mobile-phone"></i>
							+55 (81) 3212-1546
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="libs/jquery/dist/jquery.min.js"></script>
<script src="libs/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>