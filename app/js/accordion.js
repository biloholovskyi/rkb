$(document).ready(function(){
 // acc specialist page

  $('.specDrop').on('click', function(){
    $('.dropdown-menu').toggleClass('active');
    $('.arrow').toggleClass('active');
  });

  // servis page accordion
  $('.servisDrop').on('click', function(){
    $(this).children('.dropdown-menu').toggleClass('active');
    $(this).children('button').find('.arrow').toggleClass('active');
  });
});