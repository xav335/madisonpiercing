$(document).foundation();

// Swiper Homepage
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true
    
});

$(document).ready(function(){
	
	// FancyBox
	$('.fancybox').fancybox({
		beforeShow: function() {
			var legende = $(this).attr('legende');
			if (this.legende) {
				// New line
				this.title += '<br />';							
				// Récupération et ajout de la légende							
				this.title += legende;
			}
		},
		helpers : {
			title : {
				type: 'inside'
			}
		}  
	});
	
	
	// Menu
	$('nav .bt-close').click(function(){
		if($(this).parent().hasClass('open')) {
			$(this).parent().removeClass('open');
		} else {
			$(this).parent().addClass('open');
		}
	});
	$('nav .bt-close').mouseover(function(){
			$(this).parent().addClass('open');
	});
	$('nav ul li').mouseover(function(){
			$('nav .bt-close').parent().addClass('open');
	});
	$('nav ul li a').click(function(){
		if($(this).parent().hasClass('active')) {
			$(this).parent().removeClass('active');
		} else {
			$(this).parent().addClass('active');
		}
	});
});

window.onscroll = function() {logoHide()};

function logoHide() {
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
        $('header .logo').fadeOut(700);
    } else {
	    $('header .logo').fadeIn(700);
    }
}