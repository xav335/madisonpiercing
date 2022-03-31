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
		<title>Madison Piercing - Atelier de piercing bordeaux - Bijoux</title>
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/header.php" ); ?>
		
	</head>
	<body class="page-index">
		
		
		<div class="row fullwidth fullscreen">
		
		 <div style="text-align: center" id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
        	<h3  id="modalTitle">FERMETURE POUR TRAVAUX</h3><br>
        	<h2  id="modalTitle">Nous sommes actuellement fermés pour travaux jusqu'à début Avril 2022.</h2>
        	
        	 
        	<p>En cas d'urgence merci de nous contacter par mail ou sur nos réseaux sociaux notre ligne téléphonique étant coupée.<br></p>
        	<h2  id="modalTitle">A très bientôt !</h2>
        	<a class="close-reveal-modal" aria-label="Close">&#215;</a>
        </div> 
		
        			
		<main>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/top.php" ); ?>
			
			
		          
				<!-- Slider -->
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide" style="background-image:url('img/loriane2.jpg');"></div>
						<div class="swiper-slide" style="background-image:url('img/delphine3.jpg');"></div>
					</div>
					<!-- Add Pagination -->
					<div class="swiper-pagination"></div>
				</div>
				<!-- End Slider -->
				
				
			</div>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/footer.php" ); ?>
			
		</main>
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/scripts.php" ); ?>
		
		<script>
			
			$(document).ready(function(){
				$('nav ul li:first-child').addClass('active');
				$('nav ul ul li:first-child').removeClass('active');

				var swiper = new Swiper('.swiper-container', {
			        pagination: '.swiper-pagination',
			        paginationClickable: true,
			        spaceBetween: 30,
			        centeredSlides: true,
			        autoplay: 5500,
			        autoplayDisableOnInteraction: false
				});
			});
			
		</script>
		
	</body>
</html>
