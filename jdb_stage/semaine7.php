<!DOCTYPE html>
<html lang="fr-BE">
<head>
	<meta charset="UTF-8">
	<title>Journal de bord stage • semaine 7</title>
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



	<h1 class="projectTitle-1 title2">Stage - Semaine 7</h1>
	<div class="centerZone jdbStageDay jdbStageDay--lun jour1">
		<h2 class="jdbStage__subtitle">JOUR 31 - 14/03</h2>
		<p>Pour commencer cette septième semaine, j’ai travaillé sur les styles d’impressions du <a href="http://hel.djm.eu">site de la HEL</a>. J’ai donc configuré des styles plus ou moins généraux comme les polices, l’affichage de base des éléments images, formulaire ou autre et j’ai aussi masqué les éléments inutiles. Après cela, je suis venu travailler page par page pour les éléments qui sont propres à ces pages.</p>
		<p>J’ai passé un long moment sur la mise en place des styles d’impressions afin de m’assurer d’utiliser les bonnes pratiques telles qu’afficher l’url en plus petits et entre parenthèses à côté des liens ou encore, gérer la répartition des pages etc. Je me suis aidé de plusieurs sites de référence pour assimiler les pratiques les plus courantes pour les css d’impression et j’ai testé avec Chrome et Firefox et IE pour voir le résultat.</p>
		<p>Après ça, j’ai mis en forme une image pour l’openGraph du <a href="http://djm-mobile.be">site djm-mobile.be</a>. Ensuite, je suis revenu sur les styles d’impression en corrigeant de petites erreurs. Par exemple, à la page formation du site, il y a un sous-menu qui affiche le contenu du lien actif. Par contre, il s’agit de liens sans valeur dans le href (avec lesquels j’aurais pu utiliser le pseudo-élément :target pour afficher le contenu actif et masquer les autres) du coup, j’ai dû mettre tous éléments en display:none; sauf le premier et utiliser le :nth-child pour afficher le contenu actif car les styles d’impression ne prennent pas le javascript.</p>
		<a class="image-popup-no-margins" href="./img/djm-mobile-og.png">
			<img class="style__img--center style__img--middleSize" src="./img/djm-mobile-og.png" alt="illustration de l'image open graph">
		</a>
		<p>Pour finir la journée, j’ai préparé l’autre site pour demain, j’ai « commité » mes projets et j’ai testé de nouveaux plugins pour le site de la siroperie (dont un qui a fait momentanément bloqué l’administration du site car il voulait PHP 5.5).</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--mar jour2">
		<h2 class="jdbStage__subtitle">JOUR 32 - 15/03</h2>
		<p>Aujourd’hui, j’ai commencé la journée en remarquant que l’administration du <a href="http://sirop.djm.eu">site de la siroperie</a> était de nouveau disponible car mon maître de stage avait changé la version de PHP sur le serveur. Du coup, j’ai pu tester les plugins de newsletter pour le site et celui de Quentin. J’ai donc regardé les différents plugins et j’en ai sélectionné deux.</p>
		<p>Je les ai montrés à Thomas et Quentin mais hélas, un des deux posait problème car l’un utilisait une URL générée par mailchimp et l’autre utilise l’API de mailchimp. Alors que le premier suit un fonctionnement de base, le second permet plus de fonctionnalité comme le fait d’entrer seulement son adresse et être directement sur la liste sans devoir valider par email ou autre.</p>
		<p>On a donc convenu de travailler avec le deuxième plugin (wp_subscribe) et j’ai changé un peu les styles css pour rendre un affichage un peu plus comme le premier plugin qui était plus sympa.</p>
		<a class="image-popup-no-margins" href="./img/newsletter1.png">
			<img class="style__img--center style__img--middleSize" src="./img/newsletter1.png" alt="illustration de la newsletter du site">
		</a>
		<p>Après ça, j’ai changé une image d’un projet pour le <a href="http://djm-mobile.be">site de djm-mobile</a> puis j’ai discuté avec Thomas d’une fonctionnalité qu’il voulait ajouter sur les sites <a href="djmsport.djm.eu">sport</a> et <a href="http://djm-mobile.be">mobile</a> un bouton en position fixe pour envoyer un mail. Je lui ai expliqué que ce n’était pas une bonne idée de faire cela en lui démontrant pourquoi (entre autre un problème d’espace sur les petits écrans et la gène visuel occasionnée).</p>
		<p>Pour le reste, j’ai travaillé les styles d’impression du <a href="http://archipix.djm.eu">site archipix.djm.eu</a>. J’ai donc comme pour le
			<a href="http://hel.djm.eu">site de HEL</a>, regardé le site de façon globale et appliqué des styles d’abord globaux puis spécifique à chaque éléments.</p>
		<p>J’ai eu quelques petits problèmes de configurations avec le site lié au cache dans Drupal, à la configuration des ftp dans Phpstorm et également à la compilation de LESS mais j’ai finalement réussi à mettre en forme les styles d’impression.</p>
		<p>En fin de journée, Sophie m’a ajouté un nouveau projet de JIRA qui consiste à ajoutant un bandeau informant les visiteurs de l’utilisation des cookies dans une petite dizaine (oui, une dizaine !) de projets divers (Wordpress, Drupal, prestashop et magneto) et pour certain d’entre-eux le logo de djm dans le footer. J’ai aussi reçu quelques corrections concernant les styles d’impression que j’ai fait pour Archipix que je ferai demain.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--mer jour3">
		<h2 class="jdbStage__subtitle">JOUR 33 - 16/03</h2>
		<p>Aujourd’hui, j’ai commencé la journée en mettant en place les styles d’impressions sur base des commentaires laissés pour les corrections. J’ai entre-autre ajusté l’affichage des images et des liens et j’ai également affiché plus de contenu pour la page d’accueil et celle de recherche.</p>
		<p>J’ai discuté aussi avec Benoît (le designer et aussi développer du site) par rapport à l’affiche de certaines images utiles qui étaient utilisées en image de fond et donc pas imprimable (même si certains navigateurs permettent cela avec la propriété -webkit-print-color-adjust mais seulement, ce n’est pas encore standardisé et donc pas fiable et utilisable).</p>
		<p>J’ai aussi créé un visuel pour le site <a href="http://djmsport.djm.eu">djm sport</a> en suivant les indications de Thomas en suivant un modèle existant sur un autre site et en ré-adaptant une proposition de la graphiste qui s’en occupait. J’ai donc cherché des images et mis en place les éléments en vectoriel avec Illustrator.</p>
		<a class="image-popup-no-margins" href="./img/visuelDjmSport.png">
			<img class="style__img--center style__img--middleSize" src="./img/visuelDjmSport.png" alt="illustration de la newsletter du site">
		</a>
		<p>J’étais plutôt étonné en fait de devoir revenir sur un design d’une graphiste de la boîte, mais si Thomas me l’a demandé, c’est probablement que la graphiste n’était pas disponible pour retravailler sur ça ou alors qu’il voulait voir autre chose.</p>
		<p>Enfin, j’ai passé presque toute l’après-midi à récupérer les git et installer les sites sur ma machine pour pouvoir installer/activer et styliser les plugins d’avertissement d’utilisation de cookies. En effet, il y a beaucoup de sites et j’installerai les plugins demain.</p>
		<a class="image-popup-no-margins" href="./img/demande10sites.png">
			<img class="style__img--center style__img--middleSize" src="./img/demande10sites.png" alt="illustration de la newsletter du site">
		</a>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--jeu jour4">
		<h2 class="jdbStage__subtitle">JOUR 34 - 17/03</h2>
		<p>Aujourd’hui, j’ai passé toute la journée à installer les plugins pour l’affichage d’un message prévenant de l’utilisation des cookies. J’ai commencé par les sites Wordpress pour lesquels j’ai installé <a href="https://fr-be.wordpress.org/plugins/eu-cookie-law/screenshots/">EU Cookie Law</a> et ça a très bien fonctionné et rapidement surtout.</p>
		<p>Après ça, j’ai installé le module <a href="https://www.drupal.org/project/eu_cookie_compliance">EU Cookies Compilance</a> pour Drupal. Là ça se complique. Déjà, il y a plusieurs versions en fonction de la version active de Drupal (où l’emplacement des modules dans les dossiers n’est plus le même) et ensuite, plusieurs problèmes avec le plugin lié aux permissions et aux traductions car j’ai dû jouer avec le cache de Drupal et revenir plusieurs fois sur les traductions. J’avais dans un premier temps traduit moi-même d’anglais à français mais au finale, j’ai dû remettre tout en anglais et utiliser les traductions de termes de Drupal (petite perte de temps mais je ne connaissais pas et j’ai donc découvert une fonctionnalité en plus sur Drupal).</p>
		<p>J’ai donc installé puis testé chaque plugin pour voir si le résultat était correct. Après ça, j’ai demandé à Sophie si je devais modifier le style d’affichage mais celui par défaut est tout à fait correct et a été validé.</p>
		<p>Et donc, j’ai passé toute la journée à travailler sur ça et vérifier le fonctionnement en corrigeant des choses par-ci par-là car tous les sites ne sont pas fait de la même façon et donc parfois, en faisant les mêmes manœuvres, le modules ne s’affichait pas toujours.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--ven jour5">
		<h2 class="jdbStage__subtitle">JOUR 35 - 18/03</h2>
		<p>Aujourd’hui, la journée a commencé en beauté&nbsp;! Je me suis mis au travail en continuant la mise en place des messages informant les internautes de l’utilisation des cookies et j’ai remarqué que les sites de la Wallonie (la Wallonie à vélo, tourisme Wallonie et meeting Wallonie) n’étaient plus accessibles. Je me suis dit sur le moment que ça devait être un problème du serveur et que ça allait être réglé rapidement. </p>
		<p>Un peu plus tard dans la matinée, j’entends un peu d’agitation en Haut (étage du patron, des gens de marketing et de la secrétaire de direction) et il s’agissait de Domi (le patron) qui parlait à Régis justement de ce problème lié aux sites de la Wallonie. En écoutant davantage, j’ai découvert en fait que … Les gens qui s’occupent de la gestion des sites de la Wallonie ont remarqué un petit bandeau qui est apparu subitement dans le bas de leurs sites et que ça parlait de «&nbsp;cookies&nbsp;» et donc, la première chose qui leur est venu à l’esprit c’est « oulala… c’est surement un VIRUS&nbsp;! Il faut tout couper… vite ! ». Donc c’est ce qu’ils ont fait; ils ont coupé leur serveur (oui… pour un message de cookies. Un peu tendu). Du coup, le patron de djm trouvait ça ridicule de leurs part car ils rejetaient la faute sur djm qui aurait dû les prévenir alors qu’il s’agit «&nbsp;d’un truc qu’on voit sur tous les sites&nbsp;» (comme le dit le patron).</p>
		<a class="image-popup-no-margins" href="./img/coupureServeur.png">
			<img class="style__img--center style__img--middleSize" src="./img/coupureServeur.png" alt="illustration de la newsletter du site">
		</a>
		<p>Sinon pour le reste de la journée, j’ai continué à travailler sur les cookies en les intégrant sur tous les sites et en traduisant les messages dans Drupal. J’ai aussi corrigé quelques fautes d’orthographe qui s’étaient glissées dedans (j’avais laissé les traductions par défauts à certains endroits) et enfin, j’ai changé le style d’affichage du message des cookies qui s’affichait de base avec un fond bleu qui n’allait pas avec tous les sites. J’ai donc mis un fond plus sombre en transparence et les boutons avec une hiérarchie et un style qui dépend du site en question (en ajoutant une couleur au survole&nbsp;/&nbsp;focus qui est la couleur principale du site).</p>
		<p>J’ai par ailleurs travaillé sur le positionnement du site dim-mobile, ajouter un logo dans le footer d’un site Drupal, découvert plus en profondeur Drupal mais surtout passé beaucoup de temps sur les cookies à régler des problèmes par-ci par là avec Drupal.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--summary">
		<h2 class="jdbStage__subtitle">Résumé de la semaine&nbsp;:</h2>
		<p>Cette semaine, j’ai travaillé principalement sur 5 choses&nbsp;: </p>
		<p>En premier, les styles d’impressions de deux sites Internet en me renseignant sur les bonnes pratiques et en testant au fur et à mesure le résultat.</p>
		<p>Ensuite, le graphisme d’images pour le site de djm sport et pour l’open graph de celui de djm mobile et le formulaire d’inscription à la newsletter pour le site de la siroperie.</p>
		<p>Enfin, l’ajout de modules Drupal et Wordpress pour prévenir de l’utilisation de cookies sur une petite dizaine de sites Web. D’ailleurs, pour une raison qui me semble encore bien marrante, le petit messages que j’ai ajouté ont involontairement causé l’arrêt du serveur des sites de la Wallonie.</p>
		<p>Pour le reste, la semaine s’est bien déroulé et j’ai découvert un peu plus Drupal, son architecture et son fonctionnement.</p>
	</div>
	<div class="centerZone">
		<nav class="jdbStage__nav">
			<h3 class="hidden">Sous-menu de navigation</h3>
			<a href="./semaine6.php">Semaine précédente</a><a href="./sommaire.php">Sommaire</a><a href="./semaine8.php">Semaine suivante</a>
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
