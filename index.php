<?php 
$home = true;
$pageTitle = "Loïc Parent • design graphic";
$headerContent = '
	<meta name="keywords" content="Loïc, Loic, loïc, loic, Parent, parent, Loïc Parent, Loic Parent, loic parent, loïc parent, lp, LP, Lp, infographiste, web, webdesigner, designer, design, liège, waremme, geer" />
	<meta name="Description" content="Je suis un étudiant en infographie Web qui habite près de Waremme ce site est une sorte de portefolio qui présente mes travaux" />
';
include( 'header.php' );
include( 'mail.php' );
?>
<div id="content" class="content__home">
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
				<figure class="pictureZone">
					<img src="./img/photo.png" alt="Photo de Loïc Parent" width="300" height="620">
				</figure>
				<a href="./CV-ParentLoïc.pdf" class="aboutMe__left--cv">Télécharger mon CV</a>
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
					<span class="aboutMe__skills--item losange psd"><abbr class="abbr">Ps</abbr></span>
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
					<span class="aboutMe__skills--item losange html"><abbr class="abbr">Html</abbr></span>
					<span class="hidden">signifie</span>
					<span class="aboutMe__skills--item">Hypertext Markup Language 5</span>
				</li>
				<li class="aboutMe__skills--elm">
					<span class="aboutMe__skills--item losange css"><abbr class="abbr">Css</abbr></span>
					<span class="hidden">signifie</span>
					<span class="aboutMe__skills--item">Cascading Style Sheet 3</span>
				</li>
				<li class="aboutMe__skills--elm">
					<span class="aboutMe__skills--item losange js"><abbr class="abbr">Js</abbr></span>
					<span class="hidden">signifie</span>
					<span class="aboutMe__skills--item">Javascript</span>
				</li>
				<li class="aboutMe__skills--elm">
					<span class="aboutMe__skills--item losange php"><abbr class="abbr">Php</abbr></span>
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
		<article class="project projet_web" itemprop="workExample">
			<a href="./stucher.php" class="project__link">Voir le projet <span class="hidden">Stucher (PFE)</span></a>
			<h3 class="project__info">Stucher (PFE)</h3>
			<img src="./img/stucher.png" alt="Stucher (PFE)" class="project__picture" width="600" height="500">
		</article>
		<article class="project projet_web" itemprop="workExample">
			<a href="./alfa.php" class="project__link">Voir le projet <span class="hidden">Centre Alfa</span></a>
			<h3 class="project__info">Centre Alfa</h3>
			<img src="./img/alfa.png" alt="Centre Alfa" class="project__picture" width="600" height="500">
		</article>
		<article class="project projet_web" itemprop="workExample">
			<a href="./bibliotheque.php" class="project__link">Voir le projet <span class="hidden">Bibliothèque en ligne</span></a>
			<h3 class="project__info">Bibliothèque en ligne</h3>
			<img src="./img/bibliotheque.png" alt="Bibliothèque en ligne" class="project__picture" width="600" height="500">
		</article>
		<article class="project projet_web" itemprop="workExample">
			<a href="./dswallonie.php" class="project__link">Voir le projet <span class="hidden">Ds Wallonie</span></a>
			<h3 class="project__info">Ds Wallonie</h3>
			<img src="./img/dswallonie.png" alt="Ds Wallonie" class="project__picture" width="600" height="500">
		</article>
		<article class="project projet_web" itemprop="workExample">
			<a href="./esquive.php" class="project__link">Voir le projet <span class="hidden">Jeu canvas “esquive”</span></a>
			<h3 class="project__info">Jeu canvas “esquive”</h3>
			<img src="./img/esquive.png" alt="Esquive" class="project__picture" width="600" height="500">
		</article>
		<article class="project projet_print" itemprop="workExample">
			<a href="./bouvachon.php" class="project__link">Voir le projet <span class="hidden">Huile d’olive Bouvachon</span></a>
			<h3 class="project__info">Huile d’olive Bouvachon</h3>
			<img src="./img/bouvachon.gif" alt="Logo et bouteille Bouvachon" class="project__picture" width="600" height="500">
		</article>
		<article class="project projet_print" itemprop="workExample">
			<a href="./stimform.php" class="project__link">Voir le projet <span class="hidden">Catalogue Stim-from</span></a>
			<h3 class="project__info">Catalogue Stim-from</h3>
			<img src="./img/stimform.png" alt="Stim-Form partenaire privilégié du kinésithérapeute" class="project__picture" width="600" height="500">
		</article>
		<article class="project projet_print" itemprop="workExample">
			<a href="./btf.php" class="project__link">Voir le projet <span class="hidden">Affiche Retour vers le futur</span></a>
			<h3 class="project__info">Affiche Retour vers le futur</h3>
			<img src="./img/btf.png" alt="Affiche Retour vers le futur" class="project__picture" width="600" height="500">
		</article>
		<article class="project projet_print" itemprop="workExample">
			<a href="./pancakes.php" class="project__link">Voir le projet <span class="hidden">Pancakes Typography</span></a>
			<h3 class="project__info">Pancakes Typography</h3>
			<img src="./img/pancakes.png" alt="photo panecakes" class="project__picture" width="600" height="500">
		</article>
		<article class="project projet_print" itemprop="workExample">
			<a href="./tshirt.php" class="project__link">Voir le projet <span class="hidden">Visuels de T-shirt</span></a>
			<h3 class="project__info">Visuels de T-shirt</h3>
			<img src="./img/tshirt.png" alt="Visuels de T-shirt" class="project__picture" width="600" height="500">
		</article>
		<article class="project projet_print" itemprop="workExample">
			<a href="./euroskills.php" class="project__link">Voir le projet <span class="hidden">Euroskills</span></a>
			<h3 class="project__info">Euroskills</h3>
			<img src="./img/euroskills.png" alt="Affiche Euroskills Lisbonne 2014 compétition européenne des métiers" class="project__picture" width="600" height="500">
		</article>
		<article class="project projet_print" itemprop="workExample">
			<a href="./tpcv.php" class="project__link">Voir le projet <span class="hidden">Touche pas à mes certificats vert</span></a>
			<h3 class="project__info">Touche pas à mes certificats vert</h3>
			<img src="./img/tpcv.png" alt="Logo touche pas à mes certificats vert" class="project__picture" width="600" height="500">
		</article>
		<article class="project projet_print" itemprop="workExample">
			<a href="./rollstyle.php" class="project__link">Voir le projet <span class="hidden">Festival Roll-Style</span></a>
			<h3 class="project__info">Festival Roll-Style</h3>
			<img src="./img/rollstyle.png" alt="Planche de skateboard festival Roll-Style" class="project__picture" width="600" height="500">
		</article>
		<div class="clear"></div>			
	</section>
	<section id="contact" class="contact section">
		<div class="centerZone">
			<h2 class="works__title2 title2">Me dire bonjour</h2>
			<form action="#contact" method="post" class="contact__form">
				<?php if ( isset( $errorMsg ) ) : ?>
					<?php if ( $sent === 1 ) : ?>
						<p class="sentMsg">
						<img src="./img/sent.svg" alt="callBack icon">
						<?= $errorMsg; ?>
						</p><br />
					<?php else: ?>
						<p class="errorMsg">
						<img src="./img/error.svg" alt="callBack icon">
						<?= $errorMsg; ?>
						</p><br />
					<?php endif; ?>
				<?php endif; ?>
				<div class="contact__form--left">
					<div class="contact__form--prenom <?php if ( isset( $errorPrenom ) ) { echo "errorColor"; } ?>">
						<input type="text" class="champ" name="prenom" required id="prenom" value="<?php if( isset( $_POST['prenom'] ) AND $sent != 1 ){ echo $_POST['prenom']; } ?>">
						<label for="prenom">Prénom*</label>
					</div>
					<div class="contact__form--nom <?php if ( isset( $errorNom ) ) { echo "errorColor"; } ?>">
						<input type="text" class="champ" name="nom" id="nom" value="<?php if( isset( $_POST['nom'] ) AND $sent != 1 ){ echo $_POST['nom']; } ?>" required>
						<label for="nom">Nom*</label>
					</div>
					<div class="contact__form--email <?php if ( isset( $errorEmail ) ) { echo "errorColor"; } ?>">
						<input type="email" class="champ" name="email" id="email" value="<?php if( isset( $_POST['email'] ) AND $sent != 1 ){ echo $_POST['email']; } ?>" required>
						<label for="email">Email*</label>
					</div>
					<div class="contact__form--phone <?php if ( isset( $errorPhone ) ) { echo "errorColor"; } ?>">
						<input type="tel" class="champ" name="phone" id="phone" value="<?php if( isset( $_POST['phone'] ) AND $sent != 1 ){ echo $_POST['phone']; } ?>">
						<label for="phone">Téléphone</label>
					</div>
				</div>
				<div class="contact__form--right">
					<div class="contact__form--content <?php if ( isset( $errorMessage ) ) { echo "errorColor"; } ?>">
						<textarea class="champ area" name="message" required id="message"><?php if( isset( $_POST['message'] ) AND $sent != 1 ){ echo $_POST['message']; } ?></textarea>
						<label for="message">Message*</label>
					</div>
				</div>
				<input type="hidden" name="formsent" value="ok">
				<input class="send" type="submit" value="Envoyer">
				<div class="clear"></div>
			</form>
			<a href="tel:0499261257?call" class="contact__telephone">
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
<?php include( 'footer.php' ); ?>
	