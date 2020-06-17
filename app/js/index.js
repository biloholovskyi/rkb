import 'normalize.css';
import './servis';
import './modal';
import './anhors';
import './accordion';
import {inputForm} from "./input";

$(document).ready((e) => {
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



