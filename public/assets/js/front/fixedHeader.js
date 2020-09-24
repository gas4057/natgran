var cbpAnimatedHeader = (function() {

    var docElem = document.documentElement,
        header = document.querySelector( '.main--nav-block' ),
        headerBox = document.querySelector( '.main--nav-block .main--nav__mobile .box' ),
        didScroll = false,
        changeHeaderOn = 200;

    function init() {
        window.addEventListener( 'scroll', function( event ) {
            if( !didScroll ) {
                didScroll = true;
                setTimeout( scrollPage, 250 );
            }
        }, false );
    }

    function scrollPage() {
        var sy = scrollY();
        if ( sy >= changeHeaderOn ) {
            header.classList.add('scroller--menu');
            headerBox.classList.remove('space-between');
        }
        else {
			header.classList.remove( 'scroller--menu' );
			headerBox.classList.add('space-between');
        }
        didScroll = false;
    }

    function scrollY() {
        return window.pageYOffset || docElem.scrollTop;
    }

    if(window.innerWidth < 992) {
		init();
	} else {
		return false;
	}

})();