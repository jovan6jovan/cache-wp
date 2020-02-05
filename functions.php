<?php 

function cache_files() {
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
add_theme_support( 'post-thumbnails' );
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
add_action( 'phpmailer_init', 'my_phpmailer_example' );

function my_phpmailer_example( $phpmailer ) {
    $phpmailer->isSMTP();     
    $phpmailer->Host = 'smtp.example.com';
    $phpmailer->SMTPAuth = true; // Force it to use Username and Password to authenticate
    $phpmailer->Port = 25;
    $phpmailer->Username = 'yourusername';
    $phpmailer->Password = 'yourpassword';

    // Additional settings…
    //$phpmailer->SMTPSecure = "tls"; // Choose SSL or TLS, if necessary for your server
    //$phpmailer->From = "you@yourdomail.com";
    //$phpmailer->FromName = "Your Name";
}

?>