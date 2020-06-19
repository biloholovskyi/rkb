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

$(document).mouseup(function(e){
  var acc = $('.acc_btn, .accordion_item');
  if(!acc.is(e.target) && acc.has(e.target).length === 0) {
    acc.removeClass('active_block');
  }
});