/*
An easy way to check if an array contains x.
*/
Array.prototype.contains = function(obj) {
	var i = this.length;
	while (i--) {
		if (this[i] == obj) {
			return true;
		}
	}
	return false;
}









/*
An easy way to check which breakpoint we're currently in.
*/
function whichBreakpoint() {
	var width = (window.innerWidth > 0) ? window.innerWidth : screen.width;

	var breakpoint = 'mouse';

	if (width > 1040) {
		breakpoint = 'bear';
	} else if (width > 800) {
		breakpoint = 'wolf';
	} else if (width > 600) {
		breakpoint = 'fox';
	} else if (width > 480) {
		breakpoint = 'rabbit';
	} else {
		breakpoint = 'mouse';
	}

	return breakpoint;
}









/*
A vanilla alternative to $(document).ready(fn)
*/
function ready(fn) {
	if (document.readyState != 'loading'){
		fn();
	} else {
		document.addEventListener('DOMContentLoaded', fn);
	}
}

function addClass(el, cl) {
	if (el.classList) {
		el.classList.add(cl);
	} else {
		el.className += ' ' + cl;
	}
}

function removeClass(el, cl) {
	if (el.classList) {
		el.classList.remove(cl);
	} else {
		el.className = el.className.replace(new RegExp('(^|\\b)' + cl.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
	}
}









/*
LazySizes config, for lazy loading in images.
*/
window.lazySizesConfig = window.lazySizesConfig || {};
lazySizesConfig.lazyClass = 'js-lazyLoad';
