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
		<title>Madison Piercing | l'Hygiène</title>
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/header.php" ); ?>
		
	</head>
	<body class="page-faq">
		
		<main>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/top.php" ); ?>
			
			<div class="row fullwidth fullscreen">
		
				<div class="row contenu">
					<div class="columns large-12">
						<div class="textes">
							<h1>L'Hygiène et la stérilisation</h1>
							<p>Les aiguilles utilisées sont <strong>stériles</strong> et à <strong>usage unique</strong>. Tout le matériel qui n'est pas jetable entrant en oeuvre est <strong>nettoyé par ultrasons</strong>, <strong>décontaminé</strong> (trempage bain Hexanios GR+) et stérilisé sous sachet scellé étanche avec une autoclave classe B (cycle Prion). C'est le seul protocole et matériel vous garantissant une <strong>hygiène parfaite</strong>.</p>
							<p>Les déchets d'activité produits par Madison Piercing sont stockés dans des containers spécifiques et labélisés, ces déchets sont incinérés mensuellement par un organisme compétent.</p>
						</div>
					</div>
				</div>
				
			</div>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/footer.php" ); ?>
			
		</main>
		
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/scripts.php" ); ?>
		
		<script>
			
			$(document).ready(function(){
				$('nav ul li:nth-child(3)').addClass('active');
				$('nav ul ul li:nth-child(3)').removeClass('active');
			});
			
		</script>
		
	</body>
</html>
