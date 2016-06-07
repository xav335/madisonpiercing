<? 
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Contact.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Goldbook.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );
	session_start();
	
	$debug = false;
	
	$contact = new Contact();
	$goldbook = new Goldbook();
	
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
			$val[ "fromgoldbook"] = "on";
			if ( $num_contact <= 0 ) $contact->contactAdd( $val, $debug );
			else $contact->contactModify( $val, $debug );
		}
		// ------------------------------------------- //
		
		// ---- Enregistrement du témoignage --------- //
		if ( 1 == 1 ) {
			unset( $val );
			$val[ "datepicker"] = date( "d/m/Y" );
			$val[ "name"] = $_POST[ "nom" ];
			$val[ "email"] = $_POST[ "email" ];
			$val[ "online"] = '0';
			$val[ "message"] = $_POST[ "message" ];
			$goldbook->goldbookAdd( $val, $debug );
		}
		// ------------------------------------------- //
		
		// ---- Envoi du mail à l'admin -------------- //
		if ( 1 == 1 ) {
			$entete = "From:" . MAILNAMECUSTOMER . " <" . MAILCUSTOMER . ">\n";
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
			$message .= "La personne suivante vient de déposer un témoignage de votre site :<br>";
			$message .= "Nom : <b>" . $_POST[ "nom" ] . " " . $_POST[ "prenom" ] . "</b><br>";
			$message .= "E-mail : <b>" . $_POST[ "email" ] . "</b><br>";
			$message .= "Message : <br><i>" . nl2br( $_POST[ "message" ] ) . "</i><br><br>";
			$message .= "Cordialement.";
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
	
	// ---- Liste des témoignages en ligne ------------------- //
	$liste = $goldbook->goldbookValidGet( $debug );
?>

<!doctype html>
<html class="no-js" lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Madison Piercing | Livre d'or</title>
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/header.php" ); ?>
		
	</head>
	<body class="page-faq">
		
		<main>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/top.php" ); ?>
			
			<div class="row fullwidth fullscreen">
		
				<div class="row contenu">
					<div class="columns large-12">
						<h1>Livre d'or</h1>
					</div>
					
					<div class="columns large-12">
						<div class="textes <?=$affichage_success?>">
							<div id="div_success" class="large-12 medium-12 small-12 column">
								<h3>Merci!</h3>
								<p>Votre témoignage a été enregitré avec succès!</p>
							</div>
						</div>
						<div class="textes <?=$affichage_erreur?>">
							<div id="div_erreur" class="large-12 medium-12 small-12 column">
								<h3>Erreur!</h3>
								<p>
									Une erreur s'est produite lors de l'enregistrement de votre témoignage.<br>
									Veuillez essayer ultérieurement.
								</p>
							</div>
						</div>
					</div>
					
					<?
					// ---- Affichage des témoignages --------------------------------- //
					if ( !empty( $liste ) ) {
						echo "<div class='columns large-12'>\n";
						echo "	<div class='textes'>\n";
						
						foreach( $liste as $_temoignage ) {
							$nom = $_temoignage[ "nom" ];
							$message = nl2br( $_temoignage[ "message" ] );
							
							echo "	<h2>" . $nom . "</h2>\n";
							echo "	<p>" . $message . "</p>\n";
						}
						
						echo "	</div>\n";
						echo "</div>\n";
					}
					// ---------------------------------------------------------------- //
					?>
					
					<div class="columns large-12" style="padding-bottom:50px;">
						
						<!-- Inscription Témoignage -->
						<div style="padding: 0px 40px;" class="columns large-12 medium-12 small-12">
							<h2>Laisser-nous votre message...</h2>
							<form id="formulaire" method="post" action="livre-d-or.php">
								<input type="hidden" name="mon_action" id="mon_action" value="" />
								<input type="hidden" name="as" value="" />
								
								<input type="text" name="nom" id="nom" placeholder="Prénom et Nom" />
								<input type="email" name="email" id="email" placeholder="adresse@mail.com" />
								<textarea name="message" id="message" placeholder="Votre message"></textarea>
								<input type="checkbox" name="newsletter" checked />&nbsp;Je souhaite m'inscrire sur la newsletter.
								
								<button>Ajoutez votre témoignage</button>
							</form>
						</div>
						
					</div>
				</div>
				
			</div>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/footer.php" ); ?>
			
		</main>
		
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/scripts.php" ); ?>
		
		<script>
			
			$(document).ready(function(){
				
				$('nav ul li:nth-child(8)').addClass('active');
				$('nav ul ul li:nth-child(8)').removeClass('active');
				
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
