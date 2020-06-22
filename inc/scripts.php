	
		<script src="/js/vendor/jquery.min.js"></script>
		<script src="/js/vendor/what-input.min.js"></script>
		<script src="/js/vendor/swiper/swiper.min.js"></script>
		<script src="/js/foundation.min.js"></script>
		<script src="/js/vendor/fancybox/jquery.mousewheel-3.0.6.pack.js"></script>
		<script src="/js/vendor/fancybox/jquery.fancybox.js?v=2.1.5"></script>
		<script src="/js/vendor/fancybox/jquery.fancybox-buttons.js?v=1.0.5"></script>
		<script src="/js/vendor/fancybox/jquery.fancybox-thumbs.js?v=1.0.7"></script>
		<script src="/js/vendor/fancybox/jquery.fancybox-media.js?v=1.0.6"></script>
		<script src="/js/vendor/fancybox/jquery.touchSwipe.min.js"></script>
		<script src="/js/app.js"></script>
	
	<script>
		
		$(document).ready(function(){
			
			// ---- Validation du formulaire de newsletter -------------- //
			if ( 1 == 1 ) {
				
				$( "#form_news" ).submit(function() {
					//alert( "validation..." );
					var erreur = 0;
					
					$.ajax({
						type: "POST",
						cache: false,
						url: '/ajax/ajax_newsletter.php?task=inscrire',
						data: $( "#form_news" ).serialize(),
						error: function() { alert( "Une erreur s'est produite..." ); },
						success: function( data ){
							var obj = $.parseJSON( data );
							
							// Tout s'est bien passé!
							if ( !obj.error ) {
								$( "#form_news #email_news" ).val( '' );
								alert( "Votre e-mail a été correctement ajouté à notre base de données." );
							}
							else {
								
							}
							
						}
					});
					
					return false;
				});
			}
			// ---------------------------------------------------------- //
			
		});
		
	</script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-11864990-5', 'auto');
      ga('send', 'pageview');

    </script>