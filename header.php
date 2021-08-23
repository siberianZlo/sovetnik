<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo ' | '; bloginfo('description'); ?></title>
    <?php
    wp_head();
    ?>
</head>
<body>
    <!-- Шапка сайта -->
    <header class="container">
        <div class="logo">
           <?php the_custom_logo() ?>
        </div>
        <nav class="nav-header-menu">
            <?php
                wp_nav_menu( [
                    'menu'            => 'Main', 
                    'container'       => 'false', 
                    'menu_class'      => 'header_nav', 
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul class="header_nav">%3$s</ul>',
                    'depth'           => 1,
                ] );
            ?>
        </nav>
        <nav class="mobile-menu">
            <input type="checkbox" id="checkbox" class="mobile-menu__checkbox">
            <label for="checkbox" class="mobile-menu__btn"><div class="mobile-menu__icon"></div></label>
            <div class="mobile-menu__container">
            <?php
                wp_nav_menu( [
                    'menu'            => 'Mobile', 
                    'container'       => 'false', 
                    'menu_class'      => 'mobile-menu__item', 
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul class="mobile-menu__item">%3$s</ul>',
                    'depth'           => 1,
                ] );
            ?>    
            </div>
        </nav>    
    </header>