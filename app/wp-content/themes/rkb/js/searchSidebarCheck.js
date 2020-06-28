const searchDoctorCheck = (e) => {
  $('.search-doctor-sidebar .sidebar__options .options__list .option .check').removeClass('active');
  $(e.currentTarget).children('.check').addClass('active');
}

export { searchDoctorCheck }