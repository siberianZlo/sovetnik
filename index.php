<?php
    get_header();
?>
 <!-- Главный экран -->
    <main class="section-main">
        <div class="section-main__content">
            <div class="container">
                <div class="section-main__body">
                    <h1><?php the_field('one-section__about-title'); ?></h1>
                    <p><?php the_field('one-section__about-subtitle') ?></p>
                    <button class="button-kosultation transition click-form">Получить консультацию</button>
                </div>
            </div>
        </div>
        <div class="section-main__img">
            <img src="<?php the_field('one-section__about-image') ?>" alt="Ключи от новой квартиры">
        </div>
    </main>

    <!-- Цифры вакты -->
    <section class="section-fact container">
        <div class="section-fact__content">
            <div>
                <h3><?php the_field('one-section__advantage-1') ?></h3>
                <p><?php the_field('one-section__advantage-1-descr') ?></p>
            </div>
            <div class="line-fact">
                <h3><?php the_field('one-section__advantage-2') ?></h3>
                <p><?php the_field('one-section__advantage-2-descr') ?></p>
            </div>
            <div>
                <h3><?php the_field('one-section__advantage-3') ?></h3>
                <p><?php the_field('one-section__advantage-3-descr') ?></p>
            </div>
        </div>
    </section>
    <div class="content-volna">
        <div class="wave">
          <div class="wave__one"></div>
          <div class="wave__two"></div>
      </div>
    </div>

    <!-- Кто такой советник? -->
    <section class="section-whoSovetnik">
        <div class="section-whoSovetnik__wrap container-mobile">
            <div class="section-whoSovetnik__image">
                <img src="<?php the_field('two-section__about-image') ?>" alt="Фото коллектива Советник">
            </div>
            <div id="whoSovetnik" class="section-whoSovetnik__content container-mobile">
                <h2><?php the_field('two-section__about-title') ?></h2>
                
                <div class="section-whoSovetnik__content-subtitle">
                    <?php the_field('two-section__about-subtitle') ?>
                </div>
            </div>
            <img class="bg-house__img" src="<?php the_field('two-section__bg-image') ?>" alt="Планировка квартиры">
        </div>

        <section class="section-myProject container-mobile">
            <div class="section-myProject__content">
                <div>
                    <h3><?php the_field('two-section__project-title-3') ?></h3>
                    <p><?php the_field('two-section__project-discr-3') ?></p>
                    <a href="<?php the_field('two-section__project-link-3') ?>">Подробнее</a>
                </div>
                <div class="myProject-line">
                    <h3><?php the_field('two-section__project-title-2') ?></h3>
                    <p><?php the_field('two-section__project-discr-2') ?></p>
                    <a href="<?php the_field('two-section__project-link-2') ?>">Подробнее</a>
                </div>
                <div>
                    <h3><?php the_field('two-section__project-title-1') ?></h3>
                    <p><?php the_field('two-section__project-discr-1') ?></p>
                    <a href="<?php the_field('two-section__project-link-1') ?>">Подробнее</a>
                </div>
            </div>
        </section>
    </section>

    <!-- Ваши советники -->

    <section class="section-yourSovetnik">
        <div class="container">

            <div class="img-bg__box">
                <img class='img-bg-list1'src="<?php echo bloginfo('template_url');?>/assets/img/yourSovetnik/bg-list1.png" alt="Лист пальмы">
                <img class='img-bg-list2'src="<?php echo bloginfo('template_url');?>/assets/img/yourSovetnik/bg-list2.png" alt="Лист пальмы номер два">
            </div>
            <div class="section-yourSovetnik__title">
                <h2><?php the_field('three-section__about-title') ?></h2>
                <p><?php the_field('three-section__about-subtitle') ?></p>
            </div>

            <div class="section-yourSovetnik__general">
                <div class="section-yourSovetnik__general__img">
                    <img src="<?php the_field('three-section__general-image') ?>" alt="Руководитель компании">
                </div>

                <!-- Сотрудники -->
                
                <div class="section-yourSovetnik__general__text">
                    <h3><?php the_field('three-section__general-name') ?></h3>
                    <div class="section-yourSovetnik__general-descr">
                        <?php the_field('three-section__general-descr') ?>
                    </div>
                    <div class="lozung-box">
                        <div class="lozung">
                            <p><?php the_field('three-section__general-quote') ?></p>
                        </div>
                        <img class="lozung__img" src="<?php echo bloginfo('template_url');?>/assets/img/yourSovetnik/kavichki.png" alt="Кавычки обозначающие прямую речь">
                    </div>
                </div>
            </div>

            <div class="section-yourSovetnik__sotrudniki">
                    <?php
                        $posts = get_posts( array(
                            'numberposts' => -1,
                            'category_name'    => 'sotrudnik',
                            'orderby'     => 'date',
                            'order'       => 'ASC',
                            'post_type'   => 'post',
                            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );
                        
                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                            <div class='section-yourSovetnik__sotrudniki-page'>    
                                <div class="section-yourSovetnik__sotrudniki-page__image">
                                    <img src="<?php the_field('foto_sotrudnika') ?>" alt="фото сотрудника">
                                </div>
                                <h3><?php the_field('name_sotrudnika') ?></h3>
                                <p><?php the_field('dolzhnost_sotrudnika') ?></p>
                                <a href="<?php the_field('ssylka_na_blog_sotrudnika') ?>">Блог сотрудника</a>
                            </div>
                            <?php
                        }
                        
                        wp_reset_postdata(); // сброс
                    ?>
            </div>
        </div>
    </section>
    <div class="content-volna volna2">
        <div class="wave">
          <div class="wave__one"></div>
          <div class="wave__two"></div>
      </div>
    </div>
    
    <!-- Блоговые статьи -->
    <section class="section-preBlog">
        <div class="section-preBlog__bgImage">
            <img src="<?php echo bloginfo('template_url');?>/assets/img/preBlog/bg-img.png" alt="Чашка кофе">
        </div>
        <div class="container preBlog__wrap">
            <div class="section-preBlog__title">
                <h2>Полезные советы по недвижимости</h2>
            </div>
            <div class="section-preBlog__category">
                <?php wp_list_categories( 'exclude=3,2,1&style=none&number=3' ); ?>
            </div>

            <div class="section-preBlog__blog">

            <?php
                $posts = get_posts( array(
                    'numberposts' => 3,
                    'category' => '-2,-3',
                    'orderby'     => 'rand',
                    'order'       => 'ASC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                        ) );
                        
                        foreach( $posts as $post ){
                            setup_postdata($post);
                            ?>
                                <div class="section-preBlog__blog__publish">
                                    <div class="publish__image">
                                        <img src="<?php the_post_thumbnail_url( 'post-index-size' ); ?>" alt="Картинка блога">
                                    </div>
                                    <div class="publish__content">
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php $content = get_the_content();
                                                echo wp_trim_words( $content , '15' );
                                        ?></p>
                                        <div class="publish__link">
                                            <a href="<?php echo get_permalink(); ?>">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            <?php
                        }
                        
                        wp_reset_postdata(); // сброс
                    ?>        
            </div>
        </div>
    </section>

    <!-- Форма -->
    <section class="section-form">
        <div class="section-form__center container">
                <div class="secion-form__wrap">
                    <div class="form__wrap__bgImage">
                        <img class="form__bgImage1" src="<?php echo bloginfo('template_url');?>/assets/img/form/palma.png" alt="Пальма">
                        <img class="form__bgImage2" src="<?php echo bloginfo('template_url');?>/assets/img/form/listok.png" alt="Лист пальмы">
                    </div>
                    <div class="secion-form__image">
                        <img src="<?php the_field('kartinka_formy') ?>" alt="Девушка с телефоном">
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

<!-- Отзывы -->
    <section id="otzivi" class="section-otzivi container">
        <div class="section-otzivi__title">
            <h2><?php the_field('otzivi-section__about-title') ?></h2>
        </div>
        <div class="slider">
        <?php
            $posts = get_posts( array(
                'numberposts' => -1,
                'category_name'    => 'otzivi',
                'orderby'     => 'date',
                'order'       => 'ASC',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ) );
                        
            foreach( $posts as $post ){
                setup_postdata($post);
        ?>

            <div class="item">
                <div class="section-otzivi__content">
                    <div class="otzivi__image">
                        <div class="otzivi__image-img">
                            <img src="<?php the_field('otzivi-foto') ?>" alt="Фото женщины">
                        </div>
                        <p><?php the_field('otzivi-name') ?></p>
                    </div>
                    <div class="otzivi__text">
                        <p><?php the_field('otzivi-text') ?></p>
                        <img src="<?php echo bloginfo('template_url');?>/assets/img/yourSovetnik/kavichki.png" alt="Кавычки два">
                    </div>
                </div>
            </div>

         <?php
        }
                       
        wp_reset_postdata(); // сброс
        ?>    
    </div>


        <div class="button-wrap">
            <div class="button-otzivi">
                <button class="button-otzivi prev" onclick="minusSlide()"><img src="<?php echo bloginfo('template_url');?>/assets/img/otzivi/left.png" alt=""></button>
                <button class="button-otzivi next" onclick="plusSlide()"><img src="<?php echo bloginfo('template_url');?>/assets/img/otzivi/right.png" alt=""></button>
            </div>
            <button class="button-kosultation transition click-form">Получить консультацию</button>
        </div>
    </section>

    <!-- Карта -->
    <section class="section-adress">
        <div class="section-adress__title container">
            <h2><?php the_field('map-section__title') ?></h2>
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
<?php
    get_footer();
?>


