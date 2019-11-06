<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#fff" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>
<body class="body">
<!-- BEGIN content -->
<header class="header">
  <div class="header__border-wrapper">
    <div class="container">
      <div class="header__top-bar">
        <a href="<?php echo home_url( '/' ); ?>" class="header__logo logo">
          <img src="<?php echo THEME_URL; ?>/img/logo.png" alt="">
        </a>
        <?php $phone = get_field( 'phone', 'option' );
        if ($phone): ?>
          <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', $phone ); ?>" class="header__tel-number tel-number"><?php echo $phone; ?></a>
        <?php endif; ?>
        <button class="button modal_open">
          <span> заказать звонок </span>
        </button>
        <button class="burger-btn">
          <span class="burger-btn__bar"></span>
        </button>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="header__bottom-bar">
      <nav class="header__nav nav">
        <?php wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => '',
        'menu_id'         => '',
        ) );
        ?>
      </nav>

      <?php $phone = get_field( 'phone', 'option' );
      if ($phone): ?>
        <a href="tel:<?php echo preg_replace( '![^0-9/+]+!', '', $phone ); ?>" class="tel-number tel-number--mobile-visible"><?php echo $phone; ?></a>
      <?php endif; ?>
      <button class="button button--mobile-visible modal_open">
        <span> заказать звонок </span>
      </button>
    </div>
  </div>
</header>
<main>