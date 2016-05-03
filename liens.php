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
		<title>Madison Piercing | Liens</title>
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/header.php" ); ?>
		
	</head>
	<body class="page-liens">
		
		<main>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/top.php" ); ?>
			
			<div class="row fullwidth fullscreen">
		
				<div class="row contenu">
					<div class="columns large-12">
						<div class="textes">
							<h1>Liens</h1>
							<div class="columns large-6 medium-6 small-12">
								<img src="img/thomas-chapelan.jpg" alt="Thomas Chapelan" />
								<h2>Thomas Chapelan</h2>
								<p><a href="https://myspace.com/lafrenchkonnection" target="_blank">https://myspace.com/lafrenchkonnection</a></p>
							</div>
							<div class="columns large-6 medium-6 small-12">
								<img src="img/tattoo-life.jpg" alt="Tattoo Life Production" title="Tattoo Life Production" />
								<h2>Tattoo Life Production</h2>
								<p><a href="http://www.tattoolife.com" target="_blank">http://www.tattoolife.com</a></p>
							</div>
							<div class="columns large-6 medium-6 small-12">
								<img src="img/micheltattoo.jpg" alt="Michel Tattoo n' family" title="Michel Tattoo n' family" />
								<h2>Michel Tattoo n' family</h2>
								<p><a href="http://www.micheltattoo.com/" target="_blank">http://www.micheltattoo.com/</a></p>
							</div>
							<div class="columns large-6 medium-6 small-12">
								<img src="img/madisonpiercing.jpg" alt="Madison Piercing" title="Madison Piercing" />
								<h2>Madison Piercing</h2>
								<p><a href="https://myspace.com/madisonpiercing" target="_blank">https://myspace.com/madisonpiercing</a></p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/footer.php" ); ?>
			
		</main>
		
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/scripts.php" ); ?>
		
		<script>
			
			$(document).ready(function(){
				$('nav ul li:nth-child(7)').addClass('active');
				$('nav ul ul li:nth-child(7)').removeClass('active');
			});
			
		</script>
		
	</body>
</html>
