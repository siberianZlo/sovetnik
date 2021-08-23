
<footer>
        <div class="footer-box container">
            <div class="footer-image-box">
                <div class="logo">
                    <?php the_custom_logo() ?>
                </div>
                <p><?php the_field('sovetnik-namber', 2) ?></p>
                <p><?php the_field('sovetnik-email', 2) ?></p>
            </div>
            <div class="footer-link">
                <h4>Меню навигации:</h4>
                <div class="link-box">
                    <?php
                    wp_nav_menu( [
                        'menu'            => 'Footer', 
                        'container'       => 'false', 
                        'menu_class'      => 'footer_nav', 
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'items_wrap'      => '<ul class="footer_nav">%3$s</ul>',
                        'depth'           => 1,
                    ] );
                    ?>
                </div>
            </div>
            <div class="footer-sochial">
                <div class="seti-box">
                    <div class="footer-sochial__link">
                        <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/img/footer/youtube.png" alt="ютюб"></a>
                        <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/img/footer/vk.png" alt="Вконтакте"></a>
                        <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/img/footer/telegram.png" alt="Телеграмм"></a>
                        <a href="#"><img src="<?php echo bloginfo('template_url');?>/assets/img/footer/twitter.png" alt="Твитер"></a>
                    </div>
                    <div class="seti-box__text">
                        <p>Центральный офис:</p>
                        <p class="seti-box__text-street"><?php the_field('sovetnik-adres', 2) ?></p>
                    </div>
                </div>
            </div>
            <div class="footer__button">
                <button class="click-form">Заказать обратный звонок</button>
                <a href="#">Политика конфиденциальности</a>
            </div>
        </div>

            <div class="zatimnenie">
                <div class="form">
                    <span class="close"></span>
                    <h2 class="mainText">Оставьте заявку</h2>
                    <p class="secondText">И мы свяжемся с вами!</p>
                    <?php 
                        echo do_shortcode('[contact-form-7 id="152" title="Модальная форма"]'); 
                    ?>
                </div>
            </div>
    </footer>

    <?php

    wp_footer();

    ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
    const search_input = $('.search-form__input');
    const search_results = $('.ajax-search');

    search_input.keyup(function () {
        let search_value = $(this).val();

        if (search_value.length > 2) { // кол-во символов 
            $.ajax({
                url: '/wp-admin/admin-ajax.php',
                type: 'POST',
                data: {
                    'action': 'ajax_search', // functions.php 
                    'term': search_value
                },
                success: function (results) {
                    search_results.fadeIn(200).html(results);
                }
            });
        } else {
            search_results.fadeOut(200);
        }
    });

    // Закрытие поиска при клике вне его 
    $(document).mouseup(function (e) {
        if (
            (search_input.has(e.target).length === 0) &&
            (search_results.has(e.target).length === 0)
        ) {
            search_results.fadeOut(200);
        };
    });
});
    </script>
</body>
</html>