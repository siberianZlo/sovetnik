<?php
    get_header();
?>

<section class="section-blog__wrap container">
        <div class="section-blog__content">
            <?php
            if (have_posts()) {while (have_posts()) {
                    the_post();
                ?>
                    <div class="section-blog__post">
                        <div class="post__wrap">
                            <div class="ferst-section">
                                <div class="post__title">
                                    <h2><?php the_title(); ?></h2>
                                </div>
                                <div class="post__descr-wrap">
                                    <div class="post__descr">
                                        <p><?php echo get_the_date(); ?></p>
                                        <p>Рубрика: <?php the_category( '/' ); ?></p>
                                        <p>Автор: <span class="author-mini-post"><?php the_tags( '', ' / '); ?></span></p>
                                    </div>
                                </div>
                            </div>

                            <div class="img-section">
                                <?php the_post_thumbnail('post-size'); ?>
                            </div>

                            <div class="text-section">
                                <p><?php $content = get_the_content();
                                                echo wp_trim_words( $content , '55' );
                                ?></p>
                            <div class="link-section">
                                <a href="<?php echo get_permalink(); ?>">Читать полностью</a>
                            </div>
                            </div>
                        </div>
                    </div>
                
                <?php
                }
                the_posts_pagination( array(
                    'show_all' => true,
                ) ); 

                wp_reset_postdata();
                }; 
            
            
            ?>
        </div>


        <div class="section-blog__dop">
            <div class="blog__dop-search">
                <?php get_search_form(); ?>
            </div>
            <div class="blog__dop-wrap">
                <div class="blog__dop-title">
                    <h3>Популярные записи</h3>
                </div>

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
                                <div class="blog__dop-post">
                                    <div class="blog__dop-post__image">
                                        <img src="<?php the_post_thumbnail_url( 'post-size' ); ?>" alt="Картинка поста">
                                    </div>
                                    <div class="blog__dop-post__content">
                                        <h4><?php the_title(); ?></h4>
                                        <div class="dop-post__content-category">
                                            <p class="catedory-nini-post"><?php the_category( '/' ); ?></p>
                                            <p class="author-mini-post"><?php the_tags( '', ' / '); ?></p>
                                        </div>
                                        <a href="<?php echo get_permalink(); ?>" class="link-mini-post">Читать всю статью</a>
                                    </div>
                                </div>
                            <?php
                        }
                        
                        wp_reset_postdata(); // сброс
                    ?>

            <div class="blog__dop-rubrik">
                <div class="rubrik-title">
                    <h3>Рубрики</h3>
                </div>
                <div class="rubrik-line">
                    <?php wp_list_categories( 'exclude=3,2,1&style=none' ); ?>
                </div>
            </div>
            <div class="blog__dop-form">
                <div class="dop-form__content">
                    <h3>Получай на почту лучшие
                        статьи за неделю
                    </h3>
                    <p>
                        Подпишись на статьи и получайте
                        на почту самые интерестные
                        статьи прошедшей недели
                        каждую субботу
                    </p>
                </div>
                <div class="dop-form">
                    <?php 
                        echo do_shortcode('[contact-form-7 id="224" title="Форма в блоге"]'); 
                    ?>
                </div>
            </div>
        </div>
    </div>
    </section>

<?php
    get_footer();
?>

