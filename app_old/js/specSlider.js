// показать колличество всех слайдов
const specSliderRender = () => {
  let length = $('.spec-slider__body .slider .item').length;
  $('.spec-slider__body .slider .owl-item').each(function () {
    if($(this).hasClass('cloned')) {
      length--;
    }
  });

  $('.spec-slider__body .slider__nav .count .all').html(length);
  $('.spec-slider__body .slider').attr('data-all', length);
  currentSlideNumber();
}
// показать текущий слайд
const currentSlideNumber = () => {
  const currentSlid = $('.spec-slider__body .slider .owl-stage .active').index() + 1;
  $('.spec-slider__body .slider__nav .count .current').html(currentSlid);
}

// сменить слайд
const specSliderNext = (e) => {
  if($(e.currentTarget).hasClass('prev')) {
    $('.spec-slider__body .slider .owl-nav .owl-prev').trigger('click');
  } else {
    $('.spec-slider__body .slider .owl-nav .owl-next').trigger('click');
  }
}

export { specSliderRender, specSliderNext, currentSlideNumber }
