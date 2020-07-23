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
			  <?php
			  $args = array(
				  'numberposts'      => - 1, // если -1 то выводит все
				  'orderby'          => 'date',
				  'order'            => 'DESC',
				  'post_type'        => 'main-slider', // тип поста
				  'suppress_filters' => true,
			  );

			  $posts = get_posts( $args );

			  foreach ( $posts as $post ) {
				  setup_postdata( $post );
				  ?>
                <div class="item"
                     style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>)">
                  <div class="title"><?php the_title(); ?></div>
                  <div class="desc"><?php the_field( 'slider_desc' ); ?>
                  </div>
                </div>
				  <?php
			  }
			  wp_reset_postdata(); // сброс
			  ?>
          </div>
          <div class="links">
            <a class="link" href="/specialists"
               style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/link1.jpg)">Найти
              специалиста <span class="icon"></span></a>
            <a class="link" href="/services"
               style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/link2.jpg)">Службы
              и отделения <span class="icon"></span></a>
            <a class="link" href="/contacts"
               style="background-image: url(<?php echo get_template_directory_uri() ?>/media/image/link3.jpg)">Карта
              РКБ <span class="icon"></span></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="spec-of-week">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="week__body">
			<?php
			$spec_week = get_field( 'spec_week' );
			?>
          <img class="photo" src="<?php echo get_the_post_thumbnail_url( $spec_week->ID ); ?>" alt="rkb">
          <div class="week__info">
            <div class="title week-bg">СПЕЦИАЛИСТ НЕДЕЛИ</div>
            <div class="info__wrapper">
              <div class="info__text">
                <div class="name"><?php echo $spec_week->post_title; ?></div>
                <?php
                $place_doctor = get_field('place', $spec_week->ID);
                ?>
                <div class="place"><?php echo $place_doctor->post_title; ?></div>
                <div class="post"><?php the_field( 'post', $spec_week->ID ); ?></div>
              </div>
              <a class="info__link" href="<?php the_permalink( $spec_week->ID ); ?>">Подробнее о специалисте</a>
            </div>
            <div class="week__desc week-bg">
              <p><?php the_field( 'desc', $spec_week->ID ); ?></p>
              <span>— «<?php the_field( 'small', $spec_week->ID ); ?>»</span>
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
				<?php
				$categories = get_categories( [
					'taxonomy'     => 'category',
					'type'         => 'post',
					'child_of'     => 0,
					'parent'       => '',
					'orderby'      => 'name',
					'order'        => 'ASC',
					'hide_empty'   => 1,
					'hierarchical' => 1,
					'exclude'      => '1',
					'include'      => '',
					'number'       => 0,
					'pad_counts'   => false,
				] );

				if ( $categories ) {
					foreach ( $categories as $cat ) {
						?>
                      <div class="tab" id="tab-<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></div>
						<?php
					}
				}
				?>
            </div>
            <a class="all-news" href="news/">Все новости</a>
          </div>
        </div>
        <div class="news-tab__body show" id="body-all">
			<?php
			$cur_post = $posts;
			$args     = array(
				'numberposts'      => 1,
				'orderby'          => 'date',
				'order'            => 'DESC',
				'post_type'        => 'post',
				'suppress_filters' => true,
			);

			$posts = get_posts( $args );

			foreach ( $posts as $post ) {
				setup_postdata( $post );
				?>
              <a class="main" href="<?php the_permalink(); ?>"
                 style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                <div class="top">
                  <div class="category"><?php echo get_the_category()[0]->name; ?></div>
                  <div class="date"><?php the_time( 'd.m.Y' ) ?></div>
                </div>
                <div class="main__title"><?php the_title(); ?></div>
                <div class="main__desc"><?php the_excerpt(); ?></div>
                <img class="main__arrow" src="<?php echo get_template_directory_uri() ?>/media/icon/big-arrow.svg"
                     alt="arrow">
              </a>
				<?php
			}
			wp_reset_postdata(); // сброс
			$posts = $cur_post;
			?>


          <div class="other-news">
			  <?php
			  $cur_post = $posts;
			  $args     = array(
				  'numberposts'      => 3,
				  'offset'           => 1,
				  'orderby'          => 'date',
				  'order'            => 'DESC',
				  'post_type'        => 'post',
				  'suppress_filters' => true,
			  );

			  $posts = get_posts( $args );

			  foreach ( $posts as $post ) {
				  setup_postdata( $post );
				  ?>
                <a class="item" href="<?php the_permalink(); ?>">
                  <img alt="news" src="<?php echo get_the_post_thumbnail_url(); ?>">
                  <div class="info">
                    <div class="info__top">
                      <div class="category"><?php echo get_the_category()[0]->name; ?></div>
                      <div class="date"><?php the_time( 'd.m.Y' ) ?></div>
                    </div>
                    <div class="info__desc"><?php the_title(); ?></div>
                  </div>
                </a>
				  <?php
			  }
			  wp_reset_postdata(); // сброс
			  $posts = $cur_post;
			  ?>
          </div>
        </div>
		  <?php
		  $categories = get_categories( [
			  'taxonomy'     => 'category',
			  'type'         => 'post',
			  'child_of'     => 0,
			  'parent'       => '',
			  'orderby'      => 'name',
			  'order'        => 'ASC',
			  'hide_empty'   => 1,
			  'hierarchical' => 1,
			  'exclude'      => '1',
			  'include'      => '',
			  'number'       => 0,
			  'pad_counts'   => false,
		  ] );

		  if ( $categories ) {
			  foreach ( $categories as $cat ) {
				  ?>
                <div class="news-tab__body" id="body-<?php echo $cat->slug; ?>">
					<?php
					$cur_post = $posts;
					$args     = array(
						'numberposts'      => 1,
						'orderby'          => 'date',
						'order'            => 'DESC',
						'post_type'        => 'post',
						'category_name'    => $cat->slug,
						'suppress_filters' => true,
					);

					$posts = get_posts( $args );

					foreach ( $posts as $post ) {
						setup_postdata( $post );
						?>
                      <a class="main" href="<?php the_permalink(); ?>"
                         style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
                        <div class="top">
                          <div class="category"><?php echo get_the_category()[0]->name; ?></div>
                          <div class="date"><?php the_time( 'd.m.Y' ) ?></div>
                        </div>
                        <div class="main__title"><?php the_title(); ?></div>
                        <div class="main__desc"><?php the_excerpt(); ?></div>
                        <img class="main__arrow"
                             src="<?php echo get_template_directory_uri() ?>/media/icon/big-arrow.svg"
                             alt="arrow">
                      </a>
						<?php
					}
					wp_reset_postdata(); // сброс
					$posts = $cur_post;
					?>


                  <div class="other-news">
					  <?php
					  $cur_post = $posts;
					  $args     = array(
						  'numberposts'      => 3,
						  'offset'           => 1,
						  'orderby'          => 'date',
						  'order'            => 'DESC',
						  'post_type'        => 'post',
						  'category_name'    => $cat->slug,
						  'suppress_filters' => true,
					  );

					  $posts = get_posts( $args );

					  foreach ( $posts as $post ) {
						  setup_postdata( $post );
						  ?>
                        <a class="item" href="<?php the_permalink(); ?>">
                          <img alt="news" src="<?php echo get_the_post_thumbnail_url(); ?>">
                          <div class="info">
                            <div class="info__top">
                              <div class="category"><?php echo get_the_category()[0]->name; ?></div>
                              <div class="date"><?php the_time( 'd.m.Y' ) ?></div>
                            </div>
                            <div class="info__desc"><?php the_title(); ?></div>
                          </div>
                        </a>
						  <?php
					  }
					  wp_reset_postdata(); // сброс
					  $posts = $cur_post;
					  ?>
                  </div>
                </div>
				  <?php
			  }
		  }
		  ?>
        <a class="news-btns" href="news/">Читать все новости </a>
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
			<?php
			$cur_post = $posts;
			$args     = array(
				'numberposts'      => - 1,
				'orderby'          => 'date',
				'order'            => 'DESC',
				'post_type'        => 'doctor-rew',
				'suppress_filters' => true,
			);

			$posts = get_posts( $args );

			foreach ( $posts as $post ) {
				setup_postdata( $post );
				$rating_rev     = get_field( 'rating' );
				$rating_rev_dis = 5 - $rating_rev;

				?>
              <div class="item">
                <div class="name"><?php the_title(); ?></div>
                <div class="date"><?php the_date( 'd.m.Y H:i' ); ?></div>
                <div class="rate">
					<?php
					while ( $rating_rev > 0 ) {
						?>
                      <div class="star active"></div>
						<?php
						$rating_rev --;
					}
					while ( $rating_rev_dis > 0 ) {
						?>
                      <div class="star"></div>
						<?php
						$rating_rev_dis --;
					}
					?>
                </div>
                <div class="text"><?php the_field( 'text' ); ?></div>
                <div class="reed-more">Читать полностью</div>
              </div>
				<?php
			}
			wp_reset_postdata(); // сброс
			$posts = $cur_post;
			?>
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
          <div class="text">Здравствуйте! Хочу выразить ОГРОМНУЮ БЛАГОДАРНОСТЬ и самые наилучшие пожелания коллективам
            торакальных отделений! Находясь на лечении с последующей операцией убедился в том что не всё у нас потеряно,
            столько внимания и понимания к своим пациентам д...
          </div>
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
          <div class="text">Здравствуйте! Хочу выразить ОГРОМНУЮ БЛАГОДАРНОСТЬ и самые наилучшие пожелания коллективам
            торакальных отделений! Находясь на лечении с последующей операцией убедился в том что не всё у нас потеряно,
            столько внимания и понимания к своим пациентам д...
          </div>
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
          <div class="text">Здравствуйте! Хочу выразить ОГРОМНУЮ БЛАГОДАРНОСТЬ и самые наилучшие пожелания коллективам
            торакальных отделений! Находясь на лечении с последующей операцией убедился в том что не всё у нас потеряно,
            столько внимания и понимания к своим пациентам д...
          </div>
        </div>
        <a class="thanks-btn" href="#">Читать все отзывы </a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
