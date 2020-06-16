import 'normalize.css';
import './servis';
import {specSliderRender, specSliderNext, currentSlideNumber} from "./specSlider";
import './modal';
import './anhors';


$(document).ready((e) => {
  // specialists slider
  $('.spec-slider__body .slider').owlCarousel({
    loop: false,
    nav: false,
    dots: false,
    autoWidth: true,
    autoplay: false,
    callbacks: function () {
      const slider = $('.spec-slider__body .slider');
      const currentSlid = +slider.attr('data-count');
      const all = +slider.attr('data-all');
      let newNumber = currentSlid + 1;
      if (newNumber > all) {
        newNumber = 1;
      }
      slider.attr('data-count', newNumber);
      $('.spec-slider__body .slider__nav .count .current').html(currentSlid);
    }
  }).on('translated.owl.carousel', function(e) {
    currentSlideNumber();
  });

  specSliderRender();

  $('.spec-slider__body .slider__nav .slider-btn').on('click', (e) => {specSliderNext(e)})

});

$(window).resize(() => {

});



