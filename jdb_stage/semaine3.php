<!DOCTYPE html>
<html lang="fr-BE">
<head>
	<meta charset="UTF-8">
	<title>Journal de bord stage • semaine 3</title>
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



	<h1 class="projectTitle-1 title2">Stage - Semaine 3</h1>
	<div class="centerZone jdbStageDay jdbStageDay--lun jour1">
		<h2 class="jdbStage__subtitle">JOUR 11 - 15/02</h2>
		<p>Aujourd’hui, la journée à commencée par une bonne surprise: la page Facebook d’Évolution est de nouveau comme avant sans problème. On ne sait pas ce qui a causé le problème, mais visiblement, l’assistance de Facebook a trouvé une solution (gardée secrète). J’ai donc regardé pour ajouter des lieux mais comme je l’avais remarqué avant, la page n’a pas été définie comme « officielle » lors de sa création et il semblerait qu’on ne sache le faire par après (j’ai beaucoup regardé sur Internet et aucune solution n’apparaît clairement malgré une forte demande sur ce problème). Je me retrouve donc bloqué pour l’affichage de plusieurs cartes au sein d’une seule page mais au moins, maintenant, on a la page au complet avec toutes les informations et tous les paramètres possible.</p>
		<p>Après cela, j’ai installé une version de test du site Wordpress pour la siroperie d’Aubel afin de garder un modèle complet sous la main et garantir ainsi de retrouver la façon de codé utilisé de base dans le thème. On a également, avec mon maître de stage, cherché et trouvé une solution pour le problème de sécurité lié au dossier. Le problème était créé par un soucis de permission lié au logiciel IIS. On a donc du changé la règle qui bloquait cela.</p>
		<p>Ensuite, la secrétaire de direction (Aurélie) est venue me trouver pour me parler du <a title="accéder au site d'évolution" href="http://evolutionclub.be">site Internet d’Évolution</a> et savoir si le site était prêt pour être mis en ligne afin d’injecter le contenu. Je lui ai donc dit qu’il restait quelques détails à vérifier mais qu’il serait en ligne dans la matinée. J’ai donc changé momentanément de projet pour revenir sur Évolution et j’ai vérifié que tout fonctionnait correctement, ajouté les pages et menus dans l’administration en ligne et j’ai mis le tout en ligne.</p>
		<p>Aurélie m’avait aussi demandé d’ajouter un lien à côté du bouton pour s’ajouter à la newsletter et donc j’en ai profité pour le faire à ce moment-là. J’ai changé un peu le code et le css de sorte à ce que quand le menu de la newsletter descend, le lien ne gène pas la lisibilité du texte etc. Après tous les changements, j’ai commité les modifications et ensuite, j’ai mis en ligne.</p>
		<a class="image-popup-no-margins" href="./img/mywellness.png">
			<img class="style__img--center style__img--smallSize" src="./img/mywellness.png" alt="lien pour mywellness">
		</a>
		<p>Après cela, je suis revenu sur le site de la siroperie et j’ai commencé à trier le contenu des menus et pages afin de ne garder que ce qui m’est utile et éliminé le superflu. J’ai également commencé à ajouter du contenu pour mettre en place les pages de base. Pour cela, j’avais demandé à Thomas s’il était disponible début d’après-midi pour pouvoir lui parler et savoir ce qu’il voulait plus en détails.</p>
		<p>En milieu d’après-midi, Sophie, la responsable de projets Web est venue me trouver pour quelques petites modifications de la newsletter d’Eurotoque. J’ai donc à nouveau changé de projet pour faire ces changements et j’ai d’ailleurs remarqué qu’il y avait un problème avec Mailchimp pour l’édition en ligne de la newsletter. En effet, quand je fais des changements, certain d’entre-eux ne se font pas (comme par exemple, le déplacement d’un bloc qui ne s’enregistre pas). J’ai donc essayé beaucoup de choses pour tenter de résoudre le problème mais en vain. J’ai alors été demander à mon maître de stage s’il avait déjà eu ce problème par avant, mais il n’a pas non plus trouvé de solution. Il semblerait que Mailchimp interprète mal le code de la newsletter et donc ça pose problème pour certaines fonctionnalitées.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--mar jour2">
		<h2 class="jdbStage__subtitle">JOUR 12 - 16/02</h2>
		<p>J’ai commencé cette journée en relevant mes mails et j’ai remarqué que Delphine (une des graphiste) m’avait envoyée une image accroche pour le site évolution adaptée aux petites écrans. J’ai donc ajouté cette image et paramétré Wordpress pour pouvoir administrer également cette petite image. J’ai aussi changé le css pour afficher la grande image pour une taille d’écran supérieur à 840 pixel et en dessous de cette taille masquer cette image et affiche celle en taille réduite.</p>
		<p>Après ça, je me suis remis sur le site de la siroperie en mettant en place page à page le site. J’ai donc adapté le menu en supprimant des choses inutiles et ajouter seulement les pages utiles pour le site. J’ai beaucoup testé l’affichage car le but de ce projet était de faire tout sans venir modifier le code et donc travailler uniquement dans l’administration (si possible). Le seul changement que j’ai dû faire au niveau du code, c’est masquer certains éléments qui n’étaient pas masquablent.</p>
		<p>Sinon, pour le reste, j’ai regardé pour ajouter le style du contenu en pensant que le contenu allait changer et regarder pour rendre au mieux l’affichage.</p>
		<p>Par ailleurs, j’ai remarqué que beaucoup de choses ne fonctionnaient pas correctement une fois le Javascript désactivé mais bon, j’ai essayé de faire en sorte qu’un maximum de choses fonctionnent sans et pour le reste, on va faire sans.</p>
		<p>Après, j’ai dû revenir sur la newsletter de « la Wallonie à vélo » pour venir ajouter de nouveaux éléments dans les quatre langues.</p>
		<p>En fin de journée, j’ai fini de configurer les pages du site et demain, je mettrais le site en ligne et on regardera avec Thomas si ça lui convient ou s’il reste des choses à changer.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--mer jour3">
		<h2 class="jdbStage__subtitle">JOUR 13 - 17/02</h2>
		<p>Aujourd’hui matin, j’ai mis en place une nouvelle <a title="voir la newsletter dans votre navigateur" href="http://emailing.djmweb.be/t/ViewEmail/r/5F6DCEB370CD99BE2540EF23F30FEDED">newsletter pour la HEL</a>. Donc j’ai fait le html en y intégrant le style et j’ai appliqué les bonnes pratiques acquises à force. J’ai directement envisagé la newsletter en responsive et avec les balises pour l’édition de celle-ci. J’ai fait des tests et corrigé les erreurs persistantes. J’ai consacré toute la matinée à cela et une partie de l’après-midi pour les tests et les corrections. Plusieurs problèmes liées au serveurs et au routeur ont bloqués un peu les tests et les accès aux bases de données. Donc je n’ai pas su travailler sur les sites Wordpress à cause de cela.</p>
		<a class="image-popup-no-margins" href="./img/newsletterHel.png">
			<img class="style__img--right style__img--smallSize" src="./img/newsletterHel.png" alt="La newsletter de la HEL">
		</a>
		<p>L’après-midi, j’ai fait les tests et je suis revenu sur une ancienne newsletter pour d’autres petits ajouts dans les différentes langues.</p>
		<p>J’ai dû changer les DNS pour passé au-delà du routeur interne afin d’avoir accès à Internet pour les tests et pour envoyer le tout à la responsable de projet Web.</p>
		<p>Après cela, j’ai été discuter avec Benjamin, un stagiaire en e-marketing, pour la création du site DJM pour mobile. En effet, je vais travailler avec lui pour la création de ce site. On a donc chercher après un bon thème Wordpress qui correspond aux envies du patron et sélectionné plusieurs thèmes.</p>
		<p>Une journée un peu plus light à cause du problème de serveur mais qui m’a permis de travailler sur d’autre chose.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--jeu jour4">
		<h2 class="jdbStage__subtitle">JOUR 14 - 18/02</h2>
		<p>J’ai entamé cette journée en installant MySQL sur l’ordinateur pour pouvoir travailler en local sur le site mobile de DJM étant donné qu’on a plus accès pour le moment au serveur en ligne et donc aux bases de données et par conséquent, au site de la siroperie.</p>
		<p>J’ai donc configuré l’ordinateur pour faire fonctionner tout en local avec IIS et MySQL et toute la journée, j’ai travaillé sur le site de DJM. J’ai dans un premier temps eu une réunion avec Domi (le patron), Quentin et benjamin (deux de marketing) à propos du site, du choix du thème et du but de ce site. Après ça, j’ai pu me consacrer à l’installation du thème et sa configuration.</p>
		<p>Le thème fonctionnait plus ou moins comme celui de la siroperie mais était quand même assez différent au niveau du type de contenu. Je travaille avec des sous-thèmes (ou thèmes enfants pour suivre les termes employés par Wordpress) pour garder le thème principal intacte et surtout, pour garder tous mes changements en un même endroit. Le fait de travailler comme cela me permet de corriger certaines erreurs d’affichage en CSS par exemple même s’il semble qu’il y a le cache qui m’empêche de travailler correctement dans ce sens.</p>
		<a class="image-popup-no-margins" href="./img/djmMobile_formulaire.png">
			<img class="style__img--right style__img--smallSize" src="./img/djmMobile_formulaire.png" alt="illustration du problème d'affichage des placeholder">
		</a>
		<p>J’ai donc configurer tout le site selon un schéma de contenu plus ou moins précis des pages. Il s’agit d’un site One-page et je commence à avoir de plus en plus l’habitude de Wordpress. Le thème à néanmoins quelques petits problèmes (par exemple au niveau du logo ou encore du formulaire de contact) mais rien de très irréparable.</p>
		<p>C’est assez sympathique de travailler avec Wordpress comme ça, car ça me permet de découvrir toutes les fonctionnalités de Wordpress et de voir tout ce qu’on peut faire avec cet outil.</p>
		<p>Je me suis renseigné sur la meilleur façon (ou en tout cas une façon efficace) de mettre le site en plusieurs langues et j’ai hâte de tester ça dans les prochains jours.</p>
		<p>Pour ce qui est de cette journée, je l’ai donc consacrée à ce site, de pars sa taille, mais aussi car pour le moment, je n’ai pas d’autre projet exécutable liés à ce problème de serveur entre autre.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--ven jour5">
		<h2 class="jdbStage__subtitle">JOUR 15 - 19/02</h2>
		<p>Voici la fin de la semaine et aujourd’hui, j’ai travaillé sur le site de djm mobile. J’ai passé la journée à installer correctement les pages et mettre le thème en place en suivant les instructions et désirs des responsables du projet (à savoir les personnes de marketing).</p>
		<div class="zoom-gallery">
		    <a href="./img/djmMobile_visualComposer1.png">
				<img class="style__img--right style__img--smallSize" src="./img/djmMobile_visualComposer1.png" alt="illustration de visual composer">
		    </a>
		    <a href="./img/djmMobile_visualComposer2.png">
				<img class="style__img--right style__img--smallSize" src="./img/djmMobile_visualComposer2.png" alt="illustration de visual composer">
		    </a>
		    <a href="./img/djmMobile_visualComposer3.png">
				<img class="style__img--right style__img--smallSize" src="./img/djmMobile_visualComposer3.png" alt="illustration de visual composer">
		    </a>
		</div>
		<p>J’ai un peu de frustration par rapport au fait d’avoir parfois l’impression de travailler sur Wix. En effet, l’outil Visual Composer de Wordpress est très intéressant et franchement très bien je trouve pour la réalisation d’un site car on voit très bien les changements qu’on effectue et surtout, on n’a pas à voyager de l’interface aux fichiers et modifier du code pour changer radicalement de mise en page. Le problème que je remarque par rapport à ça, c’est que j’ai l’impression de ne pas pouvoir contrôler comme je l’entends le site. Je dois essayer de trouver à certains moments l’endroit où se trouve tel réglage ou encore à d’autre quel objets est lié à une page donnée mais surtout, je dois m’habituer à un thème que je ne connais pas du fait que je ne l’ai pas réalisé.</p>
		<p>Même si très souvent, ce sont des thèmes tout à fait excellent et réalisés avec beaucoup de maîtrise, il arrive que je doive aller changer des éléments dans le code (très souvent que du css). À ce moment-là, je dois essayer de trouver les bons fichiers et comprendre la façon dont l’auteur du thème a réalisé ce dernier. Je dois aussi dire qu’il est parfois assez énervant de voir qu’un thème ne permet pas autant de liberté que celles que je pourrai avoir en créant le thème moi-même (même si ça prend plus de temps).</p>
		<p>Cette façon de faire des sites est, il est vrai, assez perturbante mais très intéressante car je vois comment sont fait les thèmes et surtout, je me mets vraiment à la place d’un utilisateur et donc, je vois quels sont les besoins, les manques ou encore les options intéressantes.</p>
		<p>Ce genre de travail me permet aussi de me consacrer plus sur l’agencement du design (pas vraiment la création du design étant donné qu’on est limité aux contraintes, parfois très larges, du thème) sans me pré-occuper du code qui est dernière celui-ci et de prendre conscience des enjeux lié à cela. Comme le fait que bien souvent, le Javascript est essentiel dans les thèmes proposé et que donc, le site n’est visible que s’il est présent et activé.</p>
		<p>Je remarque également qu’il est utile de savoir faire la différence entre un site de qualité et un site qui doit être de qualité, mais fait rapidement pour limiter les coûts (ce qui veut dire également limiter la qualité en quelque sorte). Mais c’est très intéressant de faire ce genre de travail.</p>
		<a class="image-popup-no-margins" href="./img/djmMobile_visualComposer_error.png">
			<img class="style__img--right style__img--smallSize" src="./img/djmMobile_visualComposer_error.png" alt="illustration du problème lié à Visual Composer du thème">
		</a>
		<p>Par contre, en fin de journée, après avoir essayé d’adapter le thème choisi, qui s’avère plutôt incomplet sur certains points, comme le fait que plusieurs outils sont défaillants ou encore que d’autre sont incomplets et non-adaptable ou stylisable comme on le souhaite, j’ai discuté avec une graphiste puis avec d’autres personnes de marketing et on a décidé de se mettre à rechercher un autre thème plus complet et mieux « fini ». En effet, il est préférable de prendre un autre thème complet avec lequel je n’aurais qu’à intégrer le contenu plutôt que de venir corriger plus ou moins correctement le thème que je n’ai pas développé et passer du temps sur ce qui, à la base, était choisi pour réduire le temps de travail.</p>
		<p>Par ailleurs, aujourd’hui, c’était l’anniversaire de Domi (le patron de djm digital) et donc on a mangé du gâteau et bu du mousseux :).</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--summary">
		<h2 class="jdbStage__subtitle">Résumé de la semaine&nbsp;:</h2>
		<p>Cette troisième semaine j’ai travaillé essentiellement sur trois projets: une newsletter pour la HEL et deux intégrations de sites avec Wordpress pour la siroperie d’Aubel et le site dédié au mobile de DJM Digital.</p>
		<p>J’ai donc à nouveau eu l’occasion de faire une newsletter avec Compaign Monitor et en fin de compte, c’est vrai que ce n’est pas si mal (même si ça ajoute des balises pour rien et qu’il y a des fonctions qui n’existent pas comparé à MailChimp mais par contre, tout semble fonctionner ici).</p>
		<p>J’ai également travaillé avec Wordpress pour la mise en place et l’intégration de deux sites Internet (enfin surtout un car un problème sur le serveur a bloqué l’accès à la base de données de la siroperie et donc au site). J’ai donc pu m’exercer à travailler dans l’interface de Wordpress et découvrir tout ce que ce CMS propose. Par ailleurs, j’ai eu l’occasion de découvrir des outils et plugins assez révolutionnaires et utiles qui bouleversent un peu mes connaissances de Wordpress.</p>
		<p>Et de trois, ça passe à vive allure! Cette semaine était très intéressante car j’ai eu l’occasion de travailler sur Wordpress comme je n’avais pas l’habitude, j’ai travaillé presque uniquement dans l’interface et donc, je me suis mis un peu à la place d’un utilisateur novice. C’est utile car j’ai découvert l’outil d’une autre manière et une nouvelle façon de travailler mais par contre, un peu frustrant car j’avais parfois l’impression de faire un site comme sur Wix (un chouette outil mais où on a l’impression d’avoir peu de contrôle) tel un architecte qui ferait ses plans avec les Sims.</p>
	</div>
	<div class="centerZone">
		<nav class="jdbStage__nav">
			<h3 class="hidden">Sous-menu de navigation</h3>
			<a href="./semaine2.php">Semaine précédente</a><a href="./sommaire.php">Sommaire</a><a href="./semaine4.php">Semaine suivante</a>
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
