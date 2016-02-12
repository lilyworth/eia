  $(window).load(function(){
// --------------------------------------	
	

      $('#slider').flexslider({
        //animation: "slide",
      
        animation: "fade",
        animationLoop: true,
        directionNav: false,
        manualControls: ".slider-control li", 
        prevText: "",
		nextText: "", 

      
        start: function(slider){
         // $('body').removeClass('loading');
          //$('.flexslider .loading').remove();
         // $('#slider .flex-next').append( '<div class="genericon genericon-next"></div>' );
         // $('#slider .flex-prev').append( '<div class="genericon genericon-previous"></div>' );
          
        }
      });
      
      


      
      
// --------------------------------------
    });
