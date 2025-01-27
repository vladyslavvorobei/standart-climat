<?php
/**
 * Template Name: О компании
 */
get_header(); ?>

  <section class="about" style="background-image: url('<?php echo THEME_URL; ?>/img/about-bg.jpg')">
    <div class="container">
      <div class="title title--no-number">
        <h2> о нас <strong> Компания </strong>
        </h2>
      </div>
      <div class="about__content">
        <?php $about = get_field( 'about' );

        echo $about['text']; ?>

        <?php if ($about['blockquote']): ?>
          <blockquote>
            <?php echo $about['blockquote']; ?>
          </blockquote>
        <?php endif; ?>
      </div>
    </div>
  </section>
  <section class="benefits">
    <div class="benefits__wrapper">
      <div class="benefits__inner-wrapper" style="background-image: url('<?php echo THEME_URL; ?>/img/ben-bg-1.jpg')">
        <div class="container">
          <div class="benefits__block">
            <div class="title">
              <p> 01 </p>
              <h2> преимущества <strong> Наши преимущества: </strong>
              </h2>
            </div>
            <div class="benefits__item">
              <div class="benefits__img">
                <img src="<?php echo THEME_URL; ?>/img/ben-icon-1.png">
              </div>
              <div class="benefits__text">
                <h3> Выполнение работы «под ключ» </h3>
                <p> Имея большой опыт и штат специалистов, мы осуществляем полный комплекс работ в области климатических систем от разработки концепции и предварительной экономической оценки до сдачи в эксплуатацию и сервисным обслуживанием. Обратившись к нам, Заказчик может рассчитывать на полную поддержку на всех стадиях разработки и внедрения климатических систем. </p>
              </div>
            </div>
            <div class="benefits__item">
              <div class="benefits__img">
                <img src="<?php echo THEME_URL; ?>/img/ben-icon-2.png">
              </div>
              <div class="benefits__text">
                <h3> Бесплатный выезд, консультация и оценка проекта. </h3>
              </div>
            </div>
            <div class="benefits__item">
              <div class="benefits__img">
                <img src="<?php echo THEME_URL; ?>/img/ben-icon-3.png">
              </div>
              <div class="benefits__text">
                <h3> Собственный проектный отдел. </h3>
                <p> Все наши инженеры-проектировщики имеют высшее профильное техническое образование по специальность «Теплогазоснабжение и вентиляция» и опыт работы от пяти лет. Мы разрабатываем рабочую документацию, в соответствии с самыми современными BIM технологиями (Building Information Modeling), мы используем ПО «Revit», что позволяет в 3d проектировать наши системы совместно с другими строительными разделами. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="benefits__inner-wrapper" style="background-image: url('<?php echo THEME_URL; ?>/img/ben-bg-2.jpg')">
        <div class="container">
          <div class="benefits__block">
            <div class="benefits__item">
              <div class="benefits__img">
                <img src="<?php echo THEME_URL; ?>/img/ben-icon-4.png">
              </div>
              <div class="benefits__text">
                <h3> Штатные монтажные бригады. </h3>
                <p> Мы не используем шабашников и наемные монтажные бригады. Все наши специалисты граждане РФ, имеющие опыт работы от трех лет, весь необходимый инструмент и автотранспорт. </p>
              </div>
            </div>
            <div class="benefits__item">
              <div class="benefits__img">
                <img src="<?php echo THEME_URL; ?>/img/ben-icon-5.png">
              </div>
              <div class="benefits__text">
                <h3> Решим любую техническую задачу. </h3>
                <p> Мы имеем огромный опыт в области инженерных систем и любим решать сложные технические задачи. Мы специализируемся на VRV/VRF системах, системах чиллер-фанкоил, центральных системах кондиционирования, системах дымоудаления, системах потолочного охлаждения, VAV системах вентиляции, системах осушения и увлажнения. </p>
              </div>
            </div>
            <div class="benefits__item">
              <div class="benefits__img">
                <img src="<?php echo THEME_URL; ?>/img/ben-icon-6.png">
              </div>
              <div class="benefits__text">
                <h3> Имеем все необходимые лицензии и сертификаты. </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="benefits__inner-wrapper" style="background-image: url('<?php echo THEME_URL; ?>/img/ben-bg-3.jpg')">
        <div class="container">
          <div class="benefits__block">
            <div class="benefits__item">
              <div class="benefits__img">
              </div>
              <div class="benefits__text">
                <h4> Мы несем реальную ответственность за взятые на себя обязательства, поэтому даем только обещания, которые можем выполнить. </h4>
              </div>
            </div>
            <div class="benefits__item">
              <div class="benefits__img">
                <img src="<?php echo THEME_URL; ?>/img/ben-icon-1.svg">
              </div>
              <div class="benefits__text">
                <h3> Гарантия на монтажные работы - 3 года </h3>
                <p> Нашли неисправность в работе инженерной системы? Звоните – наши специалисты приедут в течение 3 дней и исправят проблему бесплатно. </p>
              </div>
            </div>
            <div class="benefits__item">
              <div class="benefits__img">
                <img src="<?php echo THEME_URL; ?>/img/ben-icon-2.svg">
              </div>
              <div class="benefits__text">
                <h3> Гарантия на оборудование – от 1 до 10 лет </h3>
                <p> Вы получаете официальную гарантию от производителя. </p>
                <ul>
                  <li> Гарантия на оборудование для систем вентиляции выдается производителем на 1-3 года. </li>
                  <li> Гарантия на оборудование для систем кондиционирования выдается производителем на 3-10 лет. </li>
                  <li> Гарантия соблюдения сроков. Возвращаем 5% от стоимости работы за каждый просроченный день. </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php if (have_rows( 'team' )): ?>
  <section class="worker" style="background-image: url('<?php echo THEME_URL; ?>/img/worker-bg.jpg')">
    <div class="container">
      <div class="title">
        <p> 02 </p>
        <h2> сотрудники <strong> Ключевые сотрудники нашей компании </strong>
        </h2>
      </div>
      <div class="worker__description"> они несут 100% ответственность за Ваш проект на всех этапах сотрудничества </div>
      <div class="worker__slider">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php while (have_rows( 'team' )): the_row(); ?>
              <div class="swiper-slide">
                <?php echo wp_get_attachment_image( get_sub_field( 'photo' ), 'full' ); ?>
                <h3> <?php the_sub_field( 'name' ); ?> </h3>
                <p> <?php the_sub_field( 'position' ); ?> </p>
              </div>
            <?php endwhile; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php if (have_rows( 'cert' )): ?>
  <section class="certificates">
    <div class="container">
      <div class="title">
        <p> 03 </p>
        <h2> сертификаты <strong> Качество нашей работы </strong>
        </h2>
      </div>
      <div class="worker__description"> подтверждают более 20 профессиональных организаций </div>
      <div class="certificates__slider">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php while (have_rows( 'cert' )): the_row(); ?>
              <div class="swiper-slide">
                <a data-fancybox="gallery" href="<?php echo wp_get_attachment_image_url( get_sub_field( 'img' ), 'full' ); ?>">
                  <?php echo wp_get_attachment_image( get_sub_field( 'img' ), 'medium' ); ?>
                </a>
              </div>
            <?php endwhile; ?>
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </section>
<?php endif; ?>

<?php get_footer();