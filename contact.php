<? 
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Contact.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );
	session_start();
	
	$debug = false;
	
	$contact = new Contact();
	
	$mon_action = $_POST[ "mon_action" ];
	$anti_spam = $_POST[ "as" ];
	//print_pre( $_POST );
	
	$affichage_success = "wait";
	$affichage_erreur = "wait";
	
	// ---- Post du formulaire ------------------------------- //
	if ( $mon_action == "poster" && $anti_spam == '' ) {
		if ( $debug ) echo "On poste...<br>";
		
		// ---- Enregistrement dans "contact" -------- //
		if ( 1 == 1 ) {
			$num_contact = $contact->isContact( $_POST[ "email" ], $debug );
			
			unset( $val );
			$val[ "id"] = $num_contact;
			$val[ "firstname"] = '';
			$val[ "name"] = $_POST[ "nom" ];
			$val[ "adresse"] = '';
			$val[ "cp"] = '';
			$val[ "ville"] = '';
			$val[ "email"] = $_POST[ "email" ];
			$val[ "tel"] = '';
			$val[ "message"] = $_POST[ "message" ];
			$val[ "newsletter"] = $_POST[ "newsletter" ];
			$val[ "fromcontact"] = "on";
			if ( $num_contact <= 0 ) $contact->contactAdd( $val, $debug );
			else $contact->contactModify( $val, $debug );
		}
		// ------------------------------------------- //
		
		// ---- Envoi du mail à l'admin -------------- //
		if ( 1 == 1 ) {
			$entete = "From:" . $_POST[ "nom" ] . " <" . $_POST[ "email" ] . ">\n";
			$entete .= "MIME-version: 1.0\n";
			$entete .= "Content-type: text/html; charset= iso-8859-1\n";
			$entete .= "Bcc:" . MAIL_BCC . "\n";
			//echo "Entete :<br>" . $entete . "<br><br>";
			
			$sujet = utf8_decode( "Prise de contact" );
			
			//$_to = "franck_langleron@hotmail.com";
			$_to = ( MAIL_TEST != '' )
		    	? MAIL_TEST
		    	: MAIL_CONTACT;
			//echo "Envoi du message à : " . $_to . "<br><br>";
			
			$message = "Bonjour,<br><br>";
			$message .= "La personne suivante a rempli le formulaire de contact de votre site :<br>";
			$message .= "Nom : <b>" . $_POST[ "nom" ] . "</b><br>";
			$message .= "E-mail : <b>" . $_POST[ "email" ] . "</b><br>";
			$message .= "Message : <br><i>" . nl2br( $_POST[ "message" ] ) . "</i><br><br>";
			$message = utf8_decode( $message );
			if ( $debug ) echo $message;
			
			if ( !$debug ) $retour = mail( $_to, $sujet, stripslashes( $message ), $entete );
			//exit();
			
			$affichage_success = ( $retour ) ? "" : "wait";
			$affichage_erreur = ( $retour ) ? "wait" : "";
		}
		// ------------------------------------------- //
		//exit();
		
	}
	// ------------------------------------------------------- //
?>

<!doctype html>
<html class="no-js" lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Madison Piercing | Contact</title>
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/header.php" ); ?>
		
	</head>
	<body class="page-contact">
		
		<main>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/top.php" ); ?>
			
			<div class="row fullwidth fullscreen">
				<div class="row contenu">
					<div class="columns large-12">
						<h1>Contactez-nous</h1>
					</div>
					
					<div id="div_success" class="large-12 medium-12 small-12 columns <?=$affichage_success?>">
						<h3>Félicitations!</h3>
						<p>Votre message a été envoyé avec succès!</p>
					</div>
					
					<div id="div_erreur" class="large-12 medium-12 small-12 columns <?=$affichage_erreur?>">
						<h3>Erreur!</h3>
						<p>
							Une erreur s'est produite lors de l'envoi de votre message.<br>
							Veuillez essayer ultérieurement.
						</p>
					</div>
					
					<div style="padding-left: 40px;" class="columns large-6 medium-6 small-12">
						<form id="formulaire" method="post" action="contact.php">
							<input type="hidden" name="mon_action" id="mon_action" value="" />
							<input type="hidden" name="as" value="" />
							
							<label>
								Adresse e-mail
								<input type="email" name="email" id="email" placeholder="adresse@mail.com" />
							</label>
							<label>
								Nom et prénom
								<input type="text" name="nom" id="nom" placeholder="Prénom Nom" />
							</label>
							<label>
								Message
								<textarea name="message" id="message" placeholder="Votre message"></textarea>
							</label>
							<input type="checkbox" name="newsletter" checked />&nbsp;Je souhaite m'inscrire sur la newsletter.
							
							<button>Envoyer</button>
						</form>
					</div>
					<div style="padding-left: 40px;" class="columns large-6 medium-6 small-12">
						<h2><br/>MADISON PIERCING</h2>
						<p>
							18, rue de Guienne<br/>
							(côté rue Sainte Catherine)<br/>
							33000 BORDEAUX<br/>
							(France)<br/>
							Tel : 05 56 52 92 01
						</p>
						<p>
							Infos Horaires<br/>
							Lundi de 13h30 à 19h<br/>
							Mardi à Samedi de 11h à 19h30
						</p>
					</div>
				</div>
			</div>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/footer.php" ); ?>
			
		</main>
		
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/scripts.php" ); ?>
		
		<script>
			
			$(document).ready(function(){
				
				$('nav ul li:last-child').addClass('active');
				$('nav ul ul li:last-child').removeClass('active');
				
				// ---- Validation du formulaire ---------------------------- //
				if ( 1 == 1 ) {
					
					function initialiser() {
						$( "#nom" ).removeClass( "erreur" );
						$( "#email" ).removeClass( "erreur" );
						$( "#message" ).removeClass( "erreur" );
					}
					
					function checkEmail( adr ) {
						if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(adr)) {
								return (true);
						}
						return (false);
					}
					
					$( "#formulaire" ).submit(function() {
						//alert( "validation..." );
						var erreur = 0;
						initialiser();
						
						if ( $.trim( $( "#nom" ).val() ) == '' ) {
							erreur = 1;
							$( "#nom" ).addClass( "erreur" );
						}
						
						if ( $.trim( $( "#email" ).val() ) == '' ) {
							erreur = 1;
							$( "#email" ).addClass( "erreur" );
						}
						else if ( !checkEmail( $.trim( $( "#email" ).val() ) ) ) {
							erreur = 1;
							$( "#email" ).addClass( "erreur" );
						}
						
						if ( $.trim( $( "#message" ).val() ) == '' ) {
							erreur = 1;
							$( "#message" ).addClass( "erreur" );
						}
						
						if ( erreur == 0 ) $( "#mon_action" ).val( "poster" );
						return ( erreur == 0 ) ? true : false;
					});
				}
				// ---------------------------------------------------------- //
				
			});
			
		</script>
		
	</body>
</html>
