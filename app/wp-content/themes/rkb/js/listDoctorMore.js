const listDoctorMore = () => {
  $('.search-doctor-list .list__body .item--hidden').removeClass('item--hidden');
  $('.search-doctor-list .list__body .more').fadeOut('slow');
}

export { listDoctorMore }