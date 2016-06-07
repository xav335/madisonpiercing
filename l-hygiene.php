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
							<h1>Hygiène</h1>
							<p>L'acte du piercing se déroule dans un espace séparé de la salle d'accueil. C'est une cabine fermée et aménagée de tel sorte que le piercing puisse se pratiquer dans des conditions optimales.</p>
							<p>Les aiguilles utilisées sont stériles et à usage unique. Après usage, elles sont jetées dans des collecteurs d'aiguilles destinés à la destruction.</p>
							<p>Le bijou de première pose est neuf, décontaminé à froid, nettoyé aux ultrasons puis stérilisé sous sachet (daté et numéroté) en autoclave.</p>
							<p>La matière du bijou implanté est du titane, il est léger, hypoallergénique (qui provoque peu d'allergie) et bio-compatible (résiste totalement aux fluides corporels)</p>
							<p>On peut également poser du Bioplast ou PTFE : matières souples et résistantes ; qui servent surtout pour les piercings du tour de bouche.</p>
							<p>
								Certains des instruments entrant en contact avec la peau sont réutilisables. Pour cela, ils doivent passer par un protocole complet détaillé ci-dessous :<br>
								<ul>
									<li>Décontamination à froid</li>
									<li>Nettoyage aux ultrasons</li>
									<li>Stérilisation sous sachet scellé dans un autoclave (cycle prions)</li>
								</ul>
							</p>
							<p>Les emballages stérils ne sont décachetés qu'au dernier moment et ce devant le client.</p>
							<p>Chaque emballage comportant une date et un numéro de lot est minutieusement conservé et archivé avec la fiche client.</p>
							<p>Les déchets dit souillés sont stockés dans des containers spécifiques et labélisés, ces déchets sont collectés et incinérés mensuellement par un organisme compétent.</p>
							<p>
								Dans la salle de piercing, vous pourrez apercevoir deux types de poubelle.<br>
								<ul>
									<li>Une pour les déchets non souillés</li>
									<li>Une pour les déchets souilles (DASRI)</li>
								</ul>
							</p>
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
