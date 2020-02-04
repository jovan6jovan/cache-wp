<?php 

function cache_files() {
    // wp_enqueue_script("search-js", get_theme_file_uri("/js/Search.js"), NULL, '1.0', true);
    wp_enqueue_script("menu_js", get_theme_file_uri("/js/menu.js"), NULL, '1.0', true);
    wp_enqueue_script("main_cache_js", get_theme_file_uri("/js/main.js"), NULL, '1.0', true);
    wp_enqueue_script('lightbox-js', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js', array('jquery'), '2.11.1', false);
    wp_enqueue_script('lightbox-plus-js', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox-plus-jquery.min.js', array('jquery'), '2.11.1', false);
    wp_enqueue_script('leaflet-js', '//cdnjs.cloudflare.com/ajax/libs/leaflet/1.6.0/leaflet.js', null, '1.6.0', false);
    wp_enqueue_style("google-fonts", "//fonts.googleapis.com/css?family=Lato:400,700|Open+Sans:400,700&display=swap");
    wp_enqueue_style("font-awesome", "//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css");
    wp_enqueue_style('leaflet-css', '//unpkg.com/leaflet@1.6.0/dist/leaflet.css');
    wp_enqueue_style('lightbox-css', '//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css');
    wp_enqueue_style("cache_main_styles", get_stylesheet_uri());
}

function cache_features() {
    add_theme_support("title-tag");
}

function custom_excerpt_length($length) {
	return 30;
}

add_action("wp_enqueue_scripts", "cache_files");
add_action("after_setup_theme", "cache_features");
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

?>