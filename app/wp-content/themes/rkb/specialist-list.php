<?php
/*
Template Name: Specialist list
*/
get_header();
?>

<div class="big-form"
     style="background-image: url(<?php echo get_template_directory_uri(); ?>/media/image/big-form1.jpg)">
  <div class="big-form__title">Найдите нужного врача</div>
  <form class="big-form__form">
    <input type="submit" value="">
    <input type="text" placeholder="Введите ФИО врача, должность или службу">
  </form>
</div>
<div class="letters">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="more mobile-more">Все отделения</div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="letters__body">
          <div class="letter active">А</div>
          <div class="letter empty">Б</div>
          <div class="letter empty">В</div>
          <div class="letter empty">Г</div>
          <div class="letter empty">Д</div>
          <div class="letter empty">Е</div>
          <div class="letter empty">Ж</div>
          <div class="letter empty">З</div>
          <div class="letter empty">И</div>
          <div class="letter empty">Й</div>
          <div class="letter empty">К</div>
          <div class="letter empty">Л</div>
          <div class="letter empty">М</div>
          <div class="letter empty">н</div>
          <div class="letter empty">О</div>
          <div class="letter empty">П</div>
          <div class="letter empty">Р</div>
          <div class="letter empty">С</div>
          <div class="letter empty">Т</div>
          <div class="letter empty">У</div>
          <div class="letter empty">Ф</div>
          <div class="letter empty">Х</div>
          <div class="letter empty">Ц</div>
          <div class="letter empty">ч</div>
          <div class="letter empty">ш</div>
          <div class="letter empty">щ</div>
          <div class="letter empty">ъ</div>
          <div class="letter empty">ы</div>
          <div class="letter empty">ь</div>
          <div class="letter empty">э</div>
          <div class="letter empty">ю</div>
          <div class="letter empty">я</div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-12 col-md-12 col-lg-3 order-last order-lg-first">
      <div class="search-doctor-sidebar">
        <div class="sidebar__options">
          <div class="title">Отделения</div>
          <div class="options__list">
            <div class="option">
              <div class="check active"></div>
              <div class="name">Все службы</div>
            </div>
			  <?php
			  $cur_post = $posts;
			  $args     = array(
				  'numberposts'      => - 1,
				  'orderby'          => 'id',
				  'order'            => 'ASC',
				  'post_type'        => 'doctor-service',
				  'suppress_filters' => true,
			  );

			  $posts = get_posts( $args );

			  foreach ( $posts as $post ) {
				  setup_postdata( $post );
				  ?>
                <div class="option" id="<?php the_ID(); ?>">
                  <div class="check"></div>
                  <div class="name"><?php the_title(); ?></div>
                </div>
				  <?php
			  }
			  wp_reset_postdata(); // сброс
			  $posts = $cur_post;
			  ?>
          </div>
        </div>
	      <?php
	      $spec_week = get_field('spec_week');
	      ?>
        <div class="doctor-of-week"
             style="background-image: url(<?php echo get_the_post_thumbnail_url($spec_week->ID); ?>)">
          <div class="title">Сотрудник недели</div>
          <div class="info">
            <div class="name"><?php echo $spec_week->post_title; ?></div>
            <div class="desc"><?php the_field('post', $spec_week->ID); ?></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-9 col-md-12">
      <div class="search-doctor-list">
        <div class="list__latter">А</div>
        <div class="list__body">
          <script>
            const words = document.querySelectorAll('.letters__body .letter');
            let letter = null;
            let index = null;
            let i = null;
          </script>
			<?php
			$cur_post = $posts;
			$args     = array(
				'numberposts'      => - 1,
				'orderby'          => 'title',
				'order'            => 'ASC',
				'post_type'        => 'doctor',
				'suppress_filters' => true,
			);

			$posts = get_posts( $args );
      $count = 0;
			foreach ( $posts as $post ) {
				setup_postdata( $post );
				$count++;
				$doctor_serv = get_field( 'service' );
				$category_id = 'category-' . $doctor_serv->ID . ' ';
				$latter      = substr( get_the_title(), 0, 2 );
				?>
              <script>
                letter = "<?php echo $latter; ?>";
                i = 0;
                words.forEach(el => {
                  if (el.innerHTML === letter) {
                    words[i].classList.remove('empty');
                  }
                  i++;
                })
              </script>
			<?php
			if ( $latter == 'А' ) {
				$show = 'item item--show';
			} else {
				$show = 'item';
			}

			if($count > 12) {
			  $show .= ' item--hidden';
	  }
			?>
              <a href="<?php the_permalink(); ?>" class="<?php echo $category_id;
			  echo $show; ?>">
                <img class="avatar" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="doctor">
                <div class="info">
                  <div class="build"><?php echo $doctor_serv->post_title; ?></div>
                  <div class="name"><?php the_title(); ?></div>
                  <div class="post"><?php the_field( 'post' ); ?></div>
                </div>
              </a>
				<?php
			}
			wp_reset_postdata(); // сброс
			$posts = $cur_post;
			?>
          <div class="more">Показать еще</div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>

<script>
  // sort doctors on words
  $('.letters__body .letter').on('click', (e) => {
    const current = $(e.currentTarget);
    if (current.hasClass('empty')) {
      return
    }
    const currentLatter = current.html();
    const names = $('.search-doctor-list .list__body .item .info .name');
    $('.letters__body .letter').removeClass('active');
    current.addClass('active');
    $('.search-doctor-list .list__body .item').removeClass('item--show');
    $('.search-doctor-list .list__latter').html(currentLatter);
    const serv = $('.search-doctor-list').attr('data-serv') ? $('.search-doctor-list').attr('data-serv') : null;
    names.each(function () {
      if ($(this).html()[0] === currentLatter) {
        if(serv === null) {
          $(this).parent('.info').parent('.item').addClass('item--show');
        } else {
         if($(this).parent('.info').parent('.item').hasClass('category-' + serv)) {
           $(this).parent('.info').parent('.item').addClass('item--show');
         }
        }
      }
    });

    checkCount();
  });

  $(document).ready(function() {
   checkCount();
  });

  function checkCount () {
    const items = $('.search-doctor-list .list__body .item--show');
    if(items.length < 12) {
      $('.search-doctor-list .list__body .more').fadeOut('fast');
    } else {
      $('.search-doctor-list .list__body .more').fadeIn('fast');
      let itemCount = 0;
      items.each(function () {
        itemCount++;
        if(itemCount > 12) {
          $(this).addClass('item--hidden');
        }
      })
    }
  }
</script>
