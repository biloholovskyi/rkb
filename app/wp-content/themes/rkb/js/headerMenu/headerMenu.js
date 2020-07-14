class HeaderMenu {
  subMenu (e) {
    e.preventDefault();
    const subMenu = e.target.nextElementSibling;
    if(subMenu && subMenu.classList.contains('sub-menu')) {
      subMenu.classList.toggle('show');
    } else {
      const link = e.target;
      window.location = link.getAttribute('href');
    }
  }

  closeMenu (e) {
    const block = document.querySelector('.sub-menu');
    const button = document.querySelector('.menu-item-has-children');
    if(!block || !button) {
      return
    }
    const status = e.target === block || block.contains(e.target) || button.contains(e.target);
    const statusHamburger = e.target === button;

    if(!status && !statusHamburger) {
      document.querySelectorAll('.sub-menu').forEach(el => {
        el.classList.remove('show');
      })
    }
  }

  shadow () {
    const h = document.querySelector('.header').getBoundingClientRect().height;
    document.querySelector('.header-margin').style.height = h + 'px';
    if(pageYOffset > 50) {
      document.querySelector('.header').classList.add('shadow');
    } else {
      document.querySelector('.header').classList.remove('shadow');
    }
  }

  mobileMenu () {
    const humb = document.querySelector('.header__menu-btn .humb');
    const text = document.querySelector('.header__menu-btn span');
    const headerBot = document.querySelector('.header__bot');
    const block = document.querySelector('.header__navigation');
    let searchBlock = document.getElementById('mobile-search-form');

    humb.classList.toggle('close');
    text.textContent = humb.classList.contains('close') ? 'Закрыть' : 'Меню';
    headerBot.style.borderBottom = humb.classList.contains('close') ? 'none' : '1px solid #ededed';

    // create search
    const searchForm = document.createElement('form')
    searchForm.setAttribute('id', 'mobile-search-form');
    searchForm.innerHTML = '<form id="mobile-search-form"><input type="submit" value=""><input type="text" placeholder="Поиск">';
    if(!searchBlock) {
      block.prepend(searchForm);
    }

    document.body.classList.toggle('stop-scroll');

    block.classList.toggle('show');
  }
}

export default HeaderMenu;