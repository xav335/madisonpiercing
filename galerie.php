<?
	include_once ( $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/utils.php" );
	require( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/inc.config.php" );
	require $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo.php";
	
	$debug = false;
	
	$photo = new Photo();
	
	// ---- Liste des photos associées à la catégorie
	if ( 1 == 1 ) {
		unset( $recherche );
		$recherche[ "id_categorie" ] = intval( $_GET[ "id" ] );
		$liste_photo = $photo->getListe( $recherche, $debug );
	}
	// -------------------------------------------- //
	
?>

<!doctype html>
<html class="no-js" lang="fr">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" data-fancybox-legende="ie=edge">
		<meta name="viewport" data-fancybox-legende="width=device-width, initial-scale=1.0" />
		<title>Madison Piercing | Galerie photos</title>
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/header.php" ); ?>
		
	</head>
	<body class="page-galerie">
		
		<main>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/top.php" ); ?>
			
			<div class="row fullwidth fullscreen">
				
				<?
				// ---- Affichage des images pour la catégorie ----------- //
				if ( !empty( $liste_photo ) ) {
					echo "<div class='row galerie collapse'>\n";
					
					foreach( $liste_photo as $_photo ) {
						$titre = $_photo[ "titre" ];
						$legende = $_photo[ "legende" ];
						
						$image_vignette = "/photos/photo/thumbs" . $_photo[ "image" ];
						$image_normale = "/photos/photo/normale" . $_photo[ "image" ];
						
						echo "<div class='columns large-3 medium-4 small-6'>\n";
						echo "	<a class='fancybox' href='" . $image_normale . "' data-fancybox-group='gallery' title=\"" . $titre . "\" data-fancybox-legende=\"" . $legende . "\"><span>" . $titre . "</span><img src='" . $image_vignette . "' alt=\"" . $titre . "\" /></a>\n";
						echo "</div>\n";
					}
					
					echo "	<div style='clear:both;'></div>\n";
					echo "</div>\n";
				}
				// ------------------------------------------------------- //
				?>
				
			</div>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/footer.php" ); ?>
			
		</main>
		
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/scripts.php" ); ?>
		
		<script>
			
			$(document).ready(function(){
				$('nav ul li:nth-child(4)').addClass('active');
				$('nav ul ul li:nth-child(4)').removeClass('active');
				$( "#cat_<?=$_GET[ "id" ]?>" ).addClass( 'active' );
			});
			
		</script>
		
	</body>
</html>
