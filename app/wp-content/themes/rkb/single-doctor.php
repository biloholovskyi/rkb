<?php get_header(); ?>

<?php the_post(); ?>
  <div class="single-specialist">
    <div class="container">
      <div class="row">
        <div class="col-12"><a class="btn_back" href="/specialists">Вернуться к списку специалистов</a></div>
      </div>
      <div class="row">
        <div class="col-3"><img class="specialist-photo" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="image"></div>
        <div class="col-9">
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
                      $img = get_template_directory_uri() . "/media/icon/specialist/circle.svg";
                      $exp = get_field('exp');
                      $exp = preg_replace("/\[/", '<span>', $exp);
                      $exp = preg_replace("/]/", '</span>', $exp);
                      $exp = preg_replace('/<li>(.*?)<\/li>/', '<li><div class="acc-item"><div class="icon-wrap exp"><img src alt="image"></div><div class="info"><p>$1</p></div></div></li>', $exp);
                      $exp = preg_replace("/src/", 'src="'.$img.'"', $exp);
                      echo $exp;
                      ?>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="specialist-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/hat.svg" alt="icon">
                <p>Закончил: КГЭУ</p>
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
                <div class="star-block">
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-color.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                </div>
                <p>8 отзывов</p>
              </div>
              <button class="anhors">  <a href="#feedback">Оставить отзыв           </a></button>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="feedback">
            <h2 class="small-title">Отзывы</h2>
            <div class="feedback-item">
              <h3>Герман Эчпочмак</h3>
              <div class="rank">
                <div class="star-block">
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-color.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                </div>
                <div class="date">10.10.2019</div>
              </div>
              <p>Врач ушел за час до окончания приема, принимать перестал за полтора, несмотря на очередь к его кабинету. В регистратуре вместо общения с посетителями протаскивают клиентов вне очереди (видимо, не за просто так).</p>
            </div>
            <div class="feedback-item">
              <h3>Герман Эчпочмак</h3>
              <div class="rank">
                <div class="star-block">
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-color.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                </div>
                <div class="date">10.10.2019</div>
              </div>
              <p>Андрей Анатольевич, от души благодарствую вас и клинику, за радушный прием и оказанную мне медицинскую помощь. Чувствую себя сейчас превосходно. Спасибо Вам, что еще есть такие врачи！Рекомендую!</p>
            </div>
            <div class="feedback-item">
              <h3>Алексей Кочерыжкин</h3>
              <div class="rank">
                <div class="star-block">
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-color.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-color.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                  <button><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/star-disable.svg" alt="icon"></button>
                </div>
                <div class="date">10.10.2019</div>
              </div>
              <p>Врач ушел за час до окончания приема, принимать перестал за полтора, несмотря на очередь к его кабинету. В регистратуре вместо общения с посетителями протаскивают клиентов вне очереди (видимо, не за просто так).    </p>
            </div>
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
            <form>
              <textarea placeholder="Введите текст сообщения"></textarea>
              <div class="icon"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/add_file.svg" alt="image"></div>
              <div class="icon"> <img src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/smile.svg" alt="image"></div>
            </form>
            <button>Оставить отзыв </button>
          </div>
        </div>
      </div>
      <div class="row block_blog">
        <div class="col-12">
          <h2 class="small-title blog_title">Публикации</h2>
        </div>
        <div class="col-3">
          <div class="blog_item"><a href="#">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
              <div class="date">10.10.2019 </div></a></div>
        </div>
        <div class="col-3">
          <div class="blog_item"><a href="#">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
              <div class="date">10.10.2019 </div></a></div>
        </div>
        <div class="col-3">
          <div class="blog_item"><a href="#">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
              <div class="date">10.10.2019 </div></a></div>
        </div>
        <div class="col-3">
          <div class="blog_item"><a href="#">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
              <div class="date">10.10.2019</div></a></div>
        </div>
        <div class="col-3">
          <div class="blog_item"><a href="#">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
              <div class="date">10.10.2019 </div></a></div>
        </div>
        <div class="col-3">
          <div class="blog_item"><a href="#">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
              <div class="date">10.10.2019 </div></a></div>
        </div>
        <div class="col-3">
          <div class="blog_item"><a href="#">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod</p>
              <div class="date">10.10.2019                       </div></a></div>
        </div>
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