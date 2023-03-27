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

                    <div class="columns large-12 medium-12 small-12">
                        <br>

                        <iframe src="https://www.google.com/maps/embed?pb=!4v1679316784779!6m8!1m7!1sCAoSLEFGMVFpcFB4bkpFNTNCeDVKLWxSSjJaQ1lzd3Rsc3VVNGZfZXpUVjdJdVl0!2m2!1d44.835381597952!2d-0.57316242173741!3f232.40415555791571!4f-0.3154099448893959!5f0.7820865974627469" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
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
