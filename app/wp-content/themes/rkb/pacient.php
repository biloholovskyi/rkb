<?php
/*
Template Name: Pacient
*/
get_header();
?>

<div class="pacients-page">
  <div class="container">
    <div class="row">
      <div class="col-3">
        <div class="aside anhors">
          <h2>Посетителям</h2>
          <ul>
            <li class="active"><a href="#contact">Контакты</a></li>
            <li><a href="#servis">Службы</a></li>
            <li><a href="#help">Виды оказания помощи</a></li>
            <li><a href="#document">Документы</a></li>
            <li><a href="#other">Сихат РКБ        </a></li>
          </ul>
        </div>
      </div>
      <div class="col-9">
        <h1 class="big-title"><?php the_field('pacient_title'); ?></h1>
        <p><?php the_field('pacient_desc'); ?></p>
        <div class="pacient-contact">
          <h2 class="small-title" id="contact">Контакты</h2>
          <div class="contacts-container">
            <div class="contacts-wrap">
              <div class="contact-item">
                <h4>Приемного отделение</h4><a href="tel:(843) 231-20-01">(843) 231-20-01</a>
              </div>
              <div class="contact-item">
                <h4>Приемного отделение</h4><a href="tel:(843) 231-20-01">(843) 231-20-01</a>
              </div>
              <div class="contact-item">
                <h4>Приемного отделение</h4><a href="tel:(843) 231-20-01">(843) 231-20-01 </a>
              </div>
              <div class="contact-item">
                <h4>Приемного отделение</h4><a href="tel:(843) 231-20-01">(843) 231-20-01</a>
              </div>
            </div>
            <div class="contacts-wrap contacts-wrap2">
              <div class="contact-item">
                <h4>Тел. консультативной поликлиники:</h4><a href="tel:(843) 231-20-01">(843) 231-20-01</a><a href="tel:(843) 231-20-01">(843) 231-20-01</a><a href="tel:(843) 231-20-01">(843) 231-20-01</a>
              </div>
            </div>
          </div>
        </div>
        <div class="pacient-servis">
          <h2 id="servis">Службы</h2>
          <div class="pacient-servis-wrap">
            <div class="pacient-serv-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/department.svg" alt="icon">
              <h3>Клинико-экспертная служба</h3><a href="tel:(843) 231-20-01">(843) 231-20-01</a>
            </div>
            <div class="pacient-serv-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/department.svg" alt="icon">
              <h3>Хирургическая служба</h3><a href="tel:(843) 231-20-01">(843) 231-20-01</a>
            </div>
            <div class="pacient-serv-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/department.svg" alt="icon">
              <h3>Терапевтическая служба</h3><a href="tel:(843) 231-20-01">(843) 231-20-01</a>
            </div>
            <div class="pacient-serv-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/department.svg" alt="icon">
              <h3>Клинико-экспертная служба</h3><a href="tel:(843) 231-20-01">(843) 231-20-01</a>
            </div>
            <div class="pacient-serv-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/department.svg" alt="icon">
              <h3>Хирургическая служба</h3><a href="tel:(843) 231-20-01">(843) 231-20-01</a>
            </div>
            <div class="pacient-serv-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/department.svg" alt="icon">
              <h3>Терапевтическая служба</h3><a href="tel:(843) 231-20-01">(843) 231-20-01</a>
            </div>
            <div class="pacient-serv-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/department.svg" alt="icon">
              <h3>Клинико-экспертная служба</h3><a href="tel:(843) 231-20-01">(843) 231-20-01</a>
            </div>
            <div class="pacient-serv-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/department.svg" alt="icon">
              <h3>Хирургическая служба</h3><a href="tel:(843) 231-20-01">(843) 231-20-01</a>
            </div>
            <div class="pacient-serv-item"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/department.svg" alt="icon">
              <h3>Терапевтическая служба</h3><a href="tel:(843) 231-20-01">(843) 231-20-01          </a>
            </div>
          </div>
        </div>
        <h3 class="small-title" id="help">Виды оказания помощи</h3>
        <div class="servis-acc">
          <ul>
            <li class="dropdown servisDrop">
              <input type="checkbox">
              <button data-toggle="dropdown">Lorem ipsum dolor sit amet, consectetur adipiscing elit<img class="arrow" src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/arrow-right.svg" alt="icon"></button>
              <ul class="dropdown-menu">
                <li>
                  <div class="acc-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatibus blanditiis perspiciatis velit dolorum! Mollitia ipsum, deserunt rerum expedita nobis veritatis fuga nostrum dicta, reprehenderit magnam dolorem ad sapiente ab.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam unde placeat accusamus sit tenetur autem, esse enim cupiditate suscipit ut quos et. Illum atque dolore at sint voluptas necessitatibus nemo.Nesciunt quos amet delectus quia quo unde optio molestiae nulla nemo eos, neque cum ullam exercitationem ipsa provident saepe, ad at fugiat quas eum blanditiis aliquam! Illum perferendis maiores natus!</p>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown servisDrop">
              <input type="checkbox">
              <button data-toggle="dropdown">Lorem ipsum dolor sit amet, consectetur adipiscing elit<img class="arrow" src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/arrow-right.svg" alt="icon"></button>
              <ul class="dropdown-menu">
                <li>
                  <div class="acc-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatibus blanditiis perspiciatis velit dolorum! Mollitia ipsum, deserunt rerum expedita nobis veritatis fuga nostrum dicta, reprehenderit magnam dolorem ad sapiente ab.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam unde placeat accusamus sit tenetur autem, esse enim cupiditate suscipit ut quos et. Illum atque dolore at sint voluptas necessitatibus nemo.Nesciunt quos amet delectus quia quo unde optio molestiae nulla nemo eos, neque cum ullam exercitationem ipsa provident saepe, ad at fugiat quas eum blanditiis aliquam! Illum perferendis maiores natus!</p>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown servisDrop">
              <input type="checkbox">
              <button data-toggle="dropdown">Lorem ipsum dolor sit amet, consectetur adipiscing elit<img class="arrow" src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/arrow-right.svg" alt="icon"></button>
              <ul class="dropdown-menu">
                <li>
                  <div class="acc-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatibus blanditiis perspiciatis velit dolorum! Mollitia ipsum, deserunt rerum expedita nobis veritatis fuga nostrum dicta, reprehenderit magnam dolorem ad sapiente ab.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam unde placeat accusamus sit tenetur autem, esse enim cupiditate suscipit ut quos et. Illum atque dolore at sint voluptas necessitatibus nemo.Nesciunt quos amet delectus quia quo unde optio molestiae nulla nemo eos, neque cum ullam exercitationem ipsa provident saepe, ad at fugiat quas eum blanditiis aliquam! Illum perferendis maiores natus!</p>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown servisDrop">
              <input type="checkbox">
              <button data-toggle="dropdown">Lorem ipsum dolor sit amet, consectetur adipiscing elit<img class="arrow" src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/arrow-right.svg" alt="icon"></button>
              <ul class="dropdown-menu">
                <li>
                  <div class="acc-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatibus blanditiis perspiciatis velit dolorum! Mollitia ipsum, deserunt rerum expedita nobis veritatis fuga nostrum dicta, reprehenderit magnam dolorem ad sapiente ab.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam unde placeat accusamus sit tenetur autem, esse enim cupiditate suscipit ut quos et. Illum atque dolore at sint voluptas necessitatibus nemo.Nesciunt quos amet delectus quia quo unde optio molestiae nulla nemo eos, neque cum ullam exercitationem ipsa provident saepe, ad at fugiat quas eum blanditiis aliquam! Illum perferendis maiores natus!</p>
                  </div>
                </li>
              </ul>
            </li>
            <li class="dropdown servisDrop">
              <input type="checkbox">
              <button data-toggle="dropdown">Lorem ipsum dolor sit amet, consectetur adipiscing elit<img class="arrow" src="<?php echo get_template_directory_uri(); ?>/media/icon/specialist/arrow-right.svg" alt="icon"></button>
              <ul class="dropdown-menu">
                <li>
                  <div class="acc-item">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur voluptatibus blanditiis perspiciatis velit dolorum! Mollitia ipsum, deserunt rerum expedita nobis veritatis fuga nostrum dicta, reprehenderit magnam dolorem ad sapiente ab.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam unde placeat accusamus sit tenetur autem, esse enim cupiditate suscipit ut quos et. Illum atque dolore at sint voluptas necessitatibus nemo.Nesciunt quos amet delectus quia quo unde optio molestiae nulla nemo eos, neque cum ullam exercitationem ipsa provident saepe, ad at fugiat quas eum blanditiis aliquam! Illum perferendis maiores natus!        </p>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="line"></div>
        <div class="document-container" id="document">
          <h3 class="small-title">Важные документы</h3>
          <div class="document-wrap"><a class="document-item" href="<?php echo get_template_directory_uri(); ?>/media/image/specialist.png" download>
              <div class="document-icon"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/download.svg" alt="image"></div>
              <div class="document-info">
                <h4>Lorem ipsum dolor sit</h4>
                <p class="size">.pdf / 2mb</p>
              </div></a><a class="document-item" href="<?php echo get_template_directory_uri(); ?>/media/image/specialist.png" download>
              <div class="document-icon"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/download.svg" alt="image"></div>
              <div class="document-info">
                <h4>Lorem ipsum dolor sit</h4>
                <p class="size">.pdf / 2mb</p>
              </div></a><a class="document-item" href="<?php echo get_template_directory_uri(); ?>/media/image/specialist.png" download style="margin-right: 0;">
              <div class="document-icon"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/download.svg" alt="image"></div>
              <div class="document-info">
                <h4>Lorem ipsum dolor sit</h4>
                <p class="size">.pdf / 2mb</p>
              </div></a><a class="document-item" href="<?php echo get_template_directory_uri(); ?>/media/image/specialist.png" download>
              <div class="document-icon"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/download.svg" alt="image"></div>
              <div class="document-info">
                <h4>Lorem ipsum dolor sit</h4>
                <p class="size">.pdf / 2mb</p>
              </div></a><a class="document-item" href="<?php echo get_template_directory_uri(); ?>/media/image/specialist.png" download>
              <div class="document-icon"><img src="<?php echo get_template_directory_uri(); ?>/media/icon/download.svg" alt="image"></div>
              <div class="document-info">
                <h4>Lorem ipsum dolor sit</h4>
                <p class="size">.pdf / 2mb</p>
              </div></a></div>
        </div>
        <div class="pacient-slider" id="other">
          <div class="pacient__title small-title">Cтраховые компании</div>
          <div class="pacient-slider__body owl-carousel owl-theme">
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/image/company.jpg" alt="image"></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/image/company.jpg" alt="image"></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/image/company.jpg" alt="image"></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/image/company2.jpg" alt="image"></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/image/company.jpg" alt="image"></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/media/image/company.jpg" alt="image"></div>
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
