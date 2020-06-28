<?php
/*
Template Name: Home
*/
get_header();
?>

<div class="spec-slider">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="spec-slider__body">
          <div class="slider__nav">
            <div class="slider-btn prev"></div>
            <div class="count"><span class="current">4</span>&nbsp;/&nbsp;<span class="all">4</span></div>
            <div class="slider-btn next"></div>
          </div>
          <div class="slider owl-carousel owl-theme" data-count="1">
            <div class="item" style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/slider.jpg">
              <div class="title">1Как стать донором крови и ее  компонентов в период самоизоляции?</div>
              <div class="desc">Современные технологии в области медицины дают надежду  многим больным, у которых при имеющемся диагнозе, раньше,  просто не было шанса на жизнь.</div>
            </div>
            <div class="item" style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/slider.jpg">
              <div class="title">2Как стать донором крови и ее  компонентов в период самоизоляции?</div>
              <div class="desc">Современные технологии в области медицины дают надежду  многим больным, у которых при имеющемся диагнозе, раньше,  просто не было шанса на жизнь.</div>
            </div>
            <div class="item" style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/slider.jpg">
              <div class="title">3Как стать донором крови и ее  компонентов в период самоизоляции?</div>
              <div class="desc">Современные технологии в области медицины дают надежду  многим больным, у которых при имеющемся диагнозе, раньше,  просто не было шанса на жизнь.</div>
            </div>
          </div>
          <div class="links"><a class="link" href="#" style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/link1.jpg)">Найти специалиста <span class="icon"></span></a><a class="link" href="#" style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/link2.jpg)">Службы и отделения <span class="icon"></span></a><a class="link" href="#" style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/link3.jpg)">Карта РКБ <span class="icon"></span></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="spec-of-week">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="week__body"><img class="photo" src="<?php echo get_template_directory_uri() ?>/media/image/specialist.png" alt="rkb">
          <div class="week__info">
            <div class="title week-bg">СПЕЦИАЛИСТ НЕДЕЛИ</div>
            <div class="info__wrapper">
              <div class="info__text">
                <div class="name">Аббазов Ренас Ринатович</div>
                <div class="place">Хирургическая служба - Урологическое отделение №2</div>
                <div class="post">Врач-ревматолог высшей категории</div>
              </div><a class="info__link" href="/specialist.html">Подробнее о специалисте</a>
            </div>
            <div class="week__desc week-bg">
              <p>Современные технологии в области медицины дают надежду многим больным, у которых при имеющемся диагнозе, раньше, просто не было шанса на жизнь.</p><span>— «Современные технологии в области медицины дают надежду многим больным!»</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="news-tab">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="news-tab__top">
          <div class="news-tab__title">Новости</div>
          <div class="news-tab__head">
            <div class="tabs">
              <div class="tab active" id="tab-all">Все</div>
              <div class="tab" id="tab-rkb">Новости РКБ</div>
              <div class="tab" id="tab-rt">Минздрав РТ</div>
              <div class="tab" id="tab-rf">Минздрав РФ</div>
            </div><a class="all-news" href="#">Все новости</a>
          </div>
        </div>
        <div class="news-tab__body show" id="body-all"><a class="main" href="#" style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/news/1.jpg)">
            <div class="top">
              <div class="category">Новости РКБ</div>
              <div class="date">31.03.2020</div>
            </div>
            <div class="main__title">Детские травматологи РКБ с 1 апреля <br> начнут принимать детей и подростков <br> с травмами на базе ДРКБ</div>
            <div class="main__desc">Такое решение принято в связи с поручением Министра здравоохранения РТ Марата Садыкова, организовать…</div><img class="main__arrow" src="<?php echo get_template_directory_uri() ?>/media/icon/big-arrow.svg" alt="arrow"></a>
          <div class="other-news"><a class="item" href="#"><img alt="news" src="<?php echo get_template_directory_uri() ?>/media/image/news/2.jpg">
              <div class="info">
                <div class="info__top">
                  <div class="category">Минздрав РТ</div>
                  <div class="date">1.04.2020</div>
                </div>
                <div class="info__desc">Врачи РКБ освоили редкую для России операцию для пациентов с механичес-кой желтухой</div>
              </div></a><a class="item" href="#"><img alt="news" src="<?php echo get_template_directory_uri() ?>/media/image/news/3.jpg">
              <div class="info">
                <div class="info__top">
                  <div class="category">Минздрав РТ</div>
                  <div class="date">1.04.2020</div>
                </div>
                <div class="info__desc">Детские травматологи РКБ с 1 апреля начнут принимать детей и подростков с травмами на базе ДРКБ</div>
              </div></a><a class="item" href="#"><img alt="news" src="<?php echo get_template_directory_uri() ?>/media/image/news/2.jpg">
              <div class="info">
                <div class="info__top">
                  <div class="category">Минздрав РТ</div>
                  <div class="date">1.04.2020</div>
                </div>
                <div class="info__desc">Врачи РКБ освоили редкую для России операцию для пациентов с механичес-кой желтухой</div>
              </div></a></div>
        </div>
        <div class="news-tab__body" id="body-rkb"><a class="main" href="#" style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/news/1.jpg)">
            <div class="top">
              <div class="category">Новости РКБ</div>
              <div class="date">31.03.2020</div>
            </div>
            <div class="main__title">Детские травматологи РКБ с 1 апреля <br> начнут принимать детей и подростков <br> с травмами на базе ДРКБ</div>
            <div class="main__desc">Такое решение принято в связи с поручением Министра здравоохранения РТ Марата Садыкова, организовать…</div><img class="main__arrow" src="<?php echo get_template_directory_uri() ?>/media/icon/big-arrow.svg" alt="arrow"></a>
          <div class="other-news"><a class="item" href="#"><img alt="news" src="<?php echo get_template_directory_uri() ?>/media/image/news/2.jpg">
              <div class="info">
                <div class="info__top">
                  <div class="category">Новости РКБ</div>
                  <div class="date">1.04.2020</div>
                </div>
                <div class="info__desc">Врачи РКБ освоили редкую для России операцию для пациентов с механичес-кой желтухой</div>
              </div></a><a class="item" href="#"><img alt="news" src="<?php echo get_template_directory_uri() ?>/media/image/news/3.jpg">
              <div class="info">
                <div class="info__top">
                  <div class="category">Новости РКБ</div>
                  <div class="date">1.04.2020</div>
                </div>
                <div class="info__desc">Детские травматологи РКБ с 1 апреля начнут принимать детей и подростков с травмами на базе ДРКБ</div>
              </div></a><a class="item" href="#"><img alt="news" src="<?php echo get_template_directory_uri() ?>/media/image/news/2.jpg">
              <div class="info">
                <div class="info__top">
                  <div class="category">Новости РКБ</div>
                  <div class="date">1.04.2020</div>
                </div>
                <div class="info__desc">Врачи РКБ освоили редкую для России операцию для пациентов с механичес-кой желтухой</div>
              </div></a></div>
        </div>
        <div class="news-tab__body" id="body-rt"><a class="main" href="#" style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/news/2.jpg)">
            <div class="top">
              <div class="category">Минздрав РТ</div>
              <div class="date">31.03.2020</div>
            </div>
            <div class="main__title">Детские травматологи РКБ с 1 апреля <br> начнут принимать детей и подростков <br> с травмами на базе ДРКБ</div>
            <div class="main__desc">Такое решение принято в связи с поручением Министра здравоохранения РТ Марата Садыкова, организовать…</div><img class="main__arrow" src="<?php echo get_template_directory_uri() ?>/media/icon/big-arrow.svg" alt="arrow"></a>
          <div class="other-news"><a class="item" href="#"><img alt="news" src="<?php echo get_template_directory_uri() ?>/media/image/news/2.jpg">
              <div class="info">
                <div class="info__top">
                  <div class="category">Минздрав РТ</div>
                  <div class="date">1.04.2020</div>
                </div>
                <div class="info__desc">Врачи РКБ освоили редкую для России операцию для пациентов с механичес-кой желтухой</div>
              </div></a><a class="item" href="#"><img alt="news" src="<?php echo get_template_directory_uri() ?>/media/image/news/3.jpg">
              <div class="info">
                <div class="info__top">
                  <div class="category">Минздрав РТ</div>
                  <div class="date">1.04.2020</div>
                </div>
                <div class="info__desc">Детские травматологи РКБ с 1 апреля начнут принимать детей и подростков с травмами на базе ДРКБ</div>
              </div></a><a class="item" href="#"><img alt="news" src="<?php echo get_template_directory_uri() ?>/media/image/news/2.jpg">
              <div class="info">
                <div class="info__top">
                  <div class="category">Минздрав РТ</div>
                  <div class="date">1.04.2020</div>
                </div>
                <div class="info__desc">Врачи РКБ освоили редкую для России операцию для пациентов с механичес-кой желтухой</div>
              </div></a></div>
        </div>
        <div class="news-tab__body" id="body-rf"><a class="main" href="#" style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/news/1.jpg)">
            <div class="top">
              <div class="category">Минздрав РФ</div>
              <div class="date">31.03.2020</div>
            </div>
            <div class="main__title">Детские травматологи РКБ с 1 апреля <br> начнут принимать детей и подростков <br> с травмами на базе ДРКБ</div>
            <div class="main__desc">Такое решение принято в связи с поручением Министра здравоохранения РТ Марата Садыкова, организовать…</div><img class="main__arrow" src="<?php echo get_template_directory_uri() ?>/media/icon/big-arrow.svg" alt="arrow"></a>
          <div class="other-news"><a class="item" href="#"><img alt="news" src="<?php echo get_template_directory_uri() ?>/media/image/news/2.jpg">
              <div class="info">
                <div class="info__top">
                  <div class="category">Минздрав РФ</div>
                  <div class="date">1.04.2020</div>
                </div>
                <div class="info__desc">Врачи РКБ освоили редкую для России операцию для пациентов с механичес-кой желтухой</div>
              </div></a><a class="item" href="#"><img alt="news" src="<?php echo get_template_directory_uri() ?>/media/image/news/3.jpg">
              <div class="info">
                <div class="info__top">
                  <div class="category">Минздрав РФ</div>
                  <div class="date">1.04.2020</div>
                </div>
                <div class="info__desc">Детские травматологи РКБ с 1 апреля начнут принимать детей и подростков с травмами на базе ДРКБ</div>
              </div></a><a class="item" href="#"><img alt="news" src="<?php echo get_template_directory_uri() ?>/media/image/news/2.jpg">
              <div class="info">
                <div class="info__top">
                  <div class="category">Минздрав РФ</div>
                  <div class="date">1.04.2020</div>
                </div>
                <div class="info__desc">Врачи РКБ освоили редкую для России операцию для пациентов с механичес-кой желтухой</div>
              </div></a></div>
        </div><a class="news-btns" href="#">Читать все новости          </a>
      </div>
    </div>
  </div>
</div>
<div class="whide-form">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="whide-form__body">
          <div class="text">Найти специалиста</div>
          <form>
            <input type="text" placeholder="Введите ФИО врача или должность">
            <input type="submit" value="Найти">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="thanks-slider">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="thanks__title">Благодарности докторам</div>
        <div class="thanks-slider__body owl-carousel owl-theme">
          <div class="item">
            <div class="name">Алексей Фокин</div>
            <div class="date">7.04.2020 15:37</div>
            <div class="rate">
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star"></div>
            </div>
            <div class="text">Здравствуйте! Хочу выразить ОГРОМНУЮ БЛАГОДАРНОСТЬ и самые наилучшие пожелания коллективам торакальных отделений! Находясь на лечении с последующей операцией убедился в том что не всё у нас потеряно, столько внимания и понимания к своим пациентам д...</div>
            <div class="reed-more">Читать полностью</div>
          </div>
          <div class="item">
            <div class="name">Садриева Анзиля</div>
            <div class="date">7.04.2020 15:37</div>
            <div class="rate">
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star"></div>
            </div>
            <div class="text">Хочу сказать огромное спасибо врачам эндокринологического отделения - Рахимзяновой Ризале Ханнановне, Газимовой Розе Алмазовне и заведующей эндокринологического отделения РКБ - Бареевой Луизе Талгатовне и шефу терапевтической клиники РКБ - Абдулганиевой Диане</div>
          </div>
          <div class="item">
            <div class="name">Алексей Фокин</div>
            <div class="date">7.04.2020 15:37</div>
            <div class="rate">
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star"></div>
            </div>
            <div class="text">Здравствуйте! Хочу выразить ОГРОМНУЮ БЛАГОДАРНОСТЬ и самые наилучшие пожелания коллективам торакальных отделений! Находясь на лечении с последующей операцией убедился в том что не всё у нас потеряно, столько внимания и понимания к своим пациентам д...</div>
            <div class="reed-more">Читать полностью</div>
          </div>
          <div class="item">
            <div class="name">Садриева Анзиля</div>
            <div class="date">7.04.2020 15:37</div>
            <div class="rate">
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star"></div>
            </div>
            <div class="text">Хочу сказать огромное спасибо врачам эндокринологического отделения - Рахимзяновой Ризале Ханнановне, Газимовой Розе Алмазовне и заведующей эндокринологического отделения РКБ - Бареевой Луизе Талгатовне и шефу терапевтической клиники РКБ - Абдулганиевой Диане</div>
          </div>
          <div class="item">
            <div class="name">Алексей Фокин</div>
            <div class="date">7.04.2020 15:37</div>
            <div class="rate">
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star"></div>
            </div>
            <div class="text">Здравствуйте! Хочу выразить ОГРОМНУЮ БЛАГОДАРНОСТЬ и самые наилучшие пожелания коллективам торакальных отделений! Находясь на лечении с последующей операцией убедился в том что не всё у нас потеряно, столько внимания и понимания к своим пациентам д...</div>
            <div class="reed-more">Читать полностью</div>
          </div>
          <div class="item">
            <div class="name">Садриева Анзиля</div>
            <div class="date">7.04.2020 15:37</div>
            <div class="rate">
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star"></div>
            </div>
            <div class="text">Хочу сказать огромное спасибо врачам эндокринологического отделения - Рахимзяновой Ризале Ханнановне, Газимовой Розе Алмазовне и заведующей эндокринологического отделения РКБ - Бареевой Луизе Талгатовне и шефу терапевтической клиники РКБ - Абдулганиевой Диане</div>
          </div>
          <div class="item">
            <div class="name">Алексей Фокин</div>
            <div class="date">7.04.2020 15:37</div>
            <div class="rate">
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star"></div>
            </div>
            <div class="text">Здравствуйте! Хочу выразить ОГРОМНУЮ БЛАГОДАРНОСТЬ и самые наилучшие пожелания коллективам торакальных отделений! Находясь на лечении с последующей операцией убедился в том что не всё у нас потеряно, столько внимания и понимания к своим пациентам д...</div>
            <div class="reed-more">Читать полностью</div>
          </div>
          <div class="item">
            <div class="name">Садриева Анзиля</div>
            <div class="date">7.04.2020 15:37</div>
            <div class="rate">
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star"></div>
            </div>
            <div class="text">Хочу сказать огромное спасибо врачам эндокринологического отделения - Рахимзяновой Ризале Ханнановне, Газимовой Розе Алмазовне и заведующей эндокринологического отделения РКБ - Бареевой Луизе Талгатовне и шефу терапевтической клиники РКБ - Абдулганиевой Диане</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="thanks_block--body">
        <div class="item">
          <div class="name">Алексей Фокин</div>
          <div class="medium">
            <div class="date">7.04.2020</div>
            <div class="rate">
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star"></div>
            </div>
          </div>
          <div class="text">Здравствуйте! Хочу выразить ОГРОМНУЮ БЛАГОДАРНОСТЬ и самые наилучшие пожелания коллективам торакальных отделений! Находясь на лечении с последующей операцией убедился в том что не всё у нас потеряно, столько внимания и понимания к своим пациентам д...</div>
        </div>
        <div class="item">
          <div class="name">Алексей Фокин</div>
          <div class="medium">
            <div class="date">7.04.2020</div>
            <div class="rate">
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star"></div>
            </div>
          </div>
          <div class="text">Здравствуйте! Хочу выразить ОГРОМНУЮ БЛАГОДАРНОСТЬ и самые наилучшие пожелания коллективам торакальных отделений! Находясь на лечении с последующей операцией убедился в том что не всё у нас потеряно, столько внимания и понимания к своим пациентам д...</div>
        </div>
        <div class="item">
          <div class="name">Алексей Фокин</div>
          <div class="medium">
            <div class="date">7.04.2020</div>
            <div class="rate">
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star active"></div>
              <div class="star"></div>
            </div>
          </div>
          <div class="text">Здравствуйте! Хочу выразить ОГРОМНУЮ БЛАГОДАРНОСТЬ и самые наилучшие пожелания коллективам торакальных отделений! Находясь на лечении с последующей операцией убедился в том что не всё у нас потеряно, столько внимания и понимания к своим пациентам д... </div>
        </div><a class="thanks-btn" href="#">Читать все отзывы       </a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
