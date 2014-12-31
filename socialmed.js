
var main = function() {

  $('.socialButtons').mouseenter(function() {
       	   $(this).animate({
           marginRight: '+=8px'
       });
  });
  
  
  $('.socialButtons').mouseleave(function() {
       $(this).animate({
           marginRight: '-=8px'
       }); 
  });
  
  

}

  $(document).ready(main);