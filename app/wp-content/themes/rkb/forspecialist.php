<?php
/*
Template Name: For Specialist
*/
get_header();
?>

<div class="for_specialist-page">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3 col-md-12 aside-col">
        <div class="aside anhors" id="top_nav">
          <h2><?php the_field('spec_title'); ?></h2>
          <p><?php the_field('spec_desc'); ?></p>
          <ul>
            <li class="active"><a href="#about">О клинике</a></li>
            <li><a href="#activity">Научная деятельность</a></li>
            <li><a href="#benefits">Наши преимущества</a></li>
            <li><a href="#diplom">Награды и дипломы</a></li>
            <li><a href="#spec">Главные специалисты   </a></li>
            <li><a href="#blog">Научные публикации специалистов        </a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-9 col-md-12">
        <h1 class="big-title"><?php the_field('spec_title'); ?></h1>
        <p class="firstpargh"><?php the_field('spec_desc'); ?></p>
        <h3 class="small-title" id="about"><?php the_field('spec_subtitle'); ?></h3>
        <div class="big-slider">
          <div class="big-slider__btn next"></div>
          <div class="big-slider__btn prev disabled"></div>
          <?php
            $args = array(
              'numberposts' => -1, // если -1 то выводит все
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'Specialist', // тип поста
              'suppress_filters' => true,
            );

            $posts = get_posts($args);

            foreach ($posts as $post) {  
              setup_postdata($post);
              ?>  
              <?php $photoSpec = get_field('photo_spec'); ?>
              <div class="item">
                <img alt="img" src="<?php echo $photoSpec; ?>">
              </div>
              <?php
              }
              wp_reset_postdata(); // сброс
              ?> 
         
        </div>
        <p><?php the_field('spec_parag'); ?></p>
        
        <div class="line"></div>
        <h3 class="small-title" id="activity"><?php the_field('spec_subtitle2'); ?></h3>
        <div class="desc">
          <p><?php the_field('spec_parag2'); ?></p>
          
          <?php $specPhoto = get_field('img_par2'); ?>
          <img src="<?php echo $specPhoto; ?>" alt="image">
          <p><?php the_field('spec_parag2.2'); ?></p>
         
        </div>
        <div class="pacient-servis benefits" id="benefits">
          <h2 id="servis">Наши преимущества</h2>
          <div class="pacient-servis-wrap">
          <?php
            $args = array(
              'numberposts' => -1, // если -1 то выводит все
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'benefits', // тип поста
              'suppress_filters' => true,
            );

            $posts = get_posts($args);

            foreach ($posts as $post) { 
              setup_postdata($post);
              ?> 
            <div class="pacient-serv-item">
              <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="icon">
              <h3><?php the_title(); ?></h3>
            </div>
      
            <?php
              }
              wp_reset_postdata(); // сброс
              ?> 
          </div>
        </div>
        <div class="diplom-slider" id="diplom">
          <div class="diplom__title">Награды и дипломы</div>
          <div class="diplom-slider__body owl-carousel owl-theme">
          <?php
            $args = array(
              'numberposts' => -1, // если -1 то выводит все
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'diplom-slider', // тип поста
              'suppress_filters' => true,
            );

            $posts = get_posts($args);

            foreach ($posts as $post) {  
              setup_postdata($post);
              ?>  
            <div class="item">
              <div class="diplom"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="image">
                <div class="diplom-overlay"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/hover.svg" alt="image"></div>
              </div>
              <div class="text"><?php the_title(); ?></div>
            </div>
            <?php
              }
              wp_reset_postdata(); // сброс
              ?>  
            
          </div>
        </div>
        <div class="main-spec">
          <h3 class="small-title" id="spec">Главные специалисты</h3>
          <div class="main-spec-wrap">
            <?php
            $main_doctors = get_field('main_doctor');



            foreach ($main_doctors as $doctor) {
              ?>
              <a class="main-spec-item" href="<?php echo get_the_permalink($doctor->ID); ?>">
                <img class="spec-icon" src="<?php echo get_the_post_thumbnail_url($doctor->ID); ?>" alt="image">
                <div class="spec-info">
                  <?php
                    $serv = $doctor->service;
                  ?>
                  <h4><?php echo get_the_title($serv); ?></h4>
                  <p class="name"><?php echo $doctor->post_title; ?></p>
                  <p class="position"><?php echo $doctor->post; ?></p>
                </div>
              </a>
              <?php
            }
            ?>
            </div>
        </div>
        <div class="spec-blog" id="blog">
          <h3 class="small-title">Научные публикации специалистов</h3>
          <div class="spec-blog-wrap">
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
            print_r(get_field('author'));
	          foreach ($posts as $post) {
		          setup_postdata($post);
	            $doctor_id = get_field('author')->ID;
	            $doctor_name = get_field('author')->post_title;
	            $doctor_photo = get_field('author')->post_thumbnail;
		          if(get_field('art_doctor')) {
		          ?>
                <a class="spec-blog-item" href="<?php the_permalink(); ?>">
                  <p><?php the_title(); ?></p>
                  <div class="blog-item"><img src="<?php echo get_the_post_thumbnail_url($doctor_id); ?>" alt="image">
                    <div class="name"><?php echo $doctor_name; ?></div>
                  </div>
                </a>
		          <?php
              }
	          }
	          wp_reset_postdata(); // сброс
	          $posts = $cur_post;
	          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="diplom-overlay-modal">
  <div class="modal-img"></div>
</div>

<?php get_footer(); ?>
