// Script de Grafikart pour la gestion du changement de la classe active du menu.

function isLoad(){

	//1: Gestion du focus sur les articles.
	$(".project a").focusin(function(e){
	    $(this).next().css({
	    	"-webkit-transform": "translateY(0%)",
	    	"-moz-transform": "translateY(0%)",
	    	"-ms-transform": "translateY(0%)",
	    	"-o-transform": "translateY(0%)",
	    	"transform": "translateY(0%)"
	    });
	});

	$(".project a").focusout(function(e){
	    $(this).next().css({
	    	"-webkit-transform": "translateY(100%)",
	    	"-moz-transform": "translateY(100%)",
	    	"-ms-transform": "translateY(100%)",
	    	"-o-transform": "translateY(100%)",
	    	"transform": "translateY(100%)"
	    });
	});

	( function( $ ){

		if ( $('.topPresentation__title1').length !== 0  ) {
			var sections = [],
				id = false;
				window.headerSize = $('.header').height();

			$( '.mainMenu a' ).each( function(){
				sections.push( $( $( this ).attr( 'href' ) ) );
			} );

			$( window ).scroll( function(e){
				// récupérer la moitié de l'écran
				var scrollTop =  $( this ).scrollTop() + ( $( window ).height() / 2 );
				var upScroll = $( this ).scrollTop();
				for( var i in sections ){
					var section = sections[i];
					if( scrollTop > section.offset().top ){
						var scrolled_id = section.attr( "id" );
					}
				}

				if( upScroll >= $( '#aboutMe' ).offset().top-headerSize ){
					$( '.header__logo' ).addClass( 'show' );
				} else {
					$( '.header__logo' ).removeClass( 'show' );
				}
				if( scrolled_id !== id ){
					id = scrolled_id;
					$( '.mainMenu a' ).removeClass( 'active' );
					$( '.mainMenu a[href="#'+ id +'"]' ).addClass( 'active' );
				}
			} );


			//petit script pour le smoothMove:
			$('.mainMenu a').click(function(){
			    $('html, body').animate({
			        scrollTop: $( $.attr(this, 'href') ).offset().top-headerSize
			    }, 500);
			    return false;
			});	
		} else {
			$( '.header__logo' ).addClass( 'show' );
		}

	} )( jQuery );
}

window.addEventListener("load", isLoad, false);