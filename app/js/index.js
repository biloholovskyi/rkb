import 'normalize.css';
import './servis';
import './modal';
import './anhors';
import './accordion';
import {inputForm} from "./input";

$(document).ready((e) => {
  $('input,textarea').on('input', inputForm);


});

$(window).resize(() => {

});



