const switchNewsTab = (e) => {
  const tabs = $('.news-tab__head .tabs .tab');
  const current = $(e.currentTarget);
  tabs.removeClass('active');
  current.addClass('active');
  const id = current.attr('id').split('tab-')[1];
  $('.news-tab__body').removeClass('show');
  $('#body-' + id).addClass('show');
}

const switchContactTab = (e) => {
  const tabs = $('#tabs .tabs .tab');
  const current = $(e.currentTarget);
  tabs.removeClass('whiteborder');
  current.addClass('whiteborder');
  const id = current.attr('id').split('tab-')[1];
  $('.news-tab__body').removeClass('show');
  $('#body-' + id).addClass('show');
}

export { switchNewsTab }