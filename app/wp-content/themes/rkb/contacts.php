<?php
/*
Template Name: Contacts
*/
get_header();
?>

<div class="contacts">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 col-md-12 col-sm-12 order-1 order-lg-first">
        <div class="contacts__title">Контактная <br> информация</div>
        <div class="contacts__desc"><?php the_field('contac-desc'); ?></div>
      </div>
      <div class="col-12 col-lg-6 col-md-12 col-sm-12 order-3 order-lg-2">
        <div class="contacts__info">
          <div class="double">
            <div class="item">
              <div class="info__title">Приемная главного врача</div><a class="info__contact" href="tel:<?php the_field('mainDoctorTel'); ?>"><?php the_field('mainDoctorTel'); ?></a><a class="info__contact" href="mailto:<?php the_field('mainDoctorEmail'); ?>"><?php the_field('mainDoctorEmail'); ?></a>
            </div>
            <div class="item">
              <div class="info__title">Приемное отделение</div><a class="info__contact" href="tel:<?php the_field('department_tel'); ?>"><?php the_field('department_tel'); ?></a><a class="info__contact" href="mailto:<?php the_field('department_email'); ?>"><?php the_field('department_email'); ?></a>
            </div>
          </div>
          <div class="info__title">Адрес местонахождения юридического лица</div> 
          <div class="info__contact"><?php the_field('addresContact'); ?></div>
          <div class="contacts__path">
            <div class="info__title">Как добраться?</div>
            <?php
            $args = array(
              'numberposts' => -1, // если -1 то выводит все
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'way', // тип поста
              'suppress_filters' => true,
            );

            $posts = get_posts($args);

            foreach ($posts as $post) {  
              setup_postdata($post);
              ?>  
            <div class="item">
              <div class="title"><?php the_title(); ?></div>
              <div class="path"><?php the_field('way_desc'); ?></div>
            </div>
            <?php
              }
              wp_reset_postdata(); // сброс
              ?>  
         
          </div>
        </div>
      </div>
    <!-- </div>
  </div> -->
  <!-- <div class="container">
    <div class="row"> -->
      <div class="col-12 col-lg-6 order-2 order-lg-3">
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
      <div class="col-12 col-lg-6 order-4 order-lg-4">
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
