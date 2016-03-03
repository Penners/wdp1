$(document).ready(function(){

	// Function toggles display state of #nav with slide animation.
	$('#nav-toggle').click(function(){
	   $('#nav').animate({width: 'toggle'});
	});
	

	
	// Sticky Nav function 
	var stickyNavTop = $('nav').offset().top;  
  
		var stickyNav = function(){  
		var scrollTop = $(window).scrollTop();  
			   
		if (scrollTop > stickyNavTop) {   
			$('nav').addClass('sticky');  
		} else {  
			$('nav').removeClass('sticky');   
		}  
		};  
		  
		stickyNav();  
		  
		$(window).scroll(function() {  
			stickyNav();  
		});  
		
		
		$('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
		   
		
	/* $('html, body').stop().animate({
     'scrollTop': $target.offset().top
		}, 900, 'swing'); */
		


		
			

});	



	function validateForm() {
    var x = document.forms["contact"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	else alert("Message sent, we'll do our best to reply soon");
}

