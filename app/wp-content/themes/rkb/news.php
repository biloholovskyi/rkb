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
                  <a href="/news/" class="tab no-js active">Все</a>
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
                          <a href="<?php home_url(); ?>/category/<?php echo $cat->slug; ?>"
                             class="tab no-js"
                             id="<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></a>
							<?php
						}
					}
					?>
                </div>

              </div>
            </div>
			  <?php $post_count = 0; ?>
            <?php
            global $wp_query;
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $query = new WP_Query( array(
              'posts_pet_page' => 20,
              'paged' => $paged
            ) );
            ?>
			  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) :
	      $query->the_post(); ?>
			  <?php
			  $post_count ++;
			  if ( $post_count == 1 ) {
			  ?>
            <div class="news-tab__body show">
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
				} else if ( $post_count == 2 ) {
				?>
              <div class="other-news">
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
				  } else if ( $post_count == 3 ) {
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
				  } else if ( $post_count == 4 ) {
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
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	  <?php
	  } else if ( $post_count == 5 ) {
	  ?>
    <div class="news-items">
      <div class="container">
        <div class="row">
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
			} else if ( $post_count > 5 ) {
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
			?>
			<?php endwhile; ?>
        </div>
      </div>
    </div>
    <?php
    if($post_count < 4) {
      ?>
      </div>
      </div>
      </div>
      <?php
    }
    ?>
	  <?php
	  $args = array(
		  'show_all'     => false, // показаны все страницы участвующие в пагинации
		  'end_size'     => 1,     // количество страниц на концах
		  'mid_size'     => 1,     // количество страниц вокруг текущей
		  'prev_next'    => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
		  'prev_text'    => __('« Previous'),
		  'next_text'    => __('Next »'),
		  'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
		  'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
		  'screen_reader_text' => false,
	  );
	  ?>
	  <?php the_posts_pagination( $args ); ?>

    <div class="pagination">
	    <?php
	    echo paginate_links( array(
		    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
		    'total'        => $query->max_num_pages,
		    'current'      => max( 1, get_query_var( 'paged' ) ),
		    'format'       => '?paged=%#%',
		    'show_all'     => false,
		    'type'         => 'plain',
		    'end_size'     => 1,
		    'mid_size'     => 1,
		    'prev_next'    => false,
		    'prev_text'    => sprintf( '<i></i> %1$s', __( 'Newer Posts', 'text-domain' ) ),
		    'next_text'    => sprintf( '%1$s <i></i>', __( 'Older Posts', 'text-domain' ) ),
		    'add_args'     => false,
		    'add_fragment' => '',
	    ) );
	    ?>
    </div>
	  <?php endif; ?>
    <?php wp_reset_postdata(); ?>
  </div>

<?php get_footer(); ?>