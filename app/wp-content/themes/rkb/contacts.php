<?php
/*
Template Name: Contacts
*/
get_header();
?>

<div class="contacts">
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="contacts__title">Контактная <br> информация</div>
        <div class="contacts__desc">Государственное автономное учреждение здравоохранения «Республиканская клиническая больница Министерства здравоохранения Республики Татарстан»(ГАУЗ «РКБ МЗ РТ»)</div>
      </div>
      <div class="col-6">
        <div class="contacts__info">
          <div class="double">
            <div class="item">
              <div class="info__title">Приемная главного врача</div><a class="info__contact" href="tel:88432316595">8 (843) 231-65-95</a><a class="info__contact" href="mailto:mz.rkb@tatar.ru">mz.rkb@tatar.ru</a>
            </div>
            <div class="item">
              <div class="info__title">Приемное отделение</div><a class="info__contact" href="tel:88432316595">8 (843) 231-65-95</a><a class="info__contact" href="mailto:mz.rkb@tatar.ru">mz.rkb@tatar.ru</a>
            </div>
          </div>
          <div class="info__title">Адрес местонахождения юридического лица</div>
          <div class="info__contact">420064, Республика Татарстан, г. Казань, <br> Оренбургский тракт, 138.</div>
          <div class="contacts__path">
            <div class="info__title">Как добраться?</div>
            <div class="item">
              <div class="title">Вахитовский район</div>
              <div class="path">На автобусе №3 до станции “Альберт”</div>
            </div>
            <div class="item">
              <div class="title">Ново-Савиновский район</div>
              <div class="path">На автобусе №3 до станции “Альберт”</div>
            </div>
            <div class="item">
              <div class="title">Вахитовский район</div>
              <div class="path">На автобусе №3 до станции “Альберт”</div>
            </div>
            <div class="item">
              <div class="title">Московский район</div>
              <div class="path">На автобусе №3 до станции “Альберт”</div>
            </div>
            <div class="item">
              <div class="title">Авиастроительный район</div>
              <div class="path">На автобусе №3 до станции “Альберт”</div>
            </div>
            <div class="item">
              <div class="title">Приволжский район</div>
              <div class="path">На автобусе №3 до станции “Альберт”</div>
            </div>
            <div class="item">
              <div class="title">Советский район</div>
              <div class="path">На автобусе №3 до станции “Альберт”</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <script src="https://api-maps.yandex.ru/2.1/?apikey=&lt;ваш API-ключ&gt;&amp;lang=ru_RU" type="text/javascript"></script>
        <div class="contacts__map" id="contacts__map">
          <div class="pin"></div>
        </div>
        <script>
          ymaps.ready(init);
          function init() {
            var myMap = new ymaps.Map("contacts__map", {
              center: [51.767703, 55.198824],
              zoom: 17
            });

            myMap.behaviors.disable(['drag', 'scrollZoom', 'dblClickZoom']);

            myMap.controls
              .remove('trafficControl')
              .remove('fullscreenControl')
              .remove('rulerControl')
              .remove('typeSelector')
              .remove('searchControl')
              .remove('zoomControl')
              .remove('geolocationControl');

            var myPin = new ymaps.Placemark([51.767703, 55.198824],
              {
                // balloonContentHeader: 'BRP',
                // balloonContentBody: 'BRP',
                // balloonContentFooter: 'BRP',
                // hintContent: 'BRP'
              },
              {
                iconLayout: 'none',
                iconImageHref: './media/icon/pin.svg',
                iconImageSize: [36, 36],
                iconImageOffset: [0, 0]
              });

            myMap.geoObjects.add(myPin);
          }
        </script>
      </div>
      <div class="col-6">
        <form class="contacts__form">
          <div class="form__title">Форма для жалоб и предложений</div>
          <label for="contacts-name">Ваше имя
            <input id="contacts-name" type="text" placeholder="Иванов Иван Иванович">
          </label>
          <div class="form__double">
            <label for="contacts-tel">Телефон
              <input id="contacts-tel" type="text" placeholder="8 (843) 231-65-95">
            </label>
            <label for="contacts-email">Email
              <input id="contacts-email" type="email" placeholder="mz.rkb@tatar.ru">
            </label>
          </div>
          <label for="contacts-text">Что не понравилось?
            <textarea id="contacts-text" placeholder="Какой то плейсхолдер"></textarea>
          </label>
          <div class="submit-wrapper">
            <input type="submit" value="Отправить">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
