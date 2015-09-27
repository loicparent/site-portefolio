// Script de Grafikart pour la gestion du changement de la classe active du menu.

function isLoad(){
	( function( $ ){

		var sections = [],
			id = false,
			headerSize = 100;

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
			var headerHeight = $( ".header" ).height();
			headerSize = headerHeight;
			if( upScroll >= $( '#aboutMe' ).offset().top-headerHeight ){    // si le scroll est plus grand que le dessus de la section about + 100 px (pour le header)
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
		var headerSize = $('.header').height;

		$('a').click(function(){
		    $('html, body').animate({
		        scrollTop: $( $.attr(this, 'href') ).offset().top-headerSize
		    }, 500);
		    return false;
		});

		//hamburger menu:
		headerHeight = $( ".header" ).height();
		headerSize = headerHeight;

		$(".littleMenu .content").click( function(){
			$( "body" ).toggleClass( "littleMenu" );
		} );

		$(".mainMenu a").click( function( e ){
			var hrefLink = $( this ).attr("href");
			$( hrefLink ).scrollTop() + ( $( window ).height() / 2 );
			$( "body" ).toggleClass( "littleMenu" );
		} );

		$(".hambMenu").click( function(){
			$( "body" ).toggleClass( "littleMenu" );
		} );

	} )( jQuery );
}

window.addEventListener("load", isLoad, false);