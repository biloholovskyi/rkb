<?php
/*
Template Name: Services
*/
get_header();
?>

<div class="big-form"
     style="background-image: url(<?php echo get_template_directory_uri(); ?>/media/image/big-form2.jpg)">
  <div class="big-form__title">Отделения Республиканской <br> клинической больницы</div>
  <form class="big-form__form">
    <input type="submit" value="">
    <input type="text" placeholder="Введите название службы или отделения">
  </form>
</div>
<div class="servis-page">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="accordion">
			<?php
			$current_doctor_id = get_the_ID();
			$cur_post          = $posts;
			$args              = array(
				'numberposts'      => - 1,
				'orderby'          => 'date',
				'order'            => 'DESC',
				'post_type'        => 'doctor-service',
				'suppress_filters' => true,
			);

			$posts = get_posts( $args );

			foreach ( $posts as $post ) {
				setup_postdata( $post );
				$current_id = get_the_ID();
				?>
              <div class="accordion_item">
                <img src="<?php the_field('serv_logo'); ?>" alt="icon"><a href="<?php the_permalink(); ?>"
                                                                                     class="accordion__title"><?php the_title(); ?></a>
				  <?php
				  $cur_post = $posts;
				  $args     = array(
					  'numberposts'      => - 1,
					  'orderby'          => 'date',
					  'order'            => 'DESC',
					  'post_type'        => 'service',
					  'suppress_filters' => true,
				  );

				  $posts      = get_posts( $args );
				  $serv_count = 0;

				  foreach ( $posts

				  as $post ) {
				  setup_postdata( $post );
				  $category = get_field( 'category' )->ID;
				  if ( $category == $current_id ) {
				  $serv_count ++;
				  if ( $serv_count > 3 ) {
				  ?>
                <div class="info">
                  <p class="info_item"><?php the_title(); ?></p>
					<?php
					} else {
						?>
                      <p><?php the_title(); ?></p>
						<?php
					}
					}
					}
					if ( $serv_count > 3 ) {
					?>
                </div>
			  <?php
			  }
			  wp_reset_postdata(); // сброс
			  $posts = $cur_post;
			  if ( $serv_count > 3 ) {
				  ?>
                <button class="acc_btn"><span>Показать</span> все (<?php echo $serv_count; ?>)</button>
				  <?php
			  }
			  ?>
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

<?php get_footer(); ?>
