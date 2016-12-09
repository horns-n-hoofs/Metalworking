( function() {
	var nav = document.getElementById( 'dropdown' ), button, menu, close;
	if ( ! nav )
		return;
	button = nav.getElementsByClassName( 'menu_icon' )[0];
	menu   = nav.getElementsByTagName( 'ul' )[0];
	if ( ! button )
		return;

	if ( ! menu || ! menu.childNodes.length ) {
		button.style.display = 'none';
		return;
	}

	button.onclick = function() {
		if ( -1 == menu.className.indexOf( 'dropdown-ul' ) )
			menu.className = 'dropdown-ul';

		if ( -1 != button.className.indexOf( 'menu-active' ) ) {
			button.className = button.className.replace( ' menu-active', '' );
			menu.className = menu.className.replace( ' menu-active', '' );
		} else {
			button.className += ' menu-active';
			menu.className += ' menu-active';
		}
	};
	
	/*close = nav.getElementsByClassName( 'close' );
		
	close.onclick = function() {
        button.onclick;
    };*/
	
} )();