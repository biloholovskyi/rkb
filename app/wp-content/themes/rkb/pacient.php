<?php
/*
Template Name: Pacient
*/
get_header();
?>

<div class="pacients-page">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3 col-md-12">
        <div class="aside anhors aside-pacient">
          <h2>Посетителям</h2>
          <p><?php the_field('pacient_desc'); ?></p>
          <ul>
            <li class="active"><a href="#contact">Контакты</a></li>
            <li><a href="#servis">Службы</a></li>
            <li><a href="#help">Виды оказания помощи</a></li>
            <li><a href="#document">Документы</a></li>
            <li><a href="#other">Сихат РКБ        </a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-9 col-md-12">
        <h1 class="big-title"><?php the_field('pacient_title'); ?></h1>
        <p><?php the_field('pacient_desc'); ?></p>
        <div class="pacient-contact">
          <h2 class="small-title" id="contact">Контакты</h2> 
          <div class="contacts-container">
            <div class="contacts-wrap">
              <?php $contacts = get_field('contacts_block'); ?> 
              <div class="contact-item">
                <h4><?php echo $contacts['contact-name']; ?></h4><a href="tel:<?php echo $contacts['contact-tel']; ?>"><?php echo $contacts['contact-tel']; ?></a>
              </div>
              <div class="contact-item">
                <h4><?php echo $contacts['contact-name2']; ?></h4><a href="tel:<?php echo $contacts['contact-tel2']; ?>"><?php echo $contacts['contact-tel2']; ?></a>
              </div>
              <div class="contact-item">
                <h4><?php echo $contacts['contact-name3']; ?></h4><a href="tel:<?php echo $contacts['contact-te3']; ?>"><?php echo $contacts['contact-te3']; ?> </a>
              </div>
              <div class="contact-item">
                <h4><?php echo $contacts['contact-name4']; ?></h4><a href="tel:<?php echo $contacts['contact-te4']; ?>"><?php echo $contacts['contact-te4']; ?></a>
              </div>
            </div>
            <div class="contacts-wrap contacts-wrap2">
              <div class="contact-item">
                <h4><?php echo $contacts['contact-name5']; ?></h4><a href="tel:<?php echo $contacts['contact-te5']; ?>"><?php echo $contacts['contact-te5']; ?></a><a href="tel:<?php echo $contacts['contact-te6']; ?>"><?php echo $contacts['contact-te6']; ?></a><a href="tel:<?php echo $contacts['contact-te7']; ?>"><?php echo $contacts['contact-te7']; ?></a> 
              </div>
            </div>
          </div>
        </div>
        <div class="pacient-servis"> 
          <h2 id="servis">Службы</h2>
          <div class="pacient-servis-wrap">
          <?php
            $args = array(
              'numberposts' => -1, // если -1 то выводит все
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'PacientServis', // тип поста
              'suppress_filters' => true,
            );

            $posts = get_posts($args);

            foreach ($posts as $post) {  
              setup_postdata($post);
              ?>  
              <?php $servisIcon = get_field('servis-icon'); ?>
            <div class="pacient-serv-item"><img src="<?php echo $servisIcon; ?>" alt="icon">
              <h3><?php the_title(); ?></h3>
              <a href="tel:<?php the_field('servis-tel'); ?>"><?php the_field('servis-tel'); ?></a>
            </div>
              <?php
              }
              wp_reset_postdata(); // сброс
              ?>  
           
          </div>
        </div>
        <h3 class="small-title" id="help">Виды оказания помощи</h3>
        <div class="servis-acc">
          <ul>
          <?php
            $args = array(
              'numberposts' => -1, // если -1 то выводит все
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'TypesOfAssistance', // тип поста
              'suppress_filters' => true,
            );

            $posts = get_posts($args);

            foreach ($posts as $post) {  
              setup_postdata($post);
              ?>  
            <li class="dropdown servisDrop">
              <input type="checkbox">
              <button data-toggle="dropdown"><?php the_title(); ?><img class="arrow" src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/arrow-right.svg" alt="icon"></button>
              <ul class="dropdown-menu">
                <li>
                  <div class="acc-item">
                    <p><?php the_field('typesAssDesc'); ?></p>
                  </div>
                </li>
              </ul>
            </li>
            <?php
              }
              wp_reset_postdata(); // сброс
              ?>  
           
         
          </ul>
        </div>
        <div class="line"></div>
        <div class="document-container" id="document">
          <h3 class="small-title">Важные документы</h3>
          <div class="document-wrap">
          <?php
            $args = array(
              'numberposts' => -1, // если -1 то выводит все
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'Documents', // тип поста
              'suppress_filters' => true,
            );

            $posts = get_posts($args);

            foreach ($posts as $post) {  
              setup_postdata($post); 
              $file = get_field('doc');
              ?>  
          <a class="document-item" href="<?php echo $file[url] ?>" download>
              <div class="document-icon"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/download.svg" alt="image"></div>
              <div class="document-info">
                <h4><?php the_title(); ?></h4>
                <p class="size">.<?php echo $file[subtype]; ?> / <?php echo size_format(filesize( get_attached_file( $file[ID] ) ), 0); ?></p>
              </div>
            </a>
            <?php
              }
              wp_reset_postdata(); // сброс
              ?>  
           

            
            </div>
        </div>
        <div class="pacient-slider" id="other">
          <div class="pacient__title small-title">Cтраховые компании</div>
          <div class="pacient-slider__body owl-carousel owl-theme">
          <?php
            $args = array(
              'numberposts' => -1, // если -1 то выводит все
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'companiess', // тип поста
              'suppress_filters' => true,
            );

            $posts = get_posts($args);

            foreach ($posts as $post) {  
              setup_postdata($post);
              ?>  
            <div class="item"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="image"></div>
            <?php
              }
              wp_reset_postdata(); // сброс
              ?>  
             
          </div>
          <div class="opacity-block"></div>
          <div class="opacity-block2">       </div>
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
