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
		<title>Madison Piercing | Plan d'accès</title>
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/header.php" ); ?>
		
	</head>
	<body class="page-acces">
		
		<main>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/top.php" ); ?>
			
			<div class="row fullwidth fullscreen">
				<div class="text-map">
					<p>
						MADISON PIERCING<br/>
						18, rue de Guienne<br/>
						(côté rue Sainte Catherine)<br/>
						33000 BORDEAUX<br/>
						(France)<br/>
						Tel : 05 56 52 92 01
					</p>
					<p>
						Infos Horaires<br/>
						Lundi : de 11h à 12h et de  14h à 19h<br/>
						 Mardi au Samedi : de 11h à 13h et 14h - 19h<br/><br/>
						Dimanche : fermé 
					</p>
				</div>
				<div class="mapclick" onclick="javascript:document.location.href='https://goo.gl/Z0ljM8'"></div>	
			</div>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/footer.php" ); ?>
			
		</main>
		
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/scripts.php" ); ?>
		
		<script>
			
			$(document).ready(function(){
				$('nav ul li:nth-last-child(2)').addClass('active');
				$('nav ul ul li:nth-last-child(2)').removeClass('active');
			});
			
		</script>
		
	</body>
</html>
