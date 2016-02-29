<!DOCTYPE html>
<html lang="fr-BE">
<head>
	<meta charset="UTF-8">
	<title>Journal de bord stage • semaine 2</title>
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



	<h1 class="projectTitle-1 title2">Stage - Semaine 2</h1>
	<div class="centerZone jdbStageDay jdbStageDay--lun jour1">
		<h2 class="jdbStage__subtitle">JOUR 6 - 08/02</h2>
		<p>Après ce premier weekend reposant (ou presque), me revoici de retour chez Djm pour une nouvelle semaine trépidante. Je commence ma journée comme d’habitude en allumant l’ordinateur et en allant dire bonjour aux personnes qui étaient là. J’ai aussi aidé ma collègue à brancher les ordinateurs pour deux nouveaux stagiaires qui devaient arriver dans la matinée. Il s’agit de deux stagiaires en développement mobile venu de Namur et Charleroi, tous deux dans une option informatique de gestion.</p>
		<p>Après cela, je me mets au boulot en commençant par une petite discussion improvisée avec mon maître de stage dès son arrivée pour savoir si j’ai de nouveau projets à réaliser. J’ai en effet de nouveau travaux à faire, mais en priorité continuer ceux que j’avais la semaine dernière.</p>
		<p>Avant de me mettre au travail, j’ai dû aider quelques-uns de mes collègues à transporter le baby-foot dans une camionnette pour le conduire chez un client, et surtout pour transporter un autre baby-foot flambant neuf dans le couloir pour qu’on puissent continuer nos petites parties improvisées entre collègues.</p>
		<a class="image-popup-no-margins" href="./img/sirop1.jpeg">
			<img class="style__img--right style__img--smallSize" src="./img/sirop1.jpeg" alt="logo siroperie Aubel">
		</a>
		<p>Je me mets donc à dresser une dernière liste de templates potentiel pour le site de la Siroperie d’Aubel en suivant les commentaires laissés par mon collègue Thomas. Après ça, je lui ai envoyé un mail et je suis allé le voir un peu après pour savoir ce qu’il en était. Il m’a donc dit que plusieurs thèmes lui plaisait et qu’il allait les montrer à son papa pour avoir un choix définitif dans les prochains jours.
		</p>
		<p>En attendant le choix du template, j’ai continué la mise en place de l’application pour Facebook en commençant par une recherche sur comment mettre celle-ci en ligne, le but étant d’avoir un widget ajouter à une page Facebook. J’ai donc installé l’application sur un serveur en https car pour utiliser l’application sur Facebook, il faut une URL sécurisée. Par ailleurs, j’ai appris que l’IDE permettait de gérer le ftp directement dans le programme sans devoir passer par un gestionnaire de FTP comme FileZilla ou autre et j’ai également appris à configurer le PHPStorm pour pouvoir l’utiliser dans ce sens.</p>
		<p>Ensuite, j’ai configuré l’application et importé l’URL de la page pour pouvoir afficher cette dernière directement dans Facebook. Par contre, plusieurs problèmes sont survenus par rapport à cela: le premier problème est qu’une fois tous configuré correctement, je ne trouvais pas de bouton pour pouvoir ajouter correctement l’application à une page Facebook.</p>
		<p>Donc l’application était bien crée, validée et publiée mais n’était pas visible (ce qui pose un problème assez évident) donc on a fini par trouver sur un site Internet qui expliquait la mise en ligne d’application sur une page Facebook, une URL qui permet de générer un lien pour lier l’application sur une page Facebook. Ce n’était donc pas très pratique car je trouve que le lien pour lier l’application à la page devrait être plus pertinent et surtout plus présent lors de la création de l’application.</p>
		<p>Ensuite, le second problème était que le widget créer par la société Technogym n’était pas réalisé en https ce qui bloquait l’affichage sur le site en ajoutant de belle erreur dans la console. On a donc dû, avec mon maître de stage, trouver un stratagème utile en javascript pour venir modifier l’url générer dans l’iframe de sorte à avoir une url en https. Un peu de bricolage sympathique pour finir en fin de journée à avoir une application fonctionnelle sur la page Facebook du client. Il me suffisait donc, après cela, de venir ajouter des boutons un peu plus pertinent avec un design efficace pour accéder à ces applications directement sur le menu de gauche dans Facebook.</p>
		<p>En dehors de cette application qui m’a donc pris toute la journée, j’ai eu différentes petites réunions avec la secrétaire de direction et une graphiste (et de temps en temps mon maître de stage) concernant d’autres projets à venir, comme la mise à jour du site du club de fitness évolution en y intégrant le widget de Technogym et d’autres petits contenus s’y rapportant, ajouté dans Facebook une carte qui situe les différentes salles de sports de la régions et également, un petit projet pour le site jelisdansmacommune.be où je devais mettre à jour le captchat qui était peu compris par les utilisateurs du site en le remplaçant par celui de google qui est plus présent, plus standardisé (donc plus compréhensible) et plus attrayant. Mais en fin de journée, mon maître de stage m’a dit qu’il allait s’en occuper et que donc je pourrais me consacrer à mes projets sans m’occuper de ça.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--mar jour2">
		<h2 class="jdbStage__subtitle">JOUR 7 - 09/02</h2>
		<p>J’ai débuté cette journée en faisant quelques recherches sur la bonne façon d’intégrer différentes adresses (civiles) à une page Facebook pour pouvoir ajouter tous les club de gym Évolution à la seule page de la société. Cette recherche a pris un certain temps et j’ai découvert différentes façons de faire cela mais bien souvent, il n’y a pas vraiment besoins de coder quoi que ce soit. Après ça, j’ai installé différents outils sur mon ordinateur (comme gitbash, Source tree ou encore tortoise git) suite à une demande de mon maître de stage. Après ces installations, ce dernier est venu me montrer comment configurer PHPstorm afin de travailler avec git et manipuler la gestion de version et la mise en ligne vers le serveur. Aussi, il m’a expliqué comment j’allais pouvoir utiliser la complication du code LESS en css facilement avec PHPStorm.</p>
		<p>Après cela, il m’a ajouté un projet sur Bitbuket et m’a donné un ancien projet sur lequel je vais devoir travailler après avec PHPStorm afin de m’expliquer tout le fonctionnement de l’outil et m’expliquer comment utiliser PHPStorm dans ce sens.</p>
		<p>On a eu différents problèmes liés à un problème sur le serveur et sur le routeur qui a créé des coupures d’Internet à certain moment. Pour palier à cela, en début de journée, j’avais modifié les accès DNS pour passer directement sur le DNS de Google. Le fait d’avoir modifié les DNS a un peu bloqué l’accès à phpmyadmin, mais a très vite été résolut.</p>
		<p>Une fois tous installé correctement sur ma machine et après avoir parlé longuement du bon fonctionnement de mes outils, les explications (et une longue introduction —parfois un peu floue— sur le fonctionnement des machines virtuelles) j’ai reçu un mail de la responsable de projets Web qui me demandait de faire une autre newsletter (avec un statut « urgent ») mais cette fois-ci avec MailChimp pour un autre client qui est Eurotoque. Du coup, je me suis mis, l’après-midi, à travailler sur cette newsletter en intégrant dans une page html avec des tableaux etc. une maquette photoshop créer par une des graphistes. J’ai apporté quelques modifications à la maquette de la graphiste de sorte à éviter de devoir utiliser une image avec du texte, mais plutôt de garder du texte en format texte pour le header du mail.
		<a class="image-popup-no-margins" href="./img/nl_eurotoque1.png">
			<img class="style__img--right style__img--smallSize" src="./img/nl_eurotoque1.png" alt="aperçu de la newsletter eurotoque">
		</a></p>
		<p>En fin de journée, j’ai terminé cette newsletter de façon statique et il me reste à venir mettre en place les « balises » pour pouvoir éditer comme on le souhaite, cette newsletter.</p>
		<p>Je suis content d’avoir eu une deuxième newsletter car ça m’a permis de m’exercer à nouveau à cette « rigueur de codage » et de remarquer que j’avais pris des habitudes dans la façon de faire ce qui m’a permis d’éviter certains pièges que j’avais eu la première fois. Aussi, j’aime bien le fait de devoir apprendre à utiliser LESS pour la compilation du code car ça me permet d’apprendre un nouveau langage et aussi de pouvoir par après comparer avec Sass pour voir lequel je préfère et lequel me semble le plus utile.</p>
		<p>Donc ma journée ce termine avec un travail de plus et comme a chaque fin de journée par un petit dé-briefing avec mon maître de stage pour voir ce que j’ai fait et ce qu’il me reste à faire.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--mer jour3">
		<h2 class="jdbStage__subtitle">JOUR 8 - 10/02</h2>
		<p>Aujourd’hui, j’ai terminé la newsletter pour Eurotoque, donc, j’ai regardé comment faire avec MailChimp et c’est franchement mieux qu’avec Compaign monitor! En effet, j’ai remarqué qu’il y avait plus de possibilité, moin de problème et surtout, je dois juste rajouter des attributs à mes balises (comme mc:edit ou encore mc:repeatable etc.) et non des balises! Ce qui facilite la lecture.</p>
		<a class="image-popup-no-margins" href="./img/nl_eurotoque2.png">
			<img class="style__img--right style__img--smallSize" src="./img/nl_eurotoque2.png" alt="aperçu de la newsletter eurotoque">
		</a>
		<p>J’ai regardé un peu comment fonctionnait l’outil en lui-même et j’ai soulevé quelques problèmes évident dans l’interface comme un gros problème d’affordance pour le bouton qui permet de passer aux étapes suivantes pour la création de campagne publicitaire.</p>
		<p>En effet, il se trouve en gris, tout en petit et perdus au fond à droite de la page alors que lui mettre une couleur de fond verte par example réglerai tout de suite le problème. J’ai bloqué un moment avant de trouver ce tout petit bouton.</p>
		<p>L’autre gros problème est la position des touches d’options en mode édition de la newsletter (comme le bouton pour ajouter/supprimer une occurrence ou encore la déplacer ex: un certain type d’article) car ces boutons se trouvent à des positions étrange et pas très logiques (voir image). Mais en dehors de ces deux problèmes, je trouve que l’outil est très bien fait et est très agréable à utiliser.</p>
		<p>J’ai donc eu fini cette newsletter (plus rapidement que la première, ne tombant plus dans les premiers pièges que j’ai rencontrés la première fois), effectué différents tests sur différentes boîtes mails et ai donc clôturé le projet. J’ai également fait les traductions en quatre langues de cette newsletter et puis je suis passé à autre chose.</p>
		<p>Par ailleurs, j’ai rectifié des petites choses que j’avais faites dans la première newsletter de sorte à l’améliorer suite à certaines techniques acquises à force d’habitude.</p>
		<p>Milieu d’après-midi, je me suis concentré sur la gestion de plusieurs lieux pour une seule page Facebook en faisant de nombreuses recherches et en observant des pages qui ont ce genre d’outils (comme buffalogrill ou encore pizzahut) et j’en ai parlé avec la secrétaire de direction et mon maître de stage.</p>
		<p>Ensuite, j’ai commencé à travailler sur le site d’Évolution en voulant intégrer les widgets de Technogym au sein du site avec d’autres corrections. Dans un premier temps, j’ai regardé la façon dont était organisé le code, j’ai remarqué qu’il était très fragmenté et donc j’ai essayé de suivre ce principe. J’ai aussi regardé comment appliquer correctement la gestion de versionning avec Phpstorm et comment utiliser à bon escient l’outil.</p>
		<p>Un problème est survenu quand au fait de travailler en locale. En effet, je ne sais pour quelle raison je n’arrivais pas à me rendre à l’administration de Wordpress avec l’url/wp-admin. Le site me redirait vers une page où j’obtenais un message d’erreur avec un statut 403 me bloquant l’accès.</p>
		<p>Après plusieurs essais et plusieurs tentatives avec d’autres développeurs de la boîte, on a « trouvés » la solution au problème et en fait, on a contourné le problème: wp-admin ne fonctionnait pas en locale mais bien wp-login… bref, j’ai su me rendre dans l’administration de Wordpress pour voir comment était organisé le site et comment j’allais ajouter le contenu.</p>
		<p>En fin de journée, j’ai intégré une accroche (call-to-action) réalisée par une graphiste et j’ai commencé à ajouter les différents éléments dans wordpress.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--jeu jour4">
		<h2 class="jdbStage__subtitle">JOUR 9 - 11/02</h2>
		<p>Aujourd’hui, j’ai regardé pour lier deux pages de lieux à la page principale d’Évolution (Visé et Liège). Pour cela, j’ai regardé beaucoup de sites pour la documentation et les explications et j’ai voulu mettre en place cela mais j’ai remarqué que la page crée n’était pas une page « officielle » et qu’il faut ce type de page pour lier correctement des sous-page de lieux.</p>
		<p>J’ai donc voulu regarder pour définir cette page comme « officielle » mais un autre problème plus important est apparu: on n’avait pas accès au paramètres de la page et donc, on ne pouvait plus changer par exemple la description ou encore l’horaire affiché sur cette page. Par conséquent, on a regardé d’où pouvais venir le problème avec plusieurs personnes et après un long moment de tests et de recherches, on n’a rien trouvé comme solution logique.</p>
		<p>C’était relativement frustrant car on voyait correctement le contenu de la page « à propos » en tant que visiteur mais une fois en administrateur de la page, le contenu était vide. Et d’autant plus énervant car je voyais bien ce qu’il fallait faire pour définir la page comme « officielle » mais vu que je ne pouvais pas accéder à tout le contenu, je ne pouvais pas le faire.</p>
		<p>De ce fait, on a envoyé un message pour soumettre le problème à Facebook en espérant trouver rapidement une solution. Si on ne trouve pas de solution rapidement, il faudra probablement recréer correctement la page « officielle » et venir lier les autres de lieux par après mais en faisant cela, on perd les articles postés sur la page actuelle ce qui pose évidemment un problème. On a même été jusqu’à supprimer temporairement les applications que j’avais prit le temps de mettre sur la page pour voir si ce n’était pas cela qui posait problème mais en vain. D’ailleurs, j’avais remarqué que je n’arrivais pas à modifier les préférences de la page avant d’intégrer ces applications mais il semblerait que le problème soit là depuis un petit moment.</p>
		<p>Après cela, j’ai ré-intégré les applications sur la page, j’ai aussi changé les « étiquettes » des applications par des images créer par une graphiste.</p>
		<p>L’après-midi, après une petite partie de babyfoot avec les collègues, j’ai travaillé sur le site d’Évolution et donc, j’ai apporté quelques changements à l’ancien site sous Wordpress en y ajoutant plusieurs pages avec les applications présentent sur Facebook et différentes pages de contenu. J’ai donc créé de nouvelles pages dans Wordpress avec des templates et j’ai créé un nouveau menu pour voyager à travers ces nouvelles pages.</p>
		<p>J’ai donc du regardé comment le code était formaté et aussi comment j’allais ajouter du contenu à tout ça. Après, j’ai intégré mon code et travaillé avec LESS pour gérer les styles des pages en essayant de suivre la charte graphique du site.</p>
		<p>J’ai ajouté des images « accroches » créées par une graphiste afin de rendre un contenu plus attrayant visuellement pour une bannière de la page d’accueil et pour des liens de la page principale les Widgets de Technogym.</p>
		<p>J’ai également apporté des corrections à certaines erreurs d’affichage, essentiellement en responsive, aux couleurs de l’éditeurs de Wordpress et enfin, ajouté à certains liens, des réactions d’affichage actionné eu focus ou au survol de l’élément pour faciliter la navigation pour tout le monde.</p>
		<p>Enfin, j’ai été discuté avec Thomas (le fils du patron de la siroperie d’Aubel) et il semblerait qu’il a (enfin) choisi un thème pour le site que je vais devoir intégrer. On discutera de cela demain matin pour en savoir un peu plus sur ce que je devrai faire et de ses attentes pour les fonctionnalités du site internet.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--ven jour5">
		<h2 class="jdbStage__subtitle">JOUR 10 - 12/02</h2>
		<p>Aujourd’hui, j’ai commencé en apprenant que Thomas a encore changé d’avis pour le thème de son site Internet mais, il a décidé et donc, j’ai été discuté avec lui pour voir le thème choisi et essayer de savoir quel contenu il veut et comment il imagine l’emplacement de ce contenu. Je lui ai donc donné également mon avis sur quelques points (aussi bien de design que d’utilité par rapport à ses besoins) et j’ai fait quelques croquis pour mieux me rendre compte de ce à quoi le site devra ressembler.</p>
		<p>Après cela, le temps que le thème soit acheté par la boite, je suis revenu sur le projet Evolution en apportant quelques modifications au site Internet. J’ai donc ajouté la possibilité de choisir si on affiche un ou plusieurs espace(s) publicitaire(s) et si c’est le cas, de pouvoir administrer le contenu directement dans l’administration de Wordpress (donc, choisir une image pour la bannière et ajouter un lien). Pour faire cela, j’ai ajouté un Custom Post Type appelé « publicité » qui permet de gérer cela de façon claire dans un onglet peinant de l’administration de Wordpress.</p>
		<p>J’ai eu un léger problème de sécurité (au niveau des dossiers Windows) car en donnant certains droits aux dossiers parents, en théorie, les enfants devaient avoir les même droits, mais non! En fait, je ne sais pour quelle raison mais les images que j’ajoutais dans Wordpress n’avaient pas les même droits et donc n’étaient pas récupérables (…vive Windows !). Pour contrer cela, la solution temporaire que j’ai utilisé, c’est pour chaque image ajoutée, venir redéfinir ses droits directement dans le dossiers de Wordpress. Évidemment, ce n’est pas pratique à long terme mais je suppose qu’une fois sur le serveur linux en ligne, le problème aura disparu (étant donné que l’ajout d’image sur le site en ligne ne pose aucun souci).</p>
		<p>L’après-midi, je me suis consacré à l’installation de Wordpress, de son thème et la mise en place de base de l’intégration du site.</p>
		<p>J’ai donc dans un premier temps, suivi les explications de mon maître de stage concernant la création de base de données sur leurs serveurs internes en suivant différentes instructions (entre autre par rapport aux outils et aux permissions de sécurité etc.) et créer un nouvel espace pour le site avec le logiciel IIS qui fonctionne un peu comme Mamp et donc permet de gérer les accès au serveur de sorte à venir définir un port d’accès au site. Par ailleurs, on a défini une re-direction dans le fichier host pour pouvoir aller sur l’url www.sirop.be et me retrouver sur mon site en local.</p>
		<p>Après ces quelques préparations, j’ai pu installer Wordpress et une fois cela fait, j’ai suivi le guide d’installation du thème et j’ai installé les plugins en rapport avec celui-ci. Certaines étapes plus lente, à cause de la connexion qui bloquait de temps en temps, on fait que j’ai dû recommencer plusieurs fois cette installation car soit certains éléments n’était pas bien installés ou soit, ils s’installaient trop bien (comme mon menu qui se répétait 4 fois ce qui n’est pas très pratique).
		<a class="image-popup-no-margins" href="./img/sirop2.PNG">
			<img class="style__img--center style__img--middleSize" src="./img/sirop2.PNG" alt="aperçu de l'interface wordpress pour le site de la siroperie Autbel">
		</a></p>
		<p>Une fois tout installé et prêt à être utilisé, j’ai donc commencé par voir comment était réalisé le thème et comment j’allais devoir intervenir. J’ai été très surpris de voir tout ce que Wordpress permet de faire, car avec les configurations du thème il reste « juste » à manipuler les données au travers d’une interface un peu plus complex mais qui se rapproche assez bien du fonctionnement de wix.com donc avec un système drag and drop et différents outils wysiwyg ajouter avec différents plugins. Je m’attendais à devoir venir coder des choses mais aprioris, sauf si c’est nécessaire pour une raison particulière, ce ne sera pas le cas.
		</p>
		<div class="zoom-gallery">
			<a href="./img/sirop3.PNG">
				<img class="style__img--right style__img--smallSize" src="./img/sirop3.PNG" alt="aperçu de l'interface wordpress pour le site de la siroperie Autbel">
			</a>
			<a href="./img/sirop4.PNG">
				<img class="style__img--right style__img--smallSize" src="./img/sirop4.PNG" alt="aperçu de l'interface wordpress pour le site de la siroperie Autbel">
			</a>	
		</div>
		<p>Il m’a fallu un petit moment d’adaptation pour bien comprendre comment je vais devoir travailler avec ce site car je n’ai pas encore eu l’occasion de travailler avec le thème de quelqu’un d’autre étant donné que j’ai toujours travaillé avec un thème que j’avais créé.</p>
		<p>J’ai donc fait différents tests pour m’habituer à la façon de travailler et j’ai commencé à mettre en place les pages selon les indications de Thomas pour le site.</p>
	</div>

	<div class="centerZone jdbStageDay jdbStageDay--summary">
		<h2 class="jdbStage__subtitle">Résumé de la semaine:</h2>
		<p>Cette deuxième semaine j’ai j’ai travaillé essentiellement sur quatre projets: une newsletter pour Eurotoque, une recherche de template et un début d’intégration de site avec Wordpress, la tentative de mise en place de différents lieux pour une page Facebook et enfin, effectué des changements et ajouts sur un site en rapport avec les applications Facebook pour Évolution de la semaine dernière.</p>
		<p>J’ai donc pu retravailler sur une newsletter avec MailChimp et pu donc comparer ces deux outils en remarquant que mailChimp est nettement mieux que Compaignmoniteur. J’ai donc travaillé de la même façon avec des tableaux etc. et rendu le tout administrable dans une interface dédiée.</p>
		<p>J’ai pu travailler sur des sites Internet avec Wordpress de deux façons différents: une plus habituelle qui consistait à travailler avec des pages php et des custom-post-type et l’autre plus nouvelle pour moi, de travailler avec un thème pré-conçu et adapter ce thème, au sein de l’interface Wordpress.</p>
		<p>J’ai aussi passé du temps sur Facebook en essayant de personnaliser une page et j’ai pu remarquer que certains problèmes bloquait des éléments.</p>
		<p>Cette seconde semaine était très bien encore une fois. Je commence à retenir tous les noms des collègues et à m’habituer au claviers et fonctionnement de Windows. Ce vendredi, le stagiaire qui était avec moi la semaine dernière a eu fini son stage. Enfin, ça fait plaisir de partir le matin avec un peu plus de soleil et de revenir quand il fait encore un peu clair.</p>
	</div>
	<div class="centerZone">
		<nav class="jdbStage__nav">
			<h3 class="hidden">Sous-menu de navigation</h3>
			<a href="./semaine1.php">Semaine précédente</a><a href="./sommaire.php">Sommaire</a><a href="./semaine3.php">Semaine suivante</a>
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
