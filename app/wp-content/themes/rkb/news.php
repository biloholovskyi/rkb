<?php
/*
Template Name: News
*/
get_header();
?>

<div class="news-page">
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
          <a class="news-btns" href="#">Читать все новости </a>
        </div>
      </div>
    </div>
  </div>
  <div class="news-items">
      <div class="container">
        <div class="row">



          <?php
                $cur_post = $posts;
                $args     = array(
                  'numberposts'      => -1,
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
          <div class="col-12 col-lg-3">
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
          </div>
          <?php
                }
                wp_reset_postdata(); // сброс
                $posts = $cur_post;
                ?>


        </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="pagination">
            <div class="pagination__item active">1</div>
            <div class="pagination__item">2</div>
            <div class="pagination__item">3</div>
            <div class="pagination__dots"></div>
            <div class="pagination__item">48</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>