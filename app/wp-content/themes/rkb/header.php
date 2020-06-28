<!DOCTYPE html>
<html lang="ru-RU">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-4-grid@3.4.0/css/grid.min.css">
  <?php wp_head(); ?>
  <title><?php the_title(); ?></title>
</head>
<body>
<header class="header">
  <div class="header__top">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="top__wrapper">
            <div class="left">
              <div class="header__lang-wrapper"><a class="header__lang header__lang--active" href="#">RU</a><a class="header__lang" href="#">ENG</a><a class="header__lang" href="#">TAT</a></div><a class="header__link"><img src="<?php echo get_template_directory_uri() ?>/media/icon/eye.svg" alt="eye"><span>Версия для слабовидящих</span></a><a class="header__link"><img src="<?php echo get_template_directory_uri() ?>/media/icon/map.svg" alt="map"><span>Карта РКБ</span></a>
            </div>
            <div class="right"><a class="header__number" href="tel:88432312090">8 (843) 231-20-90<span> — круглосуточно</span></a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="header__bot">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="bot-wrapper">
            <div class="left"><a class="home-link" href="<?php echo get_home_url(); ?>"><img alt="rkb" src="<?php echo get_template_directory_uri() ?>/media/icon/logo.svg">
                <div class="home-link__text">
                  <div class="title">Республиканская <br> Клиническая Больница</div>
                  <div class="small">Министерства здравоохранения <br> Республики Татарстан</div>
                </div></a>
              <?php
              wp_nav_menu( [
                'theme_location'  => 'header',
                'menu'            => '',
                'container'       => 'nav',
                'container_class' => 'header__navigation',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
              ] );
              ?>
            </div>
            <div class="right"><a class="header__search" href="#"><img alt="search" src="<?php echo get_template_directory_uri() ?>/media/icon/search.svg"></a>
              <div class="header__menu-btn">Меню
                <div class="humb"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>