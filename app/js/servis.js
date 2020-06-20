

$('.accordion').on('click', '.accordion_item', function() {
  $(this).closest('.accordion').children('.accordion_item').find('.info').each((i, n) => {
    $(n).toggleClass('active', n === this);
  });
});
//ACCORDION one

! function (i) {
  let btn, info;
  i(".acc_btn").on("click", function () {
   
    btn = i(this).parents(".accordion_item"),
      info = btn.find(".info"),
      btn.hasClass("active_block") ? (btn.removeClass("active_block"),

        info.slideUp()) : (btn.addClass("active_block"),
        info.stop(!0, !0).slideDown(),
        btn.siblings(".active_block").removeClass("active_block").children(".info").stop(!0, !0).slideUp())
       
  }) 
}(jQuery);


