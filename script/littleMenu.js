function isLoad(){
	var headerSize = $('.header').height;
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

}



window.addEventListener("load", isLoad, false);