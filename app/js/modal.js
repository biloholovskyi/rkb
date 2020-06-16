$(document).ready(function(){
  //modal show tel
  $('.show-phone').on('click', function(){
    $('.showTel-overlay').fadeIn().css('display', 'flex');
  });
  $('.showTel-close').on('click', function(){
    $('.showTel-overlay').fadeOut().css('display', 'none');
  });

});



$(document).on('click', function(e){
  let modal = $('.showTel-modal');
  let btn   = $('.show-phone');
  
  if(!btn.is(e.target) && btn.has(e.target).length === 0) {
    if(!modal.is(e.target) && modal.has(e.target).length === 0) {
      $('.showTel-overlay').fadeOut().css('display', 'none');
    }
  }
});