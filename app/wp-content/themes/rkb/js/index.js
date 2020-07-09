import 'normalize.css';
import './servis';
import {specSliderRender, specSliderNext, currentSlideNumber} from "./specSlider";
import './modal';
import './anhors';
import { switchNewsTab } from "./newsTabs";
import './accordion';
import {inputForm} from "./input";
import { searchDoctorCheck } from "./searchSidebarCheck";
import { bigSliderRender, bigSliderNext, bigSliderPrev } from "./bigSlider";
import { listDoctorMore } from "./listDoctorMore";
import { revActiveButton, revAddRating } from "./revDoctor";


$(document).ready((e) => {
  bigSliderRender();

  // specialists slider
  $('.spec-slider__body .slider').owlCarousel({
    loop: false,
    nav: false,
    dots: false,
    autoWidth: true,
    autoplay: false,
    responsive : {
      0: {
        dots:true,
        autoWidth: false,
        items: 1
      },
      767: { 
        dots: true
      }
    },
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
  // slider company on pacient page
  $('.pacient-slider__body').owlCarousel({
    loop: true,
    nav: true,
    dots: false,
    margin: 16,
    items: 4,
    responsive : {
      0: {
        dots:true,
        items: 3
      },
      575: { 
        dots: false,
        items: 4
      }
    }
  });
   // diploms slider on  for specialist page
   $('.diplom-slider__body').owlCarousel({
    loop: false,
    nav: true,
    navText: '',
    dots: false,
    autoWidth: true,
    autoplay: false,
    margin: 20
  });

  specSliderRender();

  $('.spec-slider__body .slider__nav .slider-btn').on('click', (e) => {
    specSliderNext(e)
  });

  $('.news-tab__head .tabs .tab').on('click', (e) => {
    switchNewsTab(e)
  });

  $('input,textarea').on('input', inputForm);

  $('.search-doctor-sidebar .sidebar__options .options__list .option').on('click', (e) => searchDoctorCheck(e));
  $('.big-slider .next').on('click', (e) => bigSliderNext(e));
  $('.big-slider .prev').on('click', (e) => bigSliderPrev(e));
  $('.search-doctor-list .list__body .more').on('click', listDoctorMore);
  $('#rev-form input, #rev-form textarea').on('input', revActiveButton);
  $('.form_spec .rank .star-block button').on('click', (e) => revAddRating(e));


  // aside bar add active
  $('.aside ul li').on('click', function(){
    if(!$(this).hasClass('active')){
      $(this).siblings().removeClass('active');
      $(this).addClass('active');
    }
  });

  // main modal menu
  $('.header__menu-btn').on('click', function(){
    $('.modal-overlay').toggleClass('active');
    $('.header').toggleClass('active');
    $(this).hide();
    $('.modal__menu-btn').css({'display': 'flex'});
    $(this).parents('.bot-wrapper').children('.left').find('.header__navigation').css({'display': 'none'});
    $(this).parents('.bot-wrapper').children('.left').children('.home-link').find('.home-link__text').find('.title').css({'color': '#fff'}); 
    $(this).parents('.bot-wrapper').children('.left').children('.home-link').find('.home-link__text').find('.small').css({'color': 'rgba(255, 255, 255, 0.6)'}); 
    $(this).parents('.header').children('.header__top').find('.top__wrapper').children('.left').find('.header__link').css({'color': '#fff'});
    $(this).parents('.header').children('.header__top').find('.top__wrapper').children('.left').find('.header__link').find('img').css({'filter': 'invert(1)'});  
    $(this).parents('.header').children('.header__top').find('.top__wrapper').children('.right').find('.header__number').css({'color': '#fff'}); 
    $(this).parents('.header').children('.header__top').css({'border-color': 'rgba(255,255,255,.2)'});
    $(this).parents('.header').children('.header__bot').find('.bot-wrapper').children('.middle').css({'display': 'block'});
    $(this).parents('.header').children('.header__bot').find('.bot-wrapper').children('.right').find('.header__search').css({'display': 'none'});
  });
  $('.modal__menu-btn').on('click', function(){
    $('.modal-overlay').toggleClass('active');
    $('.header').toggleClass('active');
    $(this).hide();
    $('.header__menu-btn').css({'display': 'flex'});
    $(this).parents('.bot-wrapper').children('.left').find('.header__navigation').css({'display': 'block'});
    $(this).parents('.bot-wrapper').children('.left').children('.home-link').find('.home-link__text').find('.title').css({'color': '#111'}); 
    $(this).parents('.bot-wrapper').children('.left').children('.home-link').find('.home-link__text').find('.small').css({'color': '#333'}); 
    $(this).parents('.header').children('.header__top').find('.top__wrapper').children('.left').find('.header__link').css({'color': '#111'});
    $(this).parents('.header').children('.header__top').find('.top__wrapper').children('.left').find('.header__link').find('img').css({'filter': 'invert(0)'});  
    $(this).parents('.header').children('.header__top').find('.top__wrapper').children('.right').find('.header__number').css({'color': '#111'}); 
    $(this).parents('.header').children('.header__top').css({'border-color': '#ededed'});
    $(this).parents('.header').children('.header__bot').find('.bot-wrapper').children('.middle').css({'display': 'none'});
    $(this).parents('.header').children('.header__bot').find('.bot-wrapper').children('.right').find('.header__search').css({'display': 'block'});
  });
}); 

$(window).resize(() => {

});




