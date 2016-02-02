<?php 
$pageTitle = "Jeu canvas Esqive • Loïc Parent";
$headerContent = '
	<meta name="keywords" content="Esquive, mini jeu, canvas, bulles, jeu, Liège, Loïc Parent, Loic Parent, loic parent, loïc parent" />
	<meta name="Description" content="Esquive est un mini-jeu que j’ai réalisé en 2015 pour mon cours de web-js. Ce jeu est réalisé avec la balise canvas et du javascript." />
';
include( 'header.php' );
?>

<h1 class="projectTitle-1 title2">Jeu canvas Esquive</h1>
<div id="content" class="content">
	<section class="infoProject">
		<div class="centerZone">
			<h2 class="projectTitle title2 hidden">Informations sur le projet</h2>
			<div class="left">
				<div class="pictureZone">
					<img src="./img/esquive.png" alt="esquive">
				</div>
				<a href="http://loic-parent.be/miniJeu2.0/" class="infoProject__link">Accéder au jeu</a>
			</div>
			<div class="right">
				<p>En deuxième année de mon cursus à la Haute &Eacute;cole de la Province de Liège, j’ai dû réaliser dans le cadre du cours de Javascript un petit jeu à l’aide de la balise canvas.</p>
				<p>Le but de ce jeu est d'éviter de toucher les boules de couleurs et d’amasser le plus de points en récupérant les carrés noirs qui apparaissent au fur et à mesure.</p>
				<p>J’ai intégré à ce jeu différentes fonctions comme celles de la gestion des sons etc.</p>
				<p>Trêve d’explications, je vous propose de tester par vous même le jeu.</p>
			</div>
			<div class="clear"></div>
		</div>
	</section>
</div>

<?php include( 'footer.php' ); ?>