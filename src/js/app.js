/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function(){

	//Dotter
	function dotter(){
		//Enable DotDotDot
		$( ".dotdotdot" ).each(function(){
			var options = {
				truncate: "letter",
			};
			new Dotdotdot( $(this)[0], options );
		});
	}

	setTimeout(function(){
		dotter();
	}, 500);
	
});