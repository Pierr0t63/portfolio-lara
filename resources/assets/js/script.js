$( document ).ready(function() {

	$(window).scroll(function() {    
		var scroll = $(window).scrollTop();
		if (scroll >= ($(window).height()-40)) {
			$('nav').addClass('bg-dark');
		}
		else{
			$('nav').removeClass('bg-dark');
		}
	});

	if ($(window).width() > 640){
		$('.full-height').css("height", $(window).height().toString());
	}
	
	$(window).resize(function() { // Modif dynamique hauteur sections
		$('.full-height').css("height", $(window).height().toString());
	});

	$(".video-bg").vegas({
		timer : false,
	    slides: [
	        { src: "/img/accueil/slide1.jpg" },
	        { src: "/img/accueil/slide2.jpg" },
	        { src: "/img/accueil/slide3.jpg" },
	        { src: "/img/accueil/slide4.jpg" }
	    ],
	    overlay: "/img/overlays/08.png",
	    animation: "random"
	});

	$('.comp').each(function(){
		$(this).find('.barre-comp').animate({width:$(this).attr('data-pourcent')},6000);
	});

	var keys = [];
    var konami = '38,38,40,40,37,39,37,39,66,65';
    
    $(document).keydown(function(e){
        keys.push( e.keyCode );
        if ( keys.toString().indexOf( konami ) >=0 ){
            
            keys = [];
            
            //add silly music in background
           $('body').append ('<iframe width="0" height="0" src="https://www.youtube.com/embed/NImW-Rs8eK8?rel=0&amp;controls=0&amp;showinfo=0&autoplay=1" frameborder="0" allowfullscreen></iframe>'); //ookay - star wars
          //add &autoplay=1 at the end of the source link
        }
    });

});
