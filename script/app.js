// Script de Grafikart pour la gestion du changement de la classe active du menu.

function isLoad(){

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


			//petit script pour le filtre des projets:
			$('#works .centerZone').append( '<div class="works__switchProject"><a href="#" class="works__all active">Tous</a><a href="#" class="works__web">Web</a><a href="#" class="works__print">Impression</a></div>');
			$('.works__switchProject a').click(function( e ){
				$('.works__switchProject a').each( function() {
					$(this).removeClass('active');
				});
				e.preventDefault();
				if ( $( this ).attr( 'class' ) === "works__all" ) {
					$(this).addClass('active');
					$('.project.projet_web, .project.projet_print').css('display', 'block');
				}
				if ( $( this ).attr( 'class' ) === "works__web" ) {
					$(this).addClass('active');
					$('.project.projet_print').css('display', 'none');
					$('.project.projet_web').css('display', 'block');
				}
				if ( $( this ).attr( 'class' ) === "works__print" ) {
					$(this).addClass('active');
					$('.project.projet_web').css('display', 'none');
					$('.project.projet_print').css('display', 'block');
				}
			});

		} else {
			$( '.header__logo' ).addClass( 'show' );
		}

	} )( jQuery );
}

window.addEventListener("load", isLoad, false);