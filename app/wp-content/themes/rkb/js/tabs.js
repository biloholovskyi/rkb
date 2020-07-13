$(document).ready(function(){
  let s = $("#tabs .tab-title a");
$("#tabs .tab-title").on("click", "a", (function () {
  let t = s.index(this);
  $(".interactive img").css({"opacity": "0", 'display': 'none'}); 
  $(".interactive img:eq(" + t + ")").css({'opacity': '1', 'display': 'block'});
}));
});


var tab;
var tabContent;

window.onload=function () {
  tabContent = document.getElementsByClassName('tabContent');  
  tab = document.getElementsByClassName('tab');
  hideTabsContent(1);
}

function hideTabsContent(a) {
  for (var i=a; i<tabContent.length; i++){
      tabContent[i].classList.remove('show');
      tabContent[i].classList.add('hide');
      tab[i].classList.remove('whiteborder');
  }
}

document.getElementById('tabs').onclick=function (event) {
  var target=event.target;
  if (target.className =='tab') {
      for(var i=0; i<tab.length; i++){
          if(target == tab[i]){
              showTabsContent(i);
              break;
          }
      }
  }
}

function showTabsContent(b) {
  if(tabContent[b].classList.contains('hide')) {
      hideTabsContent(0);
      tab[b].classList.add('whiteborder');
      tabContent[b].classList.remove('hide');
      tabContent[b].classList.add('show');
  }
  
}

