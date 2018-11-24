jQuery(document).ready(function($){
    
   
    // $("h1").css('color',"#f00");
});

jQuery(function($){
    // now you can use jQuery code here with $ shortcut formatting
    // this executes immediately - before the page is finished loading

    // The class you click to trigger the popup 
$('.letspop').on('click', function() {
    // The Overlay fades in
    $(".overlay").fadeIn(200, function() {});
    // The Popup fades in just after
    $(".popup").fadeIn(600, function() {});
  });
  
  // The class's you click when you want to close the pop
$('.overlay, .close').on('click', function() {
    // The Overlay fades out slower
    $(".overlay").fadeOut(600, function() {});
    // The Popup fades out faster
    $(".popup").fadeOut(200, function() {});
  });

});









