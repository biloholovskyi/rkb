$(document).ready(function(){

  $('.mobile-more').on('click', function(){
    $('.mobile-sidebar').toggleClass('active');
    $('.mobile-sidebar').height();
    $(this).children('img').toggleClass('active');
   
  });

  $('.mobile-sidebar .mobile-options .options__list .option').on('click', function(){
      $(this).parents('.mobile-sidebar').toggleClass('active');
      $('.mobile-more').children('img').toggleClass('active');
  });

});