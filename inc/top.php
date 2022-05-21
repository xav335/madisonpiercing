	<header>
		<a href="<?=INSTAGRAM_LINK?>" target="_blank"  title="Suivez-nous sur Instagram"><img src="img/insta.png" alt="instagram" /></a>
		<a href="<?=FACEBOOK_LINK?>" target="_blank"  title="Suivez-nous sur Facebook"><img src="img/fb.png" alt="Facebook" /></a>
		<div class="logo"><img src="img/logo-madison-piercing.png" alt="logo Madison Piercing" title="Madison Piercing" /></div>
	</header>
	
	<?
	require_once $_SERVER[ "DOCUMENT_ROOT" ] . "/admin/classes/Photo_categorie.php";
	
	$debug = false;
	$__categorie = new Photo_categorie();
	
	// ---- Liste des catégories ------------------ //
	if ( 1 == 1 ) {
		//unset( $recherche );
		$recherche = null;
		$__liste_categorie = $__categorie->getListe( $recherche, $debug );
	}
	// -------------------------------------------- //
	
	?>
	
	<nav>
		<div class="bt-close"></div>
		<ul>
			<li><a href="index.php" title="Accueil">Accueil</a></li>
			<li><a href="le-salon-la-boutique.php" title="Le Salon">Le Salon</a></li>
			<li><a href="https://www.instagram.com/madisonpiercing/" target="_blank" title="Galerie Photo">Galerie Photo</a></li>
			<?
			// ---- Affichage de la liste des catégories disponibles ------------------------ //
			/*if ( !empty( $__liste_categorie ) ) {
				echo "<li>\n";
				echo "	<a title='Galerie Photo'>Galerie Photo</a>\n";
				echo "	<ul>\n";
				
				foreach( $__liste_categorie as $_categorie ) {
					$id = $_categorie[ "id" ];
					$titre = $_categorie[ "titre" ];
					
					echo "		<li id='cat_" . $id . "'><a href='galerie.php?id=" . $id . "' title='Galerie Photo'>" . $titre . "</a></li>\n";
				}
						
				echo "	</ul>\n";
				echo "</li>\n";
			}*/
			// ------------------------------------------------------------------------------ //
			?>
			<li><a href="nos-tarifs.php" title="Nos Tarifs">Nos Tarifs</a></li>
			<li onclick="location.href='faq.php';"><a href="faq.php" title="FAQ">FAQ</a></li>
			<!-- <li onclick="location.href='liens.php';"><a href="liens.php" title="Liens">Liens</a></li>  --> 
			<li><a href="livre-d-or.php" title="Livre d'or">Livre d'or</a></li>
			<li><a href="plan-acces.php" title="Plan d'Accès">Plan d'Accès</a></li>
			<li><a href="contact.php" title="Contact">Contact</a></li>
		</ul>
	</nav>