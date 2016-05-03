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
		<title>Madison Piercing | Galerie photos</title>
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/header.php" ); ?>
		
	</head>
	<body class="page-galerie">
		
		<main>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/top.php" ); ?>
			
			<div class="row fullwidth fullscreen">
		
				<div class="row galerie collapse">
					<div class="columns large-3 medium-4 small-6">
						<a class="fancybox" href="img/photos/11225230_1045337975486419_8811074803478246675_n.jpg" data-fancybox-group="gallery"><img src="img/photos/11225230_1045337975486419_8811074803478246675_n.jpg" alt="11225230_1045337975486419_8811074803478246675_n" /></a>
					</div>
					<div class="columns large-3 medium-4 small-6">
						<a class="fancybox" href="img/photos/11232271_1045338842152999_264295982399396829_n.jpg" data-fancybox-group="gallery"><img src="img/photos/11232271_1045338842152999_264295982399396829_n.jpg" alt="11232271_1045338842152999_264295982399396829_n" /></a>
					</div>
					<div class="columns large-3 medium-4 small-6">
						<a class="fancybox" href="img/photos/11838730_1045710172115866_207398612963259065_o.jpg" data-fancybox-group="gallery"><img src="img/photos/11838730_1045710172115866_207398612963259065_o.jpg" alt="11838730_1045710172115866_207398612963259065_o" /></a>
					</div>
					<div class="columns large-3 medium-4 small-6">
						<a class="fancybox" href="img/photos/12063554_1045338378819712_8390689092478804408_n.jpg" data-fancybox-group="gallery"><img src="img/photos/12063554_1045338378819712_8390689092478804408_n.jpg" alt="12063554_1045338378819712_8390689092478804408_n" /></a>
					</div>
					<div class="columns large-3 medium-4 small-6">
						<a class="fancybox" href="img/photos/12063554_1045339238819626_8784815992328082801_n.jpg" data-fancybox-group="gallery"><img src="img/photos/12063554_1045339238819626_8784815992328082801_n.jpg" alt="12063554_1045339238819626_8784815992328082801_n" /></a>
					</div>
					<div class="columns large-3 medium-4 small-6">
						<a class="fancybox" href="img/photos/12079307_1045339345486282_7275614397701962686_n.jpg" data-fancybox-group="gallery"><img src="img/photos/12079307_1045339345486282_7275614397701962686_n.jpg" alt="12079307_1045339345486282_7275614397701962686_n" /></a>
					</div>
					<div class="columns large-3 medium-4 small-6">
						<a class="fancybox" href="img/photos/12088390_1045339042152979_277717629526062032_n.jpg" data-fancybox-group="gallery"><img src="img/photos/12088390_1045339042152979_277717629526062032_n.jpg" alt="12088390_1045339042152979_277717629526062032_n" /></a>
					</div>
					<div class="columns large-3 medium-4 small-6">
						<a class="fancybox" href="img/photos/12096084_1045338522153031_2578005289211914521_n.jpg" data-fancybox-group="gallery"><img src="img/photos/12096084_1045338522153031_2578005289211914521_n.jpg" alt="12096084_1045338522153031_2578005289211914521_n" /></a>
					</div>
					<div class="columns large-3 medium-4 small-6">
						<a class="fancybox" href="img/photos/12096229_1045338438819706_1366306205712949064_n.jpg" data-fancybox-group="gallery"><img src="img/photos/12096229_1045338438819706_1366306205712949064_n.jpg" alt="12096229_1045338438819706_1366306205712949064_n" /></a>
					</div>
					<div class="columns large-3 medium-4 small-6">
						<a class="fancybox" href="img/photos/12096229_1045339028819647_3451045727503335623_n.jpg" data-fancybox-group="gallery"><img src="img/photos/12096229_1045339028819647_3451045727503335623_n.jpg" alt="12096229_1045339028819647_3451045727503335623_n" /></a>
					</div>
					<div class="columns large-3 medium-4 small-6">
						<a class="fancybox" href="img/photos/12107196_1045338968819653_5728539294155542671_n.jpg" data-fancybox-group="gallery"><img src="img/photos/12107196_1045338968819653_5728539294155542671_n.jpg" alt="12107196_1045338968819653_5728539294155542671_n" /></a>
					</div>
					<div class="columns large-3 medium-4 small-6">
						<a class="fancybox" href="img/photos/12108159_1045338042153079_8548737424398333655_n.jpg" data-fancybox-group="gallery"><img src="img/photos/12108159_1045338042153079_8548737424398333655_n.jpg" alt="12108159_1045338042153079_8548737424398333655_n" /></a>
					</div>
				</div>
				
			</div>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/footer.php" ); ?>
			
		</main>
		
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/scripts.php" ); ?>
		
		<script>
			
			$(document).ready(function(){
				$('nav ul li:nth-child(4)').addClass('active');
				$('nav ul ul li:nth-child(4)').removeClass('active');
				$('nav ul ul li:nth-child(2)').addClass('active');
			});
			
		</script>
		
	</body>
</html>
