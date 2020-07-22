<?php
get_header();
?>
<?php the_post(); ?>
<div class="single-servis">
  <div class="container">
    <div class="row">
      <div class="col-12"><a class="btn_back"
                             href="services/"><span>Вернуться к списку служб</span><span>Назад</span></a></div>
    </div>
    <div class="row">
      <div class="col-12">
        <h1 class="big-title"><?php the_title(); ?></h1>
      </div>
      <div class="col-12">
        <div class="aside anhors">
          <ul>
            <li class="active"><a href="#servises">Услуги</a></li>
            <li><a href="#departments">Отделения</a></li>
            <li><a href="#desc">Описание</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-8">
        <h2 id="servises" class="small-title">Услуги</h2>
        <div class="servis-btn-block">
			<?php
			$serv_list = CFS()->get( 'serv_list' );
			foreach ( $serv_list as $serv ) {
				?>
              <button><?php echo $serv['serv']; ?></button>
				<?php
			}
			?>
        </div>
        <h2 id="departments" class="small-title">Отделения</h2>
        <div class="servis-acc">
          <ul class="list">
          <?php
          $cur_post = $posts;
          $current_id = get_the_ID();
          $args     = array(
            'numberposts'      => -1,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'post_type'        => 'service',
            'suppress_filters' => true,
          );

          $posts = get_posts( $args );

          foreach ( $posts as $post ) {
            setup_postdata( $post );
	          $category = get_field( 'category' )->ID;
	          if ( $category == $current_id ) {
	            ?>
              <li class="dropdown servisDrop">
                <input type="checkbox">
                <button data-toggle="dropdown">
                  <?php the_title(); ?>
                  <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/arrow-right.svg" alt="icon">
                </button>
                <ul class="dropdown-menu">
                  <li>
                    <div class="acc-item">
                      <p><?php the_field('desc'); ?></p>
                    </div>
                  </li>
                </ul>
              </li>
	            <?php
            }
          }
          wp_reset_postdata(); // сброс
          $posts = $cur_post;
          ?>
          </ul>
        </div>
        <div class="line"></div>
        <div class="desc-serv">
          <h2 id="desc" class="small-title">Описание</h2>
         <?php the_field('desc'); ?>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="contact-wrap">
          <h3>Контакты</h3>
          <div class="contact-item">
            <p>Приемная</p>
            <a href="tel:<?php the_field( 'serv_number' ); ?>" class="contact"><?php the_field( 'serv_number' ); ?></a>
          </div>
          <div class="contact-item">
			  <?php
			  $head_doctor = get_field( 'head' );
			  ?>
            <p>Заведующий</p>
            <a href="tel:<?php the_field( 'tel', $head_doctor->ID ); ?>"
               class="contact"><?php the_field( 'tel', $head_doctor->ID ); ?></a>
          </div>
          <div class="contact-item">
            <p>Факс</p>
            <a href="tel:<?php the_field( 'fax', $head_doctor->ID ); ?>"
               class="contact"><?php the_field( 'fax', $head_doctor->ID ); ?></a>
          </div>
          <div class="contact-item">
            <p>Email</p>
            <a href="mailto:<?php the_field( 'tel', $head_doctor->ID ); ?>"
               class="contact"><?php the_field( 'e-mail', $head_doctor->ID ); ?></a>
          </div>
          <button>Обратиться онлайн</button>
        </div>
      </div>
    </div>
  </div>
  <div class="big-slider__wrapper">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="big-slider">
            <div class="big-slider__btn next"></div>
            <div class="big-slider__btn prev disabled"></div>
            <div class="item"><img alt="img" src="<?php echo get_template_directory_uri(); ?>/media/image/big1.jpg">
            </div>
            <div class="item"><img alt="img" src="<?php echo get_template_directory_uri(); ?>/media/image/big2.jpg">
            </div>
            <div class="item"><img alt="img" src="<?php echo get_template_directory_uri(); ?>/media/image/big3.jpg">
            </div>
            <div class="item"><img alt="img" src="<?php echo get_template_directory_uri(); ?>/media/image/big1.jpg">
            </div>
            <div class="item"><img alt="img" src="<?php echo get_template_directory_uri(); ?>/media/image/big2.jpg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="form">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="form__title">Остались вопросы?<br>Свяжитесь с нами</div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="contact-form-block">
            <form id="contact-form">
              <div class="input-wrapper input-wrapper--name">
                <input type="text">
              </div>
              <div class="input-wrapper input-wrapper--tel">
                <input type="text">
              </div>
              <div class="input-wrapper input-wrapper--comment message-wrap">
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
<?php get_footer(); ?>