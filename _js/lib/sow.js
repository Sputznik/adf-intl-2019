
jQuery( "[data-behaviour~=sow-btn-cards]" ).each( function(){

  var $el = jQuery( this );

  // PARSE URL - HELPER FUNCTION
  function parseURL( url ){
    var a = document.createElement('a');
    a.href = url;
    return a;
  };

  function getTarget( url ){
    var hash = parseURL( url ).hash;
    return jQuery('body').find( hash );
  }

  function isTargetValid( url ){
    var $target = getTarget( url );
    if( $target.length && !$target.is( ':hidden' ) ) {
      return true;
    }
    return false;
  };

  function isTargetModal( url ){
    var $target = getTarget( url );
    if( $target.length && $target.hasClass( 'inline-modal' ) ) {
      return true;
    }
    return false;
  }

  $el.find( 'a[href]' ).each( function(){

    var $anchor = jQuery( this ),
      url       = $anchor.attr('href');

    $anchor.click( function( ev ){
      if( isTargetModal( url ) ){
        ev.preventDefault();
        var $modal = getTarget( url );
        $modal.addClass('show-modal');
      }
      else if ( isTargetValid( url ) ) {
        ev.preventDefault();
        jQuery('html, body').stop().animate({
          scrollTop: getTarget( url ).offset().top
        }, 1000);
      }
    } );





  } );

  //alert('inside');

} );

jQuery( 'a[href][data-toggle~=modal]' ).click( function( ev ){
	ev.preventDefault();
	var $button = jQuery( this );
	var $modal = jQuery( $button.attr( 'href' ) );
	$modal.addClass('show-modal');
} );

jQuery( document ).ready( function(){
	//console.log( 'ready' );
	jQuery( '#cookie-law-info-bar' ).hide();
	jQuery( '#cookie-law-info-again' ).hide();
	jQuery( "#cookie-law-info-bar" ).delay(5000).fadeIn(500);
} );



jQuery( "[data-behaviour~=slick]" ).slick();
