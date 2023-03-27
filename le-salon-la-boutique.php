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
	<body class="page-faq">
		
		<main>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/top.php" ); ?>
			
			<div class="row fullwidth fullscreen">
		
				<div class="row contenu">
						
						<div class="columns large-6 medium-6 small-12">
							<br>
							<img style="padding: 10px 10px 10px 50px;" src="img/imagex0.jpg" alt="Madison piercing" />
							<div class="textes" style="padding: 10px 10px 10px 50px;">
								<p>Ayant forgé nos armes dans les différentes boutiques dans lesquelles nous avons pu travailler et au gré de nos rencontres; nous prêterons une attention toute particulière à chacune de vos demandes.</p>
								<p>Chaque piercing que vous ferez chez nous comprendra un suivi rigoureux tout au long de sa cicatrisation.</p>
								<br>
								<p>Conformément à l'arrêté du 12 Décembre 2008 et en accord avec l'article R1311-3 du code de la santé publique, les membres de Madison Piercing sont titulaires de la formation "Hygiène et Salubrité" </p>
							</div>
							<img style="padding: 10px 10px 10px 50px;" src="img/imagex1.jpg" alt="Madison piercing" />
						</div>
						<div class="columns large-6 medium-6 small-12">
							<div class="textes" style="padding: 35px 10px 0px 50px;">
								<p>Implanté depuis 1992 à Bordeaux, Madison Piercing vous offre un large choix de bijoux originaux et de qualité autant pour la première pose (lorsque vous vous faites percer) que pour les modèles proposés en magasin une fois votre cicatrisation terminée.</p>
								<br>
								<p>Très régulièrement vous pourrez découvrir des nouveautés en bijouterie et si vous avez une envie particulière d'un bijou et que vous ne le trouvez pas, nous pourrons voir à vous le commander. </p>
								<br>
								<p>"Vous souhaitez offrir un piercing à un proche ? " Ne cherchez plus, Madison a mit en place un système de "bon cadeau" à offrir tout au long de l'année, avec une validité d'un an.</p>
								<br>
								<p>Tenue par une équipe de pierceuses professionnelles, motivées et passionnées, nous serons en mesure de vous conseiller et appliquer nos connaissances pour vos différents piercings dans des conditions d'hygiène très strictes et un cadre accueillant</p>
                                <H2 class="text-center"><b><a href="visite-virtuelle.php">Visite virtuelle du salon</a></b></H2>
                            </div>
							<img style="padding: 10px 10px 10px 50px;" src="img/imagex2.jpg" alt="Madison piercing" />

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
