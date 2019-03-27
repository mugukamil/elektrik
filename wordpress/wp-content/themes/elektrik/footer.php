<footer class="site-footer">
  <div class="site-footer__left">
    <div class="site-footer__map"><iframe src="https://api-maps.yandex.ru/frame/v1/-/CZhzJL-V" width="100%" height="300" frameborder="0"></iframe></div>
  </div>
  <div class="site-footer__right">
    <div class="site-footer__nav">
      <?php html5blank_footer_nav(); ?>
    </div>
    <a href=""><img src="<?= get_template_directory_uri(); ?>/img/btn-green.png" width="150px" class="site-footer__btn pull-right"></a>
    <div class="site-footer__contacts">
      <p><a href="tel:+7(343)2221520" class="site-footer__contacts-phone">+7 (343) 222-15-20</a></p>
      <p class="clr"><img src="<?= get_template_directory_uri(); ?>/img/icon-mail.png" alt=""><a href="mailto:info@washekb.ru" class="site-footer__contacts-email">info@washekb.ru</a></p><address class="clr"><img src="<?= get_template_directory_uri(); ?>/img/icon-map.png" alt="">г. Екатеринбург, микрорайон Юго-Западный, улица Шаумяна, 83</address>
      <p
        class="clr">Работаем с 8:00 до 22:00 <img src="<?= get_template_directory_uri(); ?>/img/icon-time.png" alt=""><br>без выходных</p>
    </div>
    <a href="<?= home_url(); ?>" class="pull-right"><img src="<?= get_template_directory_uri(); ?>/img/logo.png" width="100" class="site-footer__logo"></a>
  </div>
</footer>
</main>
</div> <!-- /.container -->

	<?php wp_footer(); ?>

	</body>
</html>
