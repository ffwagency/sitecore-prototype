
// Create a module object wrapped to avoid jquery conflicts
// Init the module from base.js

(function($){

	NavComponent = {

		nav: null, 

		init: function() {
			if($('.component--nav').length) {
				this.nav = $('.component--nav');
			}
		}

	}

})(jQuery);