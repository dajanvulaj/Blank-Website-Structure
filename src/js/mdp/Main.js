require('./../bootstrap');

var Main = (function() {
	
	$(document).ready(function(){
		


		//ON WINDOW RESIZE
		$(window).on('resize', function () {
			
			
		});
	});


  	return {
  		Areas: (function() {
			// Defined in asses/js/areas.
			// NOTE: Remember to import em manually as Laravel cannot include all Jses in a folder :(
			return {};
		}()),

		Modules: (function(){
			// Defined in asses/js/modules
			return {};
		})()
  };  
}());