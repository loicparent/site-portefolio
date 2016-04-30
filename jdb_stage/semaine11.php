<!DOCTYPE html>
<html lang="fr-BE">
<head>
	<meta charset="UTF-8">
	<title>Journal de bord stage • semaine 11</title>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="Author" content="Loïc Parent" />
	<meta name="description" content="Description en détail de mon stage jour par jour" />
	<!-- Fav icon (http://www.favicon-generator.org/) -->
	<link rel="apple-touch-icon" sizes="57x57" href="../img/favicon.ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../img/favicon.ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon.ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../img/favicon.ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon.ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../img/favicon.ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../img/favicon.ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../img/favicon.ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../img/favicon.ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../img/favicon.ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon.ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../img/favicon.ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon.ico/favicon-16x16.png">
	<link rel="manifest" href="../img/favicon.ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	
	<!-- Ne pas indexer le contenu -->
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">
	<!-- Fav icon -->
	
	<link href='https://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
	<link href="../css/main.<?php echo filemtime('../css/main.css'); ?>.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div class="wrapper">
	<header class="header">
		<div class="centerZone">
			<a href="http://www.loic-parent.be" class="header__logo">Loïc Parent</a>
			<div class="hambMenu">
				<span></span>
			</div>
			<nav id="menu" class="header__menu mainMenu">
				<h2 class="hidden">Menu de navigation</h2>
				<a href="../index.php#content" class="mainMenu__item">Accueil</a><a href="../index.php#aboutMe" class="mainMenu__item">&Agrave; propos</a><a href="../index.php#works" class="mainMenu__item">Mes projets</a><a href="../index.php#contact" class="mainMenu__item">Contact</a>
			</nav>
		</div>
	</header>



	<h1 class="projectTitle-1 title2">Stage - Semaine 11</h1>
	<div class="centerZone jdbStageDay jdbStageDay--lun jour1">
		<h2 class="jdbStage__subtitle">JOUR 51 - 11/04</h2>
		<p>Cette semaine a commencée avec la suite de ma petite formation perso. de Drupal. Je me suis donc mis à tester un peu comment fonctionne l’outils en cherchant sur Internet et en naviguant à travers l’architecture du CMS. J’ai commencé à mettre en place le site en créant des régions et en ajoutant des blocks dedans afin d’y injecter mon contenu.</p>
		<a class="image-popup-no-margins" href="./img/logo-drupal-lego.jpg">
			<img class="style__img--center style__img--middleSize" src="./img/logo-drupal-lego.jpg" alt="logo druapl en légo">
		</a>
		<p>Je trouve assez marrant le fait que ça fonctionne en mode « Légo » et qu’on sache vraiment organiser le contenu par petites unités indépendantes. Je m’y habitue en essayant de trouver des liens logiques avec Wordpress pour pouvoir comparer et apprécier cet outil autant que Wordpress. J’ai mis un petit temps pour bien comprendre la base du fonctionnement surtout avec le principe de vue, page, contenu, block, mais une fois que je me suis mis en route et que j’ai commencé à mettre en place la première page, c’est venu petit à petit un peu plus clair.</p>
		<p>Entre temps, j’ai aussi amélioré les performances du <a href="http://djm-mobile.be">site djm mobile</a> pour l’adapter aux mobiles (surprise) et donc j’ai installé plusieurs plugins pour tester mais je suis rester sur WP_super_cache (ou WP_total_cache… enfin quelque chose_total_cache en tout cas) qui est vraiment complet et permet de travailler de façon très ciblé sur ce qu’on veut mettre en cache. J’ai aussi optimisé les images du slider et des pages pour qu’elles ai un poids adapté au mobile. Pour ça, j’ai travaillé avec plusieurs outils mais principalement avec le
			<a href="https://tinypng.com">site tinyPNG</a> qui permet de réduire considérablement le poids des jpeg et des png.</p>
		<p>En fin de journée, je suis allé voir mon maître de stage pour parler de Drupal et d’Élite Soccer car le client vient demain pour une première formation. Je vais devoir expliquer demain à Régis comment utiliser l’admin du site et j’assisterai peut-être aussi à la formation s’il y besoin.</p>
		<p>Enfin, aujourd’hui, djm a reçu son nouveau joujou : une sorte de panneau à roulette avec un téléviseur intégré pour afficher le score lors d’une partie de babyfoot connecté avec une application mobile.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--mar jour2">
		<h2 class="jdbStage__subtitle">JOUR 52 - 12/04</h2>
		<p>Aujourd’hui, j’ai commencé la journée en revenant un cours instant sur le <a href="http://sirop.djm.eu">site de la siroperie</a> pour enlever la barre de recherche du header. Ensuite, j’ai repris Drupal avec le site de DKD en mettant en place le header, une première page de base avec tous les types de contenu de base (ex : titres, listes, paragraphes etc.), le footer en ajoutant les contenus, bien souvent sous forme de blocs dans des régions et en définissant les CSS.</p>
		<p>J’ai également généré et intégré des favicons et j’ai défini les styles de base du sites au complet.</p>
		<p>Après, je me suis renseigné sur la façon dont je vais mettre en place le reste du site. Je vais devoir mettre en place des taxonomies et ajouter des champs pour choisir d’autres options que celles de base (par exemple, ajouter une couleur principale à une page en particulier).</p>
		<p>Aussi, le matin on a eu la visite de responsables du Standard de Liège qui venaient voir le prototype créé pour le babyfoot connecté et ils ont complètement été séduit par l’objet. Du coup, on a tous bu une petite bière (très petite pour moi car bon… c’est une bière ^^) mais c’est bien agréable de profiter du soleil sur la terrasse de djm avec toute l’équipe.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--mer jour3">
		<h2 class="jdbStage__subtitle">JOUR 53 - 13/04</h2>
		<p>Cette journée, je me suis plus focalisé sur la mise en place du Javascript pour ajouter des éléments d’interaction (ajouter un header fix à partir d’un certain moment et un bouton back to top qui est fix jusqu’à ce qu’il arrive au-dessus du footer où il redevient static alors). Ensuite, je suis revenu sur la mise en place du css pour ces éléments et pour mieux définir la structure organisationnelle du css.</p>
		<p>J’ai aussi mis en place la page d’explication des cookies (qui est aussi une page de base du site) et je me suis intéressé à une analyse de la structure des régions et blocks pour le site. J’ai également ajouté des menus et peaufiner le footer.</p>
		<p>Enfin, j’ai fait une spritesheet pour les logos car sur certaines pages, le logo change pour suivre la couleur de la page.</p>
		<p>Je commence à mieux voir vers où je vais avec Drupal même si certains éléments me semble encore un peu flou. Ça devrait aller mieux dans les prochains jours j’espère mais je suis content de voir et apprendre un nouvel outil avec toutes les spécificités qui vont avec.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--jeu jour4">
		<h2 class="jdbStage__subtitle">JOUR 54 - 14/04</h2>
		<p>Aujourd’hui, j’ai commencé la journée en modifiant l’affichage du bouton back to top pour peaufiner son design. Ensuite, j’ai appris que finalement, c’est moi et Delphine (une designer de la boite) qui allons faire la formation du site Élite Soccer. J’ai donc passé un moment à expliquer à Delphine le thème en regardant une à une les fonctionnalités de ce dernier et en montrant les possibilités qu’il propose.</p>
		<p>Ensuite, j’ai apporté quelques changements au <a href="http://elitesoccer.djm.eu">site Élite Soccer</a> en réduisant par exemple la taille de la carte Google en mobile pour ne pas avoir le problème d’une carte qui empêche de descendre dans la page. J’ai aussi ajouté un plugin de newsletter qui fonctionne avec Compaign Monitor.</p>
		<p>Enfin, je suis revenu sur le site de DKD en réfléchissant sur la structure du contenu et la procédure pour mettre en forme le site et ses types de contenu.</p>
		<p>En fin de journée, Régis (mon maître de stage) est venu un peu près de moi pour m’expliquer comment faire un nouveau type de contenu (news) qui fonctionne avec une vue et qui utilisera une taxonomie pour ajouter des tags particuliers. Il m’a donc expliqué un peu des techniques particulières de Drupal et comment revenir sur l’affichage de template.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--ven jour5">
		<h2 class="jdbStage__subtitle">JOUR 55 - 15/04</h2>
		<p>Cette journée a été mouvementée par plusieurs choses. Dans un premier temps, j’ai travaillé sur la mise en place de la page news du site DKD (je mettrai des photos du site début de semaine car pour le moment, il est en local). J’ai donc du créé un nouveau type de contenu et je vais devoir le faire boucler dans une vue avec des taxonomies pour gérer les tags.</p>
		<p>Dans la matinée, Lorrain est venu m’expliquer comment, avec Drual, il avait mis en place un système d’ajout de couleur particulière à un élément de menu. En effet, le site a à plusieurs endroits précis, des couleurs qui changent et mieux que ça, le logo change aussi en fonction de la couleur du site. C’est pourquoi, comme dans drupal un contenu n’est pas forcément lié à une page (mais aussi à une vue, un nœud ou autre) il faut lier la couleur au menu et non à la page.</p>
		<p>Bref, un peu de chipotage car ça ne fonctionnait pas du premier coup mais on est arrivé à mettre en place la chose pour la fin de matinée. Lorrain m’a d’ailleurs expliqué plusieurs petites choses sur Drupal à ce moment là.</p>
		<p>Après, j’ai justement géré le css en fonction de la couleur pour venir modifier les pages et changer également le logo que j’ai mis dans une sprite sheet pour pouvoir changer de couleurs sans devoir pour autant faire plusieurs requêtes.</p>
		<p>Ensuite, j’ai adapté ma structure de site de sorte à redéfinir des blocks et des régions particulières à des endroits données. (par exemple, j’ai mis 4 blocks dans le footer et non 4 régions qui contiennent un ensemble de block.</p>
		<p>J’ai créé de nouveaux types de contenu pour tester et certain comme les news, avec des field collection (ce qui complique un peu la chose). Il y a aussi Benoît qui est venu m’expliquer plusieurs choses avec Drupal et entre-autre la gestion de contenu avec les différents types et les field collection.</p>
		<p>Après tout ça, j’ai dû revenir sur le <a href="http://elitesoccer.djm.eu">site d’Élite Soccer</a> car le client venait dans l’après-midi pour avoir la formation du site. Du coup, j’ai discuté avec Delphine des choses à faire et de la façon dont on allait procéder pour présenter le site et j’ai également modifié un peu certains éléments du site. Comme nettoyer des pages de contenu qui utilisaient des contenus qui ne sont pas utiles au client.</p>
		<p>Enfin, vient cette fameuse formation où on a donc présenté le site au client avec Delphine et à la fin, le client semblait assez satisfait de la formation même si ça fait beaucoup d’information en deux heures. On a quand même eu un peu de mal à tenir le client car quand on expliquait un élément du site, ils voulaient savoir comment fonctionnait un autre qu’on avait prévu d’expliquer plus tard. Du coup, c’était difficile de suivre notre fil conducteur mais ça s’est quand même bien passé.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--summary">
		<h2 class="jdbStage__subtitle">Résumé de la semaine&nbsp;:</h2>
		<p>Une semaine de plus, une semaine de moins et au décompte, il ne reste déjà plus qu’une semaine de stage !</p>
		<p>J’ai travaillé durant celle-ci sur plusieurs projets comme le site d’Élite Soccer que j’ai dû présenter fin de semaine avec Delphine, le site de DKD qui est réalisé (enfin en cours de réalisation) avec Drupal et enfin, quelques améliorations du site de djm mobile.</p>
		<p>J’ai donc progressé avec Drupal qui semble encore relativement complexe mais déjà un peu plus clair que la semaine dernière. Du coup, j’ai découvert comment mettre en place plusieurs choses et j’ai déjà créé plusieurs pages et éléments du site.</p>
		<p>J’ai terminé la semaine en donnant avec Delphine une formation au client Élite Soccer pour son site et j’ai donc eu l’occasion de voir comment on donne justement une formation d’un site à un client en respectant un certain temps impartit et en devant résumer au maximum les fonctions importants du site.</p>
	</div>
	<div class="centerZone">
		<nav class="jdbStage__nav">
			<h3 class="hidden">Sous-menu de navigation</h3>
			<a href="./semaine10.php">Semaine précédente</a><a href="./sommaire.php">Sommaire</a><a href="./semaine12.php">Semaine suivante</a>
		</nav>
	</div>



	</div>
	<footer class="footer">
		<p>
			<a href="mailto:info@loic-parent.be" title="Envoyer un mail">Loïc Parent</a> 2016 • <a href="../sitemap.php">Plan du site</a>
		</p>
	</footer>
	
	<!-- Script en fin de body -->
	<script type="text/javascript" src="../script/jquery-1.11.3.min.<?php echo filemtime('../script/jquery-1.11.3.min.js'); ?>.js"></script>
	<script type="text/javascript" src="../script/app.<?php echo filemtime('../script/app.js'); ?>.js"></script>
	<script type="text/javascript" src="../script/littleMenu.<?php echo filemtime('../script/littleMenu.js'); ?>.js"></script>
	<script type="text/javascript" src="../script/magnificPopup.<?php echo filemtime('../script/magnificPopup.js'); ?>.js"></script>
</body>
</html>
