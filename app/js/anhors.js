$(document).ready(function(){
 
  // anhors on specialist page
  $('.anhors').on('click', 'a', function (event){ 
    event.preventDefault();
    let id =  $(this).attr('href'),
        top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 800); 
  });
});