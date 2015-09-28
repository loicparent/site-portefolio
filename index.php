<?php 
	if ( isset($_POST['formsent']) ) {
		if ( !empty( $_POST['nom'] ) AND !empty( $_POST['email'] ) AND !empty( $_POST['message'] ) ) {

			$nom = htmlspecialchars($_POST['nom']);
			$mail = htmlspecialchars($_POST['email']);
			$message = htmlspecialchars($_POST['message']);

			if ( !empty( $_POST['prenom'] ) ){
				$prenom = htmlspecialchars($_POST['prenom']);
			} else {
				$prenom = "pas de prénom spécifié";
			}

			if ( !empty( $_POST['phone'] ) ){
				$tel = htmlspecialchars($_POST['phone']);
			} else {
				$tel = "pas de télephone spécifié";
			}

			$header = "MIME-version: 1.1\r\n";
			$header .= 'From:"loic-parent.be"<support@loic-parent.be>'."\n";
			$header .= 'Content-Type:text/html; charset="utf-8"'."\n"; 
			$header .= 'Content-Transfer-Encoding: 8bit'; 

			$message = '
				<html>
					<body>
						<u>Message envoyé du site :</u> www.loic-parent.be<br /><br />
						<u>Nom de l’expéditeur :</u> '.$nom.'<br />
						<u>Prénom de l’expéditeur :</u> '.$prenom.'<br />
						<u>Email de l’expéditeur :</u> '.$mail.'<br />
						<u>Télephone de l’expéditeur :</u> '.$tel.'<br />
						<u>Message de l’expéditeur :</u> '.nl2br($message).'
					</body>
				</html>
			';

			mail( "info@loic-parent.be", "Contact du site loic-parent.be", $message, $header );
			$errorMsg = "Votre message à bien été envoyé";
			$sent = 1;
			
		} else {
			$errorMsg = "Veuiller compléter tous les champs";
			$sent = 0;
		}
	}
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="Author" content="Loïc Parent" />
	<meta name="Rev" content="info@loic-parent.be" />
	<meta name="keywords" content="Loïc, Parent, infographiste, web, webdesigner, designer, liège, waremme, geer" />
	<meta name="Description" content="Je suis un étudiant en infographie qui habite près de Waremme ce site est une sorte de portefolio qui présente mes travaux" />
	<link rel="canonical" href="http://www.loic-parent.be" />
	<link rel="icon" href="./img/favicon.png" type="image/png">
	<title>Loïc Parent • design graphic</title>
	<link rel="stylesheet" href="./css/main.css">
	<script type="text/javascript" src="./script/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="./script/app.js"></script>
	<script type="text/javascript" src="./script/littleMenu.js"></script>
</head>
<body itemscope itemtype="http://schema.org/CreativeWork">
	<div id="hcard-Loïc-Parent" class="vcard" style="display:none">
		 <a class="url fn" href="http://www.loic-parent.be">Loïc Parent</a>
		 <a class="email" href="mailto:info@loic-parent.be">info@loic-parent.be</a>
		 <div class="adr">
		  <span class="locality">Geer</span>, <span class="region">Liège</span>, <span class="postal-code">4250</span> <span class="country-name">Belgique</span>
		 </div>
		 <div class="tel">0499261257</div>
		 <p style="font-size:smaller;">This <a href="http://microformats.org/wiki/hcard">hCard</a> created with the <a href="http://microformats.org/code/hcard/creator">hCard creator</a>.</p>
	</div>
	<header class="header">
		<div class="centerZone">
			<a href="http://www.loic-parent.be" class="header__logo">Loïc Parent</a>
			<div class="hambMenu">
				<span></span>
			</div>
			<nav id="menu" class="header__menu mainMenu">
				<h2 class="hidden">Menu de navigation</h2><a href="#content" class="mainMenu__item active">Accueil</a><a href="#aboutMe" class="mainMenu__item">&Agrave; propos</a><a href="#works" class="mainMenu__item">Mes projets</a><a href="#contact" class="mainMenu__item">Contact</a>
			</nav>
		</div>
	</header>
	<div id="content" class="content">
		<div class="topPresentation section">
			<div class="centerZone">
				<img src="./img/logo_lp.svg" class="topPresentation__picture"  alt="logo de Loïc Parent">
				<h1><span class="topPresentation__title1" itemprop="author">Loïc Parent</span> <span class="topPresentation__title2" itemprop="keywords">Infographiste • Web</span></h1>
			</div>
		</div>
		<section id="aboutMe" class="aboutMe section">
			<div class="centerZone">
				<h2 class="aboutMe__title2 title2">Parlons de moi…</h2>
				<div class="left">
					<div class="pictureZone">
						<img src="./img/photo.png" alt="Photo de Loïc Parent">
					</div>
					<a href="./CV-ParentLoïc.pdf" class="aboutMe__left--cv">télécharger mon CV</a>
				</div>
				<div class="right" itemprop="about">
					<p class="aboutMe__right--first">Je m’appelle <span>Loïc Parent</span>, je suis actuellement étudiant à la Haute &Eacute;cole de la Province de Liège en option infographie orientée Web.</p>
					<p>J’aime concevoir des choses qui permettent d’améliorer une identité graphique tout en prenant soin de le faire avec qualité, sérieux et passion.</p>
					<p>J’ai eu l’occasion de travailler sur divers projets graphiques liés au Web, au design graphique, à la 3D ou encore à l’impression. Cela m’a permis d’acquérir des techniques nouvelles et d’élargir ma culture artistique et graphique.</p>
					<p class="aboutMe__right--last">&Eacute;tant encore aux études, je progresse de jour en jour en essayant de m’appliquer pour faire des sites qui soient responsives, qui respectent les standards et qui ont une identités forte tout en essayant de les garder les plus accessibles possible.</p>
				</div>
				<div class="clear"></div>
				<ul class="aboutMe__skills">
					<li class="aboutMe__skills--elm">
						<span class="aboutMe__skills--item losange psd"><abbr class="abbr">Psd</abbr></span>
						<span class="hidden">signifie</span>
						<span class="aboutMe__skills--item">Photoshop</span>
					</li>
					<li class="aboutMe__skills--elm">
						<span class="aboutMe__skills--item losange ai"><abbr class="abbr">Ai</abbr></span>
						<span class="hidden">signifie</span>
						<span class="aboutMe__skills--item">Illustrator</span>
					</li>
					<li class="aboutMe__skills--elm">
						<span class="aboutMe__skills--item losange id"><abbr class="abbr">Id</abbr></span>
						<span class="hidden">signifie</span>
						<span class="aboutMe__skills--item">In Design</span>
					</li>
					<li class="aboutMe__skills--elm">
						<span class="aboutMe__skills--item losange pr"><abbr class="abbr">Pr</abbr></span>
						<span class="hidden">signifie</span>
						<span class="aboutMe__skills--item">Première Pro</span>
					</li>
					<li class="aboutMe__skills--elm">
						<span class="aboutMe__skills--item losange html"><abbr class="abbr">5</abbr></span>
						<span class="hidden">signifie</span>
						<span class="aboutMe__skills--item">HTML 5</span>
					</li>
					<li class="aboutMe__skills--elm">
						<span class="aboutMe__skills--item losange css"><abbr class="abbr">3</abbr></span>
						<span class="hidden">signifie</span>
						<span class="aboutMe__skills--item">CSS 3</span>
					</li>
					<li class="aboutMe__skills--elm">
						<span class="aboutMe__skills--item losange js"><abbr class="abbr">JS</abbr></span>
						<span class="hidden">signifie</span>
						<span class="aboutMe__skills--item">Javascript</span>
					</li>
					<li class="aboutMe__skills--elm">
						<span class="aboutMe__skills--item losange php"><abbr class="abbr">PHP</abbr></span>
						<span class="hidden">signifie</span>
						<span class="aboutMe__skills--item">Hypertext Preprocessor</span>
					</li>
				</ul>
				<div class="clear"></div>
			</div>
		</section>
		<section id="works" class="works section">
			<div class="centerZone">
				<h2 class="works__title2 title2">Mes projets</h2>
			</div>
			<article class="project" itemprop"workExample">
				<a href="./bibliotheque.html" class="project__link">Voir le projet</a>
				<h3 class="project__info">Bibliothèque en ligne</h3>
				<img src="./img/bibliotheque.png" alt="Bibliothèque en ligne" class="project__picture">
			</article>
			<article class="project" itemprop"workExample">
				<a href="./dswallonie.html" class="project__link">Voir le projet</a>
				<h3 class="project__info">Ds Wallonie</h3>
				<img src="./img/dswallonie.png" alt="Ds Wallonie" class="project__picture">
			</article>
			<article class="project" itemprop"workExample">
				<a href="./esquive.html" class="project__link">Voir le projet</a>
				<h3 class="project__info">Jeu canvas “esquive”</h3>
				<img src="./img/esquive.png" alt="Esquive" class="project__picture">
			</article>
			<article class="project" itemprop"workExample">
				<a href="./bouvachon.html" class="project__link">Voir le projet</a>
				<h3 class="project__info">Huile d’olive Bouvachon</h3>
				<img src="./img/bouvachon.gif" alt="Logo et bouteille Bouvachon" class="project__picture">
			</article>
			<article class="project" itemprop"workExample">
				<a href="./stimform.html" class="project__link">Voir le projet</a>
				<h3 class="project__info">Catalogue Stim-from</h3>
				<img src="./img/stimform.png" alt="Stim-Form partenaire privilégié du kinésithérapeute" class="project__picture">
			</article>
			<article class="project" itemprop"workExample">
				<a href="./btf.html" class="project__link">Voir le projet</a>
				<h3 class="project__info">Affiche Retour vers le futur</h3>
				<img src="./img/btf.png" alt="Affiche Retour vers le futur" class="project__picture">
			</article>
			<article class="project" itemprop"workExample">
				<a href="./pancakes.html" class="project__link">Voir le projet</a>
				<h3 class="project__info">Pancakes Typography</h3>
				<img src="./img/pancakes.png" alt="photo panecakes" class="project__picture">
			</article>
			<article class="project" itemprop"workExample">
				<a href="./tshirt.html" class="project__link">Voir le projet</a>
				<h3 class="project__info">Visuels de T-shirt</h3>
				<img src="./img/tshirt.png" alt="Visuels de T-shirt" class="project__picture">
			</article>
			<article class="project" itemprop"workExample">
				<a href="./euroskills.html" class="project__link">Voir le projet</a>
				<h3 class="project__info">Euroskills</h3>
				<img src="./img/euroskills.png" alt="Affiche Euroskills Lisbonne 2014 compétition européenne des métiers" class="project__picture">
			</article>
			<article class="project" itemprop"workExample">
				<a href="./tpcv.html" class="project__link">Voir le projet</a>
				<h3 class="project__info">Touche pas à mes certificats vert</h3>
				<img src="./img/tpcv.png" alt="Logo touche pas à mes certificats vert" class="project__picture">
			</article>
			<article class="project" itemprop"workExample">
				<a href="./rollstyle.html" class="project__link">Voir le projet</a>
				<h3 class="project__info">Festival Roll-Style</h3>
				<img src="./img/rollstyle.png" alt="Planche de skateboard festival Roll-Style" class="project__picture">
			</article>
			<div class="clear"></div>			
		</section>
		<section id="contact" class="contact section">
			<div class="centerZone">
				<h2 class="works__title2 title2">Me dire bonjour</h2>
				<form action="#contact" method="post" class="contact__form">
					<?php if ( isset( $errorMsg ) ) : ?>
						<p class="errorMsg"><?= $errorMsg; ?></p><br />
					<?php endif; ?>
					<div class="contact__form--left">
						<div class="contact__form--prenom">
							<input type="text" class="champ" name="prenom" id="prenom" value="<?php if( isset( $_POST['prenom'] ) AND $sent != 1 ){ echo $_POST['prenom']; } ?>">
							<label for="prenom">Prénom</label>
						</div>
						<div class="contact__form--nom">
							<input type="text" class="champ" name="nom" id="nom" value="<?php if( isset( $_POST['nom'] ) AND $sent != 1 ){ echo $_POST['nom']; } ?>" required>
							<label for="nom">Nom</label>
						</div>
						<div class="contact__form--email">
							<input type="email" class="champ" name="email" id="email" value="<?php if( isset( $_POST['email'] ) AND $sent != 1 ){ echo $_POST['email']; } ?>" required>
							<label for="email">Email</label>
						</div>
						<div class="contact__form--phone">
							<input type="tel" class="champ" name="phone" id="phone" value="<?php if( isset( $_POST['phone'] ) AND $sent != 1 ){ echo $_POST['phone']; } ?>">
							<label for="phone">Téléphone</label>
						</div>
					</div>
					<div class="contact__form--right">
						<div class="contact__form--content">
							<textarea class="champ area" name="message" required id="message"><?php if( isset( $_POST['message'] ) AND $sent != 1 ){ echo $_POST['message']; } ?></textarea>
							<label for="message">Message</label>
						</div>
					</div>
					<input type="hidden" name="formsent" value="ok">
					<input class="send" type="submit" value="Envoyer">
					<div class="clear"></div>
				</form>
				<a href="skype:0499261257?call" class="contact__telephone">
					<div class="contact__picto">
						<img src="./img/picto_phone.svg" alt="Téléphone">
					</div>
					<p>0499 / 26 12 57</p>
				</a>
				<a href="mailto:info@loic-parent.be" class="contact__mail">
					<div class="contact__picto">
						<img src="./img/picto_mail.svg" alt="Email">
					</div>
					<p>info@loic-parent.be</p>
				</a>
				<a href="https://www.facebook.com/loic.parent.31" class="contact__fb">
					<div class="contact__picto">
						<img src="./img/picto_facebook.svg" alt="Facebook">
					</div>
					<p>Mon Facebook</p>
				</a>
				<div class="clear"></div>
			</div>
		</section>
	</div>
	<footer class="footer">
		<p>
			<a href="mailto:info@loic-parent.be" title="Envoyer un mail">Loïc Parent</a> 2015 ® <span>• Tous drois r&eacute;serv&eacute;</span>
		</p>
	</footer>
</body>
</html>