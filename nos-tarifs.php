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
				<br><h1>NOS TARIFS</h1>
					<div class="columns large-12 medium-12 small-12">
						<div class="textes">
							<table>
								<tbody>
								    <tr>
										<td><h2>OREILLE</h2></td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>Lobe</td>
										<td>de 25€ à 60€</td>
									</tr>
									<tr>
										<td>Hélix</td>
										<td>de 35€ à 60€</td>
									</tr>
									<tr>
										<td>(Anti)Tragus, Rook, Flat, (Anti)Hélix, Snug </td>
										<td>de 40€ à 65€</td>
									</tr>
									<tr>
										<td>Conch</td>
										<td>de 45€ à 60€</td>
									</tr>
									<tr>
										<td>Daith</td>
										<td>de 50€ à 65€</td>
									</tr>
									<tr>
										<td>Industriel</td>
										<td>de 55€ à 65€</td>
									</tr>
									<tr>
										<td><h2>VISAGE</h2></td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>Arcade</td>
										<td>de 45€ à 50€</td>
									</tr>
									<tr>
										<td>Narine</td>
										<td>de 35€ à 70€</td>
									</tr>
									<tr>
										<td>Septum</td>
										<td>de 50€ à 60€</td>
									</tr>
									<tr>
										<td>Bridge</td>
										<td>de 70€ à 80€</td>
									</tr>
									<tr>
										<td>Bouche</td>
										<td>de 45€ à 55€</td>
									</tr>
									<tr>
										<td>Labret vertical</td>
										<td>de 50€ à 55€</td>
									</tr>
									<tr>
										<td>Smiley</td>
										<td>de 50€ à 60€</td>
									</tr>
									<tr>
										<td>Langue    </td>
										<td>45€</td>
									</tr>
									<tr>
										<td><h2>CORPS</h2></td>
										<td>&nbsp;</td>
									</tr>
									<tr>
										<td>Nombril</td>
										<td>de 50€ à 60€</td>
									</tr>
									<tr>
										<td>Téton</td>
										<td>de 45€ à 55€</td>
									</tr>
									<tr>
										<td>Les deux tétons </td>
										<td>de 90€ à 110€</td>
									</tr>
									<td><h2>GENITAL</h2></td>
										<td>&nbsp;</td>
									<tr>
										<td>nous consulter</td>
										<td>au 05 56 52 92 01</td>
									</tr>
								</tbody>
							</table>
							<p>* Tous nos tarifs sont piercing et bijou compris. Les prix évoluent en fonction des bijoux de perçage choisis.</p>
						
						<h2>PERÇAGE avec BIJOUX HAUT DE GAMME (or 18 carats et titane sophistiqué)  </h2> 
						 De 75€ à 350€ <br>

                        *Le prix évolue en fonction du bijou et non de la zone de perçage. 

 
						</div>
					</div>
					<!-- <div class="columns large-5 medium-5 small-12"><br><br>
						
 						<img src="img/logoGreg.png" alt="crane jaune" /> 
						
					</div> -->
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
