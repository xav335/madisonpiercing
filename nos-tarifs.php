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
					<div class="columns large-12">
						<div class="textes">
							<h1>Nos tarifs</h1>
							<p>Ces tarifs incluent le bijou, l’acte, l’explication des soins et le suivi afin d'avoir une bonne cicatrisation.</p>
							<p>Nos bijoux sont en Titane, Acier chirurgical (nouvelles normes EU) ou en Bioplast.</p>
							<table>
								<thead>
									<tr>
										<th colspan="2">Prestation</td>
										<th>Prix</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td rowspan="3">Nombril</td>
										<td>Avec un anneau</td>
									<td>30€</td>
									</tr>
									<tr>
										<td>Avec une banane 1 brillant</td>
										<td>40€</td>
									</tr>
									<tr>
										<td>Avec 2 bananes 2 brillants</td>
										<td>45€</td>
									</tr>
									<tr>
										<td>Langue</td>
										<td>Deux bijoux de compris</td>
										<td>40€</td>
									</tr>
									<tr>
										<td rowspan="2">Labret (tour de bouche)</td>
										<td>Classique</td>
										<td>35€</td>
									</tr>
									<tr>
										<td>Avec un petit brillant</td>
										<td>45€</td>
									</tr>
									<tr>
										<td rowspan="2">Piercing de surface</td>
										<td>Micro</td>
										<td>40€</td>
									</tr>
									<tr>
										<td>Surface (nuque, etc...)</td>
										<td>50€</td>
									</tr>
									<tr>
										<td rowspan="2">Téton</td>
										<td>Avec un anneau</td>
										<td>40€</td>
									</tr>
									<tr>
										<td>Avec une barre</td>
										<td>45€</td>
									</tr>
									<tr>
										<td rowspan="5">Oreille</td>
										<td>Lobe</td>
										<td>10€</td>
									</tr>
									<tr>
										<td>Cartilage avec anneau</td>
										<td>15€</td>
									</tr>
									<tr>
										<td>Cartilage avec barre</td>
										<td>20€</td>
									</tr>
									<tr>
										<td>Industriel</td>
										<td>50€</td>
									</tr>
									<tr>
										<td>Tragus</td>
										<td>30€</td>
									</tr>
									<tr>
										<td>Septum</td>
										<td>&nbsp;</td>
										<td>50€</td>
									</tr>
									<tr>
										<td>Nez</td>
										<td>&nbsp;</td>
										<td>22€</td>
									</tr>
									<tr>
										<td>Bridge</td>
										<td>&nbsp;</td>
										<td>50€</td>
									</tr>
									<tr>
										<td>Transdermique microdermal</td>
										<td>&nbsp;</td>
										<td>60€</td>
									</tr>
									<tr>
										<td>Arcade tout type de bijou</td>
										<td>&nbsp;</td>
										<td>30€</td>
									</tr>
									<tr>
										<td>Génital</td>
										<td>&nbsp;</td>
										<td>Nous consulter</td>
									</tr>
								</tbody>
							</table>
						</div>
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
