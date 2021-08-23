<?php
add_action('wp_enqueue_scripts', 'sovetnik_style');
add_action('wp_enqueue_scripts', 'sovetnik_scripts');
add_filter( 'wpcf7_validate_configuration', '__return_false' );
add_filter( 'excerpt_more', 'new_excerpt_more' );
add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 3);
add_filter('nav_menu_link_attributes', 'filter_nav_menuMobile_link_attributes', 10, 3);

function sovetnik_style() {
    wp_enqueue_style('fonts-style-Roboto', get_template_directory_uri().'/assets/fonts/roboto/stylesheet.css');
    wp_enqueue_style('fonts-style-centuryGothic', get_template_directory_uri().'/assets/fonts/centuryGothic/style.css');
    wp_enqueue_style('sovetnik-style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap-style', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css');

}

function sovetnik_scripts() {
    wp_enqueue_script('bootstrap-script', get_template_directory_uri().'/assets/bootstrap/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_script('slider-script', get_template_directory_uri().'/assets/js/script.js', array(), null, true);
};

require get_template_directory() . '/ajax-search.php'; # AJAX search

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails', array( 'post' ) ); 
add_image_size( 'post-size', 700, 400, true );
add_image_size( 'post-index-size', 420, 235, true );


add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	return '
	<nav class="navigation %1$s" role="navigation">
		<div class="nav-links">%3$s</div>
	</nav>    
	';
}


function filter_nav_menu_link_attributes ($atts, $item, $args) {
    if ($args -> menu == 'Main') {
        $atts['class'] = 'header_nav-item';

        if ($item -> current) {
            $atts['class'] .= ' header_nav-item-active';
        }
    };

    return $atts;

}

function filter_nav_menuMobile_link_attributes ($atts, $item, $args) {
    if ($args -> menu == 'Mobile') {
        $atts['class'] = 'mobile-menu__link';
    };

    return $atts;

}

function new_excerpt_more( $more ){
	global $post;
	return '<br><a class="link-sectionA" href="'. get_permalink($post) . '">Читать дальше</a>';
}

/* Выводим кол-во просмотров поста */
function exclude_category($query) {
    if ($query->is_home){
    $query->set('cat','-2, -3');} 
    return $query; }
    add_filter('pre_get_posts','exclude_category');

    function getPostViews($postID){
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
            return "0 просмотров";
        }
        echo _e('Кол-во просмотров статьи  &#128065; ', 'dot-b');
        return $count;
    }

    function setPostViews($postID) {
        $count_key = 'post_views_count';
        $count = get_post_meta($postID, $count_key, true);
        if($count==''){
            $count = 0;
            delete_post_meta($postID, $count_key);
            add_post_meta($postID, $count_key, '0');
        }else{
            $count++;
            update_post_meta($postID, $count_key, $count);
        }
    }



?>