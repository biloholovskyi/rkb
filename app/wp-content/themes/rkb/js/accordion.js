$(document).ready(function(){
 

  //  accordion
  $('.servisDrop').on('click', function(){
    $(this).children('.dropdown-menu').toggleClass('active');
    console.log($(this).children('.dropdown-menu').height());
    $(this).children('button').find('.arrow').toggleClass('active');
    $(this).children('a').find('.arrow').toggleClass('active');
  });



  $(".servisDrop").click(function() {
    $(this).closest('li').siblings().find('.dropdown-menu').removeClass('active').parent('.dropdown').children('button').find('.arrow').removeClass('active');

  });
 
});



