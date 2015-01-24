$(document).ready(function(){
    
     //utilizing the .scrollto function to move to parts of the page when clicking topNav links
  $('.homeLink').click(function(){
  $('#top').ScrollTo();
});
  
    $('.aboutLink').click(function(){
  $('#about').ScrollTo();
});
  
    $('.newsLink').click(function(){
  $('#news').ScrollTo();
});
  
  $('.workLink').click(function(){
  $('#work').ScrollTo();
  
});
    $('.contactLink').click(function(){
  $('#contact').ScrollTo();
});
  
});