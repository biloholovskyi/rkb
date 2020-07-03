const revActiveButton = () => {
  const input = $('#rev-form input').val();
  const textarea = $('#rev-form textarea').val();
  const button = $('#rev-form .form__submit');

  if(input === '' || textarea === '') {
    button.attr('disabled', 'disabled');
  } else {
    button.removeAttr('disabled');
  }
}

const revAddRating = (e) => {
  const index = $(e.currentTarget).index();

  $('.form_spec .rank .star-block button').each(function () {
    $(this).children('img').attr('src', 'http://localhost:3000/rkb/app/wp-content/themes/rkb/media/icon/specialist/star-disable.svg');
    if($(this).index() < index || $(this).index() === index) {
      $(this).children('img').attr('src', 'http://localhost:3000/rkb/app/wp-content/themes/rkb/media/icon/specialist/star-color.svg');
    }
  });

  $('#rev-input-rating').val(index + 1);
}

export { revActiveButton, revAddRating }