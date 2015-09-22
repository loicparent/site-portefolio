// Script de Grafikart pour la gestion du changement de la classe active du menu.

function isLoad(){
	( function( $ ){

		var sections = [],
			id = false;

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
			if( upScroll >= $( '#aboutMe' ).offset().top-100 ){    // si le scroll est plus grand que le dessus de la section about + 100 px (pour le header)
				$( '.header__logo' ).addClass( 'show' );
			} else {
				$( '.header__logo' ).removeClass( 'show' );
			}
			if( scrolled_id !== id ){
				id = scrolled_id;
				$( '.mainMenu a' ).removeClass( 'active' );
				$( '.mainMenu a[href="#'+ id +'"]' ).addClass( 'active' );
			}
		} )

		//petit script pour le smoothMove:
		var headerSize = $('.header').height;

		$('a').click(function(){
		    $('html, body').animate({
		        scrollTop: $( $.attr(this, 'href') ).offset().top-100
		    }, 500);
		    return false;
		});

	} )( jQuery );
}

window.addEventListener("load", isLoad, false);