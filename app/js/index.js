import 'normalize.css';
import './servis';
import {specSliderRender, specSliderNext, currentSlideNumber} from "./specSlider";
import './modal';
import './anhors';
import { switchNewsTab } from "./newsTabs";
import './accordion';
import {inputForm} from "./input";


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
  }).on('translated.owl.carousel', function (e) {
    currentSlideNumber();
  });

  // thanks slider
  $('.thanks-slider__body').owlCarousel({
    loop: false,
    nav: true,
    navText: '',
    dots: false,
    autoWidth: true,
    autoplay: false,
    margin: 32
  });

  specSliderRender();

  $('.spec-slider__body .slider__nav .slider-btn').on('click', (e) => {
    specSliderNext(e)
  });

  $('.news-tab__head .tabs .tab').on('click', (e) => {
    switchNewsTab(e)
  });

  $('input,textarea').on('input', inputForm);


  // aside bar add active
  $('.aside ul li').on('click', function(){
    if(!$(this).hasClass('active')){
      $(this).siblings().removeClass('active');
      $(this).addClass('active');
    }
  });
});

$(window).resize(() => {

});



