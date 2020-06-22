<?
	//ini_set( 'display_errors', 1 );
	//error_reporting( E_ALL | ~E_DEPRECATED | E_STRICT );
	
	// ---- Définition des constantes du site ------------------------ //
	//echo $_SERVER[ "DOCUMENT_ROOT" ] . "<br>";
	switch( $_SERVER[ "DOCUMENT_ROOT" ] ) {
		
		// ---- Serveur local Franck -------- //
		case "/var/www/madison" :
			$localhost = "localhost";
			$dbname = "madison";
			$user = "madison";
			$mdp = "madison";
			break;
		
		// ---- Serveur PRE-PROD ------------ //
		case "/home/web/madisonpiercing" :
			$localhost = "localhost";
			$dbname = "madisonpiercing";
			$user = "madisonpiercing";
			$mdp = "madisonpiercing33";
			break;
		
		default:
		    $localhost = "localhost";
			$dbname = "madisonpiercing";
			$user = "madisonpiercing";
			$mdp = "madisonpiercing33";
		    break;
	}
		
	define( "DBHOST",	$localhost );
	define( "DBNAME",	$dbname );
	define( "DBUSER",	$user );
	define( "DBPASSWD", $mdp );
	
	define( "MAILCUSTOMER", 	"contact@madisonpiercing.fr" );
	define( "MAILNAMECUSTOMER", "Madison Piercing" );
	define( "URLSITEDEFAULT", 	"http://www.madisonpiercing.com/" );
	define( "FACEBOOK_LINK", 	"https://www.facebook.com/MadisonPiercing/" );
	define( "INSTAGRAM_LINK", "https://www.instagram.com/madisonpiercing/" );
	
	// ---- Mail d'envoi
	define( "MAIL_TEST", 	"" ); 	// Si rempli alors cette valeur sera utilisée pour les différents envois de mails
	//define( "MAIL_TEST", 	"web-zVUpwI@mail-tester.com" ); // Tester la qualité du mail (https://www.mail-tester.com)
	define( "MAIL_CONTACT", "contact@madisonpiercing.fr" ); //contact@madisonpiercing.fr
	define( "MAIL_BCC", 	"fjavi.gonzalez@gmail.com,xav335@hotmail.com,xavier.gonzalez@laposte.net,jav_gonz@yahoo.com" );
?>
