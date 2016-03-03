$(window).ready(function(){
	


	var myElement = document.body;
		var myMap = document.getElementById('touch-listener');
	

// create a simple instance
// by default, it only adds horizontal recognizers
var mc = new Hammer(myElement);

var pc = new Hammer(myMap);


// listen to events...
mc.on("panleft", function(ev) {
    $('#nav').animate({width: 'hide'});
});

pc.on("panright", function(ev) {
    $('#nav').animate({width: 'show'});
});



});