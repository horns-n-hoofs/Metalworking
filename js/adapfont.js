var proportion = 1280/16;
		function resizeFont() { 
			document.body.style.fontSize = parseInt(document.body.offsetWidth/proportion) + 'px'
		}
		onload = onresize = resizeFont;
			if (document.addEventListener) document.addEventListener("DOMContentLoaded", resizeFont, null);