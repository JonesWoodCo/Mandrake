$(document).ready(function(){

    //utilizing the .scrollto function to move to parts of the page when clicking topNav links
    $('.tophNews').click(function(){
        $('.newsTophHome').ScrollTo();
    }) ;
    
    $('.tophWork').click(function(){
        $('.workTophHome').ScrollTo();
    });
  
    $('.tophAbout').click(function(){
        $('.aboutTophHome').ScrollTo();
    });
  
    $('.tophContact').click(function(){
        $('.contactTophHome').ScrollTo();
    });
 
  
});



