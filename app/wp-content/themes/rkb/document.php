<?php
/*
Template Name: Document
*/
get_header();
?>

<div class="document-page">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-3 col-md-12">
        <div class="aside anhors" id="top_nav">
          <h2>Документы</h2>
          <ul>
            <li class="active"><a href="#document">Важные документы</a></li>
            <li><a href="#unImportant">Неважные документы</a></li>
            <li><a href="#otherDocument">Другие документы</a></li>
          </ul>
        </div>
      </div>
    
      <div class="col-12 col-lg-9 col-md-12">
        <h1>Документы</h1>
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
              <div class="document-icon"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/download.svg"
                  alt="image"></div>
              <div class="document-info">
                <h4><?php the_title(); ?></h4>
                <p class="size">.<?php echo $file[subtype]; ?> /
                  <?php echo size_format(filesize( get_attached_file( $file[ID] ) ), 0); ?></p>
              </div>
            </a>
            <?php
              }
              wp_reset_postdata(); // сброс
              ?>
          </div>
        </div>
        <div class="document-container" id="unImportant">
          <h3 class="small-title">Неважные документы</h3>
          <div class="document-wrap">
            <?php
            $args = array(
              'numberposts' => -1, // если -1 то выводит все
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'unImportant', // тип поста
              'suppress_filters' => true,
            );

            $posts = get_posts($args);

            foreach ($posts as $post) {  
              setup_postdata($post); 
              $file = get_field('doc1');
              ?>
            <a class="document-item" href="<?php echo $file[url] ?>" download>
              <div class="document-icon"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/download.svg"
                  alt="image"></div>
              <div class="document-info">
                <h4><?php the_title(); ?></h4>
                <p class="size">.<?php echo $file[subtype]; ?> /
                  <?php echo size_format(filesize( get_attached_file( $file[ID] ) ), 0); ?></p>
              </div>
            </a>
            <?php
              }
              wp_reset_postdata(); // сброс
              ?>
          </div>
        </div>
        <div class="document-container" id="otherDocument">
          <h3 class="small-title">Другие документы</h3>
          <div class="document-wrap otherDoc">
            <?php
            $args = array(
              'numberposts' => -1, // если -1 то выводит все
              'orderby' => 'date',
              'order' => 'DESC',
              'post_type' => 'otherDoc', // тип поста
              'suppress_filters' => true,
            );

            $posts = get_posts($args);

            foreach ($posts as $post) {  
              setup_postdata($post); 
              $file = get_field('doc3');
              ?>
            <a class="document-item" href="<?php echo $file[url] ?>" download>
              <div class="document-icon"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/download.svg"
                  alt="image"></div>
              <div class="document-info">
                <h4><?php the_title(); ?></h4>
                <p class="size">.<?php echo $file[subtype]; ?> /
                  <?php echo size_format(filesize( get_attached_file( $file[ID] ) ), 0); ?></p>
              </div>
            </a>
            <?php
              }
              wp_reset_postdata(); // сброс
              ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>