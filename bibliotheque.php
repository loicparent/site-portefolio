<?php 
$pageTitle = "Bibliothèque en ligne • Loïc Parent";
$headerContent = '
	<meta name="keywords" content="Bibliothèque, bibliothèque en ligne, library, book, projet web, Loïc Parent, Loic Parent, loic parent, loïc parent" />
	<meta name="Description" content="Bibliothèque en ligne est un site Web réalisé en 2015 pour le cours de projet Web. Le site est basé sur le modèle MVC." />
';
include( 'header.php' );
?>

<h1 class="projectTitle-1 title2">Bibliothèque en ligne</h1>
<div id="content" class="content">
	<section class="infoProject">
		<div class="centerZone">
			<h2 class="projectTitle title2 hidden">Informations sur le projet</h2>
			<div class="left">
				<figure class="pictureZone">
					<img src="./img/bibliotheque.png" alt="Bibliothèque en ligne">
				</figure>
				<a href="http://loic-parent.be/bibliotheque" class="infoProject__link">Accéder au site</a>
			</div>
			<div class="right">
				<p>En deuxième année de mon cursus à la Haute &Eacute;cole de la Province de Liège, on nous a demandé, dans le cadre du cours de web, de réaliser une bibliothèque en ligne.</p>
				<p>Pour mettre en place ce projet, j’ai dû utiliser le langage <abbr title="Hypertext Preprocessor">PHP</abbr> ainsi que la gestion de base de données avec <abbr title="Structured Query Language">SQL</abbr>. Le projet est construit sur une structure MVC.</p>
				<p>Cette bibliothèque permet donc à celui qui se rend dessus, de voir tous les livres et les informations s'y rapportant, de créer un compte ou de s’identifier et ensuite, ajouter des livres dans ce qu’on pourrait définir comme la zone de favoris.</p>
				<p>Trêve d’explications, je vous propose de tester par vous même le projet.</p>
			</div>
			<div class="clear"></div>
		</div>
	</section>
</div>

<?php include( 'footer.php' ); ?>