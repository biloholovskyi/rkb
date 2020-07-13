$(document).ready(function(){
  let s = $("#tabs .tab-title a");
    $("#tabs .tab-title").on("click", "a", (function () {
      let t = s.index(this);
      // $(".interactive img").css({"opacity": "0", 'display': 'none'}); 
      // $(".interactive img:eq(" + t + ")").css({'opacity': '1', 'display': 'block'});
    }));
});




