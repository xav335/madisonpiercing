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
		<title>Madison Piercing | Nos Tarifs</title>
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/header.php" ); ?>
		
	</head>
	<body class="page-tarifs">
		
		<main>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/top.php" ); ?>
			
			<div class="row fullwidth fullscreen">
		
				<div class="row contenu">
				   <h1>NOS TARIFS</h1>
					<div class="columns large-7 medium-7 small-12">
						<div class="textes">
							<table>
								<tbody>
									<tr>
										<td>Arcade</td>
										<td>à partir de 40 euros</td>
									</tr>
									<tr>
										<td>Bridge</td>
										<td>à partir de 70 euros</td>
									</tr>
									<tr>
										<td>Conch (fond d'oreille)</td>
										<td>à partir de 45 euros</td>
									</tr>
									<tr>
										<td>Daith (repli cartilage)</td>
										<td>à partir de 50 euros</td>
									</tr>
									<tr>
										<td>Filet (langue ou lèvre)</td>
										<td>à partir de 50 euros</td>
									</tr>
									<tr>
										<td>Hélix (cartilage)</td>
										<td>à partir de 30 euros</td>
									</tr>
									<tr>
										<td>Langue</td>
										<td>à partir de 40 euros</td>
									</tr>
									<tr>
										<td>Lèvre (tour de bouche)</td>
										<td>à partir de 40 euros</td>
									</tr>
									<tr>
										<td>Lobe (oreille)</td>
										<td>à partir de 25 euros</td>
									</tr>
									<tr>
										<td>Microdermal (+ de 18 ans)</td>
										<td>à partir de 60 euros</td>
									</tr>
									<tr>
										<td>Nez</td>
										<td>à partir de 30 euros</td>
									</tr>
									<tr>
										<td>Nombril</td>
										<td>à partir de 45 euros</td>
									</tr>
									<tr>
										<td>Septum</td>
										<td>à partir de 50 euros</td>
									</tr>
									<tr>
										<td>Surface</td>
										<td>à partir de 50 euros</td>
									</tr>
									<tr>
										<td>Téton</td>
										<td>à partir de 45 euros</td>
									</tr>
									<tr>
										<td>Tragus / repli cartilage</td>
										<td>à partir de 40 euros</td>
									</tr>
									<tr>
										<td>Traversée</td>
										<td>à partir de 55 euros</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>Génitaux</td>
										<td>nous consulter</td>
									</tr>
								</tbody>
							</table>
							<p>Tous nos tarifs sont piercing et bijou compris.</p>
						</div>
					</div>
					 <div class="columns large-5 medium-5 small-12"><br><br>
						<img src="img/cranejaune.jpg" alt="crane jaune" />
					</div>
				</div>
				
			</div>
			
			<? include_once( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/footer.php" ); ?>
			
		</main>
		
		
		<? include( $_SERVER[ "DOCUMENT_ROOT" ] . "/inc/scripts.php" ); ?>
		
		<script>
			
			$(document).ready(function(){
				$('nav ul li:nth-child(5)').addClass('active');
				$('nav ul ul li:nth-child(5)').removeClass('active');
			});
			
		</script>
		
	</body>
</html>
