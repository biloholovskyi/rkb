$(document).ready(function(){
  //modal show tel
  $('.show-phone').on('click', function(){
    $('.showTel-overlay').fadeIn().css('display', 'flex');
  });
  $('.showTel-close').on('click', function(){
    $('.showTel-overlay').fadeOut().css('display', 'none');
  });


  // show diplom modal
  $('.diplom-overlay').on('click', function(){
    const current = $(this);
    const img     = current.parent().find('img').attr('src');
    
    $('.modal-img').css('background-image', 'url(' + img + ')');

    $('.diplom-overlay-modal').css('display', 'flex');
 
    
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


let imgModal = $('.diplom-overlay');

if(!imgModal.is(e.target) && imgModal.has(e.target).length === 0) {
  $('.diplom-overlay-modal').fadeOut().css('display', 'none');
}


});