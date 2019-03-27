<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i&amp;subset=cyrillic" rel="stylesheet">

	<?php wp_head(); ?>
	<script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
          assets: '<?php echo get_template_directory_uri(); ?>',
          tests: {}
      });
      </script>

</head>
<body <?php body_class(); ?>>
<div class="container">
  <header class="site-header">
    <div class="site-header__logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
      </a>
    </div>
    <div class="site-header__slogan">
      <p class="site-header__slogan-text">Команда электриков&nbsp;<span>Екатеринбурга</span></p>
      <ul class="site-header__pluses">
        <li><img src="<?= get_template_directory_uri(); ?>/img/icon-work.png">
          <p>Работаем</p><small>для вас с 8 утра<br>до 22 вечера</small>
        </li>
        <li>
          <img src="<?= get_template_directory_uri(); ?>/img/icon-get.png">
          <p>Принимаем</p><small>заявки через сайт<br>круглосуточно!</small>
        </li>
        <li>
          <img src="<?= get_template_directory_uri(); ?>/img/icon-trans.png">
          <p>Выезжаем</p><small>в течение 1 часа<br>со всеми инструментами</small>
        </li>
      </ul>
    </div>
    <div class="site-header__contact pull-right">
      <a href="tel:(343)222-15-120">(343)<span>222-15-120</span></a><br>
      <a href="" class="btn"><img src="<?= get_template_directory_uri(); ?>/img/btn-orange.png" alt=""></a>
    </div>
  </header>

  <!-- nav -->
  <nav class="site-nav" role="navigation">
    <?php html5blank_nav(); ?>
  </nav>
  <!-- /nav -->
