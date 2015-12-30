<?php 
	if ( isset($_POST['formsent']) ) {
		if ( !empty( $_POST['prenom'] ) AND !empty( $_POST['nom'] ) AND !empty( $_POST['email'] ) AND filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) AND !empty( $_POST['phone'] ) AND !empty( $_POST['message'] ) ) {

			$nom = htmlspecialchars($_POST['nom']);

			$mail = htmlspecialchars($_POST['email']);

			$message = htmlspecialchars($_POST['message']);

			$prenom = htmlspecialchars($_POST['prenom']);

			$tel = htmlspecialchars($_POST['phone']);

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
			$sent = 0;
			if ( !empty( $_POST['prenom'] ) AND !empty( $_POST['nom'] ) AND !empty( $_POST['email'] ) AND !empty( $_POST['phone'] ) AND !empty( $_POST['message'] ) ) {
				$errorMsg = "Email invalide";
				$errorEmail = 1;
			} else {
				$errorMsg = "Veuiller compléter tous les champs";
				empty( $_POST['prenom'] ) ? $errorPrenom = 1 : null;
				empty( $_POST['nom'] ) ? $errorNom = 1 : null;
				empty( $_POST['email'] ) ? $errorEmail = 1 : null;
				empty( $_POST['phone'] ) ? $errorPhone = 1 : null;
				empty( $_POST['message'] ) ? $errorMessage = 1 : null;
			}
		}
	}
 ?>