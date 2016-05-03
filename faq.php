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
		<title>Madison Piercing | FAQ</title>
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/header.php" ); ?>
		
	</head>
	<body class="page-faq">
		
		<main>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/top.php" ); ?>
			
			<div class="row fullwidth fullscreen">
		
				<div class="row contenu">
					<div class="columns large-12">
						<div class="textes">
							<h1>FAQ</h1>
							<h2>Comment les piercings sont-ils réalisés ?</h2>
							<p>Tous les piercings sont réalisés en champ stérile, sans utiliser de pince pour certains, une méthode sûre, douce et rapide.</p>
							<h2>Comment les déchets infectieux produits sont-ils pris en charge ?</h2>
							<p>Les déchets liés à notre activité sont stockés dans des containers spécifiques inviolables et labellisés, entreposés avant collecte dans un local inaccessible au public. Ils sont collectés mensuellement par La Collecte Médicale qui assure leur incinération.</p>
							<h2>Se faire piercer fait-il mal ?</h2>
							<p>Un piercing réalisé par un professionnel expérimenté ne donne lieu qu'à une simple sensation de pincement, comme c'est le cas lors du perçage d'un lobe d'oreille. Notre méthode simple, douce et rapide vous rendra cette expérience exaltante.</p>
							<h2>Quels bijoux sont proposés pour faire un piercing ?</h2>
							<p>Un très vaste choix de bijoux est proposé pour chaque piercing, dès la première pose, en acier d'implant 316LVM F-138, en titane d'implant 6AL4V ELI F-136.</p>
							<h2>Comment prendre soins d'un nouveau piercing ?</h2>
							<p>La contamination des plaies par des micro organismes se fait le plus souvent parles mains. Il faudra bien suivre nos conseils sur la feuille de soin et faire les visites de contrôle.</p>
							<h2>Faut-il prendre rendez-vous pour se faire piercer ?</h2>
							<p>Non, vous pouvez venir vous faire piercer ou changer votre bijou librement, sans rendez- vous.</p>
							<h2>Percez-vous les mineurs ?</h2>
							<p>
								Une personne mineure souhaitant se faire percer doit être :<br/>
								+ 15 ans : obligatoirement accompagnée de son parent (tuteur légal), tout deux munis de leurs pièces d'identité respectives et si besoin du livret de famille.<br/>
								- 15 ans : certains piercings peuvent être effectués sur les - de 15 ans, pour cela nous contacter directement en boutique. La présence du parent (tuteur légal), ainsi que les pièces d'identités respectives vous seront demandés.
							</p>
							<p>Nous ne réalisons pas de transdermique sur les - 18 ans.</p>
							<h2>Je suis allergique à beaucoup de choses. Puis-je me faire piercer ?</h2>
							<p>Oui, car les bijoux utilisés pour réaliser le piercing sont en acier ou en titane d'implant. Ces matériaux sont biocompatibles, ils ont été conçus pour être portés à long terme dans l'organisme sans aucun risque allergique. L'acier d'implant est utilisé depuis plus de 30 ans en chirurgie pour constituer les implants médicaux (broches etc.), le titane d'implant est lui utilisé depuis plus d'une dizaine d'années.</p>
							<h2>Un piercing à la lèvre peut-il endommager les gencives ?</h2>
							<p>Un piercing à la lèvre peut être porté en toute sécurité sans aucun risque pour les gencives, lorsque deux facteurs sont réunis :<br/>
								le piercing est réalisé perpendiculairement à la lèvre,<br/>
								le bijou porté est un bioplast.
							</p>
							<h2>Qu'est-ce qu'un "micro dermique" ou "dermal anchor" ?<br/>Les réalisez-vous ?</h2>
							<p>
								OUI. Le dermal est un bijou implanté dans la peau, comme un piercing, mais avec une seule et unique extrémité. Ce type de bijou donne satisfaction sur des zones ou un piercing de surface était difficilement viable et peut recevoir des terminaisons à visser variées, discrètes et surtout: plates.(visserie interne au bijou).<br/>
								Nous utilisons pour installer le dermal une méthode simple, douce et rapide.
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
				$('nav ul li:nth-child(6)').addClass('active');
				$('nav ul ul li:nth-child(6)').removeClass('active');
			});
			
		</script>
		
	</body>
</html>
