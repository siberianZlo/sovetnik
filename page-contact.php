<?php
/*
Template Name: Шаблон страницы Контактов
*/
?>

<?php
    get_header();
?>

    <!-- Карта -->
    <section class="section-adress">
        <div class="section-adress__title container">
            <h2><?php the_field('map-section__title', 2) ?></h2>
            <div class="section-adress__content-box">
                <div class="box-adress">
                    <p class="adress-p">Адрес:</p>
                    <p class="adress-street"><?php the_field('sovetnik-adres', 2) ?></p>
                </div>
                <div class="box-adress">
                    <p class="adress-p">Телефон:</p>
                    <p class="adress-number"><?php the_field('sovetnik-namber', 2) ?></p>
                </div>
                <div class="box-adress">
                    <p class="adress-p">E - mail:</p>
                    <p class="adress-mail"><?php the_field('sovetnik-email', 2) ?></p>
                </div>
            </div>
        </div>
        <div class="sectioan-adress__map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A2e4348dab443affd0c0e5cc6fe266200a4aa177b409e16f49eae9be63d4a4d6d&amp;width=100%25&amp;height=530&amp;lang=ru_RU&amp;scroll=false"></script>
        </div>
    </section>

        <!-- Форма -->
        <section class="section-form" style="margin-bottom: 50px;">
        <div class="section-form__center container">
                <div class="secion-form__wrap">
                    <div class="form__wrap__bgImage">
                        <img class="form__bgImage1" src="<?php echo bloginfo('template_url');?>/assets/img/form/palma.png" alt="Пальма">
                        <img class="form__bgImage2" src="<?php echo bloginfo('template_url');?>/assets/img/form/listok.png" alt="Лист пальмы">
                    </div>
                    <div class="secion-form__image">
                        <img src="<?php the_field('kartinka_formy', 2) ?>" alt="Девушка с телефоном">
                    </div>
                    <div class="section-form__content">
                        <div class="form__content__text-box">
                            <h3>Закажите обратный звонок
                                и <span style="color: red;">мы подберем квартиру</span>,
                                исходя из Ваших пожеланий!
                            </h3>
                        </div>

                        <div class="form-box">
                            <div class="form-box-wrap">
                                <?php 
                                    echo do_shortcode('[contact-form-7 id="151" title="Форма на главном экране сайта"]'); 
                                ?>
                            </div>

                        </div>
                        <div class="paragraf">
                            <p>* При нажатии на кнопку оставить заявку вы даете согласие на обработку персональных данных</p>
                        </div>
                    </div>
                </div>
        </div>
    </section>

<?php
    get_footer();
?>