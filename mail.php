<?php 
	
	function isRealNumber() {
		$string = $_POST['phone'];
		if (preg_match('/^\(?[0-9]{3}\)?|[0-9]{3}[-. ]? [0-9]{3}[-. ]?[0-9]{4}$/', $string)) { 
			return true;
		} else {
			return false;
		}
	}

	if ( isset($_POST['formsent']) ) {
		if ( !empty( $_POST['prenom'] ) AND !empty( $_POST['nom'] ) AND !empty( $_POST['email'] ) AND filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) AND !empty( $_POST['message'] ) ) {

			$nom = htmlspecialchars($_POST['nom']);

			$mail = htmlspecialchars($_POST['email']);

			$message = htmlspecialchars($_POST['message']);

			$prenom = htmlspecialchars($_POST['prenom']);

			$tel = "non spécifié";

			if ( !empty( $_POST['phone'] ) AND isRealNumber() === true ) {
				$tel = htmlspecialchars($_POST['phone']);
			}

			$header = "MIME-version: 1.1\r\n";
			$header .= 'From:"loic-parent.be"<support@loic-parent.be>'."\n";
			$header .= 'Content-Type:text/html; charset="utf-8"'."\n"; 
			$header .= 'Content-Transfer-Encoding: 8bit'; 

			$message = '
				<!DOCTYPE html>
				<html lang="fr-BE">
				<head>
					<meta charset="UTF-8">
					<title>Contact de loic-parent.be</title>
					<link href="https://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet" type="text/css">
				</head>
				<body style="margin: 0;padding: 0;min-width: 100%; font-family: Dosis, helvetica, sans-serif; font-size: 1.2em;">
					<h1 style="background-color: #22A7F0; margin: 0; padding: 1em; font-size: 1.5em;  font-weight: normal; text-align: center; color: white;">Nouveau message de <a href="http://loic-parent.be" style="color: white; text-decoration: none;">loic-parent.be</a></h1>
					<img src="http://loic-parent.be/img/favicon.ico/apple-icon-180x180.png" width="180" height="180" style="display: block; margin: 5px auto; margin-top: 2.5em;" alt="logo du site loic-parent" />
					<div style="padding: 1em; max-width: 800px; margin: auto;">
						<h2>Message de:</h2>
						<p style="border: 1px solid #22A7F0; padding: 0.5em; border-radius: 10px;">
							<em style="text-decoration: underline; font-style: normal; font-weight: bold; color: #22A7F0; padding-right: 5px;">Nom: </em>
							'.$nom.'
						</p>
						<p style="border: 1px solid #22A7F0; padding: 0.5em; border-radius: 10px;">
							<em style="text-decoration: underline; font-style: normal; font-weight: bold; color: #22A7F0; padding-right: 5px;">Prénom: </em>
							'.$prenom.'
						</p>
						<p style="border: 1px solid #22A7F0; padding: 0.5em; border-radius: 10px;">
							<em style="text-decoration: underline; font-style: normal; font-weight: bold; color: #22A7F0; padding-right: 5px;">Email: </em><a href="mailto:'.$mail.'" style="text-decoration: none; color: black;">'.$mail.'</a>
						</p>
						<p style="border: 1px solid #22A7F0; padding: 0.5em; border-radius: 10px;">
							<em style="text-decoration: underline; font-style: normal; font-weight: bold; color: #22A7F0; padding-right: 5px;">Tél: </em><a href="tel:'.$tel.'" style="text-decoration: none; color: black;">'.$tel.'</a>
						</p>
						<p style="border: 1px solid #22A7F0; padding: 0.5em; border-radius: 10px;">
							<em style="text-decoration: underline; font-style: normal; font-weight: bold; color: #22A7F0; padding-right: 5px;">Message reçu:</em>
							'.nl2br($message).'
						</p>
						<a href="mailto:'.$mail.'" style="background-color: #22A7F0; border-radius: 10px; display: block; color: white; padding: 0.5em; margin: auto; text-align: center; text-decoration: none;">Répondre à la personne</a>
					</div>
				</body>
				</html>
			';

			if ( !empty( $_POST['phone'] ) AND isRealNumber() === false ) {
				$errorMsg = "Numéro de télephone invalide";
				$errorPhone = 1;
			} else {
				mail( "info@loic-parent.be", "Contact du site loic-parent.be", $message, $header );
				$errorMsg = "Votre message à bien été envoyé";
				$sent = 1;
			}
			
		} else {
			$sent = 0;
			if ( !empty( $_POST['prenom'] ) AND !empty( $_POST['nom'] ) AND !empty( $_POST['email'] ) AND !empty( $_POST['phone'] ) AND !empty( $_POST['message'] ) ) {
				if ( !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
					$errorMsg = "Email invalide";
					$errorEmail = 1;
					if ( isRealNumber() !== true ) {
						$errorMsg .= " - Mauvais numéro de télephone";
						$errorPhone = 1;
					}
				}
				if ( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) AND isRealNumber() !== true ) {
					$errorMsg .= "Mauvais numéro de télephone";
					$errorPhone = 1;
				}
			} else {
				$errorMsg = "Veuiller compléter tous les champs (*)";
				empty( $_POST['prenom'] ) ? $errorPrenom = 1 : null;
				empty( $_POST['nom'] ) ? $errorNom = 1 : null;
				empty( $_POST['email'] ) ? $errorEmail = 1 : null;
				if ( !empty( $_POST['email'] ) AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
					$errorMsg .= " - Email invalide";
					$errorEmail = 1;
				}
				if ( !empty( $_POST['phone'] ) AND isRealNumber() !== true ) {
					$errorMsg .= " - Mauvais numéro de télephone";
					$errorPhone = 1;
				}
				empty( $_POST['message'] ) ? $errorMessage = 1 : null;
			}
		}
	}
 ?>