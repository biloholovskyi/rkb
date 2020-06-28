const bigSliderRender = () => {
  const slider = $('.big-slider');

  if(slider.length < 0) {
    return null
  }

  const allSlides = $('.big-slider .item');
  let count = 0;
  const startW = slider.width() - 160;
  allSlides.each(function () {
    const z = allSlides.length - count;
    const t = count * 80;
    const m = count * 40
    const h = allSlides.eq(0).height() - t;
    $(this).css({
      'z-index': z,
      'transform': 'translateX(' + t + 'px)',
      'width': startW + 'px',
      'margin-top': m + 'px',
      'height': h + 'px'
    });

    if(count < 3) {
      $(this).addClass('active');
    }
    count++;
  })
}

const bigSliderNext = (e) => {
  if($('.big-slider').attr('data-process') === 'process') {
    return
  }
  process();
  const actives = $('.big-slider .active');
  $('.big-slider .prev').removeClass('disabled');
  // получить первый активный слайд
  const first = actives.eq(0)

  // передвинуть его и скрыть
  first.css({
    'transform': 'translateX(-180px)'
  }).removeClass('active');

  // передвинуть оставшиеся активные слайды
  if(actives.eq(1).length > 0) {
    const h1 = actives.eq(1).height() + 80;
    const m1 = +actives.eq(1).css('margin-top').split('px')[0] - 40;
    actives.eq(1).css({
      'transform': 'translateX(0)',
      'margin-top': m1 + 'px',
      'height': h1 + 'px'
    });
  }

  if(actives.eq(2).length > 0) {
    const h2 = actives.eq(2).height() + 80;
    const m2 = +actives.eq(2).css('margin-top').split('px')[0] - 40;
    actives.eq(2).css({
      'transform': 'translateX(80px)',
      'margin-top': m2 + 'px',
      'height': h2 + 'px'
    });
  } else {
    $('.big-slider .next').addClass('disabled');
  }

  // получить следующий слайд после последнего активного
  const newActive = actives.eq(2).next('.item');

  // передвинуть его и показать
  const h3 = newActive.height() + 80;
  const m3 = +newActive.css('margin-top').split('px')[0] - 40;
  newActive.css({
    'transform': 'translateX(160px)',
    'margin-top': m3 + 'px',
    'height': h3 + 'px'
  }).addClass('active');

  $('.big-slider .item').each(function () {
    if(!$(this).hasClass('active')) {
      const h = $(this).height() + 80;
      const m = $(this).css('margin-top').split('px')[0] - 40;
      $(this).css({
        'margin-top': m + 'px',
        'height': h + 'px'
      })
    }
  })
}

const bigSliderPrev = (e) => {
  if($('.big-slider').attr('data-process') === 'process') {
    return
  }
  process();
  const actives = $('.big-slider .active');
  $('.big-slider .next').removeClass('disabled');
  // получить первый активный слайд
  const first = actives.eq(0)
  const firstH = first.height();

  // передвинуть его и скрыть
  const hF = first.height() - 80;
  first.css({
    'transform': 'translateX(80px)',
    'margin-top': '40px',
    'height': hF + 'px'
  });

  // передвинуть оставшиеся активные слайды
  if(actives.eq(1).length > 0) {
    const h1 = actives.eq(1).height() - 80;
    const m1 = +actives.eq(1).css('margin-top').split('px')[0] + 40;
    actives.eq(1).css({
      'transform': 'translateX(160px)',
      'margin-top': m1 + 'px',
      'height': h1 + 'px'
    });
  }

  if(actives.eq(2).length > 0) {
    const h2 = actives.eq(2).height() - 80;
    const m2 = +actives.eq(2).css('margin-top').split('px')[0] + 40;
    actives.eq(2).css({
      'transform': 'translateX(240px)',
      'margin-top': m2 + 'px',
      'height': h2 + 'px'
    }).removeClass('active');
  }

  // получить следующий слайд после последнего активного
  const newActive = first.prev('.item');

  // передвинуть его и показать
  if(newActive.length > 0) {
    newActive.css({
      'transform': 'translateX(0)',
      'margin-top': '0',
      'height': firstH + 'px'
    }).addClass('active');
  }
  if($('.big-slider .active').eq(0).prev('.item').length < 1) {
    $('.big-slider .prev').addClass('disabled');
  }

  $('.big-slider .item').each(function () {
    if(!$(this).hasClass('active') && +$(this).css('margin-top').split('px')[0] > 0) {
      const h = $(this).height() - 80;
      const m = +$(this).css('margin-top').split('px')[0] + 40;
      $(this).css({
        'margin-top': m + 'px',
        'height': h + 'px'
      })
    }
  })
}

const process = () => {
  const slider = $('.big-slider');

  if(slider.attr('data-process') !== 'process') {
    slider.attr('data-process', 'process');
    setTimeout(() => {
      slider.attr('data-process', 'false');
    },350)
  }
}

export { bigSliderRender, bigSliderNext, bigSliderPrev }