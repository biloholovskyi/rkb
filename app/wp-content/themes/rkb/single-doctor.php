<?php get_header(); ?>

<?php the_post(); ?>
  <div class="single-specialist">
    <div class="container">
      <div class="row">
        <div class="col-12"><a class="btn_back" href="/specialists">Вернуться к списку специалистов</a></div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-3 col-md-6 photo-row"><img class="specialist-photo" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image"></div>
        <div class="col-12 col-lg-9 col-md-6">
          <div class="specialist-wrap">
            <h1 class="big-title"><?php the_title(); ?></h1>
            <p><?php the_field('post'); ?></p>
            <p><?php the_field('place'); ?></p>
            <div class="specialist-info">
              <div class="experience">
                <ul>
                  <li class="dropdown servisDrop">
                    <input type="checkbox">
                    <a href="#" data-toggle="dropdown">
                      <img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/bag.svg" alt="icon">
                      <p>10 лет опыта работы</p>
                      <img class="arrow" src="<?php echo get_template_directory_uri(); ?>/media/icon/arrow_down.svg" alt="icon">
                    </a>

                    <ul class="dropdown-menu">
	                    <?php
	                    $exp = CFS()->get('exp');
	                    if (!empty($exp)) {
	                      foreach ($exp as $one_exp) {
		                      ?>
                           <li>
                             <div class="acc-item">
                               <div class="icon-wrap exp">
                                 <img src="//localhost:3000/rkb/app/wp-content/themes/rkb/media/icon/specialist/circle.svg" alt="image">
                               </div>
                               <div class="info">
                                 <p><?php echo $one_exp['name']; ?> <span><?php echo $one_exp['time']; ?></span></p>
                               </div>
                             </div>
                           </li>
		                      <?php
	                      }
	                    }
	                    ?>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="specialist-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/hat.svg" alt="icon">
                <p>Закончил: <?php the_field('education'); ?></p>
              </div>
              <div class="specialist-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/tel.svg" alt="icon">
                <?php
                $number = get_field('tel');
                $tel = preg_replace("/[^0-9]/", '', $number);
                ?>
                <p>(<?php echo $tel[1].$tel[2].$tel[3]; ?>) XXX-XX-XX
                  <p class="show-phone">Показать телефон </p>
                </p>
              </div>
              <div class="specialist-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/mail.svg" alt="icon"><a href="mailto:<?php the_field('e-mail'); ?>"><?php the_field('e-mail'); ?></a></div>
              <div class="rank">
                <?php
                $rating = get_field('rating');
                $count_revs = get_field('count_revs');
                $rating = $rating / $count_revs;

                $percent = $rating / 5 * 100;

                $count_string = null;

                if($count_revs == 0) {
	                $count_string = '';
                }
                if($count_revs == 1 or $count_revs == 21) {
                  $count_string = $count_revs . ' отзыв';
                }
                if($count_revs == 2 or $count_revs == 3 or $count_revs == 4)  {
	                $count_string = $count_revs . ' отзыва';
                }
                if($count_revs > 4 and $count_revs < 21)  {
	                $count_string = $count_revs . ' отзывов';
                }
                if($count_revs > 21 and $count_revs < 25)  {
	                $count_string = $count_revs . ' отзыва';
                }
                ?>
                
                <div class="star-block">

                <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                  
                
                <div class="star-block color-block" style="width: <?php echo $percent; ?>%">
                    <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-color.svg" alt="icon"></button>
                    <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-color.svg" alt="icon"></button>
                    <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-color.svg" alt="icon"></button>
                    <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-color.svg" alt="icon"></button>
                    <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-color.svg" alt="icon"></button>
                  </div>
                </div>
                <p><?php echo $count_string; ?></p>
              </div>
              <button class="anhors">  <a href="#feedback">Оставить отзыв</a></button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="feedback">
            <h2 class="small-title">Отзывы</h2>
            
	          <?php
            $current_doctor_id = get_the_ID();
	          $cur_post = $posts;
	          $args = array(
		          'numberposts' => -1,
		          'orderby' => 'date',
		          'order' => 'DESC',
		          'post_type' => 'doctor-rew',
		          'suppress_filters' => true,
	          );

	          $posts = get_posts($args);

	          foreach ($posts as $post) {
		          setup_postdata($post);
	            $rating_rev = get_field('rating');
	            $rating_rev_dis = 5 - $rating_rev;
	            $doctor_id = get_field('doctor')->ID;
	            if($current_doctor_id == $doctor_id) {
	              ?>
                <div class="feedback-item">
                  <h3><?php the_title(); ?></h3>
                  <div class="rank">
                    <div class="star-block">
			            <?php
			            while($rating_rev > 0) {
				            ?>
                          <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-color.svg" alt="icon"></button>
				            <?php
				            $rating_rev--;
			            }
			            while($rating_rev_dis > 0) {
				            ?>
                          <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
				            <?php
				            $rating_rev_dis--;
			            }
			            ?>
                    </div>
                    <div class="date"><?php the_date('d.m.Y'); ?></div>
                  </div>
                  <p><?php the_field('text'); ?></p>
                </div>
	              <?php
              }
	          }
	          wp_reset_postdata(); // сброс
	          $posts = $cur_post;
	          ?>

          </div>
          <div class="form_spec" id="feedback">
            <div class="rank">
              <div class="star-block">
                <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
              </div>
              <p>Поставьте оценку</p>
            </div>
            <form id="rev-form" action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
              <input type="text" placeholder="Введите ваше ФИО" name="fio">
              <input type="hidden" name="rating_count" id="rev-input-rating" value="">
              <textarea placeholder="Введите текст сообщения" name="text"></textarea>
              <input type="hidden" name="action" value="doctor-review">
              <input type="hidden" name="doctor_id" value="<?php the_ID(); ?>">
              <input type="hidden" name="rating" value="5">
              <button class="form__submit" type="submit" disabled>Оставить отзыв</button>
            </form>
          </div>
        </div>
      </div>
      <div class="row block_blog">
        <div class="col-12">
          <h2 class="small-title blog_title">Публикации</h2>
        </div>
	      <?php
	      $cur_post = $posts;
	      $args = array(
		      'numberposts' => -1,
		      'orderby' => 'date',
		      'order' => 'DESC',
		      'post_type' => 'post',
		      'suppress_filters' => true,
	      );

	      $posts = get_posts($args);

	      foreach ($posts as $post) {
		      setup_postdata($post);
		      $doctor_id = get_field('author')->ID;
		      if($current_doctor_id == $doctor_id) {
			      ?>
            <div class="col-12 col-lg-3 col-md-4 col-sm-6">
              <div class="blog_item">
                <a href="<?php the_permalink(); ?>">
                  <p><?php the_title(); ?></p>
                  <div class="date"><?php the_date('d.m.Y'); ?></div>
                </a>
              </div>
            </div>
			      <?php
		      }
	      }
	      wp_reset_postdata(); // сброс
	      $posts = $cur_post;
	      ?>
        <div class="more">Показать еще</div>
      </div>
    </div>
  </div>
  <div class="showTel-overlay">
    <div class="showTel-modal">
      <div class="showTel-close"></div>
      <div class="showTel-item">
        <h3> Телефон</h3>
        <p><?php the_field('tel'); ?></p>
        <div class="modal-btn-block"><a href="tel:+7 962 395-63-44">Подзвонить   </a></div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>

<script>
  $('#rev-form').on('submit', function (e) {
    e.preventDefault();
    jQuery.ajax({
      type:'POST',
      url:"<?php echo esc_url(admin_url('admin-ajax.php')); ?>",
      data:$(this).serialize(),
      success:function(data){
        $('#rev-form input, #rev-form textarea').val('');
        $('.form_spec .rank .star-block button').each(function () {
          $(this).children('img').attr('src', 'http://localhost:3000/rkb/app/wp-content/themes/rkb/media/icon/specialist/star-disable.svg');
        });
      }
    });
  })
</script>
