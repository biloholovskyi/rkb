const searchDoctorCheck = (e) => {
  $('.search-doctor-sidebar .sidebar__options .options__list .option .check').removeClass('active');
  $('.search-doctor-list .list__body .item').removeClass('item--hidden');
  $(e.currentTarget).children('.check').addClass('active');
  const id = $(e.currentTarget).attr('id') ? $(e.currentTarget).attr('id') : 'all';
  const currentLatter = $('.search-doctor-list .list__latter').html();
  const names = $('.search-doctor-list .list__body .item .info .name');
  if(id === 'all') {
    $('.search-doctor-list').removeAttr('data-serv');
    names.each(function () {
      if ($(this).html()[0] === currentLatter) {
        $(this).parent('.info').parent('.item').addClass('item--show');
      }
    });
  } else {
    $('.search-doctor-list .list__body .item').removeClass('item--show');
    $('.search-doctor-list').attr('data-serv', id);
    names.each(function () {
      if ($(this).html()[0] === currentLatter && $(this).parent('.info').parent('.item').hasClass('category-' + id)) {
        $(this).parent('.info').parent('.item').addClass('item--show');
      }
    });
  }

  const items = $('.search-doctor-list .list__body .item--show');
  if(items.length < 12) {
    $('.search-doctor-list .list__body .more').fadeOut('fast');
  } else {
    $('.search-doctor-list .list__body .more').fadeIn('fast');
    let itemCount = 0;
    items.each(function () {
      itemCount++;
      if(itemCount > 12) {
        $(this).addClass('item--hidden');
      }
    })
  }
}

export { searchDoctorCheck }