</main>
<footer class="footer">
  <div class="container">
    <div class="footer__top-bar">
      <a href="<?php echo home_url( '/' ); ?>" class="footer__logo logo logo--footer">
        <img src="<?php echo THEME_URL; ?>/img/logo.png" alt="">
      </a>
      <?php $social = get_field( 'social', 'option' );
      if ($social['instagram'] || $social['facebook'] || $social['vk']): ?>
        <ul class="footer__social">
          <?php if ($social['instagram']): ?>
          <li>
            <a href="<?php echo esc_url( $social['instagram'] ); ?>" target="_blank">
              <img src="<?php echo THEME_URL; ?>/img/instagram.svg" alt="">
            </a>
          <li>
            <?php endif; ?>
            <?php if ($social['facebook']): ?>
          <li>
            <a href="<?php echo esc_url( $social['facebook'] ); ?>" target="_blank">
              <img src="<?php echo THEME_URL; ?>/img/facebook.svg" alt="">
            </a>
          <li>
            <?php endif; ?>
            <?php if ($social['vk']): ?>
          <li>
            <a href="<?php echo esc_url( $social['vk'] ); ?>" target="_blank">
              <img src="<?php echo THEME_URL; ?>/img/vk.svg" alt="">
            </a>
          <li>
            <?php endif; ?>
        </ul>
      <?php endif; ?>

      <?php $phone = get_field( 'phone', 'option' );
      if ($phone): ?>
        <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', $phone ); ?>" class="footer__tel-number tel-number tel-number--footer"><?php echo $phone; ?></a>
      <?php endif; ?>

      <button class="button button--footer modal_open">
        <span> заказать звонок </span>
      </button>
    </div>
    <div class="footer__copyright">
      <p>
        <a href="#" class="rules_open"> Политика конфиденциальности </a>
      </p>
      <p> © ООО «Стандарт-Климат» </p>
      <div class="footer__dev">
        <p>
          <a href="http://zenga.ru/" target="_blank">Разработка сайта и продвижение
            <img src="<?php echo THEME_URL; ?>/img/logo-zenga.png" alt="">
          </a>
        </p>
      </div>
    </div>
  </div>
</footer>
<div class="modal" id="modal">
  <form class="modal__form form">
    <div class="modal_close">
      <div class="modal__close">
      </div>
    </div>
    <div class="modal__label">
      <input type="text" placeholder="ФИО*" name="name" required>
    </div>
    <div class="modal__label">
      <input type="tel" placeholder="Телефон*" name="phone" required>
    </div>
    <button class="btn btn--modal">
      <span> Отправить </span>
    </button>
  </form>
</div>
<div class="modal" id="thanks">
  <div class="modal_close thanks_close">
    <div class="modal__close">
    </div>
  </div>
  <h3> Спасибо за заявку </h3>
  <h4> Наш менеджер свяжеться с вами в ближайшее время </h4>
</div>
<div class="modal" id="rules">
  <div class="modal_close rules_close">
    <div class="modal__close">
    </div>
  </div>
  <?php $post = get_post( 3 ); ?>
  <h3><?php echo $post->post_title; ?></h3>
  <?php echo apply_filters( 'the_content', $post->post_content ); ?>
</div>
<?php wp_footer(); ?>
</body>
</html>