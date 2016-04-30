<!DOCTYPE html>
<html lang="fr-BE">
<head>
	<meta charset="UTF-8">
	<title><?= $pageTitle; ?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<meta name="Author" content="Loïc Parent" />
	<meta name="Rev" content="info@loic-parent.be" />
	<link rel="canonical" href="http://www.loic-parent.be" />
	<!-- Ajout dans le header -->
	<?= $headerContent; ?>

	<!-- OG TYPES -->
	<meta property="og:title" content="Loïc Parent • design graphic" />
	<meta property="og:type" content="website" />
	<meta property="og:description" content="Je suis un étudiant en infographie Web qui habite près de Waremme ce site est une sorte de portefolio qui présente mes travaux" />
	<meta property="og:image" content="http://loic-parent.be/img/og_image.jpg" />
	
	<!-- Fav icon (http://www.favicon-generator.org/) -->
	<link rel="apple-touch-icon" sizes="57x57" href="./img/favicon.ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="./img/favicon.ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="./img/favicon.ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="./img/favicon.ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="./img/favicon.ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="./img/favicon.ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="./img/favicon.ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="./img/favicon.ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="./img/favicon.ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="./img/favicon.ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./img/favicon.ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./img/favicon.ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./img/favicon.ico/favicon-16x16.png">
	<link rel="manifest" href="./img/favicon.ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- Fav icon -->
	
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
	<link href="./css/main.<?php echo filemtime('./css/main.css'); ?>.css" rel="stylesheet" type="text/css" />
</head>
<body itemscope itemtype="http://schema.org/Person">

	<div id="hcard-Loïc-Parent" class="vcard hidden">
		 <a class="url fn" href="http://www.loic-parent.be">Loïc Parent</a>
		 <a class="email" href="mailto:info@loic-parent.be">info@loic-parent.be</a>
		 <div class="adr">
		  <span class="locality">Geer</span>, <span class="region">Liège</span>, <span class="postal-code">4250</span> <span class="country-name">Belgique</span>
		 </div>
		 <div class="tel">0499261257</div>
		 <p style="font-size:smaller;">This <a href="http://microformats.org/wiki/hcard">hCard</a> created with the <a href="http://microformats.org/code/hcard/creator">hCard creator</a>.</p>
	</div>
	<div class="wrapper">
	
	<header class="header">
		<div class="centerZone">
			<a href="http://www.loic-parent.be" class="header__logo">Loïc Parent</a>
			<div class="hambMenu">
				<span></span>
			</div>
			<nav id="menu" class="header__menu mainMenu">
				<h2 class="hidden">Menu de navigation</h2>
				<?php if ( isset($home) ): ?>
					<a href="#content" class="mainMenu__item active">Accueil</a><a href="#aboutMe" class="mainMenu__item">&Agrave; propos</a><a href="#works" class="mainMenu__item">Mes projets</a><a href="#contact" class="mainMenu__item">Contact</a>
				<?php else: ?>
					<a href="./index.php#content" class="mainMenu__item">Accueil</a><a href="./index.php#aboutMe" class="mainMenu__item">&Agrave; propos</a><a href="./index.php#works" class="mainMenu__item">Mes projets</a><a href="./index.php#contact" class="mainMenu__item">Contact</a>
				<?php endif; ?>
			</nav>
		</div>
	</header>
