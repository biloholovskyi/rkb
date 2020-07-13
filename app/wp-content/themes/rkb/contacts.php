<?php
/*
Template Name: Contacts
*/
get_header();
?>

<div class="contacts">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 col-md-12 col-sm-12">
        <div class="contacts__title">Контактная <br> информация</div>
        <div class="contacts__desc"><?php the_field('contac-desc'); ?></div>
      </div>
      <div class="col-12 col-lg-6 col-md-12 col-sm-12">
        <div class="contacts__info">
          <div class="double">
            <div class="item">
              <div class="info__title">Приемная главного врача</div><a class="info__contact"
                href="tel:<?php the_field('mainDoctorTel'); ?>"><?php the_field('mainDoctorTel'); ?></a><a
                class="info__contact"
                href="mailto:<?php the_field('mainDoctorEmail'); ?>"><?php the_field('mainDoctorEmail'); ?></a>
            </div>
            <div class="item">
              <div class="info__title">Приемное отделение</div><a class="info__contact"
                href="tel:<?php the_field('department_tel'); ?>"><?php the_field('department_tel'); ?></a><a
                class="info__contact"
                href="mailto:<?php the_field('department_email'); ?>"><?php the_field('department_email'); ?></a>
            </div>
          </div>
          <div class="info__title">Адрес местонахождения юридического лица</div>
          <div class="info__contact"><?php the_field('addresContact'); ?></div>

          <div id="tabs">
            <h3>Как добраться?</h3>
            <div class="tab-title">
              <a class="tab whiteborder">На автобусе</a>
              <a class="tab">На метро</a>
              <a class="tab">На трамвае</a>
              <a class="tab">На машине</a>
            </div>
            <div class="tabContent">
              <p>111Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas, ante quis semper posuere, sapien odio mollis justo, et semper ipsum mi ut mi.</p>
            </div>
            <div class="tabContent">
              <p>222Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas, ante quis semper posuere, sapien odio mollis justo, et semper ipsum mi ut mi.</p>
            </div>
            <div class="tabContent">
              <p>333Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas, ante quis semper posuere, sapien odio mollis justo, et semper ipsum mi ut mi.</p>
            </div>
            <div class="tabContent">
              <p>444Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas, ante quis semper posuere, sapien odio mollis justo, et semper ipsum mi ut mi.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- </div>
  </div> -->
      <!-- <div class="container">
    <div class="row"> -->
      <div class="col-12 col-lg-6">
        <script src="https://api-maps.yandex.ru/2.1/?apikey=&lt;ваш API-ключ&gt;&amp;lang=ru_RU" type="text/javascript">
        </script>
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

            var myPin = new ymaps.Placemark([51.767703, 55.198824], {
              // balloonContentHeader: 'BRP',
              // balloonContentBody: 'BRP',
              // balloonContentFooter: 'BRP',
              // hintContent: 'BRP'
            }, {
              iconLayout: 'none',
              iconImageHref: './media/icon/pin.svg',
              iconImageSize: [36, 36],
              iconImageOffset: [0, 0]
            });

            myMap.geoObjects.add(myPin);
          }
        </script>
      </div>
      <div class="col-12 col-path">
        <div class="contacts__path">
              <div class="info__title">Как добраться?</div>
              <div class="item">
                <div class="title">На автобусе</div>
                <div class="path">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas, ante quis semper posuere, sapien odio mollis justo, et semper ipsum mi ut mi.</div>
              </div> 
              <div class="item">
                <div class="title">На метро</div>
                <div class="path">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas, ante quis semper posuere, sapien odio mollis justo, et semper ipsum mi ut mi.</div>
              </div> 
              <div class="item">
                <div class="title">На трамвае</div>
                <div class="path">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas, ante quis semper posuere, sapien odio mollis justo, et semper ipsum mi ut mi.</div>
              </div> 
              <div class="item">
                <div class="title">На машине</div>
                <div class="path">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi egestas, ante quis semper posuere, sapien odio mollis justo, et semper ipsum mi ut mi.</div>
              </div> 
            </div>
      </div>
      <script>
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


      </script>
      <div class="col-12 col-lg-6 col-form">
        <div class="form">
          <div class="form__title">Форма для жалоб и предложений</div>
          <div class="contact-form-block">
            <form id="contacts-form">
              <div class="input-wrapper input-wrapper--name">
                <input type="text">
              </div>
              <div class="double">
                <div class="input-wrapper input-wrapper--tel2">
                  <input type="text">
                </div>
                <div class="input-wrapper input-wrapper--email">
                  <input type="text">
                </div>
              </div>
              <div class="input-wrapper input-wrapper--comment2 message-wrap">
                <textarea class="message" type="text"></textarea>
              </div>
              <button class="submit" type="submit">Отправить</button>
            </form>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>

<div class="contact-modal">
  <img src="<?php echo get_template_directory_uri(); ?>/media/icon/ok.svg" alt="icon">
  <p>Ваше сообщение отправлено</p>
</div>

<?php get_footer(); ?>