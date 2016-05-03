<?
	include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
	
	$debug = false;
	
?>

<!doctype html>
<html class="no-js" lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Madison Piercing | Le Salon / La Boutique</title>
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/header.php" ); ?>
		
	</head>
	<body class="page-salon">
		
		<main>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/top.php" ); ?>
			
			<div class="row fullwidth fullscreen">
		
				<div class="row contenu">
					<div class="columns large-5 medium-5 small-12">
						<img src="img/fillesc.jpg" alt="Marie" />
					</div>
					<div class="columns large-7 medium-7 small-12">
						<div class="textes">
							<p>Marie est pierceur professionnelle depuis 1992, elle définit le piercing comme une modification corporelle à visée esthétique nécessitant un certain nombre de précautions hygiéniques et médicales réglementaires et obligatoires.</p>
							<p>Marie a participé à de nombreuses  conventions  et a fait ses armes entre Montréal et Miami. Avec son époux Michel, ils s'établissent à Bordeaux en 1992 et ouvrent la boutique Michel Tattoo'n Family . Elle travaille tout d'abord à l'étage du studio  avant d'ouvrir la boutique spécialisée Madison Piercing  juste en face. Avec un mélange irremplaçable de théorie et d'expérience, nous  formons une équipe  simple, souriante et efficace qui saura vous mettre en confiance et vous expliquer toutes les étapes nécessaires pour prendre soin de votre piercing</p>
							<p>Nous travaillons en collaboration avec Hépatite Service et Sida InfoService et nous participons activement à la mise en commun des pratiques professionnelles concernant l'hygiène afin de réaliser une charte commune appuyée sur l'arrêté du 11 mars 2009 publié au journal officiel.</p>
						</div>
					</div>
				</div>
				
			</div>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/footer.php" ); ?>
			
		</main>
		
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/scripts.php" ); ?>
		
		<script>
			
			$(document).ready(function(){
				$('nav ul li:nth-child(2)').addClass('active');
				$('nav ul ul li:nth-child(2)').removeClass('active');
			});
			
		</script>
		
	</body>
</html>
